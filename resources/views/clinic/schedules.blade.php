@extends('layouts.default')

@section('content')
    <section class="style-default-bright">
        <div class="section-header">
            <h2 class="text-primary">Schedules</h2>
        </div>
        <div class="section-body">

            <table id="queue" class="display" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Doctor Name</th>
                    <th>Service</th>
                    <th>Date and Time</th>
                    <th>Action</th>
                </tr>
                </thead>

                <tfoot>
                <tr>
                    <th>Doctor Name</th>
                    <th>Service</th>
                    <th>Date and Time</th>
                    <th>Action</th>
                </tr>
                </tfoot>

                <tbody>
                <tr>
                    <td>Brenden Wagner</td>
                    <td>ECG</td>
                    <td>9 August 2015, 12:30 PM</td>
                    <td>
                        <a href="#" class="btn btn-success">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>Cara Stevens</td>
                    <td>Miscroscopy</td>
                    <td>12 August 2015, 02:30 PM</td>
                    <td>
                        <a href="#" class="btn btn-success">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>Caesar Vance</td>
                    <td>Nebulization</td>
                    <td>9 August 2015, 10:00 AM</td>
                    <td>
                        <a href="#" class="btn btn-success">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
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
            $('#queue').dataTable( {
                "order": [[ 2, "asc" ]]
            } );
        } );
    </script>
@stop