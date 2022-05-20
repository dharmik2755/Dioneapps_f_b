<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DioneApps - Admin</title>

    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/simple-line-icons/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->

    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}">
    <!-- End plugin css for this page -->

    <!-- inject:css -->
    <!-- endinject -->

    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}" />

    {{-- font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="index.html">
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
                            <a class="dropdown-item"><i class="dropdown-item-icon icon-power text-primary"></i>Sign
                                Out</a>
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
        <li class="nav-item nav-category">
            <span class="nav-link">Dashboard</span>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('dashboard') }}">
                <span class="menu-title">Dashboard</span>
                <i class="icon-screen-desktop menu-icon"></i>
            </a>
        </li>

        {{-- -------------------------------------- Home page Data --------------------------- --}}
        <li class="nav-item nav-category"><span class="nav-link">Home page</span></li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-layouts"
                aria-expanded="false" aria-controls="sidebar-layouts">
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
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about.view') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('stages.view') }}">Stages Of Work</a>
                    </li>
                </ul>
            </div>
        </li>

        {{-- -------------------------------- About page Data----------------------------------- --}}
        <li class="nav-item nav-category"><span class="nav-link">About Page</span></li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                aria-controls="ui-basic">
                <span class="menu-title">About Page</span>
                <i class="icon-layers menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('about-page') }}">About Page</a>
                    </li>
                </ul>
            </div>
        </li>
        
        {{-- ------------------------------------------------Service Page ----------------------}}
        <li class="nav-item nav-category"><span class="nav-link">Service Page</span></li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-advanced" aria-expanded="false"
                aria-controls="ui-advanced">
                <span class="menu-title">Advanced UI</span>
                <i class="icon-star menu-icon"></i>
            </a>
            <div class="collapse" id="ui-advanced">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link"
                            href="https://www.bootstrapdash.com/demo/stellar-admin/jquery/template/demo_1/pages/ui-features/dragula.html">Dragula</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link"
                            href="https://www.bootstrapdash.com/demo/stellar-admin/jquery/template/demo_1/pages/ui-features/clipboard.html">Clipboard</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link"
                            href="https://www.bootstrapdash.com/demo/stellar-admin/jquery/template/demo_1/pages/ui-features/context-menu.html">Context
                            menu</a></li>
                    <li class="nav-item"> <a class="nav-link"
                            href="https://www.bootstrapdash.com/demo/stellar-admin/jquery/template/demo_1/pages/ui-features/slider.html">Slider</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link"
                            href="https://www.bootstrapdash.com/demo/stellar-admin/jquery/template/demo_1/pages/ui-features/colcade.html">Colcade</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link"
                            href="https://www.bootstrapdash.com/demo/stellar-admin/jquery/template/demo_1/pages/ui-features/carousel.html">Carousel</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link"
                            href="https://www.bootstrapdash.com/demo/stellar-admin/jquery/template/demo_1/pages/ui-features/loaders.html">Loaders</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link"
                            href="https://www.bootstrapdash.com/demo/stellar-admin/jquery/template/demo_1/pages/ui-features/tooltips.html">Tooltip</a>
                    </li>
                </ul>
            </div>
        </li>
 
        {{------------------------------------------------------ Portfolio Page ------------------------------------------------------}}
        <li class="nav-item nav-category"><span class="nav-link">Portfolio Page</span></li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false"
                aria-controls="icons">
                <span class="menu-title">Icons</span>
                <i class="icon-globe menu-icon"></i>
            </a>
            <div class="collapse" id="icons">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link"
                            href="https://www.bootstrapdash.com/demo/stellar-admin/jquery/template/demo_1/pages/icons/mdi.html">Material</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link"
                            href="https://www.bootstrapdash.com/demo/stellar-admin/jquery/template/demo_1/pages/icons/flag-icons.html">Flag
                            icons</a></li>
                    <li class="nav-item"> <a class="nav-link"
                            href="https://www.bootstrapdash.com/demo/stellar-admin/jquery/template/demo_1/pages/icons/font-awesome.html">Font
                            Awesome</a></li>
                    <li class="nav-item"> <a class="nav-link"
                            href="https://www.bootstrapdash.com/demo/stellar-admin/jquery/template/demo_1/pages/icons/simple-line-icon.html">Simple
                            line icons</a></li>
                    <li class="nav-item"> <a class="nav-link"
                            href="https://www.bootstrapdash.com/demo/stellar-admin/jquery/template/demo_1/pages/icons/themify.html">Themify
                            icons</a></li>
                </ul>
            </div>
        </li>
        
        {{------------------------------------------------------ Career Page -------------------------------------------------------------}}
        <li class="nav-item nav-category"><span class="nav-link">Career Page</span></li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#forms" aria-expanded="false"
                aria-controls="forms">
                <span class="menu-title">Forms</span>
                <i class="icon-book-open menu-icon"></i>
            </a>
            <div class="collapse" id="forms">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link"
                            href="https://www.bootstrapdash.com/demo/stellar-admin/jquery/template/demo_1/pages/forms/basic_elements.html">Form
                            Elements</a></li>
                    <li class="nav-item"> <a class="nav-link"
                            href="https://www.bootstrapdash.com/demo/stellar-admin/jquery/template/demo_1/pages/forms/advanced_elements.html">Advanced
                            Forms</a></li>
                    <li class="nav-item"> <a class="nav-link"
                            href="https://www.bootstrapdash.com/demo/stellar-admin/jquery/template/demo_1/pages/forms/validation.html">Validation</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link"
                            href="https://www.bootstrapdash.com/demo/stellar-admin/jquery/template/demo_1/pages/forms/wizard.html">Wizard</a>
                    </li>
                </ul>
            </div>
        </li>

        {{------------------------------------------------------ CONTACT US page -------------------------------------------------------------}}
        <li class="nav-item nav-category"><span class="nav-link">CONTACT US Page</span></li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false"
                aria-controls="charts">
                <span class="menu-title">Charts</span>
                <i class="icon-chart menu-icon"></i>
            </a>
            <div class="collapse" id="charts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link"
                            href="https://www.bootstrapdash.com/demo/stellar-admin/jquery/template/demo_1/pages/charts/chartjs.html">ChartJs</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link"
                            href="https://www.bootstrapdash.com/demo/stellar-admin/jquery/template/demo_1/pages/charts/morris.html">Morris</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link"
                            href="https://www.bootstrapdash.com/demo/stellar-admin/jquery/template/demo_1/pages/charts/flot-chart.html">Flot</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link"
                            href="https://www.bootstrapdash.com/demo/stellar-admin/jquery/template/demo_1/pages/charts/google-charts.html">Google
                            charts</a></li>
                    <li class="nav-item"> <a class="nav-link"
                            href="https://www.bootstrapdash.com/demo/stellar-admin/jquery/template/demo_1/pages/charts/sparkline.html">Sparkline
                            js</a></li>
                    <li class="nav-item"> <a class="nav-link"
                            href="https://www.bootstrapdash.com/demo/stellar-admin/jquery/template/demo_1/pages/charts/c3.html">C3
                            charts</a></li>
                    <li class="nav-item"> <a class="nav-link"
                            href="https://www.bootstrapdash.com/demo/stellar-admin/jquery/template/demo_1/pages/charts/chartist.html">Chartist</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link"
                            href="https://www.bootstrapdash.com/demo/stellar-admin/jquery/template/demo_1/pages/charts/justGage.html">JustGage</a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
