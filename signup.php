<?php
require "signupLogic.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Sign Up</title>
</head>

<body style="background-color: #FFF2F2;">
    <div class="container mt-5 ">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong rounded-0">  
                    <div class="card-body">
                        <h1 style="margin-left:180px">Sign Up</h1>
                        <div class="card-body">
                            <form action="signup.php" method="POST">
                                <h4><label for="name">User name</label></h3><br>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Please Enter Your Name" style="height:40px;"><br>
                                    <h4><label for="name">User Email</label></h3><br>
                                        <input type="text" class="form-control" id="email" name="email" placeholder="Please Enter Your Email Address" style="height:40px;"><br>
                                        <h4><label for="password">Password</label></h3><br>
                                            <input type="password" class="form-control" id="pass" name="pass" placeholder="Password length is 8 characters or more " style="height:40px; "><br>
                                            <div class="container ">
                                                <div class="row">
                                                    <input type="submit" name="signup" value="Sign Up" class="btn" style="border-raduis:10px; font-size:30px ; background-color:#EAC7C7 ;" />
                                                </div>
                                            </div>
                            </form>
                        </div>
                        <div style="text-align:center">
                            <h5 class="align-items-center">Already have an account?<a href="signin.php" class=" fw-bold" style="color:#EAC7C7;">Sign In</a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
    </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>