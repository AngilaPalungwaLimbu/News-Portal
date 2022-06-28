<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo News Portal</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <script src="https://kit.fontawesome.com/99694a0c52.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v14.0"
        nonce="fdjooq0f"></script>

    <!-- Logo -->
    @include('frontend.components.topbar')
    <!-- Logo -->
    @include('frontend.components.logo')
    <!-- Menu -->
    @include('frontend.components.navbar')
    <!-- Main body -->
    @yield('content')
    <!-- Footer -->
    @include('frontend.components.footer')

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

    <script>
        var frame = document.getElementById('myFrame');
        frame.onload = function() {
            var body = frame.contentWindow.document.querySelector('body');
            body.style.color = 'red';
            body.style.fontSize = '20px';
            body.style.lineHeight = '20px';
        };
    </script>
</body>


</html>
