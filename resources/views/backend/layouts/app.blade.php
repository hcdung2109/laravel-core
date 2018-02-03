<!DOCTYPE html>
<html lang="en">
<head>
    <title>EPR Admin</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <base href="{{asset('')}}public/">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="backend/css/bootstrap.min.css" rel="stylesheet">
    <link href="backend/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="backend/css/colorpicker.css" rel="stylesheet">
    <link href="backend/css/matrix-login.css" rel="stylesheet">
    <link href="backend/css/font-awesome.css" rel="stylesheet">
    <link href="backend/css/uniform.css" rel="stylesheet">
    <link href="backend/css/select2.css" rel="stylesheet">
    <link href="backend/css/matrix-style.css" rel="stylesheet">
    <link href="backend/css/matrix-media.css" rel="stylesheet">
    <link href="backend/css/bootstrap-wysihtml5.css" rel="stylesheet">
    <link href="backend/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="backend/css/my-style.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
    <h1><a href="dashboard.html">EPR Admin</a></h1>
</div>
<!--END -->

<!-- Start Header-menu-->
@include('backend.layouts.topbar')

<!--Start sidebar-menu-->
@include('backend.layouts.sidebar')


<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    </div>
    <div class="container-fluid">

        @if(session('msg'))
            <div class="quick-actions_homepage">
                <div class="alert alert-success">
                    <button class="close" data-dismiss="alert">×</button>
                    <strong>{{session('msg')}}</strong>
                </div>
            </div>
        @endif

        <!-- Main content -->
        @yield('content')
    </div>
</div>
<!--Footer-part-->
<div class="row-fluid">
    <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>
<!--end-Footer-part-->
<script src="backend/js/jquery.min.js"></script>
<script src="backend/js/jquery.ui.custom.js"></script>
<script src="backend/js/bootstrap.min.js"></script>
<script src="backend/js/jquery.uniform.js"></script>
<script src="backend/js/select2.min.js"></script>
<script src="backend/js/jquery.dataTables.min.js"></script>
<script src="backend/js/matrix.js"></script>
<script src="backend/js/matrix.tables.js"></script>
</body>
</html>
