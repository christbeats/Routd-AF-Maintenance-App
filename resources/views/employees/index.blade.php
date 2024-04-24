@extends('layout')
@section('main')
    <div>
        <div class="d-flex align-center justify-content-between">
            <h1>Employee list</h1>
            <a href="{{route('employee.create')}}" class="btn btn-info mb-2">Creer un employer</a>
        </div>
        <div>
            @if(session()->has('success') )
                <div>
                    {{session('success')}}
                </div>
            @endif
        </div>
        <div class="table-responsive">

            <table class="table table-hover table-striped tm-table-striped-even mt-3">
                <tr class="tm-bg-gray">
                    <th scope="col">ID</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Fonction</th>
                    <th scope="col">Telephone</th>
                    <th scope="col">Actions</th>
                </tr>
                @foreach($employees as $employee)
                    <tr scope="row">
                        <td>{{$employee->id}}</td>
                        <td>{{$employee->name}}</td>
                        <td>{{$employee->surname}}</td>
                        <td>{{$employee->function}}</td>
                        <td>{{$employee->phone}}</td>
                        <td>
                            <div class="row gap-1">
                                <a class="btn btn-primary btn-sm mr-2" href="{{route('employee.edit', ['employee' => $employee])}}"><i class="fas fa-pencil-alt tm-edit-icon"></i></a>

                                <form method="post" action="{{route('employee.delete', ['employee' => $employee])}}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt tm-trash-icon"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
