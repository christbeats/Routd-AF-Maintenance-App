<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Diagnostic</h1>
    <div>
        @if(session()->has('success') )
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <div>
        <div>
            <a href="{{route('diagnostic.create')}}">Creer un diagnostique</a>
        </div>
        <table border="1">
            <tr>
                <th>Intervenant</th>
                <th>Commentaire</th>
                <th>Situation</th>
                <th>Pièce jointe</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
            @foreach($diagnostics as $diagnostic)
                <tr>
                    <td>{{$diagnostic->intervenant}}</td>
                    <td>{{$diagnostic->commentaire}}</td>
                    <td>{{$diagnostic->situation}}</td>
                    <td>{{$diagnostic->file_path}}</td>
                    <td>
                        <a href="{{route('diagnostic.edit', ['diagnostic' => $diagnostic])}}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('diagnostic.delete', ['diagnostic' => $diagnostic])}}">
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