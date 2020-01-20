<!DOCTYPE html>
<html lang="en">
    <head>
        @include('main._meta')
        
        <title>AdminLTE 3 | Dashboard 2</title>
        <link rel="stylesheet" href="{{ mix('css/main.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        @yield('stylesheets')
    </head>
    <body class="hold-transition login-page">
        @yield('content')
        <script src="{{ mix('js/main.js') }}"></script>
    </body>
</html>
