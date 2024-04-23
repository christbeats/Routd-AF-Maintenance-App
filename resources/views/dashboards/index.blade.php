<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>DASHBOARD</h1>
    <div>
        <div>
            <a href="{{route('employee.index')}}">employer</a>
        </div>
        <div>
            <a href="{{route('material.index')}}">materiel</a>
        </div>
        <div>
            <a href="{{route('piece.index')}}">piece</a>
        </div>
        <div>
            <a href="{{route('anomalie.index')}}">Anomalie</a>
        </div>
        <div>
            <a href="{{route('diagnostic.index')}}">Diagnostic</a>
        </div>
        
    </div>
</body>
</html>