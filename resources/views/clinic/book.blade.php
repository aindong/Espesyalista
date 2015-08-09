@extends('layouts.front')

@section('page-styles')
    <style>
        #front_booking .booking {
            padding-top: 100px;
        }

        #front_booking .navbar-menu .navbar-nav > .open > a,
        #front_booking .navbar-menu .navbar-nav > .open > a:hover,
        #front_booking .navbar-menu .navbar-nav > .open > a:focus,
        #front_booking .nav > li > a:focus,
        #front_booking .nav > li > a:hover,
        #front_booking .dropdown-menu > li > a:hover,
        #front_booking .navbar #active {
            background-color: transparent !important;
        }
    </style>
@stop

@section('content')

    <div id="front_booking" class="gray-section section">
        <div class="align_center booking container">
            <!-- BEGIN FORM WIZARD -->
            <div class="row">
                <h1>Select the details for your booking</h1>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body ">
                            <div id="rootwizard1" class="form-wizard form-wizard-horizontal">
                                <form class="form floating-label">
                                    <div class="form-wizard-nav">
                                        <div class="progress"><div class="progress-bar progress-bar-primary"></div></div>
                                        <ul class="nav nav-justified">
                                            <li class="active"><a href="#tab1" data-toggle="tab"><span class="step">1</span> <span class="title">LOCATION</span></a></li>
                                            <li><a href="#tab2" data-toggle="tab"><span class="step">2</span> <span class="title">DATE</span></a></li>
                                            <li><a href="#tab3" data-toggle="tab"><span class="step">3</span> <span class="title">DOCTOR</span></a></li>
                                            <li><a href="#tab4" data-toggle="tab"><span class="step">4</span> <span class="title">CONFIRM</span></a></li>
                                        </ul>
                                    </div><!--end .form-wizard-nav -->
                                    <div class="tab-content clearfix">
                                        <div class="tab-pane active" id="tab1">
                                            <br/><br/>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <h3 for="Address" class="control-label">Hospital : </h3>
                                                    <h4 for="address" class="form-control">Makati Medical Center</h4>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <h3 for="City" class="control-label">City : </h3>
                                                    <h4 for="City" class="form-control">Makati City</h4>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <h3 for="State" class="control-label">State : </h3>
                                                    <h4 for="State" class="form-control">Philippines</h4>
                                                </div>
                                            </div>

                                        </div><!--end #tab1 -->
                                        <div class="tab-pane" id="tab2">
                                            <br/><br/>
                                            <div class="card">
                                                <div class="card-body">
                                                    <form class="form">
                                                        <div id="demo-date-inline"></div>
                                                    </form>
                                                </div><!--end .card-body -->
                                            </div><!--end .card -->
                                        </div><!--end #tab2 -->
                                        <div class="tab-pane" id="tab3">
                                            <br/><br/>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <div class="radio radio-styled">
                                                            <label class="radio-inline radio-styled">
                                                                <input type="radio" name="inlineRadioOptions" value="option1" checked><span style="font-size: 15px;">Select a doctor for me?</span>
                                                            </label>
                                                            <label class="radio-inline radio-styled">
                                                                <input type="radio" name="inlineRadioOptions" value="option1"><span style="font-size: 15px;">I will select a doctor</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-group">
                                                    <select id="Doctor2" name="Doctor" class="form-control">
                                                        <option value="">&nbsp;</option>
                                                        <option value="1">Angelica Ramos</option>
                                                        <option value="2">Ashton Cox</option>
                                                        <option value="3">Cedric Kelly</option>
                                                        <option value="5">Zorita Serrano</option>
                                                        <option value="6">Tiger Nixon</option>
                                                    </select>
                                                    <label for="Doctor2">Doctor</label>
                                                    <p class="help-block">Please select a doctor.</p>
                                                </div>
                                            </div>
                                        </div><!--end #tab3 -->
                                        <div class="tab-pane" id="tab4">
                                            <br/><br/>
                                            <div class="form-group">
                                                <select id="Age1" name="Age" class="form-control">
                                                    <option value="">&nbsp;</option>
                                                    <option value="30">30</option>
                                                    <option value="40">40</option>
                                                    <option value="50">50</option>
                                                    <option value="60">60</option>
                                                    <option value="70">70</option>
                                                </select>
                                                <label for="Age1">Age</label>
                                                <p class="help-block">This is supporting text for this field.</p>
                                            </div>
                                        </div><!--end #tab4 -->
                                    </div><!--end .tab-content -->
                                    <ul class="pager wizard">
                                        <li class="previous first"><a class="btn-raised" href="javascript:void(0);">First</a></li>
                                        <li class="previous"><a class="btn-raised" href="javascript:void(0);">Previous</a></li>
                                        <li class="next last"><a class="btn-raised" href="javascript:void(0);">Last</a></li>
                                        <li class="next"><a class="btn-raised" href="javascript:void(0);">Next</a></li>
                                    </ul>
                                </form>
                            </div><!--end #rootwizard -->
                        </div><!--end .card-body -->
                    </div><!--end .card -->
                </div><!--end .col -->
            </div><!--end .row -->
            <!-- END FORM WIZARD -->
        </div>
    </div>

@stop

@section('page-script')

    <script>
        $(document).ready(function(){
            $('#demo-date-inline').datepicker({
            });
        });


    </script>

@stop