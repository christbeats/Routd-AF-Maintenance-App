<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Piece</h1>
    <div>
        @if(session()->has('success') )
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <div>
        <div>
            <a href="{{route('piece.create')}}">Creer une piece</a>
        </div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>system</th>
                <th>sousorgane</th>
                <th>element</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
            @foreach($pieces as $piece)
                <tr>
                    <td>{{$piece->id}}</td>
                    <td>{{$piece->system}}</td>
                    <td>{{$piece->sousorgane}}</td>
                    <td>{{$piece->element}}</td>
                    <td>
                        <a href="{{route('piece.edit', ['piece' => $piece])}}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('piece.delete', ['piece' => $piece])}}">
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