<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Register | Velonic - Bootstrap 5 Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully responsive admin theme which can be used to build CRM, CMS, ERP etc." name="description" />
    <meta content="Techzaa" name="author" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('template/assets/images/favicon.ico') }}?v={{ time() }}" />
    <!-- Theme Config Js -->
    <script src="{{ asset('template/assets/js/config.js') }}?v={{ time() }}"></script>
    <!-- App css -->
    <link href="{{ asset('template/assets/css/app.min.css') }}?v={{ time() }}" rel="stylesheet" type="text/css"
        id="app-style" />
    <!-- Icons css -->
    <link href="{{ asset('template/assets/css/icons.min.css') }}?v={{ time() }}" rel="stylesheet"
        type="text/css" />
</head>

<body class="authentication-bg">

    <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5 position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-8 col-lg-10">
                    <div class="card overflow-hidden bg-opacity-25">
                        <div class="row g-0">
                            <div class="col-lg-6 d-none d-lg-block p-2">
                                <img src="{{ asset('template/assets/images/auth-img.jpg') }}?v={{ time() }}"
                                    alt="" class="img-fluid rounded h-100">
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex flex-column h-100">
                                    <div class="auth-brand p-4">
                                        <a href="{{ url('/') }}" class="logo-light">
                                            <img src="{{ asset('template/assets/images/logo.png') }}?v={{ time() }}"
                                                alt="logo" height="22">
                                        </a>
                                        <a href="{{ url('/') }}" class="logo-dark">
                                            <img src="{{ asset('template/assets/images/logo-dark.png') }}?v={{ time() }}"
                                                alt="dark logo" height="22">
                                        </a>
                                    </div>
                                    <div class="p-4 my-auto">
                                        <h4 class="fs-20">Free Sign Up</h4>
                                        <p class="text-muted mb-3">Enter your details to create an account.</p>

                                        <!-- Laravel Breeze Form -->
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf

                                            <!-- Name -->
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Full Name</label>
                                                <input class="form-control" type="text" id="name" name="name"
                                                    value="{{ old('name') }}" required autofocus autocomplete="name"
                                                    placeholder="Enter your name">
                                                @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <!-- Email Address -->
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email Address</label>
                                                <input class="form-control" type="email" id="email" name="email"
                                                    value="{{ old('email') }}" required autocomplete="username"
                                                    placeholder="Enter your email">
                                                @error('email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <!-- Password -->
                                            <div class="mb-3">
                                                <label for="password" class="form-label">Password</label>
                                                <div class="input-group input-group-merge">
                                                    <input type="password" id="password" name="password" class="form-control"
                                                        placeholder="Enter your password" autocomplete="new-password">
                                                    <div class="input-group-text" data-password="false">
                                                        <span class="password-eye"></span>
                                                    </div>
                                                </div>

                                                @error('password')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <!-- Confirm Password -->
                                            <div class="mb-3">
                                                <label for="password_confirmation" class="form-label">Confirm
                                                    Password</label>
                                                <div class="input-group input-group-merge">
                                                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control"
                                                        placeholder="Enter your password" autocomplete="new-password">
                                                    <div class="input-group-text" data-password="false">
                                                        <span class="password-eye"></span>
                                                    </div>
                                                </div>

                                                @error('password_confirmation')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="checkbox-signup">
                                                    <label class="form-check-label" for="checkbox-signup">I accept <a
                                                            class="text-muted">Terms and
                                                            Conditions</a></label>
                                                </div>
                                            </div>

                                            <div class="mb-0 d-grid text-center">
                                                <button class="btn btn-primary fw-semibold" type="submit">Sign
                                                    Up</button>
                                            </div>

                                            <div class="text-center mt-4">
                                                <p class="text-muted fs-16">Sign in with</p>
                                                <div class="d-flex gap-2 justify-content-center mt-3">
                                                    <a href="javascript: void(0);" class="btn btn-soft-primary"><i
                                                            class="ri-facebook-circle-fill"></i></a>
                                                    <a href="javascript: void(0);" class="btn btn-soft-danger"><i
                                                            class="ri-google-fill"></i></a>
                                                    <a href="javascript: void(0);" class="btn btn-soft-dark"><i
                                                            class="ri-github-fill"></i></a>
                                                </div>
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
                    <p class="text-dark-emphasis">Already have an account? <a href="{{ route('login') }}"
                            class="text-dark fw-bold ms-1 link-offset-3 text-decoration-underline"><b>Log In</b></a>
                    </p>
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
