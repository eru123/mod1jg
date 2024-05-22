<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inventory</title>
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

        .input,
        .form-select {
            border: 1px solid darkblue;
            border-radius: 15px;
            height: 50px;
            background-color: transparent;
            padding-left: 30px;
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
                            <li class="nav-item my-1 current-page">
                                <a href="<?= site_url('admin/inventory') ?>" class="text-center d-flex align-items-center justify-content-start gap-2 ml-4 fs-6">
                                    <span class="material-symbols-outlined">
                                        inventory
                                    </span>
                                    Inventory
                                </a>
                            </li>
                            <li class="nav-item my-1">
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
            <?php require_once __DIR__ . '/profile_nav.php' ?>
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->

                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between mb-2">

                            <div>
                                <select id="select_inventory" class="form-select bg-white form-select-sm">
                                    <option <?= ($_GET['val'] ?? null) == 'Room inventory' ? 'selected' : '' ?> value="Room inventory">Room inventory</option>
                                    <option <?= ($_GET['val'] ?? null) == 'Restaurant inventory' ? 'selected' : '' ?> value="Restaurant inventory">Restaurant inventory</option>
                                </select>

                                <script>
                                    $(() => {
                                        $('#select_inventory').change(function() {
                                            let val = $(this).val();
                                            let urlParams = new URLSearchParams(window.location.search);
                                            if (urlParams.has('val')) {
                                                urlParams.set('val', val);
                                            } else {
                                                urlParams.append('val', val);
                                            }

                                            let newUrl = window.location.pathname + '?' + urlParams
                                                .toString();

                                            window.location = newUrl;
                                        })
                                    })
                                </script>
                            </div>
                            <a href="?add_product=true" class="btn btn-primary btn-sm px-4 text-white" style="border-radius: 50px;"><i class="fa-solid fa-plus"></i> Add</a>
                        </div>
                        <?php
                        if ((!isset($_GET['add_product']) || $_GET['add_product'] != 'true') && !isset($_GET['update'])) {
                        ?>
                            <div class="table-responsive bg-white p-2 p-md-5" style="border-radius: 40px;">
                                <h4 class="text-primary fw-bold">Inventory</h4>

                                <div class="d-flex align-items-center justify-content-start gap-2 py-1">
                                    <span>Show</span>
                                    <div>
                                        <select name="" id="entries" class="">
                                        </select>
                                        <script>
                                            $(() => {
                                                $('#entries').on('change', function() {
                                                    let entries = $(this).val();
                                                    let urlParams = new URLSearchParams(window.location.search);
                                                    if (urlParams.has('entries')) {
                                                        urlParams.set('entries', entries);
                                                    } else {
                                                        urlParams.append('entries', entries);
                                                    }

                                                    let newUrl = window.location.pathname + '?' + urlParams
                                                        .toString();

                                                    window.location = newUrl;
                                                });

                                                for (let i = 10; i <= 4000; i *= 2) {
                                                    $('#entries').append(
                                                        `<option ${i == <?= ($_GET['entries'] ?? 0) ?> ? 'selected' : ''} value="${i}">${i}</option>`
                                                    )
                                                }
                                            })
                                        </script>
                                    </div><span>entries</span>
                                </div>
                                <table class="table table-white table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Product</th>
                                            <th scope="col"><?= $table === 'room_inventory' ? 'Product Name' : 'Description' ?></th>
                                            <?php if ($table === 'room_inventory') : ?>
                                                <th scope="col">Room</th>
                                            <?php endif; ?>
                                            <th scope="col"><?= $table === 'room_inventory' ? 'Stock Out' : 'Max Item Quantity' ?></th>
                                            <th scope="col">Available</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        $table = ($_GET['val'] ?? null) == 'Restaurant inventory' ? 'restaurant_inventory' : 'room_inventory';
                                        $data = $this->inventory->getRows(null, $table);

                                        // Pagination parameters
                                        $totalItems = count($data);
                                        $itemsPerPage = $_GET['entries'] ?? 10;
                                        $totalPages = ceil($totalItems / $itemsPerPage);
                                        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
                                        $current_page = max(1, min($totalPages, intval($current_page)));
                                        $offset = ($current_page - 1) * $itemsPerPage;

                                        $dataToDisplay = array_slice($data, $offset, $itemsPerPage);

                                        foreach ($dataToDisplay as $row) {
                                        ?>
                                            <tr>
                                                <td><?= $row['id'] ?></td>
                                                <td>
                                                    <img width="50px" src="<?= base_url($table === 'room_inventory' ? @$row['product_image'] : @$row['product']) ?>" alt="Product image">
                                                </td>
                                                <td><?= $table === 'room_inventory' ? @$row['product_name'] : @$row['description'] ?></td>
                                                <?php if ($table === 'room_inventory') : ?>
                                                    <td><?= @$row['room'] ?></td>
                                                <?php endif; ?>
                                                <td><?= $table === 'room_inventory' ? @$row['stock_out'] : @$row['max_item_qty'] ?></td>
                                                <td><?= @$row['available'] ?></td>
                                                <td>
                                                    <a class="mx-2 text-success">
                                                        <i class="fa-regular fa-eye"></i>
                                                    </a>
                                                    <a onclick="update(<?= $row['id'] ?>)">
                                                        <i class="fa-regular fa-pen-to-square"></i>
                                                    </a>
                                                    <button class="fa-regular fa-trash-can text-danger btn btn-sm" onclick="deleteConfirmation(<?= $row['id'] ?>, '<?= ($_GET['val'] ?? null) == 'Restaurant inventory' ? 'restaurant_inventory' : 'room_inventory' ?>')"></button>

                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>

                                <script>
                                    function update(update) {
                                        let urlParams = new URLSearchParams(window.location.search);
                                        if (urlParams.has('update')) {
                                            urlParams.set('update', update);
                                        } else {
                                            urlParams.append('update', update);
                                        }
                                        let newUrl = window.location.pathname + '?' + urlParams
                                            .toString();
                                        window.location = newUrl;
                                    }
                                </script>
                                <br>
                                <!-- Bootstrap Pagination -->
                                <nav aria-label="Page navigation">
                                    <ul class="pagination">
                                        <!-- Previous page link -->
                                        <li class="page-item <?= ($current_page == 1 ? 'disabled' : '') ?>">
                                            <a class="page-link" href="?page=<?= ($current_page - 1) ?>" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>

                                        <!-- Page links -->
                                        <?php for ($i = 1; $i <= $totalPages; $i++) { ?>
                                            <li class="page-item <?= ($i == $current_page ? 'active' : '') ?>">
                                                <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                                            </li>
                                        <?php } ?>

                                        <!-- Next page link -->
                                        <li class="page-item <?= ($current_page == $totalPages ? 'disabled' : '') ?>">
                                            <a class="page-link" href="?page=<?= ($current_page + 1) ?>" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>

                            </div>
                        <?php
                        } elseif (isset($_GET['add_product']) && $_GET['add_product'] == 'true' && !isset($_GET['update'])) {
                            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                $file = $_FILES['file'];
                                if ($file['error'] === UPLOAD_ERR_OK) {
                                    $uploadDir = 'uploads/';
                                    $fileName = uniqid('upload_') . '_' . basename($file['name']);
                                    $uploadPath = $uploadDir . $fileName;
                                    $actualPath = FCPATH . $uploadPath;
                                    if (move_uploaded_file($file['tmp_name'], $actualPath)) {


                                        $table = ($_GET['val'] ?? null) == 'Restaurant inventory' ? 'restaurant_inventory' : 'room_inventory';
                                        $post = $this->inventory->validate_post_data($_POST);

                                        $max_item_qty = trim(strval(@$post['max_item_qty']));
                                        $available = trim(strval(@$post['available']));
                                        $description = trim(strval(@$post['description']));
                                        $stock_out = trim(strval(@$post['stock_out']));
                                        $product_name = trim(strval(@$post['product_name']));
                                        $room = trim(strval(@$post['room']));

                                        if ($table === 'room_inventory') {
                                            $insertQuery = "INSERT INTO $table (product_name, product_image, stock_out, available, room) VALUES ('$product_name', '$uploadPath', $stock_out, $available, '$room')";
                                        } else {
                                            $insertQuery = "INSERT INTO $table (product, max_item_qty, available, description) VALUES ('$uploadPath', $max_item_qty, $available, '$description')";
                                        }

                                        $result = mysqli_query($conn, $insertQuery);
                                        if ($result) {
                                            $success_msg = "Product added successfully!";
                                        } else {
                                            $err_msg = "Error adding product: " . mysqli_error($conn);
                                        }
                                    } else {
                                        $err_msg = 'Error moving the uploaded file.';
                                    }
                                } else {
                                    $err_msg = 'Error during file upload. Error code: ' . $file['error'];
                                }
                            }
                        ?>
                            <?php if ($table == 'room_inventory') : ?>
                                <form action="" enctype="multipart/form-data" method="POST" class="bg-white p-2 p-md-5" style="border-radius: 40px;">
                                    <h4 class="text-primary fw-bold">Add <?= $_GET['val'] ?? 'Room Inventory' ?> Product</h4>
                                    <div class="col mt-1">
                                        <label class="form-label">Product image</label>
                                        <input required type="file" class="form-control pt-3 form-control-sm input" accept="image/*" id="file" name="file">
                                    </div>

                                    <div class="col mt-1">
                                        <label class="form-label">Product Name</label>
                                        <input required type="text" class="form-control form-control-sm input" id="product_name" name="product_name">
                                    </div>

                                    <div class="col mt-1">
                                        <label class="form-label">Room</label>
                                        <select required class="form-select form-select-sm input" aria-label="Default select example" id="room" name="room">
                                            <option selected disabled>Select Room</option>
                                            <?php foreach ($rooms as $room) : ?>
                                                <option value="<?= $room['room'] ?>"><?= $room['room'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="col mt-1">
                                        <label class="form-label">Stock Out</label>
                                        <input required type="number" class="form-control form-control-sm input" id="stock_out" name="stock_out">
                                    </div>

                                    <div class="col mt-1">
                                        <label class="form-label">Available</label>
                                        <input required type="number" class="form-control form-control-sm input" id="available" name="available">
                                    </div>

                                    <div class="col-12 mt-3">
                                        <button type="submit" class="btn btn-primary btn-lg px-5 text-white" style="border-radius: 20px;">Save</button>
                                    </div>
                                </form>
                            <?php elseif ($table == 'restaurant_inventory') : ?>
                                <form action="" enctype="multipart/form-data" method="POST" class="bg-white p-2 p-md-5" style="border-radius: 40px;">
                                    <h4 class="text-primary fw-bold">Add <?= $_GET['val'] ?? 'Room Inventory' ?> Product</h4>
                                    <div class="col mt-1">
                                        <label class="form-label">Product image</label>
                                        <input required type="file" class="form-control pt-3 form-control-sm input" accept="image/*" id="file" name="file">
                                    </div>

                                    <div class="col mt-1">
                                        <label class="form-label">Description</label>
                                        <input required type="text" class="form-control form-control-sm input" id="description" name="description">
                                    </div>

                                    <div class="col mt-1">
                                        <label class="form-label">Max item quantity</label>
                                        <input required type="number" class="form-control form-control-sm input" id="max_item_qty" name="max_item_qty">
                                    </div>

                                    <div class="col mt-1">
                                        <label class="form-label">Available</label>
                                        <input required type="number" class="form-control form-control-sm input" id="available" name="available">
                                    </div>

                                    <div class="col-12 mt-3">
                                        <button type="submit" class="btn btn-primary btn-lg px-5 text-white" style="border-radius: 20px;">Save</button>
                                    </div>
                                </form>
                            <?php endif; ?>
                        <?php
                        } elseif (!isset($_GET['add_product']) && isset($_GET['update'])) {
                            $id = $_GET['update'] ?? 0;
                            $table = ($_GET['val'] ?? null) == 'Restaurant inventory' ? 'restaurant_inventory' : 'room_inventory';

                            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                                $post = $this->inventory->validate_post_data($_POST);

                                $max_item_qty = trim(strval(@$post['max_item_qty']));
                                $available = trim(strval(@$post['available']));
                                $description = trim(strval(@$post['description']));
                                $stock_out = trim(strval(@$post['stock_out']));
                                $product_name = trim(strval(@$post['product_name']));
                                $room = trim(strval(@$post['room']));

                                $uploadPath = '';

                                if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
                                    $file = $_FILES['file'];
                                    $uploadDir = 'uploads/';
                                    $fileName = uniqid('upload_') . '_' . basename($file['name']);
                                    $uploadPath = $uploadDir . $fileName;
                                    $actualPath = FCPATH . $uploadPath;
                                    if (!move_uploaded_file($file['tmp_name'], $actualPath)) {
                                        $err_msg = 'Error moving the uploaded file.';
                                    }
                                }


                                $checkQuery = "SELECT COUNT(*) AS count FROM $table WHERE id = $id";
                                $checkResult = mysqli_query($conn, $checkQuery);
                                $row = mysqli_fetch_assoc($checkResult);
                                $count = $row['count'];

                                if ($count > 0) {
                                    // Perform UPDATE
                                    $updateQuery = "UPDATE $table SET";
                                    if ($table === 'room_inventory') {
                                        if (!empty($uploadPath)) {
                                            $updateQuery .= " product_image = '$uploadPath',";
                                        }

                                        $updateQuery .= " stock_out = $stock_out, available = $available, product_name = '$product_name', room = 'room' WHERE id = $id";
                                    } else {
                                        if (!empty($uploadPath)) {
                                            $updateQuery .= " product = '$uploadPath',";
                                        }
                                        $updateQuery .= " max_item_qty = $max_item_qty, available = $available, description = '$description' WHERE id = $id";
                                    }
                                    $result = mysqli_query($conn, $updateQuery);
                                    if ($result) {
                                        $success_msg = "Product updated successfully!";
                                    } else {
                                        $err_msg = "Error updating product: " . mysqli_error($conn);
                                    }
                                } else {
                                    echo '<script>location.href="' . site_url('admin/inventory') . '"; </script>';
                                }
                            }


                            $row = $this->inventory->getRows("id=$id", $table)[0];
                        ?>
                            <?php if ($table == 'room_inventory') : ?>
                                <form action="" enctype="multipart/form-data" method="POST" class="bg-white p-2 p-md-4" style="border-radius: 20px;">
                                    <h4 class="text-primary fw-bold">Edit Product</h4>
                                    <div class="col mt-1">
                                        <label class="form-label">Product image</label>
                                        <input type="file" class="form-control pt-3 form-control-sm input" accept="image/*" id="file" name="file">
                                    </div>

                                    <div class="col mt-1">
                                        <label class="form-label">Product Name</label>
                                        <input value="<?= $row['product_name'] ?? null ?>" required type="text" class="form-control form-control-sm input" id="description" name="description">
                                    </div>

                                    <div class="col mt-1">
                                        <label class="form-label">Room</label>
                                        <select required class="form-select form-select-sm input" aria-label="Default select example" id="room" name="room">
                                            <option disabled>Select Room</option>
                                            <?php foreach ($rooms as $room) : ?>
                                                <option value="<?= $room['room'] ?>" <?= $room['room'] == $row['room'] ? 'selected' : '' ?>><?= $room['room'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="col mt-1">
                                        <label class="form-label">Max item quantity</label>
                                        <input value="<?= $row['stock_out'] ?? null ?>" required type="number" class="form-control form-control-sm input" id="max_item_qty" name="max_item_qty">
                                    </div>

                                    <div class="col mt-1">
                                        <label class="form-label">Available</label>
                                        <input value="<?= $row['available'] ?? null ?>" required type="number" class="form-control form-control-sm input" id="available" name="available">
                                    </div>

                                    <div class="col-12 mt-5 d-flex align-items-center justify-content-end gap-3">
                                        <a href="<?= site_url('admin/inventory') ?>" class="btn btn-danger btn-lg px-5 text-white" style="border-radius: 20px;">Cancel</a>
                                        <button type="submit" class="btn btn-primary btn-lg px-5 text-white" style="border-radius: 20px;">Save</button>
                                    </div>
                                </form>
                            <?php elseif ($table == 'restaurant_inventory') : ?>
                                <form action="" enctype="multipart/form-data" method="POST" class="bg-white p-2 p-md-4" style="border-radius: 20px;">
                                    <h4 class="text-primary fw-bold">Edit Product</h4>
                                    <div class="col mt-1">
                                        <label class="form-label">Change product image</label>
                                        <input type="file" class="form-control pt-3 form-control-sm input" accept="image/*" id="file" name="file">
                                    </div>

                                    <div class="col mt-1">
                                        <label class="form-label">Description</label>
                                        <input value="<?= $row['description'] ?? null ?>" required type="text" class="form-control form-control-sm input" id="description" name="description">
                                    </div>

                                    <div class="col mt-1">
                                        <label class="form-label">Max item quantity</label>
                                        <input value="<?= $row['max_item_qty'] ?? null ?>" required type="number" class="form-control form-control-sm input" id="max_item_qty" name="max_item_qty">
                                    </div>

                                    <div class="col mt-1">
                                        <label class="form-label">Available</label>
                                        <input value="<?= $row['available'] ?? null ?>" required type="number" class="form-control form-control-sm input" id="available" name="available">
                                    </div>

                                    <div class="col-12 mt-5 d-flex align-items-center justify-content-end gap-3">
                                        <a href="<?= site_url('admin/inventory') ?>" class="btn btn-danger btn-lg px-5 text-white" style="border-radius: 20px;">Cancel</a>
                                        <button type="submit" class="btn btn-primary btn-lg px-5 text-white" style="border-radius: 20px;">Save</button>
                                    </div>
                                </form>
                            <?php endif; ?>
                        <?php
                        }
                        ?>

                    </div>


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

    <script>
        $(document).ready(function() {
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
            });

            <?php
            if (isset($err_msg)) {
            ?>
                Toast.fire({
                    icon: "error",
                    title: "<?php echo $err_msg ?>"
                });
            <?php
            }
            ?>

            <?php
            if (isset($success_msg)) {
            ?>
                Toast.fire({
                    icon: "success",
                    title: "<?php echo $success_msg ?>"
                }).then(() => {
                    location.href = "<?= site_url('admin/inventory') ?>";
                });
            <?php
            }
            ?>
        })

        function deleteConfirmation(id, table) {
            Swal.fire({
                title: "Delete",
                text: "Are you sure to delete it?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "POST",
                        url: "<?= site_url("admin/delete_data") ?>",
                        data: {
                            id,
                            table
                        },
                        dataType: "json",
                        success: function(response) {
                            if (response.status === "success") {
                                Swal.fire({
                                    title: "Deleted!",
                                    text: response.message,
                                    icon: "success"
                                }).then(() => {
                                    location.reload();
                                });
                            } else {
                                Swal.fire({
                                    title: "Error",
                                    text: response.message,
                                    icon: "error"
                                });
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                        }
                    });
                }
            });
        }
    </script>

</body>

</html>