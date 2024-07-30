<?php
require '../config/conn.php';

if (isset($_POST['logIn'])) {
    $authorMail = $conn->real_escape_string($_POST['authorMail']);
    $authorPasswords = $conn->real_escape_string($_POST['authorPasswords']);

    $selectAuthor = "SELECT * FROM authors WHERE authorMail  = '$authorMail' || authorUserName = '$authorMail'";
    $queryAuthor = $conn->query($selectAuthor);
    $rowAuthor = $queryAuthor->fetch_assoc();
    $hashedPassword = $rowAuthor['authorPassword'];
    if ($queryAuthor->num_rows === 1) {
        if (password_verify($authorPasswords, $hashedPassword)) {
            session_start();
            $_SESSION['Login'] = "Yes";
            $_SESSION['authorId'] = $rowAuthor['authorId'];
            $_SESSION['authorName'] = $rowAuthor['authorName'];
            $_SESSION['authorUserName'] = $rowAuthor['authorUserName'];
            $_SESSION['authorMail'] = $rowAuthor['authorMail'];
            header('location:../public/authorDash.php?authorId='.$_SESSION['authorId'].'');
        } else {
            $msg = '<div class="text-center alert alert-danger">INCORRECT LOGIN DETAILS ! </div>';
        }
    } else {
        $msg = '<div class="text-center alert alert-danger">INCORRECT LOGIN DETAILS ! </div>';

    }
}
