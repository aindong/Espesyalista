@extends('layouts.front')

@section('page-styles')
    <style>
        .form-container{
            padding-top:100px;
        }
        .container {
            text-align: center;
        }
        .alignment {
            text-align: left;
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
                    <label class="col-sm-2 control-label" for="sm">LastName</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" id="sm">
                    </div>
                </div>

                <div class="form-group form-group-sm">
                    <label class="col-sm-2 control-label" for="sm">Email</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" id="sm">
                    </div>
                </div>

                <div class="form-inline form-group">
                    <label class="col-sm-2 control-label" for="sm">Gender</label>
                    <div class="alignment">
                        <div class="radio">
                            <label class="control-label"><input type="radio" name="optradio">Male</label>
                        </div>
                        <div class="radio">
                            <label class="control-label"><input type="radio" name="optradio">Female</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="sm">Comment</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="sm"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="sm">Contact #</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" id="sm">
                    </div>
                </div>

                <div class="form-group form-group-sm">
                    <label class="col-sm-2 control-label" for="sm">Email :</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" id="sm">
                    </div>
                </div>

                <div class="form-group form-group-sm">
                    <label class="col-sm-2 control-label" for="sm">Password</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="password" id="sm">
                    </div>
                </div>
                <div class="form-group form-group-sm">
                    <div class="col-sm-12"><hr>
                        <button type="button" class="btn btn-danger btn-sm">Register</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop