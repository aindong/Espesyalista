@extends('layouts.default')

@section('content')
    <section class="style-default-bright">
        <div class="section-header" style="display: inline-flex;">
            <h2 class="text-primary" style="margin-right: 15px;">Services</h2>
            <a href="#" class="btn btn-info">Add</a>
        </div>
        <div class="section-body">

            <table id="queue" class="display" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Services</th>
                    <th>Action</th>
                </tr>
                </thead>

                <tfoot>
                <tr>
                    <th>Services</th>
                    <th>Action</th>
                </tr>
                </tfoot>

                <tbody>
                <tr>
                    <td>Miscroscopy</td>
                    <td>
                        <a href="#" class="btn btn-success">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>Nebulization</td>
                    <td>
                        <a href="#" class="btn btn-success">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>Hematology</td>
                    <td>
                        <a href="#" class="btn btn-success">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>Immunology/Serology</td>
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
            $('#queue').DataTable();
        } );
    </script>
@stop