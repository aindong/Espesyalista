@extends('layouts.default')

@section('content')
    <section class="style-default-bright">
        <div class="section-header" style="display: inline-flex;">
            <h2 class="text-primary" style="margin-right: 15px;">Doctors</h2>
            <a href="#" class="btn btn-info">Add</a>
        </div>
        <div class="section-body">

            <table id="queue" class="display" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Specialization</th>
                    <th>Action</th>
                </tr>
                </thead>

                <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Specialization</th>
                    <th>Action</th>
                </tr>
                </tfoot>

                <tbody>
                <tr>
                    <td>Brenden Wagner</td>
                    <td>Pediatrician</td>
                    <td>
                        <a href="#" class="btn btn-success">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>Cara Stevens</td>
                    <td>Internal Medicine</td>
                    <td>
                        <a href="#" class="btn btn-success">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>Caesar Vance</td>
                    <td>Gastroenterologist</td>
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