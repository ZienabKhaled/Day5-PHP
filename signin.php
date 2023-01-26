<?php
require "signinLogic.php";
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Sign In</title>
</head>

<body style="background-color: #FFF2F2;">
    <div>
        <div class="container mt-5">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong rounded-0">
                        <div class="card-body">
                            <h1 style="margin-left:180px">Sign In</h1>
                            <div class="card-body">
                                <form action="signin.php" method="POST">
                                    <h4><label for="email">Email</label></h4><br>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Please Enter Your Email Address" style="height:40px;"><br>
                                    <h4><label for="password">Password</label></h4><br>
                                    <input type="password" class="form-control" id="pass" name="pass" placeholder="Password length is 8 characters or more " style="height:40px;"><br>
                                    <div class="container ">
                                        <div class="row">
                                            <input type="submit" name="signin" value="Sign In" class="btn" style="border-raduis:10px; font-size:30px; background-color:#EAC7C7 " />
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div style="text-align:center">
                                <h5 class="mb-0">Don't have an account? <a href="signup.php" class="text-black-50 fw-bold" style="color:#EAC7C7 ;">Create account</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </section>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>