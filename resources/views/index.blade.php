@extends('layouts.default')

@section('content')
    <section class="style-default-bright">
        <div class="section-header">
            <h2 class="text-primary">Dashboard</h2>
        </div>
        <div class="section-body">

        </div>
    </section>


    <!-- BEGIN FORM MODAL MARKUP -->
    <div class="modal fade" id="addQueueModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="formModalLabel">Add Patient on Queue</h4>
                </div>
                <form class="form-horizontal" role="form" id="createQueueForm" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label for="patient_no" class="control-label">Patient No</label>
                            </div>
                            <div class="col-sm-9">
                                <select name="patient_no" id="patient_no">
                                    {{--@foreach($patients as $patient)--}}
                                    {{--<option value="{{ $patient->patient_no }}">--}}
                                        {{--{{ $patient->firstname }} {{ $patient->middlename }} {{ $patient->lastname }}--}}
                                    {{--</option>--}}
                                    {{--@endforeach--}}
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-3">
                                <label for="email1" class="control-label">Reservation Type</label>
                            </div>
                            <div class="col-sm-9">
                                <select name="reservation_type" id="email" class="form-control" placeholder="Reservation Type" >
                                    <option value="OVER THE PHONE">OVER THE PHONE</option>
                                    <option value="WALK-IN">WALK-IN</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-3">
                                <label for="getvital" class="control-label">Get Vital Signs</label>
                            </div>
                            <div class="col-sm-9">
                                <label class="radio-inline radio-styled">
                                    <input type="radio" name="getvital"/>
                                    <span>Yes</span>
                                </label>

                                <label class="radio-inline radio-styled">
                                    <input type="radio" name="getvital" checked/>
                                    <span>No</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary btnSubmit btn-loading-state" data-loading-text="<i class='fa fa-spinner fa-spin'></i> Submitting...">Submit</button>
                    </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- END FORM MODAL MARKUP -->

    <!-- Table Template -->
    <script type="text/template" id="queue-table">
        <div class="row">
            <div class="col-md-12">
                <h4>PATIENT QUEUE &nbsp;
                    <a href="#" role="button" data-toggle="modal" data-target="#addQueueModal" class="btn btn-primary ink-reaction">
                        <i class="md-person-add"></i> ADD ON QUEUE
                    </a>
                </h4>
            </div><!--end .col -->
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table id="datatable2" class="table order-column hover" data-source="/api/v1/queues" data-swftools="/assets/js/modules/materialadmin/libs/DataTables/extensions/TableTools/swf/copy_csv_xls_pdf.swf">
                        <thead>
                        <tr>
                            <th></th>
                            <th>Queue No</th>
                            <th>Arrival</th>
                            <th>Patient No</th>
                            <th>Patient Name</th>
                            <th>Vitalsign</th>
                            <th>Type</th>
                        </tr>
                        </thead>
                    </table>
                </div><!--end .table-responsive -->
            </div><!--end .col -->
        </div><!--end .row -->
    </script>
@stop

@section('page-scripts')
    {{--<script src="/assets/js/modules/materialadmin/core/demo/DemoTableDynamic.js"></script>--}}
    <script>
        $(function() {
            $('select').select2();
        })
    </script>
@stop