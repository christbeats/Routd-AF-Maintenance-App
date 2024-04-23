<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Creer un diagnostic</h1>
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
    <form method="post" action="{{route('diagnostic.store')}}">
        @csrf
        @method('post')
        <div>
        <label for="intervenant">Intervenant:</label>
            <input type="text" name="intervenant" placeholder="intervenant"/>
        </div>
        <div>
            <label for="commentaire">Commentaire:</label>
            <textarea name="commentaire" id="commentaire" rows="5" placeholder="Commentaire"></textarea>
        </div>
        <div>
            <label for="situation">Situation:</label>
            <select id="situation" name="situation">
                <option value="Blocant">Blocant</option>
                <option value="Non-Blocant">Non-Blocant</option>
            </select>
        </div>
        <div>
            <label for="file_path">Pièce Joint:</label>
            <input type="file" name="file_path" placeholder="file_path"/>
        </div>
        <div>
            <input type="submit" value="Enregistrer"/>
        </div>
    </form>
</body>
</html>