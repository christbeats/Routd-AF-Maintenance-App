<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Materiel</h1>
    <div>
        @if(session()->has('success') )
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <div>
        <div>
            <a href="{{route('material.create')}}">Creer un materiel</a>
        </div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Numero de Parc</th>
                <th>Category</th>
                <th>Immatriculation</th>
                <th>Date Aquisition</th>
                <th>Etat</th>
                <th>Designation</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
            @foreach($materials as $material)
                <tr>
                    <td>{{$material->id}}</td>
                    <td>{{$material->numParc}}</td>
                    <td>{{$material->category->name ?? null}}</td>
                    <td>{{$material->immatriculation}}</td>
                    <td>{{$material->dateAquisition}}</td>
                    <td>{{$material->etatAquisition}}</td>
                    <td>{{$material->employee->name ?? null}}</td>
                    <td>
                        <a href="{{route('material.edit', ['material' => $material])}}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('material.delete', ['material' => $material])}}">
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
