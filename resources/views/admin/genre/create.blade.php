@extends('layouts.admin.admin')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container bg-info py-4 my-5">
        <form action="{{route('genre.store')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <label for="name" class="form-label">{{__('name')}}</label>
                    <input type="name" name="name" class="form-control" id="name" placeholder="Ejemplo: Alejandro">
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <input type="submit" class="btn btn-success" value="{{__('create')}}">
            </div>
        </form>
    </div>
@endsection