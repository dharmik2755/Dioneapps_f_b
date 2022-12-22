<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>DioneApps - Admin</title>

    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/simple-line-icons/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->

    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/dropify/dropify.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}">
    <!-- End plugin css for this page -->

    <!-- inject:css -->
    <!-- endinject -->

    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}" />

    {{-- font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

    <!-- for active and deactive button css cdn file -->
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"  />  --}}
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
</head>

<body>
    <div class="container-scroller">
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="{{ route('dashboard.page') }}">
                    <img src="{{ asset('assets/images/logo-light.svg') }}" alt="logo-light" class="logo-light">
                    <img src="{{ asset('assets/images/header_logo.png') }}" alt="logo" class="logo-dark" />
                </a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img
                        src="{{ asset('assets/images/header_logo.png') }}" width="50%" alt="logo" /></a>
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center">
                <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Welcome DioneApps dashboard !</h5>
                <ul class="navbar-nav navbar-nav-right">
                    <form class="search-form d-none d-md-block" action="#">
                        <i class="icon-magnifier"></i>
                        <input type="search" class="form-control" placeholder="Search Here" title="Search here">
                    </form>
                    {{-- <li class="nav-item"><a href="#" class="nav-link"><i class="icon-basket-loaded"></i></a></li>
                        <li class="nav-item"><a href="#" class="nav-link"><i class="icon-chart"></i></a></li> --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator message-dropdown" id="messageDropdown" href="#"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="icon-speech"></i>
                            <span class="count">7</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0"
                            aria-labelledby="messageDropdown">
                            <a class="dropdown-item py-3">
                                <p class="mb-0 font-weight-medium float-start">You have 7 unread mails </p>
                                <span class="badge badge-pill badge-primary float-end">View all</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="{{ asset('assets/images/face10.jpg') }}" alt="image"
                                        class="img-sm profile-pic">
                                </div>
                                <div class="preview-item-content flex-grow py-2">
                                    <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                                </div>
                            </a>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="{{ asset('assets/images/face12.jpg') }}" alt="image"
                                        class="img-sm profile-pic">
                                </div>
                                <div class="preview-item-content flex-grow py-2">
                                    <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                                </div>
                            </a>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="{{ asset('assets/images/face1.jpg') }}" alt="image"
                                        class="img-sm profile-pic">
                                </div>
                                <div class="preview-item-content flex-grow py-2">
                                    <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
                        <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img class="img-xs rounded-circle ms-2" src="{{ asset('assets/images/Admin.png') }}"
                                alt="Profile image"> <span class="font-weight-normal"> Jaydeep Godhani </span></a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                            <div class="dropdown-header text-center">
                                <img class="img-md rounded-circle" src="{{ asset('assets/images/Admin.png') }}"
                                    alt="Profile image">
                                <p class="mb-1 mt-3">Jaydeep Godhani</p>
                                <p class="font-weight-light text-muted mb-0">jaydeep@gmail.com</p>
                            </div>
                            <a class="dropdown-item"><i class="dropdown-item-icon icon-user text-primary"></i> My
                                Profile <span class="badge badge-pill badge-danger">1</span></a>
                            <a class="dropdown-item"><i class="dropdown-item-icon icon-speech text-primary"></i>
                                Messages</a>
                            <a class="dropdown-item"><i class="dropdown-item-icon icon-energy text-primary"></i>
                                Activity</a>
                            <a class="dropdown-item"><i class="dropdown-item-icon icon-question text-primary"></i>
                                FAQ</a>
                            <a href="{{ url('/Logout') }}" class="dropdown-item">
                                <i class="dropdown-item-icon icon-power text-primary"></i>
                                Sign Out
                            </a>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="icon-menu"></span>
                </button>
            </div>
        </nav>

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:../../partials/_settings-panel.html -->
            <div id="settings-trigger"><i class="icon-settings"></i></div>
            <div id="theme-settings" class="settings-panel">
                <i class="settings-close icon-close"></i>
                <p class="settings-heading">SIDEBAR SKINS</p>
                <div class="sidebar-bg-options selected" id="sidebar-default-theme">
                    <div class="img-ss rounded-circle bg-dark border me-3"></div>Default
                </div>
                <div class="sidebar-bg-options" id="sidebar-light-theme">
                    <div class="img-ss rounded-circle bg-light border me-3"></div>Light
                </div>
                <p class="settings-heading mt-2">HEADER SKINS</p>
                <div class="color-tiles mx-0 px-4">
                    <div class="tiles dark"></div>
                    <div class="tiles default light"></div>
                </div>
            </div>
            <!-- partial -->
            <!-- partial:../../partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item navbar-brand-mini-wrapper">
                        <a class="nav-link navbar-brand brand-logo-mini" href="#">
                            <img src="{{ asset('assets/images/logo.png') }}" width="72%" alt="logo" /></a>
                    </li>
                    <li class="nav-item nav-profile">
                        <a href="#" class="nav-link">
                            <div class="profile-image">
                                <img class="img-xs rounded-circle" src="{{ asset('assets/images/Admin.png') }}"
                                    alt="profile image">
                                <div class="dot-indicator bg-success"></div>
                            </div>
                            <div class="text-wrapper">
                                <p class="profile-name">Jaydeep Godhani</p>
                                <p class="designation">Administrator</p>
                            </div>
                            <div class="icon-container">
                            </div>
                        </a>
                    </li>
                    {{-- ------------------------- dashoard -------------------------------- --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('dashboard') }}">
                            <span class="menu-title">Dashboard</span>
                            <i class="icon-screen-desktop menu-icon"></i>
                        </a>
                    </li>
                    {{-- ------------------------ Home page Data --------------------------- --}}
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-layouts" aria-expanded="false"
                            aria-controls="sidebar-layouts">
                            <span class="menu-title">Home Page</span>
                            <i class="icon-list menu-icon"></i>
                        </a>
                        <div class="collapse" id="sidebar-layouts">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('view.home.slider') }}"> home slider</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('development.view') }}">Development</a>
                                </li>
                                <ul>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="collapse" href="#development"
                                            aria-expanded="false" aria-controls="development">
                                            <span class="menu-title">Development Page</span>
                                        </a>
                                        <ul>
                                            <div class="collapse" id="development">
                                                <ul class="nav flex-column sub-menu">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{ route('app-title.view') }}"> App
                                                            Title
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{ route('web-title.view') }}"> Web
                                                            Title
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{ route('uiux-title.view') }}">
                                                            UI-UX Title
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link"
                                                            href="{{ route('features.view') }}">Features Development
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link"
                                                            href="{{ route('company-work-features.view') }}">Company
                                                            Work in features
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link"
                                                            href="{{ route('company-projects.view') }}">Company
                                                            projects
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </ul>
                                    </li>
                                </ul>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('stages.view') }}">Stages Of Work</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('about.view') }}">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('specialized.view') }}">We are specialized in</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('clients.view') }}">Clients Info</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    {{-- ------------------ About page Data----------------------------- --}}
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                            aria-controls="ui-basic">
                            <span class="menu-title">About Us</span>
                            <i class="icon-layers menu-icon"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('we-are-expert.view') }}">We are expert</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('project-collage.view') }}">Projects collage</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('about.expert.view') }}">About expert</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('about-counter.view') }}">About Counter Panel</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('renowned.view') }}">About Renowned</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('team-management.view') }}">Team Management</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('project.contact.view') }}">Project Contact</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    {{-- -----------------------------------Service Page -------------------- --}}
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#ui-advanced" aria-expanded="false"
                            aria-controls="ui-advanced">
                            <span class="menu-title">Service Page</span>
                            <i class="icon-star menu-icon"></i>
                        </a>
                        <div class="collapse" id="ui-advanced">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{ route('services.view') }}">Service Page Title</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{ route('our-services.view') }}">Our Service</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{ route('services-offer.view') }}">Services Offer</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    {{-- --------------------- Portfolio Page  ----------------------- --}}
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false"
                            aria-controls="icons">
                            <span class="menu-title">Portfolio Page</span>
                            <i class="icon-globe menu-icon"></i>
                        </a>
                        <div class="collapse" id="icons">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('Latest-Work.view') }}">Our Latest Creative
                                        Work</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('portfolio.view') }}">portfolio</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    {{-- --------------------- Career Page ----------------------------- --}}
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#forms1" aria-expanded="false"
                            aria-controls="forms1">
                            <span class="menu-title">Career Page</span>
                            <i class="icon-book-open menu-icon"></i>
                        </a>
                        <div class="collapse" id="forms1">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('career-title.view') }}">Career Page Title<a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('career-perks.view') }}">Career Page Perks<a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    {{-- -------------------------- CONTACT US page ------------- --}}
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false"
                            aria-controls="charts">
                            <span class="menu-title">Contact Us Page</span>
                            <i class="icon-chart menu-icon"></i>
                        </a>
                        <div class="collapse" id="charts">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('contact-information.view') }}">Contact Media
                                        Information</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('contact.view') }}">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    {{-- -------------------------- Footer ------------- --}}
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#e-commerce" aria-expanded="false"
                            aria-controls="e-commerce">
                            <span class="menu-title">Footer</span> <i class="icon-briefcase menu-icon"></i>
                        </a>
                        <div class="collapse" id="e-commerce">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('footer-first.view') }}">Footer Company
                                        Info</a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="{{ route('footer-secound.view') }}">Footer Our
                                        Services</a>
                                </li> --}}
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('footer-forth.view') }}">footer Contact
                                        Information</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('footer-fifth.view') }}">Footer social
                                        media</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    {{-- -------------------------- Footer ------------- --}}
                    <li class="nav-item nav-category">
                        <span class="nav-link">Master</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false"
                            aria-controls="tables">
                            <span class="menu-title">Master</span> <i class="icon-grid menu-icon"></i>
                        </a>
                        <div class="collapse" id="tables">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('specializ_id.view') }}">Services </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    {{-- user contact view --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.contact.view') }}">User Contact view<a>
                    </li>
                </ul>
            </nav>
