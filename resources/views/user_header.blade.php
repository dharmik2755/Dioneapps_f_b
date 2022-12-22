<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="canonical" href="https://www.dioneapps.com/"/>

    <title>DioneApps – IT company</title>
    <!-- link css -->
    {{-- <link
        href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,400;0,500;0,600;0,700;0,800;1,900&display=swap"
        rel="stylesheet"> --}}
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,600;1,500&display=swap" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
    <link href="{{ asset('asset/css/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/counterpanel.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/style.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/images/logo.png') }}" rel="shortcut icon" type="images/ico.ico">

    {{-- ajax data insert --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

    {{-- light box css and js file link --}}
    <link rel="stylesheet" href="{{ asset('asset/css/lightbox.min.css') }}">
    <script src="{{ asset('asset/js/lightbox-plus-jquery.min.js') }}"></script>

    {{-- scroller in about page css file link --}}
    <link rel="stylesheet" href="{{ asset('asset/css/about_scroller.css') }}">
    
</head>

<body>
    <div class="lines">

        <div class="header_top sticky">
            <div class="container header_container">
                <div class="header_top-wrapper">
                    <div class="header_logo">
                        <a href="{{ url('/') }}">
                            {{-- <img src="{{ asset('asset/images/Logo.svg') }}" alt="Dioneapp Logo"> --}}
                            <img src="{{ asset('asset/images/final-logo.svg') }}" alt="Dioneapp Logo">
                        </a>
                    </div>
                    <div class="menu_burger">
                        <span></span>
                    </div>
                    <nav class="menu">
                        <ul class="menu_list">
                            <li class="<?php if ($_SERVER['REQUEST_URI'] == '/') {
                                echo 'menu_list-item active_page';
                            } else {
                                echo 'menu_list-item';
                            } ?>">
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="menu_list-item"><a href="{{ url('/about') }}">About Us</a> </li>
                            <li class="menu_list-item"><a href="{{ url('/service') }}">Service</a> </li>
                            <li class="menu_list-item"><a href="{{ url('/portfolio') }}">Portfolio</a> </li>
                            {{-- <li class="menu_list-item"><a href="{{ url('/blog') }}">Blogs</a> </li> --}}
                            <li class="menu_list-item"><a href="{{ url('/career') }}">Career</a> </li>
                            <li class="menu_list-item"><a href="{{ url('/contactus') }}">Contact Us</a> </li>
                            {{-- <li class="menu_list-item">
                                <a href="{{ url('/contactus') }}" class="ayush">
                                    Contact Us
                                </a>
                            </li> --}}
                        </ul>
                    </nav>
                    {{-- <div class="header_top-number_wrapper">
                        <div class="number_inner">
                            <a href="{{ url('/contactus') }}" class="header_main-btn btn-header ">
                                Contact Us
                            </a>
                        </div>
                    </div> --}}

                </div>
            </div>
        </div>
    </div>
