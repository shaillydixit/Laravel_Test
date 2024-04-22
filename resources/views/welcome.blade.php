<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login & Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('page.css')}}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body>
    <div class="container">
    <div class="submit-button-container">
    <a type="button" class="btn btn-info mt-5" href="{{url('/registered-users')}}">Registered Users Table</a>
    </div>
        <div class="row justify-content-center">
            
            <div class="col-md-6">
                <div class="card form-container">
                    <div class="card-body">
                        <h2 class="card-title text-center">Login</h2>
                        <form id="loginForm" class="loginForm">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                            </div>
                            <div class="submit-button-container">
                                <button type="submit" id="login_button" class="btn btn-success btn-block">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card form-container">
                    <div class="card-body">
                        <h2 class="card-title text-center">Register</h2>
                        <form id="registerForm" class="registerForm">
                            <div class="mb-3">
                                <input type="text" class="form-control alphanumeric" id="name" name="name" placeholder="Name" required>
                            </div>
                            <div class="mb-3">
                                <input type="tel" class="form-control mobile" id="mobile" name="mobile" placeholder="Mobile" required>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                            </div>
                            <div class="mb-3">
                                <input type="date" class="form-control" id="dob" name="dob" placeholder="Date of Birth" required >
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" required>
                            </div>
                            <div class="submit-button-container">
                                <button type="submit" class="btn btn-success btn-block" id="submit_button">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="{{asset('page.js')}}"></script>
    <script src="{{asset('custom.js')}}"></script>

</body>
</html>
