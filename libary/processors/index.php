<?php
require 'config/conn.php';
if (isset($_POST['submit'])) {
    $search = $conn->real_escape_string($_POST['search']);

    $selectSearch = "SELECT * FROM book WHERE book.bookName ='$search'";
    $querySearch = $conn->query($selectSearch);
    $fetchSearch = $querySearch->fetch_assoc();

    if ($fetchSearch > 0) {
        header('location:public/searchResult.php?search='. $search.'');
    }else{
        header('location:../public/404.php');
    }
}
?>