<?php
require '../config/conn.php';

$selectPendingBooks = "SELECT * FROM book INNER JOIN bookinfo ON book.book_Id = bookinfo.bookId INNER JOIN authors ON bookinfo.authorId = authors.authorId INNER JOIN category ON book.categoryId = category.categoryId WHERE book.bookStatus ='Pending'";

$queryPendingBooks = $conn->query($selectPendingBooks);

$selectApprovedBooks =  "SELECT * FROM book INNER JOIN bookinfo ON book.book_Id = bookinfo.bookId INNER JOIN authors ON bookinfo.authorId = authors.authorId INNER JOIN category ON book.categoryId = category.categoryId WHERE book.bookStatus ='Approved'";

$queryApprovedBooks = $conn->query($selectApprovedBooks);

$selectDisapprovedBooks =  "SELECT * FROM book INNER JOIN bookinfo ON book.book_Id = bookinfo.bookId INNER JOIN authors ON bookinfo.authorId = authors.authorId INNER JOIN category ON book.categoryId = category.categoryId WHERE book.bookStatus ='Disapproved'";

$queryDisapprovedBooks = $conn->query($selectDisapprovedBooks);
