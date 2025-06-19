<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/logos/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}" />
</head>

<body>
<div class="page-wrapper" id="main-wrapper">
    <div class="d-flex align-items-center justify-content-center min-vh-100">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <a href="/" class="text-center d-block py-3">
                        <img src="{{ asset('assets/images/logos/Polisi.png.jpeg') }}" alt="Logo" style="width: 80px; height: auto;">
                    </a>
                    <p class="text-center">Your Social Campaigns</p>
                    <form id="registerForm">
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" id="name">
                            <small id="nameError" class="text-danger"></small>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email">
                            <small id="emailError" class="text-danger"></small>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" id="password">
                            <small id="passwordError" class="text-danger"></small>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Sign Up</button>
                        <div class="text-center mt-3">
                            <p>Already have an account? <a href="{{ url('/') }}">Sign In</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('js/register.js') }}"></script>
</body>
</html>
