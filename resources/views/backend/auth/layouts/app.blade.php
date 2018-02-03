<!DOCTYPE html>
<html lang="en">

<head>
        <title>EPR Admin</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!-- Styles -->
        <link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('backend/css/bootstrap-responsive.min.css') }}" rel="stylesheet">
        <link href="{{ asset('backend/css/matrix-login.css') }}" rel="stylesheet">
        <link href="{{ asset('backend/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

    </head>
    <body>
        @yield('content')

        <script src="{{ asset('backend/js/jquery.min.js') }}"></script>
        <script src="{{ asset('backend/matrix.login.js') }}"></script>

    </body>

</html>
