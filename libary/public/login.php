<?php
require '../processors/registration.php';
require '../processors/login.php';
if (isset($_GET['usererr'])) {
    $msg = '<div class="alert-red mt-3 w-50 text-center p-3 text-light">Email or user name already exist </div>';
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Registration to become an author sign in form</title>
</head>


<body>
    <div class="container">
        <div class="form-width">
            <?php echo $msg ?>
        </div>
    </div>
    <div class="container main mt-5" id="container">
        <!-- registration form -->
        <div class="form-container sign-up-container">
            <form action="" class="rs_form" method="post">

                <h1 class="fw-bold">Create Account</h1>
                <input type="text" placeholder="Name" name="authorName" id="authorName" class="form-control mt-3" />
                <input type="text" placeholder="User Name" name="authorUserName" id="authorUserName"
                    class="form-control mt-3" />
                <input type="email" placeholder="Email" name="authorMail" id="authorMail" class="form-control mt-3" />
                <input type="password" name="authorPassword" id="authorPassword" placeholder="Password"
                    class="form-control mt-3" />
                <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm  Password"
                    class="form-control mt-3" />
                <button class="btn btn-info mt-3" type="submit" name="register"> Sign Up</button>
            </form>
        </div>
        <!-- registration ends -->
        <!-- log in form -->
        <div class="form-container sign-in-container">
            <form action="" class="rs_form" method="post">
                <h1 class="fw-bold">Sign in</h1>
                <input type="text" name="authorMail" placeholder="Email or user Name" class="form-control mt-3 " />
                <input type="password" name="authorPasswords" placeholder="Password" class="form-control mt-3" />
                <a href="#" class="text-dark text-decoration-none mt-2 p-2 forgot">Forgot your password?</a>
                <button class="btn btn-info" type="submit" name="logIn">Sign In</button>
            </form>
            <!-- log in form ends -->
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <img src="../assets/img/objects/logo-3.png" class="p-3 m-logo" width="350" alt="">
                    <h1 class="text-light fw-bold">Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost btn btn-info" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <img src="../assets/img/objects/logo-3.png" class="p-3 m-logo" width="350" alt="">

                    <h1 class="text-light fw-bold">Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost btn-info btn custom-btn" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/js/bootstrap.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
</body>

</html>