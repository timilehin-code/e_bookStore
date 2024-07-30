<?php
require '../config/conn.php';
$msg = '';
$queryAuthor = '';
if (isset($_POST['register'])) {
    $authorName = $conn->real_escape_string($_POST['authorName']);
    $authorUserName = $conn->real_escape_string($_POST['authorUserName']);
    $authorMail = $conn->real_escape_string($_POST['authorMail']);
    $authorPassword = $conn->real_escape_string($_POST['authorPassword']);
    $confirmPassword = $conn->real_escape_string($_POST['confirmPassword']);
    $hashedPassword = $conn->real_escape_string(password_hash($authorPassword, PASSWORD_DEFAULT));
    $checkEmail = mysqli_query($conn, "SELECT * FROM authors WHERE authorMail ='$authorMail' AND authorUserName = '$authorUserName'");
    if ($checkEmail->num_rows > 0) {
        header('location:../public/login.php?usererr='.$msg);
        $msg = '';
    }else{
        if ($authorPassword === $confirmPassword) {
            $insertAuthor = "INSERT INTO authors(authorName,authorUserName,authorMail,authorPassword)VALUES('$authorName','$authorUserName','$authorMail','$hashedPassword')";
            $queryAuthor = $conn->query($insertAuthor);
            $authorId = $conn->insert_id;
        }
    }
  
    if ($queryAuthor == TRUE) {
        header('location:../public/authorDash.php?authorId=' . $authorId);
    }
}