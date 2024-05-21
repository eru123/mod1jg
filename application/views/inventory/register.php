<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="stylesheet" href="<?= base_url('inventory-php/src/bootstrap.min.css') ?>" />
    <script src="<?= base_url('inventory-php/src/jquery.min.js') ?>"></script>
    <script src="<?= base_url('inventory-php/src/sweetalert2/sweetalert2.all.min.js') ?>"></script>

    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />



    <meta name="theme-color" content="#ffffff">
    <meta name="background-color" content="#ffffff">
    <meta name="display" content="standalone">
    <meta name="msapplication-TileColor" content="#ffffff" />

    <!-- Poppins font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />

    <!-- google icons -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

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

        .form {
            width: 500px;
        }

        .form .input,
        .form-select {
            border: 1px solid darkblue;
            border-radius: 15px;
            height: 50px;
            background-color: transparent;
            padding-left: 30px;
        }

        div src/img {
            z-index: 100;
        }

        .btn {
            height: 50px;
            border-radius: 15px;
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
    <div style="
        min-height: 100vh;
      " class="w-full d-flex align-items-center justify-content-center flex-column px-3 py-3">

        <form action="" enctype="multipart/form-data" method="post"
            class="form p-5 py-3 bg-white rounded col-12 col-lg-4 mb-4 shadow">
            <a href="<?= base_url() ?>"><img class="d-block mx-auto"
                    style="width: 80%; height: 200px; object-fit: cover"
                    src="<?= base_url('inventory-php/assets/img/logo.jpg') ?>"></a>
            <h5 class="px-3 fw-bold text-muted">
                Registration
            </h5>

            <div class="container my-3">
                <input placeholder="Firstname" value="<?= @$firstname ?>" required type="text"
                    class="form-control form-control-sm input" id="firstname" name="firstname">
            </div>
            <div class="container my-3">
                <input placeholder="Middle Initial" value="<?= @$middle_initial ?>" required type="text"
                    class="form-control form-control-sm input" id="middle_Initial" name="middle_initial">
            </div>
            <div class="container my-3">
                <input placeholder="Lastname" value="<?= @$lastname ?>" required type="text"
                    class="form-control form-control-sm input" id="lastname" name="lastname">
            </div>
            <div class="container my-3">
                <input placeholder="Address/House No./Street Name" value="<?= @$address ?>" required type="text"
                    class="form-control form-control-sm input" id="address" name="address">
            </div>
            <div class="container my-3">
                <input autofocus placeholder="Email" value="<?= @$email ?>" required type="email"
                    class="form-control form-control-sm input" id="email" name="email">
            </div>
            <div class="container my-3">
                <input placeholder="Phone" value="<?= @$phone ?>" required type="number"
                    class="form-control form-control-sm input" id="phone" name="phone">
            </div>

            <div class="container my-3 d-flex align-items-center justify-content-between gap-2">
                <div class="">
                    <input placeholder="Password" value="<?= @$password ?>" required type="password"
                        class="form-control form-control-sm input" id="password" name="password">
                </div>
                <div class="">
                    <input placeholder="Confirm Password" value="<?= @$confirm_password ?>" required type="password"
                        class="form-control form-control-sm input" id="Confirm_password" name="confirm_password">
                </div>
            </div>


            <div class="container my-3 mt-4">
                <div class="form-check">
                    <input required class="form-check-input" type="checkbox" value="" id="termsOfService">
                    <label class="form-check-label" for="termsOfService">
                        <a href="#" class="text-muted fw-bold mx-auto"
                            style="text-decoration: none; font-size: 14px">Agree to Tersm and Conditions & Privacy
                            Policy</a>
                    </label>
                </div>
            </div>
            <div class="container my-3 text-center d-grid">
                <button type="submit" class="btn mb-3 btn-sm btn-success btn-block">Register</button>
            </div>
            <p style="font-size: 14px" class="text-center">Already have an account? <a href="<?= site_url('login') ?>"
                    class="nav-link btn d-inline text-dark fw-bold">Login</a></p>
        </form>
    </div>
    <script>
        $(document).ready(function () {
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
                });
                <?php
            }
            ?>
        })
    </script>

</body>

</html>