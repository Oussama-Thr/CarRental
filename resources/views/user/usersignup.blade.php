@extends('adminpanel/navbar')
@section('content')
<!-- DESIGNING OF THE PAGE-->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
    <style>
        body {
                height: 100vh;
                overflow: visible;
            }
        .footer {
            /* position: fixed; */
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #d1f2eb;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>
    <!-- connect navbar-->

    <!-- HTML bootstrap design -->
    <div class="container">
        <!-- Heading of page -->
        <div class="content-wrapper">
            @if(session()->has('message'))
            <div class="alert alert-info">
                {{session()->get('message')}}
            </div>
            @endif

            <h1 class="text-center fw-bold mt-4" style="color: green; font-family: 'Montserrat', sans-serif;">SIGN UP AS USER</h1>
            <form action="{{url('/')}}/usersignup" method="post">
                @csrf
                @method('POST')
                <div class="row">
                    <!-- Name box-->
                    <div class="col-md-6 mb-3">
                        <label for="Name" class="form-label fw-bold">Name</label>
                        <input type="text" maxlength="30" class="form-control" id="Name" name="Name" aria-describedby="nameHelp" required="required">
                    </div>
                    <!--pohone num box-->
                    <div class="col-md-6 mb-3">
                        <label for="phone_number" class="form-label fw-bold">Phone number</label>
                        <input type="tel" class="form-control" id="phone_number" name="phone_number" aria-describedby="phoneHelp" required="required">
                        <div id="phoneHelp" maxlength="15" class="form-text">Enter a valid phone number</div>
                    </div>
                    <!--Reference box-->
                    <div class="col-md-6 mb-3">
                        <label for="address" class="form-label fw-bold">Address</label>
                        <input type="text" maxlength="50" class="form-control" id="address" name="address" aria-describedby="address" required="required">
                        <div id="address" maxlength="50" class="form-text">Enter Address</div>
                    </div>

                    <!--Email box-->
                    <div class="col-md-6 mb-3">
                        <label for="email" class="form-label fw-bold">Email address</label>
                        <input type="email" maxlength="50" class="form-control" id="email" name="email" aria-describedby="emailHelp" required="required">
                    </div>
                    <!--username box-->
                    <div class="col-md-6 mb-3">
                        <label for="username" class="form-label fw-bold">Username</label>
                        <input type="text" maxlength="15" class="form-control" id="username" name="username" aria-describedby="usernameHelp" required="required">
                    </div>
                    <!--Password box-->
                    <div class="col-md-6 mb-3">
                        <label for="password" class="form-label fw-bold">Password</label>
                        <input type="password" maxlength="30" class="form-control" id="password" name="password" required="required">
                    </div>
                    <!--Confirm pass box-->
                    <div class="col-md-6 mb-3">
                        <label for="cpassword" class="form-label fw-bold">Confirm Password</label>
                        <input type="password" class="form-control" id="cpassword" name="cpassword" required="required">
                        <div id="cpassword" maxlength="30" class="form-text">Please enter the password again.</div>
                    </div>
                </div>
                <!--Sign up button button-->
                <div class="text-center">
                    <button type="submit" class="btn btn-primary bg-success fw-bold">Sign Up as User</button>
                </div>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
        </script>
    </div>
    <div class="footer">
        <footer>
            <div class="footer-content" style="color:black">
                <h3>Contact</h3>
                <p>
                    N° Tél : +212 620-000000 <br />
                    contact@carrental.com<br />
                    Address: Private University of Marrakech, Marrakech, Morocco <br />
                </p>
                <p style="font-weight: bold;">Copyright &copy;2024 CarRental | Designed by <span> Info 3</span></p>
        </footer>
    </div>
</body>

</html>
@stop