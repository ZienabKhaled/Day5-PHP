<?php
require 'connection.php';
//Sign in , check if user already exists
if (isset($_POST['signin']) || isset($_POST['email']) || isset($_POST['pass'])) {
    if (!empty($_POST['email']) && !empty($_POST['pass'])) {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $pass = mysqli_real_escape_string($conn, $_POST['pass']);
        $query = "SELECT * FROM users2 WHERE email='$email' AND pass='$pass'";
        $query_run = mysqli_query($conn, $query);
        if ($query_run) {
            $_SESSION['message'] = 'Login Success!';
            if (mysqli_num_rows($query_run) === 1) {
                $row = mysqli_fetch_assoc($query_run);
                if ($row['email'] === $email && $row['pass'] === $pass) {
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['user_id'] = $row['user_id'];
                    $_SESSION['pass'] = $row['pass'];
                    $_SESSION['name'] = $row['name'];

                    header("Location:welcome.php");
                    exit(0);
                }
            }
        }
    }
}
?>

<!-- else {
                    $_SESSION['message'] = 'Login Failed, try again!';
                    header("Location:signin.php");
                    exit(0);
                } -->