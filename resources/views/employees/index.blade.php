<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Employee</h1>
    <div>
        @if(session()->has('success') )
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <div>
        <div>
            <a href="{{route('employee.create')}}">Creer un employer</a>
        </div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Fonction</th>
                <th>Telephone</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
            @foreach($employees as $employee)
                <tr>
                    <td>{{$employee->id}}</td>
                    <td>{{$employee->name}}</td>
                    <td>{{$employee->surname}}</td>
                    <td>{{$employee->function}}</td>
                    <td>{{$employee->phone}}</td>
                    <td>
                        <a href="{{route('employee.edit', ['employee' => $employee])}}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('employee.delete', ['employee' => $employee])}}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete"/>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        <div>
            <a href="{{route('dashboard.index')}}">Retour dashboard</a>
        </div>
    </div>
</body>
</html>