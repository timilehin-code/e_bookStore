<?php
require '../processors/authorDash.php';
session_start();
if (isset($_SESSION['Login'])) {

} else {
    header('location:login.php');
}
$counter = 1;
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
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Title</title>
</head>

<body style="background-color:#fff;">
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-dark text-light border-end border-1 border-info" id="sidebar-wrapper">
            <div
                class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom border-info">
                <img src="../assets/img/objects/logo-2.png" alt="" width="200">
            </div>
            <div class="list-group list-group-flush text-light my-3">
                <a href="#"
                    class="list-group-item list-group-item-action bg-transparent second-text active border-bottom border-info"><i
                        class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="bookUpload.php?authorId=<?php echo $rowAuthor['authorId'] ?>"
                    class="list-group-item border-bottom border-info list-group-item-action bg-transparent second-text fw-bold text-light"><i
                        class="fa-solid fa-file-arrow-up me-2 "></i>Upload a book</a>

                <a href="../processors/logout.php"
                    class="list-group-item list-group-item-action  border-bottom border-dark  bg-transparent text-danger fw-bold"><i
                        class="fa-solid fa-right-from-bracket"></i> Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-dark text-light bg-dark py-4 px-4 border-bottom  border-info">
                <div class="d-flex align-items-center">
                    <i class="fa-solid fa-bars primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link  text-light  second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>
                                <?php echo $rowAuthor['authorUserName'] ?>
                                
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div id="clock" class="clock"></div>
                    <h3 class="greeting" id="greeting"></h3>
                    <div class="col-md-3">
                        <div
                            class="p-3 bg-light shadow-sm d-flex cards justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">
                                    <?php echo $bookNumber ?>
                                </h3>
                                <p class="fs-5">books uploaded</p>
                            </div>
                            <i class="fa-solid fa-file-arrow-up primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div
                            class="p-3 bg-light shadow-sm d-flex cards justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">4920</h3>
                                <p class="fs-5">Books sold</p>
                            </div>
                            <i
                                class="fas fa-hand-holding-usd fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div
                            class="p-3 bg-light shadow-sm d-flex cards justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">3899</h3>
                                <p class="fs-5">Delivery</p>
                            </div>
                            <i class="fas fa-truck fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div
                            class="p-3 bg-light shadow-sm d-flex cards justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">%25</h3>
                                <p class="fs-5">Increase</p>
                            </div>
                            <i class="fas fa-chart-line fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>
                </div>

                <div class="row my-5">
                    <h3 class="fs-4 mb-3">All Books</h3>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover book-table">
                            <thead>
                                <tr>
                                    <th scope="col" width="50">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Date</th>
                                </tr>
                            </thead>
                            <?php
                            if ($queryBooks->num_rows > 0) {
                                while ($rowBooks = $queryBooks->fetch_assoc()) {
                                    ?>
                                    <tbody>
                                        <tr>
                                            <th scope="row">
                                                <?php echo $counter++ ?>
                                            </th>
                                            <td>
                                                <?php echo $rowBooks['bookName'] ?>
                                            </td>
                                            <td>
                                                <?php echo $rowBooks['categoryName'] ?>
                                            </td>
                                            <td>
                                                <?php echo $rowBooks['bookStatus'] ?>
                                            </td>
                                            <td>
                                                <?php echo $rowBooks['dateUploaded'] ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <?php
                                }
                            } else {
                                ?>
                                <tr>
                                    <td colspan="5">
                                        <div class="d-block text-center">
                                            <div class="alert  text-center alert-dark">You Haven't uploaded a book yet</div>
                                            <a href="bookUpload.php?authorId=<?php echo $rowAuthor['authorId'] ?>"
                                                class="btn text-light btn-info"> upload a book</a>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
    <script src="../assets/js/main.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };

        // greetings
        function clock() {
            var date = new Date();
            var hours = date.getHours();
            var min = date.getMinutes();
            var sec = date.getSeconds();
            var midday;
            hours = updateTime(hours);
            min = updateTime(min);
            sec = updateTime(sec);

            midday = (hours >= 12) ? "PM" : "AM";

            document.getElementById("clock").innerHTML = hours + ":" + min + ":" + sec + ":" + midday;

            var time = setTimeout(function () {
                clock()
            }, 1000);

            if (hours < 12) {
                var greeting = "Good morning " + name
            }

            if (hours >= 12 && hours < 18) {
                var greeting = "Good afternoon" + name
            }

            if (hours >= 18 && hours <= 24) {
                var greeting = "Good evening"
            }
            document.getElementById("greeting").innerHTML = greeting;
        }
        function updateTime(k) {
            if (k < 10) {
                return "0" + k;
            } else {
                return k;
            }
        }
        clock();

    </script>
</body>

</html>