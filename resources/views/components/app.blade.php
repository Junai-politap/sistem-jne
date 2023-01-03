<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>JNE Terpadu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ url('public') }}/assets/images/favicon.ico">

    <link href="{{ url('public') }}/assets/plugins/tabulator/bootstrap/tabulator_bootstrap4.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{ url('public') }}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('public') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('public') }}/assets/css/app.min.css" rel="stylesheet" type="text/css" />

</head>

<body id="body" class="">
    <!-- leftbar-tab-menu -->

    <x-template.sidebar :menu="$menu"/>
    

    <!-- end leftbar-tab-menu-->

    <!-- Top Bar Start -->
    
    <x-template.header/>
    
    <!-- Top Bar End -->

    <div class="page-wrapper">

        <!-- Page Content-->
        <div class="page-content-tab pt-4">
            <div class="row">
                <div class="col-md-12">
                    <x-utils.notif />
                </div>
            </div>
            {{ $slot }}
            <!-- container -->

            <!--Start Rightbar-->
           
            <x-template.control-sidebar/>
           
            <!--end Rightbar-->

            <!--Start Footer-->
            <x-template.footer/>
            <!--end footer-->
        </div>
        <!-- end page content -->
    </div>
    <!-- end page-wrapper -->

    <!-- Javascript  -->

    <script src="{{ url('public') }}/assets/plugins/apexcharts/apexcharts.min.js"></script>
    <script src="{{ url('public') }}/assets/pages/analytics-index.init.js"></script>

    <script src="{{ url('public') }}/assets/plugins/tabulator/tabulator.min.js"></script>
   
    <script src="{{ url('public') }}/assets/pages/datatable.init.js"></script>
    <!-- App js -->
    <script src="{{ url('public') }}/assets/js/app.js"></script>

</body>
<!--end body-->

</html>
