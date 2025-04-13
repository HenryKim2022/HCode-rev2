<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Recover Password | Velonic - Bootstrap 5 Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully responsive admin theme which can be used to build CRM, CMS, ERP etc." name="description" />
    <meta content="Techzaa" name="author" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('template/assets/images/favicon.ico') }}?v={{ time() }}">
    <!-- Theme Config Js -->
    <script src="{{ asset('template/assets/js/config.js') }}?v={{ time() }}"></script>
    <!-- App css -->
    <link href="{{ asset('template/assets/css/app.min.css') }}?v={{ time() }}" rel="stylesheet" type="text/css" id="app-style" />
    <!-- Icons css -->
    <link href="{{ asset('template/assets/css/icons.min.css') }}?v={{ time() }}" rel="stylesheet" type="text/css" />
</head>

<body class="authentication-bg">

    <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5 position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-8 col-lg-10">
                    <div class="card overflow-hidden">
                        <div class="row g-0">
                            <div class="col-lg-6 d-none d-lg-block p-2">
                                <img src="{{ asset('template/assets/images/auth-img.jpg') }}?v={{ time() }}" alt="" class="img-fluid rounded h-100">
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex flex-column h-100">
                                    <div class="auth-brand p-4">
                                        <a href="{{ url('/') }}" class="logo-light">
                                            <img src="{{ asset('template/assets/images/logo.png') }}?v={{ time() }}" alt="logo" height="22">
                                        </a>
                                        <a href="{{ url('/') }}" class="logo-dark">
                                            <img src="{{ asset('template/assets/images/logo-dark.png') }}?v={{ time() }}" alt="dark logo" height="22">
                                        </a>
                                    </div>
                                    <div class="p-4 my-auto">
                                        <h4 class="fs-20">Forgot Password?</h4>
                                        <p class="text-muted mb-3">
                                            {{ __('Enter your email address and we will send you a password reset link that will allow you to choose a new one.') }}
                                        </p>

                                        <!-- Session Status -->
                                        @if (session('status'))
                                            <div class="alert alert-success text-center" role="alert">
                                                {{ session('status') }}
                                            </div>
                                        @endif

                                        <!-- Laravel Breeze Form -->
                                        <form method="POST" action="{{ route('password.email') }}">
                                            @csrf

                                            <!-- Email Address -->
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email Address</label>
                                                <input class="form-control" type="email" id="email" name="email"
                                                    value="{{ old('email') }}" required autofocus
                                                    placeholder="Enter your email">
                                                @error('email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="mb-0 text-start">
                                                <button class="btn btn-soft-primary w-100" type="submit">
                                                    <i class="ri-loop-left-line me-1 fw-bold"></i>
                                                    <span class="fw-bold">Send Password Reset Link</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <p class="text-dark-emphasis">Back To <a href="{{ route('login') }}"
                            class="text-dark fw-bold ms-1 link-offset-3 text-decoration-underline"><b>Log In</b></a></p>
                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <span
                        class="float-md-left d-block d-md-inline-block mt-25 text-sm-center text-md-center text-center">
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a class="ml-25" href="{{ config('app.url') }}" target="_blank">{{ env('APP_ALIAS') }}</a>
                        <span class="d-none d-sm-inline-block">, All rights Reserved</span>
                    </span>
                    <span class="float-md-right d-none d-md-block">Developed by {{ env('APP_DEV') }}</span>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->


    <!-- Vendor js -->
    <script src="{{ asset('template/assets/js/vendor.min.js') }}?v={{ time() }}"></script>

    <!-- App js -->
    <script src="{{ asset('template/assets/js/app.min.js') }}?v={{ time() }}"></script>

</body>

</html>
