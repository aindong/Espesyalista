@extends('layouts.front')

@section('page-styles')
    <style>
        #front_booking .booking {
            padding-top: 75px;
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
        #demo-date-inline { padding-left: 40%; }
    </style>
@stop

@section('content')

    <div id="front_booking" class="gray-section section" style="height: 915px;">
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
                                                    <h3 for="State" class="control-label">Country : </h3>
                                                    <h4 for="State" class="form-control">Philippines</h4>
                                                </div>
                                            </div>

                                        </div><!--end #tab1 -->
                                        <div class="tab-pane" id="tab2">
                                            <br/><br/>
                                            <div class="card">
                                                <div class="card-body">
                                                    <div id="demo-date-inline"></div>
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
                                                        <option value="1">Dr. Angelica Ramos</option>
                                                        <option value="2">Dr. Ashton Cox</option>
                                                        <option value="3">Dr. Cedric Kelly</option>
                                                        <option value="5">Dr. Zorita Serrano</option>
                                                        <option value="6">Dr. Tiger Nixon</option>
                                                    </select>
                                                    <label for="Doctor2">Doctor</label>
                                                    <p class="help-block">Please select a doctor.</p>
                                                </div>
                                            </div>
                                        </div><!--end #tab3 -->
                                        <div class="tab-pane" id="tab4">
                                            <br/><br/>

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <h3 for="City" class="control-label">Date of Appointment : </h3>
                                                    <h4 for="City" class="form-control">09 August 2015, 9:00 AM</h4>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <h3 for="State" class="control-label">Doctor : </h3>
                                                    <h4 for="State" class="form-control">Dr. Ashton Cox</h4>
                                                </div>
                                            </div>

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
                                                    <h3 for="State" class="control-label">Country : </h3>
                                                    <h4 for="State" class="form-control">Philippines</h4>
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <button type="button" class="btn btn-danger btn-loading-state confirm" data-loading-text="<i class='fa fa-spinner fa-spin'></i> Loading..."> Confirm Booking </button>
                                                </div>
                                            </div>

                                        </div><!--end #tab4 -->
                                    </div><!--end .tab-content -->
                                    <ul class="pager wizard">
                                        <li class="previous"><a class="btn-raised" href="javascript:void(0);">Previous</a></li>
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

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">You have successfully booked your appointment!</h4>
                </div>
                <div class="modal-body">
                    Thank you!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


@stop

@section('page-script')
    <script src="/assets/js/modules/materialadmin/core/demo/DemoFormWizard.js"></script>
    <script src="/assets/js/modules/materialadmin/core/demo/DemoFormComponents.js"></script>

    <script>
        (function(){

            $('.confirm').on('click', function(e) {
                var data = {};
                $.post('/api/v1/appointments', data, function(res) {
                    $('#myModal').modal('show');
                });
            });
        }());
    </script>
@stop