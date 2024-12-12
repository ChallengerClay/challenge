@extends('layouts.home.main')
@section('content')
<div class="container-fluid bg-grey">
    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif 
    <div class="container bg-info px-4  py-4">
        <form action="" method="POST">
            @csrf
            <div class="row row-cols-lg-5 g-2 g-lg-3">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-3 ">
                    <label for="name" class="form-label">{{__('Name')}}</label>
                    <input type="name" name="name" class="form-control" id="name" placeholder="Ejemplo: Alejandro">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-3 ">
                    <label for="last_name" class="form-label">Last Name</label>
                    <input type="last_name" name="last_name" class="form-control" id="last_name" placeholder="Ejemplo: Gonzales">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-3 ">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Ejemplo: name@example.com">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Ingrese su contraseña">
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                <input class="btn btn-success" type="submit" value="Registrarse">
            </div>
        </form>
    </div>
</div>
@endsection