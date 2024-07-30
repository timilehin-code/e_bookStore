<?php
require '../config/conn.php';
$msg = "";
$queryBookInfo = false;
if (!empty($authorId = $_GET['authorId'])) {
    $authorId = $_GET['authorId'];
    $selectAuthor = "SELECT * FROM authors WHERE authorId = '$authorId'";
    $queryAuthor = $conn->query($selectAuthor);
    $rowAuthor = $queryAuthor->fetch_assoc();
} else {
    header('location:../public/404.php');
}

$selectCategory = "SELECT * FROM category";
$queryCategory = $conn->query($selectCategory);

if (isset($_POST['upload'])) {
    $bookName = $conn->real_escape_string($_POST['bookName']);
    $categoryId = $conn->real_escape_string($_POST['categoryId']);
    $bookDesc = $conn->real_escape_string($_POST['bookDesc']);
    $authorId = $conn->real_escape_string($_POST['authorId']);
    date_default_timezone_set("Africa/Lagos");
    $dateUploaded = $conn->real_escape_string(date('M d, Y'));
    $timeUploaded = $conn->real_escape_string(date('h:i:sA'));

    // uploading of the book file begings
    $site_dir = '../uploads/pdf/';
    $checkFile = $site_dir . basename($_FILES['bookFile']['name']);
    $breakPart = pathinfo($_FILES['bookFile']['name']);
    $fileName = $breakPart['filename'];
    $fileExt = $breakPart['extension'];
    $tempfile = $_FILES['bookFile']['tmp_name'];

    // check if the file name already exist before

    if (file_exists($checkFile)) {
        $rand = rand(00, 99);
        $NewFileName = $fileName . '-' . $rand . '.' . $fileExt;
    } else {
        $NewFileName = $fileName . '.' . $fileExt;
    }
    // checking if file exist ends
    $preparedFile = '../uploads/pdf/' . $NewFileName;
    // uploading of the book ends

    // uploading of book cover picture begings
    $site_dir = '../uploads/pictures/';
    $checkFile = $site_dir . basename($_FILES['bookCover']['name']);
    $breakPart = pathinfo($_FILES['bookCover']['name']);
    $fileName = $breakPart['filename'];
    $fileExt = $breakPart['extension'];
    $tempofile = $_FILES['bookCover']['tmp_name'];

    // check if the file name already exist before

    if (file_exists($checkFile)) {
        $rand = rand(00, 99);
        $NewPicName = $fileName . '-' . $rand . '.' . $fileExt;
    } else {
        $NewPicName = $fileName . '.' . $fileExt;
    }
    // checking if file exist ends
    $preparedPic = '../uploads/pictures/' . $NewPicName;
    // uploading of the book cover picture ends

    if (move_uploaded_file($tempfile, $preparedFile) && move_uploaded_file($tempofile, $preparedPic)) {
        $insertBook = "INSERT INTO book(bookName,bookFile,categoryId,bookDesc,bookCover)VALUES('$bookName','$NewFileName','$categoryId','$bookDesc','$NewPicName')";
        $conn->query($insertBook);

        $bookId = $conn->insert_id;
        $insertBookInfo = "INSERT INTO bookinfo(bookId,authorId,dateUploaded,timeUploaded)VALUES('$bookId','$authorId','$dateUploaded','$timeUploaded')";
        $queryBookInfo = $conn->query($insertBookInfo);
    }
    if ($queryBookInfo == TRUE) {
        $msg = '<div class="alert alert-success text-center">uploading successfull</div>';

    } else {
        $msg = '<div class="alert alert-danger">uploading failed</div>';
    }
}