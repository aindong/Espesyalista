@extends('layouts.front')

@section('page-styles')
    <style>
        .form-container{
            padding-top:100px;
        }
        .container {
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
                    <div class="radio">
                        <label><input type="radio" name="optradio">Male</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="optradio">Female</label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="comment">Comment:</label>
                    <textarea class="form-control input-sm rows="3" id="comment"></textarea>
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
                    <button type="button" class="btn btn-info btn-sm">Register</button>
                </div>

                </form>
                <hr>


            </form>

            </div>
        </div>
    </div>
@stop