@extends('layout')
@section('main')
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

        <div class="form-group">
            <label for="name" >Nom:</label>
            <input type="text" name="name" placeholder="name" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7"/>
        </div>
        <div class="form-group">
            <label for="surname">Prenom:</label>
            <input type="text" name="surname" placeholder="surname" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7"/>
        </div>
        <div class="form-group">
            <label for="function">Fonction:</label>
            <input type="text" name="function" placeholder="function" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7"/>
        </div>
        <div class="form-group">
            <label for="phone">Telephone:</label>
            <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7"/>
        </div>
        <div>
            <input type="submit" class="btn btn-info" value="Enregistrer"/>
        </div>
    </form>
@endsection
