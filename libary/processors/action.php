<?php
require '../config/conn.php';
if (isset($_POST['query'])) {
    $inputText = $_POST['query'];
    $query = "SELECT bookName FROM book WHERE bookName LIKE '%$inputText%'";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<a href="#" class="list-group-item list-group-item-action border-1">' . $row['bookName'] . '</a>';
        }
    } else {
        echo '<p class="list-group-item border-1">No Record</p>';
    }
}
?>