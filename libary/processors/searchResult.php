<?php
require '../config/conn.php';
$startFrom = 0;
$booksPerPage = 3;

//Search Result for Books

if (!empty($_GET['search'])) {
  $search = $_GET['search'];
  $SelectBooks = "SELECT * FROM book INNER JOIN bookinfo ON book.book_Id = bookinfo.bookId INNER JOIN authors ON bookinfo.authorId = authors.authorId INNER JOIN category ON book.categoryId = category.categoryId  WHERE book.bookName ='$search' LIMIT $startFrom, $booksPerPage";
  $queryBooks = $conn->query($SelectBooks);
}


//Search Title
$SelectTitle = "SELECT * FROM book WHERE book.bookName ='$search'";
$queryTitle = $conn->query($SelectTitle);
$fetchTitle = $queryTitle->fetch_assoc();

$records = $conn->query("SELECT * FROM book INNER JOIN bookinfo ON book.book_Id = bookinfo.bookId WHERE book.bookName ='$search'");
$numbOfBooks = $records->num_rows;

//Get the numbers of pages
$pages = ceil($numbOfBooks / $booksPerPage);

// var_dump($_GET['page-nr']);

if (isset($_GET['page-nr'])) {
  $pages = $_GET['page-nr'] - 1;

  $startFrom = $pages * $booksPerPage;
}
; 
?>