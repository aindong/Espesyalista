@extends('layouts.front')

@section('page-styles')
    <style>
        .form-container{
            padding-top:100px;
        }
    </style>
@stop

@section('content')


    <div class="container">
        <div class="form-container">
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
                <button type="button" class="btn btn-info">LOGIN</button>
            </form>
        </div>
    </div>
@stop