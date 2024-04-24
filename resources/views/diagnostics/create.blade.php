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
            <label for="anomalie_id">Anomalies:</label>
            <select name="anomalie_id" id="anomalie_id">
                @foreach($anomalies as $anomalie)
                    <option value="{{ $anomalie->id }}">{{ $anomalie->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="employee_id">Intervenant:</label>
            <select name="employee_id" id="employee_id">
                @foreach($employees as $employee)
                    <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="datedebut">Date Debut:</label>
            <input type="date" name="datedebut" placeholder="datedebut"/>
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
