<?php
$queryAdmin = "";
require '../config/conn.php';
if (isset($_POST['submit'])) {
    $AdminName = $conn->real_escape_string($_POST['AdminName']);
    $AdminMail = $conn->real_escape_string($_POST['AdminMail']);
    $passwords = $conn->real_escape_string($_POST['passwords']);
    $confirmPassword = $conn->real_escape_string($_POST['confirmPassword']);
    $hashedPassword = $conn->real_escape_string(password_hash($passwords, PASSWORD_DEFAULT));
    // $checkEmail = mysqli_query($conn, "SELECT * FROM admins WHERE AdminMail = '$AdminMail'");

    if ($passwords === $confirmPassword) {
        $insertAdmin = "INSERT INTO admins(AdminName,AdminMail,passwords) VALUES('$AdminName','$AdminMail','$hashedPassword')";
        $queryAdmin = $conn->query($insertAdmin);
    } else {
        echo '<script>alert("password does not match")</script>';
    }
    if ($queryAdmin == TRUE) {
        // echo '<script>alert("Registration successfull")</script>';
        header('Location:adminLogin.php?reg=success');

    }

}
?>