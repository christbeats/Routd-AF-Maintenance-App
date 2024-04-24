<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Anomalie</h1>
    <div>
        @if(session()->has('success') )
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <div>
        <div>
            <a href="{{route('anomalie.create')}}">Creer une Anomalie</a>
        </div>
        <table border="1">
            <tr>
                <th>Nom</th>
                <th>Date Debut</th>
                <th>Materiel</th>
                <th>Chauffeur</th>
                <th>Commentaire</th>
                <th>Document</th>
                <th>Date Fin</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
            @foreach($anomalies as $anomalie)
                <tr>
                    <td>{{$anomalie->name}}</td>
                    <td>{{$anomalie->datedebut}}</td>
                    <td>{{$anomalie->material->numParc}}</td>
                    <td>{{$anomalie->employee->name}}</td>
                    <td>{{$anomalie->commentaire}}</td>
                    <td>{{$anomalie->file_path}}</td>
                    <td>{{$anomalie->datefin}}</td>
                    <td>
                        <a href="{{route('anomalie.edit', ['anomalie' => $anomalie])}}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('anomalie.delete', ['anomalie' => $anomalie])}}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete"/>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        <div>
            <a href="{{route('dashboard.index')}}">Retour dashboard</a>
        </div>
    </div>
</body>
</html>
