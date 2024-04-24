<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Creer une anomalie</h1>
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
    <form method="post" action="{{route('anomalie.store')}}">
        @csrf
        @method('post')
        <div>
            <label for="name">Nom:</label>
            <input type="text" name="name" placeholder="name"/>
        </div>
        <div>
            <label for="datedebut">Date Debut:</label>
            <input type="date" name="datedebut" placeholder="datedebut"/>
        </div>
        <div>
            <label for="material_id">Materiel:</label>
            <select name="material_id" id="material_id">
                @foreach($materials as $material)
                    <option value="{{ $material->id }}">{{ $material->numParc }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="employee_id">Designation:</label>
            <select name="employee_id" id="employee_id">
                @foreach($employees as $employee)
                    <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="commentaire">Commentaire:</label>
            <textarea name="commentaire" id="commentaire" rows="5" placeholder="Commentaire"></textarea>
        </div>
        <div>
            <label for="file_path">Pièce Joint:</label>
            <input type="file" name="file_path" placeholder="file_path"/>
        </div>
        <div>
            <label for="datefin">Date Fin:</label>
            <input type="date" name="datefin" placeholder="datefin"/>
        </div>
        <div>
            <input type="submit" value="Enregistrer"/>
        </div>
    </form>
</body>
</html>
