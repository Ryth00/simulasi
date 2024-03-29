<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashtreme Admin - Free Dashboard for Bootstrap 4 by Codervent</title>
    <!-- loader-->
    <link href="template/assets/css/pace.min.css" rel="stylesheet" />
    <script src="template/assets/js/pace.min.js"></script>
    <!--favicon-->
    <link rel="icon" href="template/assets/images/favicon.ico" type="image/x-icon">
    <!-- Bootstrap core CSS-->
    <link href="template/assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="template/assets/css/animate.css" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="template/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <!-- Custom Style-->
    <link href="template/assets/css/app-style.css" rel="stylesheet" />

</head>

<body class="bg-theme bg-theme1">

    <!-- start loader -->
    <div id="pageloader-overlay" class="visible incoming">
        <div class="loader-wrapper-outer">
            <div class="loader-wrapper-inner">
                <div class="loader"></div>
            </div>
        </div>
    </div>
    <!-- end loader -->

    <!-- Start wrapper-->
    <div id="wrapper">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="card card-authentication1 mx-auto my-4">
                <div class="card-body">
                    <div class="card-content p-2">
                        <div class="text-center">
                            <img src="template/assets/images/logo-icon.png" alt="logo icon">
                        </div>
                        <div class="card-title text-uppercase text-center py-3">Sign Up</div>


                        <div class="form-group">
                            <label for="name" class="sr-only">Name</label>
                            <div class="position-relative has-icon-right">
                                <input type="text"
                                    class="form-control  form-control-user   @error('name') is-invalid   @enderror"
                                    id="name" placeholder="Full Name" required name="name" value="{{old('name')}}">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                                <div class="form-control-position">
                                    <i class="icon-user"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <div class="position-relative has-icon-right">
                                <input type="email"
                                    class="form-control form-control-user @error('email') is-invalid @enderror"
                                    id="email" placeholder="Enter Your Email" required name="email"
                                    value="{{old('email')}}">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                                <div class="form-control-position">
                                    <i class="icon-envelope-open"></i>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="password" class="sr-only">Password</label>
                            <div class="position-relative has-icon-right">
                                <input type="password"
                                    class="form-control form-control-user @error('password') is-invalid @enderror"
                                    id="password" placeholder="Enter Your Password" required name="password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                                <div class="form-control-position">
                                    <i class="icon-lock"></i>
                                </div>
                            </div>
</div>
                            <div class="position-relative has-icon-right">
                                <input type="password" class="form-control form-control-user" id="password-confirm"
                                    placeholder="Repeat Password" required name="password_confirmation">
                                                                    <div class="form-control-position">
                                                                        <i class="icon-lock"></i>
                                                                    </div>
                            </div>
</div>
                        <div class="form-group">
                            <label for="nik" class="sr-only">NIK</label>
                            <div class="position-relative has-icon-right">
                                <input type="text"
                                    class="form-control form-control-user @error('nik') is-invalid @enderror" id="nik"
                                    placeholder="Enter Your NIK" required name="nik" value="{{old('nik')}}">
                                @error('nik')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror 
                                <div class="form-control-position">
                                    <i class="icon-"></i>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="telp" class="sr-only">No Telp</label>
                            <div class="position-relative has-icon-right">
                                <input type="telp"
                                    class="form-control form-control-user @error('telp') is-invalid @enderror" id="telp"
                                    placeholder="Enter Your Telephone Number" required name="telp"
                                    value="{{old('telp')}}">
                                @error('telp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                                <div class="form-control-position">
                                    <i class="icon-"></i>
                                </div>
                            </div>



                            <div class="form-group">
                                <div class="icheck-material-white">
                                    <input type="checkbox" id="user-checkbox" checked="" />
                                    <label for="user-checkbox">I Agree With Terms & Conditions</label>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-light btn-block waves-effect waves-light">Sign
                                Up</button>

        </form>
    </div>
    </div>
    <div class="card-footer text-center py-3">
        <p class="text-warning mb-0">Already have an account? <a href="{{route('login')}}"> Sign In here</a></p>
    </div>
    </div>

    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->

    <!--start color switcher-->
    <div class="right-sidebar">
        <div class="switcher-icon">
            <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
        </div>
        <div class="right-sidebar-content">

            <p class="mb-0">Gaussion Texture</p>
            <hr>

            <ul class="switcher">
                <li id="theme1"></li>
                <li id="theme2"></li>
                <li id="theme3"></li>
                <li id="theme4"></li>
                <li id="theme5"></li>
                <li id="theme6"></li>
            </ul>

            <p class="mb-0">Gradient Background</p>
            <hr>

            <ul class="switcher">
                <li id="theme7"></li>
                <li id="theme8"></li>
                <li id="theme9"></li>
                <li id="theme10"></li>
                <li id="theme11"></li>
                <li id="theme12"></li>
                <li id="theme13"></li>
                <li id="theme14"></li>
                <li id="theme15"></li>
            </ul>

        </div>
    </div>
    <!--end color switcher-->

    </div><!--wrapper-->

    <!-- Bootstrap core JavaScript-->
    <script src="template/assets/js/jquery.min.js"></script>
    <script src="template/assets/js/popper.min.js"></script>
    <script src="template/assets/js/bootstrap.min.js"></script>

    <!-- sidebar-menu js -->
    <script src="template/assets/js/sidebar-menu.js"></script>

    <!-- Custom scripts -->
    <script src="template/assets/js/app-script.js"></script>

</body>

</html>