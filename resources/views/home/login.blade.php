@extends('layouts.home.main')
@section('content')
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @if (\Session::has('alert'))
        <div class="alert alert-warning">
            <ul>
                <li>{!! \Session::get('alert') !!}</li>
            </ul>
        </div>
    @endif
    <div class="container-fluid">
        <form action="" method="POST">
            @csrf
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-3 ">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Ejemplo: name@example.com" value="{{ old('email') }}">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Ejemplo: name@example.com">
                </div>
            </div>
            <input class="btn btn-warning" type="submit" value="Iniciar sesion">
        </form>
    </div>
@endsection