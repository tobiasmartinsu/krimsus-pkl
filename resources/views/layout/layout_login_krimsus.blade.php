<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>CYBERCON</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="{{ asset('/krimsus/img/krimsus.png')}}" rel="icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('/krimsus/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('/krimsus/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('/krimsus/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('/krimsus/vendor/quill/quill.snow.css')}}" rel="stylesheet" />
    <link href="{{ asset('/krimsus/vendor/quill/quill.bubble.css')}}" rel=" stylesheet" />
    <link href="{{ asset('/krimsus/vendor/remixicon/remixicon.css')}}" rel="stylesheet" />
    <link href="{{ asset('/krimsus/vendor/simple-datatables/style.css')}}" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="{{ asset('/krimsus/css/style.css')}}" rel="stylesheet" />
</head>

<body>
        <main>
            @yield('content')
        </main>
</body>
</html>
