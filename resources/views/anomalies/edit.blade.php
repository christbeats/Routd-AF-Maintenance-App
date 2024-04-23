<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Modifier une anomalie</h1>
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
    <form method="post" action="{{route('anomalie.update', ['anomalie' => $anomalie])}}">
        @csrf
        @method('put')
        <div>
            <label for="name">Nom:</label>
            <input type="text" name="name" placeholder="name" value="{{$anomalie->name}}"/>
        </div>
        <div>
            <label for="datedebut">Date Debut:</label>
            <input type="date" name="datedebut" placeholder="datedebut" value="{{$anomalie->datedebut}}"/>
        </div>
        <div>
            <label for="materiel">Materiel:</label>
            <input type="text" name="materiel" placeholder="materiel" value="{{$anomalie->materiel}}"/>
        </div>
        <div>
            <label for="chauffeur">Chauffeur:</label>
            <input type="text" name="chauffeur" placeholder="chauffeur" value="{{$anomalie->chauffeur}}"/>
        </div>
        <div>
            <label for="commentaire">Commentaire:</label>
            <textarea name="commentaire" id="commentaire" rows="5" placeholder="Commentaire" value="{{$anomalie->commentaire}}"></textarea>
        </div>
        <div>
            <label for="file_path">Pièce Joint:</label>
            <input type="file" name="file_path" placeholder="file_path" value="{{$anomalie->file_path}}"/>
        </div>
        <div>
            <label for="datefin">Date Fin:</label>
            <input type="date" name="datefin" placeholder="datefin" value="{{$anomalie->datefin}}"/>
        </div>
        <div>
            <input type="submit" value="Enregistrer"/>
        </div>
    </form>
</body>
</html>