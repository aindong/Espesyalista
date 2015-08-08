<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ $pageTitle or 'Dashboard'}} | Espesyalista</title>

    <!-- BEGIN META -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="your,keywords">
    <meta name="description" content="Short explanation about this website">
    <!-- END META -->

    <!-- BEGIN STYLESHEETS -->
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
    <link rel="stylesheet" href="/assets/css/modules/materialadmin/css/theme-5/bootstrap02dc.css"/>
    <link rel="stylesheet" href="/assets/css/modules/materialadmin/css/theme-5/materialadmin0768.css"/>
    <link rel="stylesheet" href="/assets/css/modules/materialadmin/css/theme-5/font-awesome.min445a.css"/>
    <link rel="stylesheet" href="/assets/css/modules/materialadmin/css/theme-5/material-design-iconic-font.min3cd8.css"/>
    <link rel="stylesheet" href="/assets/css/modules/materialadmin/css/theme-5/libs/rickshaw/rickshawd56b.css"/>
    <link rel="stylesheet" href="/assets/css/modules/materialadmin/css/theme-5/libs/morris/morris.core5e0a.css"/>

    <link type="text/css" rel="stylesheet" href="/assets/css/modules/materialadmin/css/theme-default/libs/DataTables/jquery.dataTablesdee9.css" />
    <link type="text/css" rel="stylesheet" href="/assets/css/modules/materialadmin/css/theme-default/libs/DataTables/extensions/dataTables.colVis941e.css" />
    <link type="text/css" rel="stylesheet" href="/assets/css/modules/materialadmin/css/theme-default/libs/DataTables/extensions/dataTables.tableTools4029.css" />
    <link type="text/css" rel="stylesheet" href="/assets/css/modules/materialadmin/css/theme-default/libs/select2/select201ef.css" />

    <link rel="stylesheet" href="/assets/css/modules/materialadmin/css/theme-5/libs/toastr/toastrf6d7.css"/>
    <link rel="stylesheet" href="/assets/css/modules/materialadmin/css/theme-default/libs/dropzone/dropzone-theme23ba.css"/>
    <link rel="stylesheet" href="/assets/css/modules/slick/slick.css"/>
    <link rel="stylesheet" href="/assets/css/modules/slick/slick-theme.css"/>
    <link rel="stylesheet" href="/assets/css/custom.css"/>
    <link rel="stylesheet" href="/assets/css/front.css"/>

    <style>
        .hide {
            display: none;
        }
    </style>
    @yield('page-styles')
    <!-- END STYLESHEETS -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="http://www.codecovers.eu/assets/js/modules/materialadmin/libs/utils/html5shiv.js?1422823601"></script>
    <script type="text/javascript" src="http://www.codecovers.eu/assets/js/modules/materialadmin/libs/utils/respond.min.js?1422823601"></script>
    <![endif]-->

    <style>
        #loader {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background-color: rgba(255, 255, 255, 0.90);
        }

        #loader img {
            align-content: center;
            position: fixed;
            left: 45%;
            top: 40%;
        }
    </style>
</head>

<body>
<div id="wrapper">
    <nav class="navbar navbar-menu">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/" >
                    Espesyalista
                </a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li ><a href="{{ url('/home') }}">Dashboard</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li><a href="{{ url('/auth/login') }}">Login</a></li>
                        <li><a href="{{ url('/auth/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <?php
                                if ( isset(Auth::user()->first_name)){
                                    $name = Auth::user()->first_name ." ". Auth::user()->last_name;
                                } elseif( isset (Auth::user()->name)) {
                                    $name = Auth::user()->name;
                                } else {
                                    $name = Auth::user()->username;
                                }
                                ?>
                                Hi {{ $name  }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/home') }}">Dashboard</a></li>
                                <li><a href="{{ url('/profile') }}">My Profile</a></li>
                                <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="section section--footer">
        <div class="section--content section--copyright">
            <div class="container">
                <div class="row">
                    <div class="container">
                    <span>
                    AngelHackMNL 2015
                    </span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>


<!-- BEGIN JAVASCRIPT -->
<script src="/assets/js/modules/materialadmin/libs/jquery/jquery-1.11.2.min.js"></script>
<script src="/assets/js/modules/materialadmin/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
<script src="/assets/js/modules/materialadmin/libs/bootstrap/bootstrap.min.js"></script>
<script src="/assets/js/modules/materialadmin/libs/spin.js/spin.min.js"></script>
<script src="/assets/js/modules/materialadmin/libs/autosize/jquery.autosize.min.js"></script>
<script src="/assets/js/modules/materialadmin/core/cache/9782537cea5b6dc42cb13bd7821cceca.js"></script>
<script src="/assets/js/modules/materialadmin/libs/moment/moment.min.js"></script>
<script src="/assets/js/modules/materialadmin/core/cache/ec2c8835c9f9fbb7b8cd36464b491e73.js"></script>
<script src="/assets/js/modules/materialadmin/libs/jquery-knob/jquery.knob.min.js"></script>
<script src="/assets/js/modules/materialadmin/libs/sparkline/jquery.sparkline.min.js"></script>
<script src="/assets/js/modules/materialadmin/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
<script src="/assets/js/modules/materialadmin/libs/toastr/toastr.js"></script>
<script src="/assets/js/modules/materialadmin/libs/dropzone/dropzone.min.js"></script>
<script src="/assets/js/modules/materialadmin/core/cache/43ef607ee92d94826432d1d6f09372e1.js"></script>
{{--<script src="/assets/js/modules/materialadmin/libs/rickshaw/rickshaw.min.js"></script>--}}
<script src="/assets/js/modules/materialadmin/core/cache/63d0445130d69b2868a8d28c93309746.js"></script>
<script src="/assets/js/modules/materialadmin/libs/select2/select2.min.js"></script>
<script src="/assets/js/modules/materialadmin/core/demo/Demo.js"></script>
<script src="/assets/js/modules/slick/slick.min.js"></script>

<!-- END JAVASCRIPT -->
@yield('page-script')

</body>
</html>