<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Creer un materiel</h1>
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
    <form method="post" action="{{route('material.store')}}">
        @csrf
        @method('post')
        <div>
        <label for="numParc">Numero de Parc:</label>
            <input type="text" name="numParc" placeholder="numParc"/>
        </div>
        <div>
            <label for="category_id">Category:</label>
            <select name="category_id" id="category_id">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="marque">MARQUE:</label>
            <input type="text" name="marque" placeholder="marque"/>
        </div>
        <div>
            <label for="modele">Modele:</label>
            <input type="text" id="modele" name="modele" placeholder="model"/>
        </div>
        <div>
            <label for="immatriculation">Immatriculation:</label>
            <input type="text" id="immatriculation" name="immatriculation" placeholder="immatriculation"/>
        </div>
        <div>
            <label for="numChassis">Numeros de chassis:</label>
            <input type="text" id="numChassis" name="numChassis" placeholder="numChassis"/>
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
            <label for="dateAquisition">Date Aquisition:</label>
            <input type="date" id="dateAquisition" name="dateAquisition" placeholder="dateAquisition"/>
        </div>
        <div>
            <label for="etatAquisition">Etat:</label>
            <select id="etatAquisition" name="etatAquisition">
                <option value="neuf">Neuf</option>
                <option value="occasion">Occcasion</option>
            </select>
        </div>
        <div>
            <input type="submit" value="Enregistrer"/>
        </div>
    </form>
</body>
</html>
