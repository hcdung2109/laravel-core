<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

    <title> SmartAdmin </title>
    <meta name="description" content="">
    <meta name="author" content="">
    <base href="<?php echo e(asset('')); ?>public/">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Basic Styles -->
    <link rel="stylesheet" type="text/css" media="screen" href="backend/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="backend/css/font-awesome.min.css">

    <!-- SmartAdmin Styles : Caution! DO NOT change the order -->
    <link rel="stylesheet" type="text/css" media="screen" href="backend/css/smartadmin-production-plugins.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="backend/css/smartadmin-production.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="backend/css/smartadmin-skins.min.css">

    <!-- SmartAdmin RTL Support -->
    <link rel="stylesheet" type="text/css" media="screen" href="backend/css/smartadmin-rtl.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="backend/css/your_style.css">

    <!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
    <link rel="stylesheet" type="text/css" media="screen" href="backend/css/demo.min.css">

    <!-- FAVICONS -->
    <link rel="shortcut icon" href="backend/img/favicon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="backend/img/favicon/favicon.ico" type="image/x-icon">

    <!-- GOOGLE FONT -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

    <!-- Specifying a Webpage Icon for Web Clip
         Ref: https://developer.apple.com/library/ios/documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html -->
    <link rel="apple-touch-icon" href="backend/img/splash/sptouch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="76x76" href="backend/img/splash/touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="120x120" href="backend/img/splash/touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="152x152" href="backend/img/splash/touch-icon-ipad-retina.png">

    <!-- iOS web-app metas : hides Safari UI Components and Changes Status Bar Appearance -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- Startup image for web apps -->
    <link rel="apple-touch-startup-image" href="backend/img/splash/ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
    <link rel="apple-touch-startup-image" href="backend/img/splash/ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
    <link rel="apple-touch-startup-image" href="backend/img/splash/iphone.png" media="screen and (max-device-width: 320px)">

</head>
<body class="desktop-detected pace-done smart-style-2">

<!-- Start Header-menu-->
<?php echo $__env->make('backend.layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!--Start sidebar-menu-->
<?php echo $__env->make('backend.layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- MAIN PANEL -->
<div id="main" role="main">

    <?php if(session('msg')): ?>
        <div id="gritter-notice-wrapper">
            <div class="alert alert-info alert-block"> <a class="close" data-dismiss="alert" href="#">×</a>
            <?php echo e(session('msg')); ?> !
        </div>
    <?php endif; ?>

    <!-- RIBBON -->
    <div id="ribbon">
        <span class="ribbon-button-alignment">
            <span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true">
                <i class="fa fa-refresh"></i>
            </span>
        </span>
        <!-- breadcrumb -->
        <ol class="breadcrumb">
            <li>Home</li><li>Forms</li><li>Smart Form Elements</li>
        </ol>
        <!-- end breadcrumb -->

    </div>
    <!-- END RIBBON -->

    <!-- MAIN CONTENT -->
    <div id="content">

        <!-- Message Success -->
        <?php if(session('msgSuccess')): ?>
            <div class="alert alert-success fade in">
                <button class="close" data-dismiss="alert">×</button>
                <i class="fa-fw fa fa-check"></i> <?php echo e(session('msgSuccess')); ?>

            </div>
        <?php endif; ?>

        <!-- Message Error -->
        <?php if(session('msgError')): ?>
            <div class="alert alert-danger fade in">
                <button class="close" data-dismiss="alert">×</button>
                <i class="fa-fw fa fa-times"></i> <?php echo e(session('msgError')); ?>

            </div>
        <?php endif; ?>

        <?php echo $__env->yieldContent('content'); ?>

    </div>
    <!-- END MAIN CONTENT -->

</div>
<!-- END MAIN PANEL -->

<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
<script data-pace-options='{ "restartOnRequestAfter": true }' src="backend/js/plugin/pace/pace.min.js"></script>

<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    if (!window.jQuery) {
        document.write('<script src="backend/js/libs/jquery-2.1.1.min.js"><\/script>');
    }
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script>
    if (!window.jQuery.ui) {
        document.write('<script src="backend/js/libs/jquery-ui-1.10.3.min.js"><\/script>');
    }
</script>

<!-- IMPORTANT: APP CONFIG -->
<script src="backend/js/app.config.js"></script>

<!-- JS TOUCH : include this plugin for mobile drag / drop touch events-->
<script src="backend/js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script>

<!-- BOOTSTRAP JS -->
<script src="backend/js/bootstrap/bootstrap.min.js"></script>

<!-- CUSTOM NOTIFICATION -->
<script src="backend/js/notification/SmartNotification.min.js"></script>

<!-- JARVIS WIDGETS -->
<script src="backend/js/smartwidgets/jarvis.widget.min.js"></script>

<!-- EASY PIE CHARTS -->
<script src="backend/js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js"></script>

<!-- SPARKLINES -->
<script src="backend/js/plugin/sparkline/jquery.sparkline.min.js"></script>

<!-- JQUERY VALIDATE -->
<script src="backend/js/plugin/jquery-validate/jquery.validate.min.js"></script>

<!-- JQUERY MASKED INPUT -->
<script src="backend/js/plugin/masked-input/jquery.maskedinput.min.js"></script>

<!-- JQUERY SELECT2 INPUT -->
<script src="backend/js/plugin/select2/select2.min.js"></script>

<!-- JQUERY UI + Bootstrap Slider -->
<script src="backend/js/plugin/bootstrap-slider/bootstrap-slider.min.js"></script>

<!-- browser msie issue fix -->
<script src="backend/js/plugin/msie-fix/jquery.mb.browser.min.js"></script>

<!-- FastClick: For mobile devices -->
<script src="backend/js/plugin/fastclick/fastclick.min.js"></script>

<!--[if IE 8]>

<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>

<![endif]-->

<!-- Demo purpose only -->
<script src="backend/js/demo.min.js"></script>

<!-- MAIN APP JS FILE -->
<script src="backend/js/app.min.js"></script>

<!-- ENHANCEMENT PLUGINS : NOT A REQUIREMENT -->
<!-- Voice command : plugin -->
<script src="backend/js/speech/voicecommand.min.js"></script>

<!-- SmartChat UI : plugin -->
<script src="backend/js/smart-chat-ui/smart.chat.ui.min.js"></script>
<script src="backend/js/smart-chat-ui/smart.chat.manager.min.js"></script>

<!-- PAGE RELATED PLUGIN(S)
<script src="..."></script>-->



<script type="text/javascript">

    // DO NOT REMOVE : GLOBAL FUNCTIONS!

    $(document).ready(function() {

        pageSetUp();

    })

</script>

<!-- Your GOOGLE ANALYTICS CODE Below -->
<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();

</script>

<!-- Form Confirm -->
<div class="divMessageBox animated fadeIn fast" id="MsgBoxBack">

    <div class="MessageBoxContainer animated fadeIn fast" id="Msg1">
        <div class="MessageBoxMiddle">
            <span class="MsgTitle"> Alert!</span>
            <p class="pText">This is a confirmation box. Can be programmed for button callback</p>
            <div class="MessageBoxButtonSection">
                <button id="btn-close-confirm" class="btn btn-default btn-sm botTempo"> No</button>
                <button id="bot2-Msg1" class="btn btn-default btn-sm botTempo"> Yes</button>
            </div>
        </div>
    </div>
</div>

<script  type="text/javascript">
    $('#btn-close-confirm').click(function () {
        $('#MsgBoxBack').css('display','none');
    });
</script>


</body>

</html>
