<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Modifier une Pièce</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{route('piece.update', ['piece' => $piece])}}">
        @csrf
        @method('put')
        <div>
            <label for="category_id">Category:</label>
        <select name="category_id" id="category_id">
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        </div>
        <div>
        <label for="system">Nom:</label>
            <input type="text" name="system" placeholder="system" value="{{$piece->system}}"/>
        </div>
        <div>
        <label for="sousorgane">Prenom:</label>
            <input type="text" name="sousorgane" placeholder="sousorgane" value="{{$piece->sousorgane}}"/>
        </div>
        <div>
        <label for="element">Fonction:</label>
            <input type="text" name="element" placeholder="element" value="{{$piece->element}}"/>
        </div>
        <div>
            <input type="submit" value="Modifier"/>
        </div>
    </form>
</body>
</html>
