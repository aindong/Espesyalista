@extends('layouts.front')

@section('content')
    <style>
        .container{
            margin-top:100px;
        }
    </style>

    <div class="container">
        <form action="">
            <div class="form-group">
                <label>FirstName</label>
                <input type="text" class="form-control">
            </div>

            <div class="form-group">
                <label>LastName</label>
                <input type="text" class="form-control">
            </div>
            <botton type="button" class="btn btn-info"></botton>
        </form>
    </div>
@stop