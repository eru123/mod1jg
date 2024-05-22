<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>House keeping</title>
    <link rel="stylesheet" href="<?= base_url('inventory-php/src/bootstrap.min.css') ?>" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Poppins font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />

    <!-- google icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="<?= base_url('inventory-php/src/style.css') ?>">
    <script src="<?= base_url('inventory-php/src/jquery.min.js') ?>"></script>
    <script src="<?= base_url('inventory-php/src/sweetalert2/sweetalert2.all.min.js') ?>"></script>
    <script src="<?= base_url('inventory-php/src/w3.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <!-- custom styles -->
    <style>
        * {
            font-family: "Poppins", sans-serif;
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            transition: all 0.5s;
            text-decoration: none;
        }

        a {
            text-decoration: none !important;
        }

        .current-page {
            background: transparent;
            border-radius: 2px;
            border-right: 3px solid blue;
            color: darkblue;
        }

        .current-page a {
            color: darkblue;
        }

        .nav-item:hover {
            color: darkblue;
            background: transparent;
            border-radius: 2px;
            border-right: 3px solid blue;
            color: darkblue;
        }

        .nav-item a:hover {
            color: darkblue;
        }

        @media (max-width: 767px) {
            .navbar {
                background: #222;
            }
        }

        ::-webkit-scrollbar {
            outline: none;
            height: 5px;
            width: 5px;
            background-color: rgba(0, 0, 0, 0.1);
        }

        ::-webkit-scrollbar-thumb {
            height: 5px;
            width: 5px;
            background-color: rgba(0, 0, 100, 0.3);
            border-radius: 2px;
            cursor: grab;

        }
    </style>
</head>

<body>
    <?php require_once __DIR__ . '/../loading_banner.php' ?>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div>
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarSupportedContent">

                        <ul class="navbar-nav flex-column justify-content-start">
                            <img src="<?= base_url('inventory-php/assets/img/logo.jpg') ?>" width="100%">
                            <li class="nav-item my-1">
                                <a href="<?= site_url('admin') ?>" class="text-center d-flex align-items-center justify-content-start gap-2 ml-4 fs-6">
                                    <span class="material-symbols-outlined">Dashboard</span>
                                    Dashboard
                                </a>
                            </li>
                            <li class="nav-item my-1">
                                <a href="<?= site_url('admin/rooms_and_cottages') ?>" class="text-center d-flex align-items-center justify-content-start gap-2 ml-4 fs-6">
                                    <span class="material-symbols-outlined">room_preferences</span>
                                    Rooms & Cottages
                                </a>
                            </li>
                            <li class="nav-item my-1">
                                <a href="#" class="text-center d-flex align-items-center justify-content-start gap-2 ml-4 fs-6">
                                    <span class="material-symbols-outlined">book_5</span>
                                    Bookings
                                </a>
                            </li>
                            <li class="nav-item my-1">
                                <a href="<?= site_url('admin/inventory') ?>" class="text-center d-flex align-items-center justify-content-start gap-2 ml-4 fs-6">
                                    <span class="material-symbols-outlined">
                                        inventory
                                    </span>
                                    Inventory
                                </a>
                            </li>
                            <li class="nav-item my-1 current-page">
                                <a href="<?= site_url('admin/house_keeping') ?>" class="text-center d-flex align-items-center justify-content-start gap-2 ml-4 fs-6">
                                    <span class="material-symbols-outlined">in_home_mode</span>
                                    Housekeeping
                                </a>
                            </li>
                            <li class="nav-item my-1">
                                <a href="#" class="text-center d-flex align-items-center justify-content-start gap-2 ml-4 fs-6">
                                    <span class="material-symbols-outlined">Notifications</span>
                                    Notifications
                                </a>
                            </li>
                            <li class="nav-item my-1">
                                <a href="<?= site_url('admin/profile') ?>" class="d-flex align-items-center justify-content-start gap-1 ml-4 fs-6">
                                    <span class="material-symbols-outlined">account_box</span>
                                    My profile
                                </a>
                            </li>


                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <!-- ============================================================== -->
                <!-- pageheader  -->
                <!-- ============================================================== -->
                <?php require_once __DIR__ . '/profile_nav.php' ?>

                <div class="p-5">
                    <?php
                    $rooms = $this->inventory->getRows(null, 'rooms');
                    foreach ($rooms as $row) {
                        echo '<h3 class="mt-5">' . $row['room'] . '</h3>';
                    ?>
                        <table class="table table-striped table-hover table-light">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Product Image</th>
                                <th scope="col">Product Name</th>
                                <!-- <th scope="col">Available</th> -->
                                <th scope="col">Status</th>
                                <th scope="col">Actions</th>
                            </tr>
                            <?php
                            $inventory = $this->inventory->getRows("room='{$row['room']}'", 'room_inventory');
                            foreach ($inventory as $inner_row) {
                                echo '<tr>';
                                echo '<td>' . $inner_row['id'] . '</td>';
                                echo '<td><img src="' . $inner_row['product_image'] . '" width="70px"></td>';
                                echo '<td>' . $inner_row['product_name'] . '</td>';
                                // echo '<td>'. $inner_row['available']. '</td>';
                                echo '<td>Well-condition</td>';
                                echo '<td>
                                    <select>
                                        <option selected disabled class="d-none">-- select one --</option>
                                        <option>Assign housekeeper</option>
                                        <option>Change status</option>
                                    </select>
                                </td>';
                                echo '</tr>';
                            }
                            ?>
                        </table>
                    <?php
                    }

                    ?>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader  -->
                <!-- ============================================================== -->

            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- ============================================================== -->
    <!-- end wrapper  -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->


</body>

</html>