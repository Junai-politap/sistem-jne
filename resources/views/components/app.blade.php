<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="Crush On The most popular Admin Dashboard template and ui kit">
    <meta name="author" content="PuffinTheme the theme designer">

    <link rel="icon" href="favicon.ico" type="image/x-icon" />

    <title> Sistem JNE</title>

    <!-- Bootstrap Core and vandor -->
    <link rel="stylesheet" href="{{ url('public/template') }}/assets/plugins/bootstrap/css/bootstrap.min.css" />

    <!-- Plugins css -->
    <link rel="stylesheet" href="{{ url('public/template') }}/assets/plugins/charts-c3/c3.min.css" />
    <link rel="stylesheet" href="{{ url('public/template') }}/assets/plugins/jvectormap/jvectormap-2.0.3.css" />

    <!-- Core css -->
    <link rel="stylesheet" href="{{ url('public/template') }}/assets/css/main.css" />
    <link rel="stylesheet" href="{{ url('public/template') }}assets/css/default.css" />
</head>

<body class="font-opensans">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
        </div>
    </div>

    <div id="main_content">

        <x-template.sidebar/>

        <div class="page">
           <x-template.header/>
            <div class="section-body mt-4">
                <div class="container-fluid">
                    {{ $slot }}
                </div>
            </div>
            <x-template.footer/>
        </div>
    </div>


    <script src="{{ url('public/template') }}/assets/bundles/lib.vendor.bundle.js"></script>

    <script src="{{ url('public/template') }}/assets/bundles/counterup.bundle.js"></script>
    <script src="{{ url('public/template') }}/assets/bundles/apexcharts.bundle.js"></script>
    <script src="{{ url('public/template') }}/assets/bundles/jvectormap2.bundle.js"></script>

    <script src="{{ url('public/template') }}/assets/js/core.js"></script>
    <script src="{{ url('public/template') }}assets/js/page/index.js"></script>
</body>

</html>
