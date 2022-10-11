<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Stellar Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet"
        href="{{ asset('assets/vendors/simple-line-icons/css/simple-line-icons.css')}}">
    <link rel="stylesheet"
        href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet"
        href="{{ asset('assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet"
        href="{{ asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon"
        href="{{ asset('assets/images/logo.png')}}" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth lock-full-bg">
                <div class="row w-100">
                    {{-- @include('alerts') --}}
           {{-- Delete Data alert --}}
           <div>
               @if (Session()->has('alert'))
               <div class="alert alert-danger" id="alert" >
                   {{-- <button type="button" class="close" data-dismiss="alert"><i class="fa fa-times"></i></button> --}}
                   <strong>Please !</strong>  {{session()->get('alert')}}
               </div>
               @endif
           </div>
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-transparent text-left p-5 text-center">
                            <img src="{{ asset('assets/images/Admin.png')}}" class="lock-profile-img" alt="img">
                            <p class="login_p" >Jaydeep Godhani</p>
                            <form class="pt-5" method="POST">
                                @CSRF
                                <div class="form-group">
                                    <label style="color: rgba(0, 255, 255, 0.63)" for="examplePassword1"><h1>Login</h1></label>
                                    <input type="text" name="username" class="form-control text-center" autocomplete="off" placeholder="Username"><br>
                                    <input type="password" name="password" class="form-control text-center" placeholder="Password">
                                </div>
                                <div class="mt-5">
                                    {{-- <a class=" font-weight-medium" href=""> --}}
                                        <input type="submit" name="login" value="Unlock" class="btn btn-success btn-fw">
                                        {{-- <button class="btn btn-outline-primary" onclick="showSwal('success-message')">Click here!</button> --}}
                                        {{-- <button type="button" class="btn btn-success btn-fw">Unlock</button> --}}
                                    {{-- </a> --}}
                                </div>
                                {{-- <div class="mt-3 text-center">
                                    <a href="#" class="auth-link text-white">Sign in using a different account</a>
                                </div> --}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('assets/vendors/js/vendor.bundle.base.js')}}">
    </script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('assets/js/misc.js')}}"></script>
    <script src="{{asset('assets/js/settings.js')}}"></script>
    <script src="{{asset('assets/js/todolist.js')}}"></script>
    <!-- endinject -->

    <!-- Custom js for this page -->
    <script src="{{ asset('assets/js/alerts.js')}}"></script>
    <script src="{{ asset('assets/js/avgrund.js')}}"></script>
    <!-- End custom js for this page -->

    {{-- script for alerts --}}
    <script>

        $("document").ready(function(){
            setTimeout(function(){
                $("div.alert").remove();
            },5000);
        });
    
    </script>
</body>

</html>
