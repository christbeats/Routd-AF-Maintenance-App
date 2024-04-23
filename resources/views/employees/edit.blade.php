<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Modifier un employer</h1>
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
    <form method="post" action="{{route('employee.update', ['employee' => $employee])}}">
        @csrf
        @method('put')
        <div>
        <label for="name">Nom:</label>
            <input type="text" name="name" placeholder="name" value="{{$employee->name}}"/>
        </div>
        <div>
        <label for="surname">Prenom:</label>
            <input type="text" name="surname" placeholder="surname" value="{{$employee->surname}}"/>
        </div>
        <div>
        <label for="function">Fonction:</label>
            <input type="text" name="function" placeholder="function" value="{{$employee->function}}"/>
        </div>
        <div>
        <label for="phone">Telephone:</label>
        <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" value="{{$employee->phone}}"/>
        </div>
        <div>
            <input type="submit" value="Modifier"/>
        </div>
    </form>
</body>
</html>