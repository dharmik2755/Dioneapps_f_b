<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dione Apps – IT company</title>

    <!-- link css -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,400;0,500;0,600;0,700;0,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
    <link href="{{asset('asset/css/aos.css')}}" rel="stylesheet">
    <link href="{{asset('asset/css/counterpanel.css')}}" rel="stylesheet">
    <link href="{{asset('asset/css/style.min.css')}}" rel="stylesheet" />
    <link rel="shortcut icon" href="{{asset('asset/images/logo.png')}}" type="images/ico.ico">
    {{-- ajax data insert  --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>


</head>

<body>
    <div class="lines">
       
        <div class="header_top sticky">
            <div class="container">
                <div class="header_top-wrapper">
                    <a href="{{url('/')}}" class="header_logo">
                        <img src="{{asset('asset/images/logo7.png')}}" alt="">
                    </a>
                    <div class="menu_burger">
                        <span></span>
                    </div>
                    <nav class="menu">
                        <ul class="menu_list">
                            <li class="menu_list-item"><a href="{{url('/')}}">Home</a> </li>
                            <li class="menu_list-item"><a href="{{url('/about')}}">AboutUs</a> </li>
                            <li class="menu_list-item"><a href="{{url('/service')}}">Service</a> </li>
                            <li class="menu_list-item"><a href="{{url('/portfolio')}}">Portfolio</a> </li>
                            <li class="menu_list-item"><a href="{{url('/career')}}">Career</a> </li>

                        </ul>
                    </nav>
                    <div class="header_top-number_wrapper">
                        <div class="number_inner">
                            <a href="{{url('/contactus')}}" class="header_main-btn btn-header ">
                                Contact Us
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>