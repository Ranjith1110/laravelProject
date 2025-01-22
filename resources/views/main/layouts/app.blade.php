<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M.A.M College of Engineering</title>
    <link href="{{asset('images/web-title-logo.png')}}" rel="icon" />

    <!-- External Css -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/fastbootstrap.min.css')}}" rel="stylesheet">
    

    
    <!-- Fontawesome Link for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" />
    <script src="{{asset('js/script.js')}}"></script>
    <script src="{{asset('js/fastbootstrap.min.js')}}"></script>
    

    <style>
        /* Glassmorphism background */
        .modal-content {
            background: rgba(255, 255, 255, 0.25);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 15px;
        }

        /* Glassmorphic input fields */
        .form-control,
        .form-select {
            background: rgba(255, 255, 255, 0.5);
            border: 1px solid rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(5px);
            border-radius: 8px;
            padding: 10px;
            font-size: 1rem;
            color: #000;
            transition: all 0.3s ease;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: rgba(211, 32, 50, 0.5);
            box-shadow: 0 0 8px rgba(232, 39, 58, 0.5);
            outline: none;
        }

        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .scrolled {
            background-color: #fff;
            color: #000;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .scrolled .nav-link {
            color: #000 !important;
        }

        @media (max-width: 769px) {
            .navbar {
                background: #fff;
            }

        }
    </style>

</head>

<body>
    {{--@section('sidebar')
                    This is the master sidebar.
            @show--}}

    @yield('content')
    
    @extends('includes.footer')
</body>
</html>

<script>
    
        $(document).on("click", "#openPopupBtn", function () {
            $("#popupOverlay").model('show');
        });

</script>