<?php
require "connection.php";

//Add User to DB from signup page
if (isset($_POST['signup']) || isset($_POST['name']) || isset($_POST['email']) || isset($_POST['pass'])) {
    if (!empty($_POST['name'])  && !empty($_POST['email']) && !empty($_POST['pass'])) {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $pass = mysqli_real_escape_string($conn, $_POST['pass']);

        $query = "INSERT INTO users2 (name,email,pass) VALUES ('$name','$email','$pass')";
        $query_run = mysqli_query($conn, $query);

        if ($query_run) {
            $_SESSION['message'] = 'Sign up Success!';
            header("Location:signin.php");
            exit(0);
        } else {
            $_SESSION['message'] = 'Sign up Failed, try again!';
            header("Location:signup.php");
            exit(0);
        }
    }else {
        $_SESSION['message'] = 'Sign up Failed, try again!';
        header("Location:signup.php");
        exit(0);
    }
}


?>