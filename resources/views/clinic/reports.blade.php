@extends('layouts.default')

@section('content')
    <section class="style-default-bright">
        <div class="section-header" style="display: inline-flex;">
            <h2 class="text-primary" style="margin-right: 15px;">Statistics</h2>
        </div>
        <div class="section-body">

            <!-- BEGIN MORRIS - LINE CHART -->
            <section class="style-default-dark">
                <div class="section-body">
                    <h2 class="text-primary">Morris Line chart</h2>
                    <p>
                        The public API is terribly simple. It's just one function: <code>Morris.Line(options)</code>, where options is an object containing some of the following configuration options.
                    </p>
                    <div id="morris-line-graph" class="height-8" data-colors="#9C27B0"></div>
                </div><!--end .section-body -->
            </section>
            <!-- END MORRIS - LINE CHART -->


        </div>
    </section>

@stop

@section('page-scripts')
    <script src="/assets/js/modules/materialadmin/core/demo/DemoCharts.js"></script>
@stop