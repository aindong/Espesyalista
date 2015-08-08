@extends('layouts.front')

@section('page-styles')
    <style>
        .container{
            padding-top:100px;
        }
    </style>
@stop

@section('content')


    <div class="container">
        <form action="">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label>First Name</label>
                <input type="text" class="form-control">
            </div>

            <div class="form-group">
                <label>Last Name</label>
                <input type="text" class="form-control">
            </div>
            <botton type="button" class="btn btn-info">LOGIN</botton>
        </form>
    </div>
@stop