@extends('layouts.home.main')
<div class="container-fluid">
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('success') !!}</li>
            </ul>
        </div>
    @endif
    <div class="row">
        
    </div>
</div>