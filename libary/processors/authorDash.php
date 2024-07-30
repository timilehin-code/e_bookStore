<?php
require '../config/conn.php';
if (!empty($authorId = $_GET['authorId'])) {
    $authorId = $_GET['authorId'];
    $selectAuthor = "SELECT * FROM  authors  WHERE authors.authorId = '$authorId'";
    $queryAuthor = $conn->query($selectAuthor);
    $rowAuthor = $queryAuthor->fetch_assoc();

    if ($rowAuthor == true) {
        $SelectBooks = "SELECT * FROM book INNER JOIN bookinfo ON book.book_Id = bookinfo.bookId INNER JOIN authors ON bookinfo.authorId = authors.authorId INNER JOIN category ON book.categoryId = category.categoryId WHERE authors.authorId ='$authorId'";
        $queryBooks = $conn->query($SelectBooks);
        
        $bookNumber = $queryBooks->num_rows;
    }
} else {
    header('location:../public/404.php');
}