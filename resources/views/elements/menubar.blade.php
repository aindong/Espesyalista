<div id="menubar" class="menubar-inverse ">
    <div class="menubar-fixed-panel">
        <div>
            <a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
                <i class="fa fa-bars"></i>
            </a>
        </div>
        <div class="expanded">
            <a href="/">
                <span class="text-lg text-bold text-primary ">OBClinic</span>
            </a>
        </div>
    </div>
    <div class="menubar-scroll-panel">
        <!-- BEGIN MAIN MENU -->




        <ul id="main-menu" class="gui-controls">
            <!-- BEGIN DASHBOARD -->
            <li>
                <a href="/#" class="">
                    <div class="gui-icon"><i class="md md-home"></i></div>
                    <span class="title">Dashboard</span>
                </a>
            </li><!--end /menu-li -->
            <!-- END DASHBOARD -->

            <!-- BEGIN Appointments -->
            <li>
                <a href="/clinic/dashboard">
                    <div class="gui-icon"><i class="md md-schedule"></i></div>
                    <span class="title">Appointments</span>
                </a>
            </li><!--end /menu-li -->
            <!-- END Appointments -->

            <!-- BEGIN Patients -->
            <li class="gui-folder">
                <a>
                    <div class="gui-icon"><i class="md md-view-agenda"></i></div>
                    <span class="title">Maintenance</span>
                </a>
                <!--start submenu -->
                <ul>
                    <li><a href="/clinic/doctors" ><span class="title">Doctors</span></a></li>
                    <li><a href="/clinic/schedules" ><span class="title">Schedules</span></a></li>
                    <li><a href="/clinic/services" ><span class="title">Services</span></a></li>

                </ul><!--end /submenu -->
            </li><!--end /menu-li -->
            <!-- END Patients -->

            <!-- BEGIN Patients -->
            <li class="gui-folder">
                <a>
                    <div class="gui-icon"><i class="md md-group"></i></div>
                    <span class="title">Patients</span>
                </a>
                <!--start submenu -->
                <ul>
                    <li><a href="/clinic/patients" ><span class="title">List</span></a></li>
                </ul><!--end /submenu -->
            </li><!--end /menu-li -->
            <!-- END Patients -->

            <!-- BEGIN Reports -->
            <li>
                <a href="/clinic/reports">
                    <div class="gui-icon"><i class="md md-trending-up"></i></div>
                    <span class="title">Reports</span>
                </a>
            </li><!--end /menu-li -->
            <!-- END Reports -->

        </ul><!--end .main-menu -->
        <!-- END MAIN MENU -->

        <div class="menubar-foot-panel">
            <small class="no-linebreak hidden-folded">
                <span class="opacity-75">AngelHackMNL 2015 </span>
            </small>
        </div>
    </div><!--end .menubar-scroll-panel-->
</div><!--end #menubar-->