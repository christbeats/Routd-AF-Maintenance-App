<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Creer un employer</h1>
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
    <form method="post" action="{{route('employee.store')}}">
        @csrf
        @method('post')
        <div>
        <label for="name">Nom:</label>
            <input type="text" name="name" placeholder="name"/>
        </div>
        <div>
        <label for="surname">Prenom:</label>
            <input type="text" name="surname" placeholder="surname"/>
        </div>
        <div>
        <label for="function">Fonction:</label>
            <input type="text" name="function" placeholder="function"/>
        </div>
        <div>
        <label for="phone">Telephone:</label>
        <input type="tel" id="phone" name="phone" placeholder="Enter your phone number"/>
        </div>
        <div>
            <input type="submit" value="Enregistrer"/>
        </div>
    </form>
</body>
</html>