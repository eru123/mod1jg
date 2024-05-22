<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="<?= base_url('inventory-php/src/bootstrap.min.css') ?>" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Poppins font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />

    <!-- google icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <script src="<?= base_url('inventory-php/src/jquery.min.js') ?>"></script>
    <script src="<?= base_url('inventory-php/src/sweetalert2/sweetalert2.all.min.js') ?>"></script>
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
    </style>
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark px-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="<?= base_url('inventory-php/assets/img/logo.jpg') ?>" alt="logo" style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-4">
                    <li class="nav-item">
                        <a class="nav-link" href="#">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">FACILITIES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ROOMS AND COTTAGES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">FAQS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">VIRTUAL TOUR</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CONTACT US</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <img onclick="logoutConfirmation()" src="<?= $profile ?>" alt="profile" style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover; cursor: pointer;">
                </div>
            </div>
        </div>
    </nav>
    <div class="container-fluid my-2">
        <div class="p-4" style="border-radius: 60px; overflow: hidden; background-image: url('https://static.wixstatic.com/media/40070a_915a6d9650f0415ba4e476c41b297970~mv2.png/v1/fill/w_614,h_384,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/coconut2.png'); background-size: cover; background-repeat: none;">
            <h1 class="text-center text-white" style="text-transform: uppercase;">
                WELCOME BACK <?= $row['firstname'] ?> <?= $row['lastname'] ?>
            </h1>
        </div>

        <div class="row py-2 px-4" style="margin-top: -9px;">
            <div class="col d-flex gap-2">
                <div>
                    <img src="<?= $profile ?>" class="rounded" alt="profile" style="width: 100px; height: 100px; object-fit: cover;">
                </div>

                <div class="p-2">
                    <strong style="text-transform: uppercase;">NAME: </strong><span style="text-transform: uppercase;">
                        <?= $row['firstname'] ?> <?= $row['lastname'] ?>
                    </span><br>
                    <strong style="text-transform: uppercase;">MEMBER #: </strong><span style="text-transform: uppercase;">
                        <?= $row['id'] ?>
                    </span>

                    <div class="d-flex mt-2 gap-3">
                        <a href="<?= site_url('user/profile') ?>" style="border-radius: 15px; font-size: 12px;" class="btn text-primary border border-primary px-5">VIEW</a>
                        <a href="<?= site_url('user/profile') ?>" class="btn btn-primary" style="border-radius: 15px; font-size: 12px;">EDIT ACCOUNT</a>
                    </div>
                </div>
            </div>
            <div class="col text-white p-4" style="background-color: rgba(0,0,100, 0.7); margin-right: 10px; position: relative;">
                <img src="<?= base_url('inventory-php/assets/img/img_1.png') ?>" style="width: 20%; position: absolute; right: 0; top: 10;">
                <h4 class="fw-bold">WANT TO BOOK AGAIN?</h4>
                <div class="p-1 bg-light text-dark col-lg-10 col-12">
                    Check booking availability
                </div>
                <form class="row mt-1">
                    <div class="col">
                        <label for="">Check-in</label>
                        <input required name="checkIn" type="date" class="form-control">
                    </div>
                    <div class="col">
                        <label for="">Check-out</label>
                        <input required name="checkOut" type="date" class="form-control">
                    </div>
                    <div class="col">
                        <br>
                        <button type="submit" class="btn btn-light">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <div class="p-5 bg-white shadow" style="width: 95%; margin: 0 auto; border-radius: 20px;">
        <h4 class="fw-bold text-muted">BOOKING HISTORY</h4>
        <div class="row">
            <div class="col col-lg-4">
                <img class="img-fluid shadow p-3" style="background-color: #aaa; border-radius: 15px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTO0vzW__gk8DJma-y2JqeAIvpqeqziUP4eAUwvw5-4JA&s" alt="">
            </div>
            <div class="col col-lg-8 p-3" style="background-color: #aaa; border-radius: 15px;">
                <h4 class="fw-bold">FAMILY KUBO</h4>
                <div class="row">
                    <div class="col">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">CHECK IN</span>
                            <input readonly type="text" class="form-control" value="MON 03/18/2024">
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">CHECK OUT</span>
                            <input readonly type="text" class="form-control" value="FRI 03/22/2024">
                        </div>
                    </div>
                    <div class="col">
                        <button style="border-radius: 15px;" class="btn border border-primary bg-white">REQUEST HOUSEKEEPING</button>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">TYPE</span>
                            <input readonly type="text" class="form-control" value="FAMILY KUBO">
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">CONFIRMATION #</span>
                            <input readonly type="text" class="form-control" value="QWE1234567890">
                        </div>
                    </div>
                    <div class="col">
                        <button class="btn btn-primary btn-sm px-3" style="border-radius: 15px;">VIEW RESERVATION DETAILS</button>
                    </div>
                </div>
                <hr>
                <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#reviewModal">Make a review</button>
                <form action="" method="post" class="modal fade" id="reviewModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Make a review</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div>
                                    <label for="">Review for:</label>
                                    <textarea required class="form-control" rows="2" name="review_for" id="">FAMILY KUBO</textarea>
                                </div>
                                <div>
                                    <label for="">Describe your review</label>
                                    <textarea required class="form-control" rows="4" name="review" id=""></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                </form>

                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $post = $this->inventory->validate_post_data($_POST);
                    $review = $post['review'];
                    $review_for = $post['review_for'];


                    if ($conn->query("INSERT INTO reviews(review_for, review, account_no) VALUES('$review_for', '$review', '{$_SESSION['account_no']}')")) {
                        echo '<script>Swal.fire("Success", "Review added successfully!", "success");</script>';
                    } else {
                        echo '<script>Swal.fire("Error", "Failed to add review. Please try again later.", "error");</script>';
                    }
                }
                ?>

            </div>
        </div>
    </div>
    <?php
    require_once __DIR__ . '/../admin/logout_confirmation.php';
    ?>
</body>

</html>