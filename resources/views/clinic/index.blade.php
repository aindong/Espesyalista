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

                </tbody>
            </table>

        </div>
    </section>

@stop

@section('page-scripts')
    <script src="/assets/js/modules/materialadmin/core/demo/DemoTableDynamic.js"></script>
    <script>
        $(document).ready(function() {
            var $tableBody = $('#queue tbody');

            $.get('/api/v1/appointments/clinic/1', function(res) {
                $.each(res.data, function(k, v) {
                    console.log(v);
                    var el  = '<tr>';
                        el += '<td>' + v.user.firstname + ' ' + v.user.lastname + '</td>';
                        el += '<td>' + v.service.name + '</td>';
                        el += '<td>inactive</td>';
                        el += '<td>';
                        el += '<a href="#" class="btn btn-success">Check-In</a><a href="#" class="btn btn-danger">Cancel</a>';
                        el += '</td></tr>';

                    $tableBody.append(el);
                });

                $('#queue').DataTable();
            });
        } );
    </script>
@stop