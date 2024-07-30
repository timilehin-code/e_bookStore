<?php
require '../processors/bookUpload.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <title>Upload your ebook</title>
</head>

<body>
    <div class="container mt-5 form-width-2">
        <div class="note mt-5">
            <form action="" method="post" enctype="multipart/form-data">
                <?php echo $msg ?>
                <div class="text-center">
                    <img src="../assets/img/objects/logo-3.png" alt="" height="50">
                    <h3 class="text-info mt-2">upload a book</h3>
                </div>
                <input type="text" name="bookName" class="form-control w-100 mt-3" placeholder="name of the book">
                <select name="categoryId" id="categoryId" class="form-control w-100 mt-3" required>
                    <option value="" selected disabled>---category of the book---</option>
                  <?php
                  if ($queryCategory -> num_rows > 0) {
                    while ($rowCategory = $queryCategory->fetch_assoc()) {
                 ?>
                 <option value="<?php echo $rowCategory['categoryId'] ?>"><?php echo $rowCategory['categoryName'] ?></option>
                 <?php
                 }
                }
                 ?>
                </select>
                <div class="row">
                    <div class="col-md-6">
                        <input type="file" name="bookFile" id="bookFile" class="form-control w-100 mt-3" >
                        <label for="bookFile" class="form-control btn btn-info" style="margin-top: 53%;">upload your book</label>
                    </div>
                    <div class="col-md-6">
                        <img src="../assets/img/objects/book-defult.png" alt="" width="150"  class="previewer" id="previewer">
                        <input type="file" name="bookCover" id="bookCover" class="form-control w-100 mt-5"
                            style="display: none;"  accept="image/*" onchange="showPreview(event);">
                            <label for="bookCover" class="form-control mt-5 btn btn-info">Image of your book</label>
                    </div>
                </div>
                <textarea name="bookDesc" id="bookDesc" class="form-control mt-3 desc" cols="30" rows="10"
                    placeholder="book description"></textarea>
                    <input type="hidden"  name="authorId" id="authorId " value="<?php echo $rowAuthor['authorId'] ?>">
                <button class="btn btn-info mt-3 w-100" name="upload"  id="upload" type="submit">upload</button>
            </form>
        </div>
    </div>
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>

</html>
