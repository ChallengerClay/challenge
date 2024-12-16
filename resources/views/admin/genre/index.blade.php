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
 @if (\Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('success') !!}</li>
            </ul>
        </div>
    @endif
<div class="container">
    <div class="d-flex flex-column">
        <a class="btn btn-success align-self-end" href="{{route('genre.create')}}">{{__('create new')}}</a>
    </div>
    <div class="d-flex flex-column">

        <table class="table table-striped">
            <th>
                <td>#</td>
                <td>{{__('name')}}</td>
                <td>{{__('actions')}}</td>
            </th>
            @foreach ($genres as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                </tr>
            @endforeach
        </table>
    </div>
</div>    
@endsection
