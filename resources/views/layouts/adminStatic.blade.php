<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/favicon.png')}}">
    <!-- Pignose Calender -->
    <link href="{{asset('assets/plugins/pg-calendar/css/pignose.calendar.min.css')}}" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="{{asset('assets/plugins/chartist/css/chartist.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css')}}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('assets/plugins/tables/css/datatable/dataTables.bootstrap4.min.css')}}">
    <!-- jquery-steps -->
    <link rel="stylesheet" href="{{asset('assets/plugins/jquery-steps/css/jquery.steps.css')}}">
    <!-- toastr -->
    <link rel="stylesheet" href="{{asset('assets/plugins/toastr/css/toastr.min.css')}}">
    <!-- Custom Stylesheet -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">


        <!--**********************************
            Nav header start
        ***********************************-->
        @include('includes.admin.header')
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->

        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('includes.admin.slidbar')
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->

        <!--**********************************
            Content body end
        ***********************************-->
           @yield('index')
           {{-- languages yield --}}
           @yield('viewlanguages')
           @yield('addlanguages')
           @yield('editlanguages')
           {{-- main categories yield --}}
           @yield('viewcat')
           @yield('addcat')
           @yield('editcat')
           {{-- vendors yield --}}
           @yield('vendors')
           @yield('addVendors')
           @yield('editVendors')

            {{--sub categories--}}
            @yield('viewSubcat')
            @yield('addSubcat')
            @yield('editSubcat')

    <!--**********************************
            Footer start
        ***********************************-->
        @include('includes.admin.footer')
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="{{asset('assets/plugins/common/common.min.js')}}"></script>
    <script src="{{asset('assets/js/custom.min.js')}}"></script>
    <script src="{{asset('assets/js/settings.js')}}"></script>
    <script src="{{asset('assets/js/gleek.js')}}"></script>
    <script src="{{asset('assets/js/styleSwitcher.js')}}"></script>

    <!-- Chartjs -->
    <script src="{{asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>
    <!-- Circle progress -->
    <script src="{{asset('assets/plugins/circle-progress/circle-progress.min.js')}}"></script>
    <!-- Datamap -->
    <script src="{{asset('assets/plugins/d3v3/index.js')}}"></script>
    <script src="{{asset('assets/plugins/topojson/topojson.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datamaps/datamaps.world.min.js')}}"></script>
    <!-- Morrisjs -->
    <script src="{{asset('assets/plugins/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('assets/plugins/morris/morris.min.js')}}"></script>
    <!-- Pignose Calender -->
    <script src="{{asset('assets/plugins/moment/moment.min.js')}}"></script>
    <script src="{{asset('assets/plugins/pg-calendar/js/pignose.calendar.min.js')}}"></script>
    <!-- ChartistJS -->
    <script src="{{asset('assets/plugins/chartist/js/chartist.min.js')}}"></script>
    <script src="{{asset('assets/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js')}}"></script>
    <script src="{{asset('assets/js/dashboard/dashboard-1.js')}}"></script>
    <!-- datatable -->
    <script src="{{asset('assets/plugins/tables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/plugins/tables/js/datatable/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/plugins/tables/js/datatable-init/datatable-basic.min.js')}}"></script>
    <!-- jquery-steps , validation -->
    <script src="{{asset('assets/plugins/jquery-steps/build/jquery.steps.min.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins-init/jquery-steps-init.js')}}"></script>
    <!-- toastr -->
    <script src="{{asset('assets/plugins/toastr/js/toastr.min.js')}}"></script>
    <script src="{{asset('assets/plugins/toastr/js/toastr.init.js')}}"></script>
    @yield('script')

    <script>
        (function() {
            "use strict"

            new quixSettings({
                headerPosition: "fixed" ,
                sidebarPosition: "fixed"
            });


        })(jQuery);
    </script>


</body>

</html>
