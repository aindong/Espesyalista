@extends('layouts.front')

@section('content')
    <style>
        .container {
            margin-top:100px;
            text-align:center;
        }
        .align_center {
            text-align: center;
        }
    </style>

    <div class="container">
        <form action="">
            <form class="form-sign">
                <h2 class="form-signin-heading">Sign in</h2>
                <label for="inputFirstname" class="sr-only">Firstname</label>
                <input type="text" id="inputFirstname" class="form-control" placeholder="Firstname" required autofocus>
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>

                <div class="checkbox">
                    <label><input type="checkbox" value="remember-me">"Remember me"</label>
                    <button class="btn btn--lg btn-danger btn-block" type="submit">Sign in</button>
                            <div class="align_center">
                                <h5>or sign up using</h5>
                                <div class="social-icons">
                                    <a href="/login/facebook"><i class="fa fa-facebook-square fa-3x" style="color:#6080c5 ;"></i></a>
                                    <a href="/login/github"><i class="fa fa-github-square fa-3x" style="color:#716868 ;"></i></a>
                                    <a href="/login/twitter"><i class="fa fa-twitter-square fa-3x" style="color:#1dcaff ;"></i></a>
                                    <a href="/login/google"><i class="fa fa-google-plus-square fa-3x" style="color:#d6412d ;"></i></a>
                                </div>
                            </div>

            </form>

        </form>

    </div>
@stop