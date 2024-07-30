<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>home</title>
</head>
<body>
<!-- top nav -->
<div class="top-bar bg-light" style="overflow:hidden">
        <div class="container mt-3">
            <div class="row ">
                <div class="col-md-6 mt-2">
                    <img src="../assets/img/objects/logo-3.png" alt="" width="350">
                </div>
                <div class="col-md-6 mt-2">
                    <form action="" class="input-group mb-3" method="POST">
                        <input type="text" name="title" class="form-control"
                            placeholder="Search by Title">
                        <div class="input-group-append">
                            <button class="btn btn-info w-100" name="search" type="submit" id="emailVerifyBtn">
                                <h4 class="text-light"><i class="fa-solid fa-magnifying-glass mt-1"></i></h4>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- top nav ends -->
    <!-- main nav  -->
    <nav class="navbar navbar-expand-lg  navbar-dark bg-info">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-auto mx-auto mb-2  mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            All categories
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item ac" href="../public/categories.php?category=Adventure">Adventure</a></li>
                            <li><a class="dropdown-item" href="../public/categories.php?category=Children">Children</a></li>
                            <li><a class="dropdown-item" href="../public/categories.php?category=Crime">Crime</a></li>
                            <li><a class="dropdown-item" href="../public/categories.php?category=Erotica">Erotica</a></li>
                            <li><a class="dropdown-item" href="../public/categories.php?category=Fantasy">Fantasy</a></li>
                            <li><a class="dropdown-item" href="../public/categories.php?category=History">History</a></li>
                            <li><a class="dropdown-item" href="../public/categories.php?category=Horror">Horror</a></li>
                            <li><a class="dropdown-item" href="../public/categories.php?category=Mystery">Mystery</a></li>
                            <li><a class="dropdown-item" href="../public/categories.php?category=Religion">Religion</a></li>
                            <li><a class="dropdown-item" href="../public/categories.php?category=Romance">Romance</a></li>
                            <li><a class="dropdown-item" href="../public/categories.php?category=Sci-fi">Sci-fi</a></li>
                            <li><a class="dropdown-item" href="../public/categories.php?category=young adult">young adult</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Authors
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item ac" href="#">Authors</a></li>
                            <li><a class="dropdown-item" href="#">Authors details</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#" tabindex="-1">Best selling</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#" tabindex="-1">Contact </a>
                    </li>
                    <li class="d-flex nav-item">
                        <a href="public/login.php" class="nav-link active mb-auto mx-auto   ">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- main nav ends -->
    <script type="text/javascript">
        $(document).ready(function () {
            // Send Search Text to the server
            $("#search").keyup(function () {
                let searchText = $(this).val();
                if (searchText != "") {
                    $.ajax({
                        url: "../processors/action.php",
                        method: "post",
                        data: {
                            query: searchText,
                        },
                        success: function (response) {
                            $("#show-list").html(response);
                        },
                    });
                } else {
                    $("#show-list").html("");
                }
            });
            // Set searched text in input field on click of search button
            $(document).on("click", "a", function () {
                $("#search").val($(this).text());
                $("#show-list").html("");
            });
        });
    </script>