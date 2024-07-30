<?php
require '../processors/adminDash.php';
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
    <title>Admin Dashbord</title>
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
                                <h3 class="fs-2">3899</h3>
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
                <div class="text-center">
                    <div class=" mt-4">
                        <div class="tabs">
                            <div class="d-flex align-items-center">
                                <button type="button" class="btn  mx-5 tablinks text-light"
                                    onclick="openTables(event, 'Pending')"><i
                                        class="fa-solid fa-spinner fa-spin-pulse"></i> Pending books</button>
                                <button type="button" class="btn  mx-5 tablinks text-light"
                                    onclick="openTables(event, 'Approved')"><i
                                        class="fa-solid fa-thumbs-up fa-shake"></i> Approved books</button>
                                <button type="button" class="btn  mx-5 tablinks text-light"
                                    onclick="openTables(event, 'Disapproved')"><i
                                        class="fa-solid fa-thumbs-down fa-bounce"></i> Disapproved books</button>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- pending books begings -->
                <div id="Pending" class="row my-5 tabcontent" style="display: block;">
                    <h3 class="fs-4 mb-3">All Pending Books</h3>
                    <div class="col">
                        <table
                            class="table table-responsive bg-light border-1 border-dark rounded shadow-sm  table-hover book-table ">
                            <thead>
                                <tr>
                                    <th scope="col" width="50">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Author</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <?php
                            if ($queryPendingBooks->num_rows > 0) {
                                while ($rowPendingBooks = $queryPendingBooks->fetch_assoc()) {
                                    ?>
                                    <tbody>
                                        <tr>
                                            <th scope="row">
                                                <?php echo $counter++ ?>
                                            </th>
                                            <td>
                                                <?php echo $rowPendingBooks['bookName'] ?>
                                            </td>
                                            <td>
                                                <?php echo $rowPendingBooks['authorName'] ?>
                                            </td>
                                            <td>
                                                <?php echo $rowPendingBooks['categoryName'] ?>
                                            </td>
                                            <td>
                                                <?php echo $rowPendingBooks['bookStatus'] ?>
                                            </td>
                                            <td>
                                                <?php echo $rowPendingBooks['dateUploaded'] ?>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                                        id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Actions
                                                    </a>

                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <li><a href="../processors/bookUpdate.php?book_id=<?php echo $rowPendingBooks['book_id'] ?>"
                                                                class="dropdown-item">Approve</a></li>
                                                        <li><a href="../processors/disapprove.php?book_id=<?php echo $rowPendingBooks['book_id'] ?>"
                                                                class="dropdown-item">Disapprove</a></li>
                                                        <li><a class="dropdown-item" href="#">Preview Book</a></li>
                                                        <li><a class="dropdown-item" href="#">Message Author</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <?php
                                }
                            } else {
                                ?>
                                <tr>
                                    <td colspan="7">
                                        <div class="d-block text-center">
                                            <div class="alert  text-center alert-dark">No Pending books yet</div>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </table>



                    </div>
                </div>
                <!-- pending books ends -->

                <!--  Approved books begings-->
                <div id="Approved" class="row my-5 tabcontent">
                    <h3 class="fs-4 mb-3">All Approved Books</h3>
                    <div class="col">
                        <table
                            class="table table-responsive bg-light border-1 border-dark rounded shadow-sm  table-hover book-table ">
                            <thead>
                                <tr>
                                    <th scope="col" width="50">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Author</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <?php
                            $counter2 = 1;
                            if ($queryApprovedBooks->num_rows > 0) {
                                while ($rowApprovedBooks = $queryApprovedBooks->fetch_assoc()) {
                                    ?>
                                    <tbody>
                                        <tr>
                                            <th scope="row">
                                                <?php echo $counter2++ ?>
                                            </th>
                                            <td>
                                                <?php echo $rowApprovedBooks['bookName'] ?>
                                            </td>
                                            <td>
                                                <?php echo $rowApprovedBooks['authorName'] ?>
                                            </td>
                                            <td>
                                                <?php echo $rowApprovedBooks['categoryName'] ?>
                                            </td>
                                            <td>
                                                <?php echo $rowApprovedBooks['bookStatus'] ?>
                                            </td>
                                            <td>
                                                <?php echo $rowApprovedBooks['dateUploaded'] ?>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                                        id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Actions
                                                    </a>

                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <li><a class="dropdown-item" href="#">Preview Book</a></li>
                                                        <li><a class="dropdown-item" href="#">Message Author</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <?php
                                }
                            } else {
                                ?>
                                <tr>
                                    <td colspan="7">
                                        <div class="d-block text-center">
                                            <div class="alert  text-center alert-dark">No Approved books yet</div>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </table>
                    </div>
                </div>
                <!-- Approved books ends -->

                <!--  Disapproved books begings-->
                <div id="Disapproved" class="row my-5 tabcontent">
                    <h3 class="fs-4 mb-3">All Disapproved Books</h3>
                    <div class="col">
                        <table
                            class="table table-responsive bg-light border-1 border-dark rounded shadow-sm  table-hover book-table ">
                            <thead>
                                <tr>
                                    <th scope="col" width="50">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Author</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <?php
                            $counter3 = 1;
                            if ($queryDisapprovedBooks->num_rows > 0) {
                                while ($rowDisapprovedBooks = $queryDisapprovedBooks->fetch_assoc()) {
                                    ?>
                                    <tbody>
                                        <tr>
                                            <th scope="row">
                                                <?php echo $counter2++ ?>
                                            </th>
                                            <td>
                                                <?php echo $rowDisapprovedBooks['bookName'] ?>
                                            </td>
                                            <td>
                                                <?php echo $rowDisapprovedBooks['authorName'] ?>
                                            </td>
                                            <td>
                                                <?php echo $rowDisapprovedBooks['categoryName'] ?>
                                            </td>
                                            <td>
                                                <?php echo $rowDisapprovedBooks['bookStatus'] ?>
                                            </td>
                                            <td>
                                                <?php echo $rowDisapprovedBooks['dateUploaded'] ?>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                                        id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Actions
                                                    </a>

                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <li><a href="../processors/bookUpdate.php?book_id=<?php echo $rowDisapprovedBooks['book_id'] ?>"
                                                                class="dropdown-item">Approve</a></li>
                                                        <li><a class="dropdown-item" href="#">Preview Book</a></li>
                                                        <li><a class="dropdown-item" href="#">Message Author</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <?php
                                }
                            } else {
                                ?>
                                <tr>
                                    <td colspan="7">
                                        <div class="d-block text-center">
                                            <div class="alert  text-center alert-dark">No Disapproved books yet</div>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </table>
                    </div>
                </div>
                <!-- Disapproved books ends -->
            </div>
        </div>
    </div>

    <script src="../assets/js/main.js" async defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
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
        clock()

        // tabs
        function openTables(evt, tableName) {
            var i, tabcontent, tablinks;

            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(tableName).style.display = "block";
            evt.currentTarget.className += "active";
        }


    </script>
</body>

</html>