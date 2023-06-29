<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}">
    <title>Alumni Portal</title>
    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }

        .h-custom {
            height: calc(100% - 73px);
        }

        @media (max-width: 450px) {
            .h-custom {
                height: 100%;
            }
        }
    </style>
</head>

<body>
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                        class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    {{-- <div class="form-outline mb-4">
                        @if ($errors->any())
                            <div class="alert alert-danger border-left-danger" role="alert">
                                <ul class="pl-4 my-2">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div> --}}
                    <form method="post" autocomplete="off" action="{{ route('graduate_registration') }}">
                        @csrf
                        <div class="form-outline mb-4">
                            <input type="text" required name="first_name" id="form3Example1"
                                class="form-control form-control-lg" autocomplete="off"
                                placeholder="Enter your first name" />
                            <label class="form-label" for="form3Example1">First name</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="text" required name="middle_name" id="form3Example2"
                                class="form-control form-control-lg" autocomplete="off"
                                placeholder="Enter your middle name" />
                            <label class="form-label" for="form3Example2">Middle Name</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="text" required name="last_name" id="form3Example6"
                                class="form-control form-control-lg" autocomplete="off"
                                placeholder="Enter your last name" />
                            <label class="form-label" for="form3Example6">last name</label>
                        </div>

                        <!-- Email input -->
                        @error('email')
                            <div style="color:red;">{{ $message }}</div>
                        @enderror
                        <div class="form-outline mb-4">
                            <input type="email" name="email" id="email_" autocomplete="off"
                                placeholder="Enter a valid email address" value="{{ old('email') }}"
                                class="form-control form-control-lg @error('email') is-invalid @enderror" />
                            <label class="form-label" for="email_">Email address</label>
                        </div>


                        @error('password')
                            <div style="color:red;">{{ $message }}</div>
                        @enderror
                        <div class="form-outline mb-3">
                            <input type="password" name="password" id="password"
                                class="form-control form-control-lg @error('password') is-invalid @enderror"
                                autocomplete="off" placeholder="Enter password" />
                            <label class="form-label" for="password">Password</label>
                        </div>

                        <span id='message'></span>
                        <div class="form-outline mb-3">
                            <input id="confirm_password" type="password" class="form-control form-control-lg"
                                name="confirm_password" placeholder="Confirm Password" autocomplete="new-password"
                                required>
                            <label class="form-label" for="confirm_password">Confirm Password</label>
                        </div>
                        <div class="text-center text-lg-end mt-4 pt-2">
                            <button type="submit" class="btn btn-primary btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account? <a
                                    href="{{ url('login') }}" class="link-danger">Login</a></p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div
            class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
            <!-- Copyright -->
            <div class="text-white mb-3 mb-md-0">
                Copyright © 2023. All rights reserved.
            </div>
            <!-- Copyright -->

            <!-- Right -->
            <div>
                <a href="#!" class="text-white me-4">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#!" class="text-white me-4">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#!" class="text-white me-4">
                    <i class="fab fa-google"></i>
                </a>
                <a href="#!" class="text-white">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
            <!-- Right -->
        </div>
    </section>


    <script src="{{ asset('js/mdb.min.js') }}"></script>
</body>
<script src="https://code.jquery.com/jquery-3.7.0.min.js"
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script>
    $('#password, #confirm_password').on('keyup', function() {
        if ($('#password').val() == $('#confirm_password').val()) {
            $('#message').html('Password Matched').css('color', 'green');
        } else
            $('#message').html('Password Not Matching').css('color', 'red');
    });
</script>

</html>
