<?php
require 'processors/index.php';
?>
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
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>home</title>
</head>

<body>
    <!-- top nav -->
    <div class="top-bar bg-light">
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-6 mt-2">
                    <img src="assets/img/objects/logo-3.png" alt="" width="350">
                </div>
                <div class=" col-md-6 mt-2">
                    <form action="" class="input-group mb-3" method="POST" style="overflow:hidden;">
                        <input type="text" name="search" id="search" class="form-control" placeholder="Search by Title"
                            autocomplete="off" required>
                        <div class="input-group-append">
                            <button class="btn btn-info w-100" name="submit" type="submit" id="emailVerifyBtn">
                                <h4 class="text-light"><i class="fa-solid fa-magnifying-glass mt-1"></i></h4>
                            </button>
                        </div>
                    </form>
                    <div class="col-md-4" style="
                          position: absolute;
                            z-index: 999;
                            margin-top: -16px;
                            margin-left: -3px;">
                        <div class="list-group" id="show-list">
                            <!-- Here autocomplete list will be display -->
                        </div>
                    </div>
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
                            <li><a class="dropdown-item ac" href="#">Adventure</a></li>
                            <li><a class="dropdown-item" href="#">Children</a></li>
                            <li><a class="dropdown-item" href="#">Crime</a></li>
                            <li><a class="dropdown-item" href="#">Erotica</a></li>
                            <li><a class="dropdown-item" href="#">Fantasy</a></li>
                            <li><a class="dropdown-item" href="#">History</a></li>
                            <li><a class="dropdown-item" href="#">Horror</a></li>
                            <li><a class="dropdown-item" href="#">Mystery</a></li>
                            <li><a class="dropdown-item" href="#">Religion</a></li>
                            <li><a class="dropdown-item" href="#">Romance</a></li>
                            <li><a class="dropdown-item" href="#">Sci-fi</a></li>
                            <li><a class="dropdown-item" href="#">young adult</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button"
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
                        <a class="nav-link active" href="public/contact.php" tabindex="-1">Contact </a>
                    </li>
                    <li class="d-flex nav-item">
                        <a href="public/login.php" class="nav-link active mb-auto mx-auto   ">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- main nav ends -->
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="d-block w-100 bg-1">
                    <div class="mt-5 bg-text text-light">
                        <div class="container">
                            <h1 class="text-center">
                                Your Ultimate Plug To The Best Ebooks
                            </h1>
                            <p class="mt-5 text-center text-light">Don't know what to read next ? Explore our wide
                                rage
                                of
                                books with our editors . <br> Alot of interesting books are hidden in our library.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-block w-100 bg-2">
                    <div class="mt-5 bg-text text-light">
                        <div class="container">
                            <h1 class="text-center">
                                Free And Discounted Bestsellers
                            </h1>
                            <p class="mt-5 text-center text-light">Join our over 1000+ fellow readers and get free
                                and
                                discounted <br> bestselling books easily.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-block w-100 bg-3">
                    <div class="mt-5 bg-text text-light">
                        <div class="container">
                            <h1 class="text-center">
                                Lots Of Ebooks 100% Free
                            </h1>
                            <p class="mt-5 text-center text-light">Welcome to your friendly Ebook community, <br>
                                where
                                you can get over 1000 Ebooks to read for free </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- our genres -->
    <div class=" mt-5 container ">
        <h3 class="text-right">BROWSE GENRES </h3>
        <hr>
        <div class="d-flex">
            <div class="d-block">
                <div class="row ">
                    <div class="col-md-6 mt-3">
                        <a href="">
                            <figure class="genres">
                                <img src="assets/img/objects/adventure.jpg" alt="" width="250">
                                <div class="inner-banner">
                                    <h5 class="text-light">Adventure</h5>
                                </div>
                            </figure>
                        </a>
                    </div>
                    <div class="col-md-6 mt-3">
                        <a href="">
                            <figure class="genres">
                                <img src="assets/img/objects/children.jpg" alt="" width="250" height="150">
                                <div class="inner-banner">
                                    <h5 class="text-light">Children</h5>
                                </div>
                            </figure>
                        </a>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-6 mt-3">
                        <a href="">
                            <figure class="genres">
                                <img src="assets/img/objects/fantasy.jpg" alt="" width="250">
                                <div class="inner-banner">
                                    <h5 class="text-light">Fantasy</h5>
                                </div>
                            </figure>
                        </a>
                    </div>
                    <div class="col-md-6 mt-3">
                        <a href="">
                            <figure class="genres">
                                <img src="assets/img/objects/history.jpg" alt="" width="250" height="150">
                                <div class="inner-banner">
                                    <h5 class="text-light">History</h5>
                                </div>
                            </figure>
                        </a>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-6 mt-3">
                        <a href="">
                            <figure class="genres">
                                <img src="assets/img/objects/horror.jpg" alt="" width="250" height="150">
                                <div class="inner-banner">
                                    <h5 class="text-light">Horror</h5>
                                </div>
                            </figure>
                        </a>
                    </div>
                    <div class="col-md-6 mt-3">
                        <a href="">
                            <figure class="genres">
                                <img src="assets/img/objects/Romance.jpg" alt="" width="250" height="150">
                                <div class="inner-banner">
                                    <h5 class="text-light">Romance</h5>
                                </div>
                            </figure>
                        </a>
                    </div>
                </div>
            </div>
            <div class="d-block">
                <div class="row mx-3">
                    <div class="col-md-6 mt-3">
                        <a href="">
                            <figure class="genres">
                                <img src="assets/img/objects/crime.jpg" alt="" width="250" height="150">
                                <div class="inner-banner">
                                    <h5 class="text-light">Crime</h5>
                                </div>
                            </figure>
                        </a>
                    </div>
                    <div class="col-md-6 mt-3">
                        <a href="">
                            <figure class="genres">
                                <img src="assets/img/objects/erotica.jpg" alt="" width="250" height="150">
                                <div class="inner-banner">
                                    <h5 class="text-light">Erotica</h5>
                                </div>
                            </figure>
                        </a>
                    </div>
                </div>
                <div class="row mx-3">
                    <div class="col-md-6 mt-3">
                        <a href="">
                            <figure class="genres">
                                <img src="assets/img/objects/mystery.jpg" alt="" width="250" height="150">
                                <div class="inner-banner">
                                    <h5 class="text-light">Mystery</h5>
                                </div>
                            </figure>
                        </a>
                    </div>
                    <div class="col-md-6 mt-3">
                        <a href="">
                            <figure class="genres">
                                <img src="assets/img/objects/religion.jpg" alt="" width="250" height="150">
                                <div class="inner-banner">
                                    <h5 class="text-light">Religion</h5>
                                </div>
                            </figure>
                        </a>
                    </div>
                </div>
                <div class="row mx-3">
                    <div class="col-md-6 mt-3">
                        <a href="">
                            <figure class="genres">
                                <img src="assets/img/objects/sci-fi.jpg" alt="" width="250" height="150">
                                <div class="inner-banner">
                                    <h5 class="text-light">Sci-fi</h5>
                                </div>
                            </figure>
                        </a>
                    </div>
                    <div class="col-md-6 mt-3">
                        <a href="">
                            <figure class="genres">
                                <img src="assets/img/objects/young-adult.jpg" alt="" width="250" height="150">
                                <div class="inner-banner">
                                    <h5 class="text-light">Young adult</h5>
                                </div>
                            </figure>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our genres ends -->
    <!-- most read -->
    <div class="container mt-5 py-3">
        <h3 class="text-right">Most Read</h3>
        <hr>
        <div class="row mt-3">
            <div class="col-md-4 mt-3">
                <div class=" books-card">
                    <div class="text-right">
                        <div class="d-flex">
                            <div class="d-flex">
                                <img src="assets/img/objects/cover.jpg" alt="" height="350">
                                <div class="description">
                                    <p class="text-right mx-3 anim-1">Consectetur adipisicing elit sed do eiusmod
                                        tempor
                                        incididunt
                                        labore toloregna aliqua enim adia minim veniam, quis nostrud.</p>
                                    <p class="text-right mx-3 anim-2"><strong><span>Book Pages :</span></strong> 206
                                    </p>
                                    <p class="text-right mx-3 anim-3"><strong><span> category :</span></strong>
                                        Adventure</p>
                                    <p class="text-right mx-3 anim-4"><strong><span> Price :</span></strong> &#8358;
                                        2500</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container title">
                        <hr>
                        <h5 class="book-title text-center">Timi goes to school</h5>
                        <p class="text-center">by: Tawose Oluwatimilehin</p>
                        <div class="text-center">
                            <button class="text-center btn btn-info">add to cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-3">
                <div class=" books-card">
                    <div class="text-right">
                        <div class="d-flex">
                            <div class="d-flex">
                                <img src="assets/img/objects/cover_2.jpg" alt="" height="350">
                                <div class="description">
                                    <p class="text-right mx-3 anim-1">Consectetur adipisicing elit sed do eiusmod
                                        tempor
                                        incididunt
                                        labore toloregna aliqua enim adia minim veniam, quis nostrud.</p>
                                    <p class="text-right mx-3 anim-2"><strong><span>Book Pages :</span></strong> 206
                                    </p>
                                    <p class="text-right mx-3 anim-3"><strong><span> category :</span></strong>
                                        Adventure</p>
                                    <p class="text-right mx-3 anim-4"><strong><span> Price :</span></strong> &#8358;
                                        2500</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container title">
                        <hr>
                        <h5 class="book-title text-center">Timi goes to school</h5>
                        <p class="text-center">by: Tawose Oluwatimilehin</p>
                        <div class="text-center">
                            <button class="text-center btn btn-info">add to cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-3">
                <div class=" books-card">
                    <div class="text-right">
                        <div class="d-flex">
                            <div class="d-flex">
                                <img src="assets/img/objects/cover-3.jpg" alt="" height="350">
                                <div class="description">
                                    <p class="text-right mx-3 anim-1">Consectetur adipisicing elit sed do eiusmod
                                        tempor
                                        incididunt
                                        labore toloregna aliqua enim adia minim veniam, quis nostrud.</p>
                                    <p class="text-right mx-3 anim-2"><strong><span>Book Pages :</span></strong> 206
                                    </p>
                                    <p class="text-right mx-3 anim-3"><strong><span> category :</span></strong>
                                        Adventure</p>
                                    <p class="text-right mx-3 anim-4"><strong><span> Price :</span></strong> &#8358;
                                        2500</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container title">
                        <hr>
                        <h5 class="book-title text-center">Timi goes to school</h5>
                        <p class="text-center">by: Tawose Oluwatimilehin</p>
                        <div class="text-center">
                            <button class="text-center btn btn-info">add to cart</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- most read ends -->
    <footer class="bg-info">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-4">
                    <h1 class="text-light">library</h1>
                    <div class="d-block">
                        <ul class="list-unstyled">
                            <li><a href="">Generes</a></li>
                            <li><a href="">Language</a></li>
                            <li><a href="">Authors</a></li>
                            <li><a href="public/login.html">Become an Author</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <h1 class="text-light">Socials</h1>
                    <div class="d-block">
                        <ul class="list-unstyled">
                            <li> <a href="">Facebook</a></li>
                            <li><a href="">Instagram</a></li>
                            <li><a href="">x</a></li>
                            <li><a href="">Discord</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group m-0">
                        <h3 class="text-light">Newsletter</h3>
                        <p class="text-light">Subscribe to our newsletter to receive the latest news about our
                            services.
                        </p>
                        <div class="input-group mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Your email">
                            <div class="input-group-append">
                                <button class="btn btn-info" type="submit" id="emailVerifyBtn">Subscribe</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">© 2023 Copyrights. All rights reserved.
            bookwagon.com</div>
    </footer>
    <!-- <script src="assets/js/bootstrap.js"></script> -->
    <script src="assets/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            // Send Search Text to the server
            $("#search").keyup(function () {
                let searchText = $(this).val();
                if (searchText != "") {
                    $.ajax({
                        url: "processors/action.php",
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

</body>

</html>