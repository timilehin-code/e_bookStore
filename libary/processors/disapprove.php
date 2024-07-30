<?php

require '../config/conn.php';

$book_id = $_GET['book_id'];

$bookApproval = "Disapproved";

$updateStatus = "UPDATE book SET bookStatus='$bookApproval' WHERE book_id =  '$book_id'";
$queryStatus = $conn->query($updateStatus);
if ($queryStatus === TRUE) {

    header("location:../admin/adminDash.php");
}