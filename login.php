<?php

session_start();
include("db.php");
include("insert.php");

//$user_data = check_login($conn)

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    /// when something is posted thus a user registers 
    $email = $_POST['Email'];
    $phone = $_POST['Phone'];
    $$password = $_POST['Password'];

    ////checking if not empty (signup)
    if(!empty($email) && !empty($phone) && !empty($password))
    {
        $query = "insert into users (Email,Phone,Password)
        VALUES ('$emial','$phone','$password')";

        mysqli_query($conn, $query);

        header("Location: login.php");
        die; 

    }
    ///for login
    elseif(!empty($email)&& !empty($password)) 
    {
        ///read from the database
        $query = "select * from users where Email = '$email' limit 1";

        $result = mysqli_query($conn, $query);

        if($result)
        {
            if($result && mysqli_num_rows($result) > 0)
            {
               $user_data = mysqli_fetch_assoc($result);
               return $user_data;
            }
        }
        header("Location: index.php");
        die;
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="signup-css.css">
</head>

<body>
    <div class="wrapper">
        <div class="title-text">
            <div class="title login">
                Login Form</div>
            <div class="title signup">
                Signup Form</div>
        </div>
        <div class="form-container">
            <div class="slide-controls">
                <input type="radio" name="slide" id="login" checked>
                <input type="radio" name="slide" id="signup">
                <label for="login" class="slide login">Login</label>
                <label for="signup" class="slide signup">Signup</label>
                <div class="slider-tab">
                </div>
            </div>
            <div class="form-inner">
                <form action="home.php" class="login">
                    <div class="field">
                        <input type="text" placeholder="Email " required>
                    </div>
                    <div class="field">
                        <input type="password" placeholder="Password" required>
                    </div>
                    <div class="pass-link">
                        <a href="#">Forgot password?</a>
                    </div>
                    <div class="field btn">
                        <div class="btn-layer">
                        </div>
                        <input type="submit" value="Login">
                    </div>
                    <div class="signup-link">
                        Not a member? <a href="">Signup now</a></div>

                        <!--sign up part -->
                </form>
                <form action="#" method="POST" class="signup">
                    <div class="field">
                        <input type="email" name="Email" placeholder="Email" required>
                    </div>
                    <div class="field">
                        <input type="number" name="Phone" placeholder="Phone" required>
                    </div>
                    <div class="field">
                    <input type="password" name="Password" placeholder="Confirm password" required>
                    </div>
                    <div class="field">
                        <input type="password" name="Password" placeholder="Confirm password" required>
                    </div>
                    <hr>
                        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

                    <div class="field btn">
                        <div class="btn-layer">
                        </div>
                        <input type="submit" value="Signup">
                    </div>
                </form>
            </div>
        </div>
    </div>

    
    <script>
        const loginText = document.querySelector(".title-text .login");
        const loginForm = document.querySelector("form.login");
        const loginBtn = document.querySelector("label.login");
        const signupBtn = document.querySelector("label.signup");
        const signupLink = document.querySelector("form .signup-link a");
        signupBtn.onclick = (() => {
            loginForm.style.marginLeft = "-50%";
            loginText.style.marginLeft = "-50%";
        });
        loginBtn.onclick = (() => {
            loginForm.style.marginLeft = "0%";
            loginText.style.marginLeft = "0%";
        });
        signupLink.onclick = (() => {
            signupBtn.click();
            return false;
        });
    </script>



</body>

</html>
