@extends('layouts.default')

@section('content')
    <section class="style-default-bright">
        <div class="section-header" style="display: inline-flex;">
            <h2 class="text-primary" style="margin-right: 15px;">Patients</h2>
        </div>
        <div class="section-body">

            <table id="queue" class="display" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Patient Name</th>
                    <th>Service</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
                </thead>

                <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Service</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
                </tfoot>

                <tbody>
                <tr>
                    <td>Brenden Wagner</td>
                    <td>Immunology/Serology</td>
                    <td>12 August 2015, 12:00 PM</td>
                    <td>
                        <a href="#" class="btn btn-success">View</a>
                    </td>
                </tr>
                <tr>
                    <td>Cara Stevens</td>
                    <td>Pregnancy test</td>
                    <td>9 August 2015, 02:00 PM</td>
                    <td>
                        <a href="#" class="btn btn-success">View</a>
                    </td>
                </tr>
                <tr>
                    <td>Caesar Vance</td>
                    <td>Blood chemistry</td>
                    <td>10 August 2015, 10:00 AM</td>
                    <td>
                        <a href="#" class="btn btn-success">View</a>
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