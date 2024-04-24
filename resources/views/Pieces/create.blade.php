<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Creer une pièce</h1>
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
    <form method="post" action="{{route('piece.store')}}">
        @csrf
        @method('post')
        <div>
            <label for="category_id">Category:</label>
            <select name="category_id" id="category_id">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
        <label for="system">System:</label>
            <input type="text" name="system" placeholder="system"/>
        </div>
        <div>
        <label for="sousorgane">Sous-Organe:</label>
            <input type="text" name="sousorgane" placeholder="sousorgane"/>
        </div>
        <div>
        <label for="element">Element:</label>
            <input type="text" name="element" placeholder="element"/>
        </div>
        <div>
            <input type="submit" value="Enregistrer"/>
        </div>
    </form>
</body>
</html>
