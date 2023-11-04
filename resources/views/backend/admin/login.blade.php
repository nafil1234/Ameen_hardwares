<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset('assets/login/images/icons/favicon.ico') }}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/login/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/login/vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/login/vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/login/vendor/animsition/css/animsition.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/login/vendor/select2/select2.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/login/vendor/daterangepicker/daterangepicker.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/login/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/login/css/main.css') }}">
    <!--===============================================================================================-->

    <!--Toastr CSS -->
    <link rel="stylesheet" href="{{ asset('assets/js/toastr/toastr.css') }}" />

</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form-title"
                    style="background-image: url({{ asset('assets/login/images/bg-01.jpg') }});">
                    <span class="login100-form-title-1">
                        Sign In
                    </span>
                </div>

                <form action="{{ route('loginstore') }}" class="login100-form validate-form" name="adminlogin"
                    id="adminlogin" method="POST">
                    @csrf
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                        <span class="label-input100">Email Id</span>
                        <input class="input100" type="email" name="txtEmailId" id="txtEmailId"
                            placeholder="Enter email">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" name="password" id="password"
                            placeholder="Enter password">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="flex-sb-m w-full p-b-30">
                        {{-- <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                            <label class="label-checkbox100" for="ckb1">
                                Remember me
                            </label>
                        </div> --}}

                        <div>
                            <a href="#" class="txt1">
                                Forgot Password?
                            </a>
                        </div>
                    </div>

                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--===============================================================================================-->
    <script src="{{ asset('assets/login/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('assets/login/vendor/animsition/js/animsition.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('assets/login/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('assets/login/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('assets/login/vendor/select2/select2.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('assets/login/vendor/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('assets/login/vendor/daterangepicker/daterangepicker.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('assets/login/vendor/countdowntime/countdowntime.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('assets/login/js/main.js') }}"></script>

    <!-- Jquery JS-->
    <script src="{{ asset('assets/js/jquery/jquery.min.js') }}"></script>

    <!-- JS -->
    <script type="text/javascript" src="{{ asset('assets/js/toastr/toastr.min.js') }}"></script>
    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'info':
                    toastr.info(" {{ Session::get('message') }} ");
                    toastr.options = {
                        "closeButton": true,
                        "progressBar": true
                    }
                    break;
                case 'success':
                    toastr.success(" {{ Session::get('message') }} ");
                    toastr.options = {
                        "closeButton": true,
                        "progressBar": true,
                    }
                    break;
                case 'warning':
                    toastr.warning(" {{ Session::get('message') }} ");
                    toastr.options = {
                        "closeButton": true,
                        "progressBar": true
                    }
                    break;
                case 'error':
                    toastr.error(" {{ Session::get('message') }} ");
                    toastr.options = {
                        "closeButton": true,
                        "progressBar": true
                    }
                    break;
            }
        @endif
    </script>
    <script src="{{ asset('assets/js/toastr/toastr.js') }}"></script>
    <script src="{{ asset('assets/js/toastr/ui-toasts.js') }}"></script>

    <!---- Jquery Validation ---->
    <script src="{{ asset('assets/js/jquery/jquery.validate.min.js') }}"></script>

    <script src="{{ asset('assets/js/backend/login.js') }}"></script>


</body>

</html>
