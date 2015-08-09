@extends('layouts.front')

@section('page-styles')
    <style>
        .form-container{
            padding-top:100px;
        }
        .container {
            text-align: center;
        }
    </style>
@stop

@section('content')


    <div class="container">
        <div class="form-container">
            <form class="form-horizontal" role="form">
                <div class="form-group form-group-lg">
                    <label class="col-sm-2 control-label" for="lg">FirstName</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" id="lg">
                    </div>
                </div>
                <div class="form-group form-group-sm">
                    <label class="col-sm-2 control-label" for="sm">Password</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="password" id="sm">
                    </div>
                </div>

                <button type="button" class="btn btn-danger btn-sm">Login</button>

            </form>
            <div class="align_center">
                <h5>or sign up using</h5>
                <div class="social-icons">
                    <a href="/login/facebook"><i class="fa fa-facebook-square fa-3x" style="color:#6080c5 ;"></i></a>
                    <a href="/login/github"><i class="fa fa-github-square fa-3x" style="color:#716868 ;"></i></a>
                    <a href="/login/twitter"><i class="fa fa-twitter-square fa-3x" style="color:#1dcaff ;"></i></a>
                    <a href="/login/google"><i class="fa fa-google-plus-square fa-3x" style="color:#d6412d ;"></i></a>
                </div>
            </div>
        </div>
    </div>
@stop