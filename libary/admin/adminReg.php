<?php
require '../processors/adminReg.php';
$msg = ' ';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Admin login for book wagon</title>
</head>

<body>
    <div class="container form-width-3 mt-3">
        <div class="note centralize">

            <form action="" method="POST">
                <div class="text-center">
                    <img src="../assets/img/objects/logo-3.png" alt="" height="40">
                </div>
                <?php
                echo $msg;
                ?>
                <input type="text" name="AdminName" id="AdminName" class="form-control w-100 mt-3" placeholder="name">
                <input type="text" name="AdminMail" id="AdminMail" class="form-control w-100 mt-3" placeholder="email">
                <input type="password" name="passwords" id="passwords" class="form-control w-100 mt-3"
                    placeholder="password">
                <input type="password" name="confirmPassword" id="confirmPassword" class="form-control w-100 mt-3"
                    placeholder="confirm password">
                <button type="submit" name="submit" class="btn btn-info w-100 mt-3">Register</button>
            </form>

        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>

</html>