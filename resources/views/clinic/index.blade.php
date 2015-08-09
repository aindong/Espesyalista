@extends('layouts.default')

@section('content')
    <section class="style-default-bright">
        <div class="section-header">
            <h2 class="text-primary">Today's Appointments</h2>
        </div>
        <div class="section-body">

            <table id="queue" class="display" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Patient Name</th>
                    <th>Service</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>

                <tfoot>
                <tr>
                    <th>Patient Name</th>
                    <th>Service</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </tfoot>

                <tbody>
                <tr>
                    <td>Tiger Nixon</td>
                    <td>Tooth Removal</td>
                    <td>Ongoing</td>
                    <td>
                        <a href="#" class="btn btn-success">Check-In</a>
                        <a href="#" class="btn btn-danger">Cancel</a>
                    </td>
                </tr>
                <tr>
                    <td>Garrett Winters</td>
                    <td>Root Cannal</td>
                    <td>Ongoing</td>
                    <td>
                        <a href="#" class="btn btn-success">Check-In</a>
                        <a href="#" class="btn btn-danger">Cancel</a>
                    </td>
                </tr>
            </table>

        </div>
    </section>

@stop

@section('page-scripts')
    <script src="/assets/js/modules/materialadmin/core/demo/DemoTableDynamic.js"></script>
    <script>
        $(document).ready(function() {
            $('#queue').DataTable();
        } );
    </script>
@stop