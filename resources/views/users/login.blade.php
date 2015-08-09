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
                <label>Password</label>
                <input type="password" class="form-control">
            </div>
            <botton type="button" class="btn btn-info"></botton>

            <div class="container">
                <div class="row">
                    <a href="" class="btn btn-warning btn-lg"><span class="glyphicon glyphicon-thumbs-up"></span></a>
                </div>
            </div>
        </form>

    </div>
@stop