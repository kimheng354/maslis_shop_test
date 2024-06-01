<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Maslis Shop . | Log-In</title>
    <link rel="icon" href="{{ asset('frontend/img/icon/male-clothes.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <style>
        .login-card {
            max-width: 350px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Maintain border for button */
        .btn-primary {
            border: 1px solid #0d6efd;
            /* Customize button border color */
        }

        .my_name {
            color: #0d6efd;
            font-size: large;
            text-transform: uppercase;
        }
    </style>
</head>

<body style="background: rgb(232, 243, 243)">
    <section class="p-5">
        <div class="container">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-md-6">
                    <div class="card login-card">
                        <div class="card-title text-center my_name"><strong>Malis Shop</strong> | <sup>Log In</sup>
                        </div>
                        @component('components.success_singin')
                        @endcomponent
                        <hr>
                        <div class="card-body ">
                            <form action="{{ route('authlogin.submit') }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="username" class="form-label">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror "
                                        id="email" name="email" placeholder="Enter email">
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror

                                    @if ($errors->has('unauthorized'))
                                        <span class="text-danger">{{ $errors->first('unauthorized') }}</span>
                                    @endif

                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        id="password" name="password" placeholder="Password">
                                    @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="rememberMe">
                                        <label class="form-check-label" for="rememberMe">Remember Me</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
