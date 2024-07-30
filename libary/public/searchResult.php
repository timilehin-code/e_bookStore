<title>Search result</title>

<?php
include '../includes/header.php';
require '../processors/searchResult.php';
?>

<style>
    .page-numbers{
        padding:0  20px;
    }
</style>
<div class="container">

 
    <div class="text-center mt-2">
        <h3 class="text-dark">Search result for '<span class="text-info">
                <?php echo $fetchTitle['bookName'] ?>
            </span>'</h3>
    </div>
    <div class="row mt-3 p-3 ">
        <?php
        if ($queryBooks->num_rows > 0) {
            while ($RowBooks = $queryBooks->fetch_assoc()) {
                ?>
                <div class="col-md-4 mt-3 card-content">
                    <div class="books-card">
                        <div class="text-right">
                            <div class="d-flex">
                                <div class="d-flex">
                                    <img src="../uploads/pictures/<?php echo $RowBooks['bookCover'] ?>" alt="" height="350">
                                    <div class="description">
                                        <p class="text-right mx-3 anim-1">
                                            <?php echo $RowBooks['bookDesc'] ?>
                                        </p>
                                        <p class="text-right mx-3 anim-2"><strong><span>Book Pages :</span></strong> 206</p>
                                        <p class="text-right mx-3 anim-3"><strong><span> category :</span></strong>
                                            <?php echo $RowBooks['categoryName'] ?>
                                        </p>
                                        <p class="text-right mx-3 anim-4"><strong><span> Price :</span></strong> &#8358;
                                            2500</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container title">
                            <hr>
                            <h5 class="book-title text-center">
                                <?php echo $RowBooks['bookName'] ?>
                            </h5>
                            <p class="text-center">by:
                                <?php echo $RowBooks['authorName'] ?>
                            </p>
                            <div class="text-center">
                                <a href="../uploads/pdf/<?php echo $RowBooks['bookFile'] ?>" class="text-center btn btn-info"
                                    download>
                                    Download
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </div>
    <!-- page info -->
    <div class="page-info ">
        <p class="text-center">
            showing 1 of
            <?php echo $pages ?> Pages


        </p>
    </div>
    <div class="paginations d-flex">
        <a href="page-nr=1">First</a>
        <?php
        if (isset($_GET['page-nr']) && $_GET['page-nr'] > 1) {
            ?>
            <a href="?page-nr=<?php echo $_GET['page-nr'] - 1 ?>">Previous</a>
            <?php
        } else {
            ?>
            <a href="#">Previous</a>
            <?php
        }
        ?>
        <div class="page-numbers ">
           <?php
            for($i=1 ; $i<= $pages; $i++ ){
                   ?>
                   <a href="?search=<?php echo $fetchTitle['bookName'] ?>?page-nr=<?php echo $i?>">
                    <?php
                    echo $i;
                    ?>
                </a>
                   <?php 
            }
           ?>
        </div>
        <?php
        if (!isset($_GET['page-nr']) ) {
            ?>
            <a href="?search=<?php echo $fetchTitle['bookName'] ?>&page-nr=2">Next</a>
            <?php
        } else {
            if ($_GET['page-nr'] >= $pages) {
                ?>
                <a>Next</a>
                <?php
            } else {
                ?>
                <a href="?search=? <?php echo $fetchTitle['bookName'] ?>&page-nr=<?php echo $_GET['page-nr'] + 1 ?>">Next</a>
                <?php
            }
        }
        ?>
        <!-- // <a href="?page-nr =<?php echo $pages ?>">Last</a> -->
    </div>
 
</div>

<?php




include '../includes/footer.php';
?>