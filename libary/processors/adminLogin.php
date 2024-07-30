<?php
require '../config/conn.php';
if (isset($_POST['login'])) {
 $AdminMail = $conn->real_escape_string($_POST['AdminMail']);
 $passwords = $conn->real_escape_string($_POST['passwords']);

 $selectAdmin = "SELECT * FROM admins WHERE AdminMail = '$AdminMail'";
 $queryAdmin = $conn->query($selectAdmin);
 $rowAdmin = $queryAdmin->fetch_assoc();
 $hashedPassword = $rowAdmin['passwords'];
 if ($queryAdmin->num_rows === 1) {
    if (password_verify($passwords,$hashedPassword)) {
        session_start();
        $_SESSION['login'] = "yes";
        $_SESSION['AdminId'] = $rowAdmin['AdminId'];
        $_SESSION['AdminName'] = $rowAdmin['AdminName'];
        $_SESSION['AdminMail'] = $rowAdmin['AdminMail'];
        header('Location: adminDash.php?AdminId='.$_SESSION['AdminId'].'');
    }else {
        $msg = '<div class="text-center alert alert-danger">INCORRECT LOGIN DETAILS ! </div>';
    }
} else {
    $msg = '<div class="text-center alert alert-danger">INCORRECT LOGIN DETAILS ! </div>';

}
}