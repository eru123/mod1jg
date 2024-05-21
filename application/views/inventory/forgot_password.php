<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Forgot password</title>
    <link rel="stylesheet" href="<?= base_url('inventory-php/src/bootstrap.min.css') ?>" />
    <script src="<?= base_url('inventory-php/src/jquery.min.js') ?>"></script>
    <script src="<?= base_url('inventory-php/src/sweetalert2/sweetalert2.all.min.js') ?>"></script>

    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

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


        .form .input {
            border: 1px solid darkblue;
            border-radius: 15px;
            height: 50px;
            background-color: transparent;
            padding-left: 30px;
        }


        .btn {
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

        #btn:hover {
            background-color: dodgerblue !important;
            color: white;
            box-shadow: inset 1px -1px 10px rgba(0, 0, 0, 0.2), inset -1px 1px 10px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>


<body>
    <?php
    require_once __DIR__ . '/loading_banner.php';
    ?>

    <div style="
        min-height: 100vh;
      " class="w-full d-flex align-items-center justify-content-center flex-column px-3 position-relative bg-light">
        <a
            href="<?= site_url('logout') ?>" class="btn btn-dark border position-absolute" style="top: 30px; left: 30px; z-index:10;">Cancel</a>
        <!-- <img src="assets/img/logo.jpg" alt="logo" class="mb-2" width="200px"> -->
        <?php if (!isset($_SESSION['reset_verification']) && !isset($_SESSION['new_password'])) { ?>
            <form action="" method="post" class="form p-5 shadow col-12 col-lg-5 bg-white" style="border-radius: 25px;">
                <h1 class="fw-bolder fs-5">Forgot Password</h1>
                <small class="d-block text-muted my-4">No worries! We're here to help you get back into your account quickly
                    and securely. </small>
                <div class="container my-3">
                    <small for="username" class="mx-2">EMAIL</small>
                    <input value="<?php echo $email ?>" required type="email" class="form-control input" id="email"
                        name="email">
                </div>
                <div class="d-grid my-3 container">
                    <button type="submit" style="height: 50px;" class="btn btn-primary btn-block">Continue</button>
                </div>
            </form>
        <?php } elseif (isset($_SESSION['reset_verification']) && !isset($_SESSION['new_password'])) {
            ?>
            <script>
                let remaining_time = parseInt(<?php echo (($_SESSION['expire'] - time()) / 60) * 60 ?>);
                let interval = setInterval(() => {
                    if (remaining_time > 0) remaining_time--;
                    else {
                        $('#time').html('<code>Verification code expired!</code>');
                        Swal.fire({
                            title: "Opsss!",
                            text: "verification code expired!",
                            icon: "error",
                            onClose: function () {
                                location.href = "./clear_session.php";
                            }
                        });
                        clearInterval(interval);
                        return;
                    }
                    $('#time').html('Verification code will be expired <br> after <code>' + remaining_time +
                        's</code>');
                }, 1000);
            </script>
            <form action="" method="post" class="form p-5 shadow col-12 col-lg-5 bg-white" style="border-radius: 25px;">
                <h1 class="fw-bolder fs-4">OTP verification</h1>
                <h3 class="fw-semibold fs-6 p-3 text-muted">We have sent a six digit code in your email address!
                </h3>
                <p id="time" class=" text-muted px-3 text-center" style="font-size: 14px;"></p>
                <div class="container my-3">
                    <small for="otp" class="mx-2">Enter 6 digits code:</small>
                    <input placeholder="xxxxxx" value="<?php echo @$_POST['otp'] ?>" required type="number"
                        class="form-control form-control-sm input" id="otp" name="otp">
                </div>
                <div class="d-grid my-3 container">
                    <button id="btn" type="submit" style="height: 50px; background: rgba(0, 0, 0, 0.1);"
                        class="btn btn-block border">Verify</button>
                </div>
                <div class="container my-3 text-center">

                    <p class="mt-3 fs-6">Didn't receive OTP? <a href="#" class="">Resend</a></p>
                </div>
            </form>
        <?php } else { ?>
            <form action="" method="post" class="form p-5 shadow col-12 col-lg-5 bg-white" style="border-radius: 25px;">
                <h1 class="fw-bolder fs-5">Create new password</h1>
                <div class="container my-3">
                    <small class="mx-2">Enter password</small>
                    <input value="<?php echo @$_POST['password'] ?>" required type="password"
                        class="form-control form-control-sm input" name="password">
                </div>
                <div class="container my-3">
                    <small class="mx-2">Confirm password</small>
                    <input value="<?php echo @$_POST['confirm_password'] ?>" required type="password"
                        class="form-control form-control-sm input" name="confirm_password">
                </div>
                <div class="d-grid my-3 container">
                    <button id="btn" type="submit" style="height: 50px; background: rgba(0, 0, 0, 0.1);"
                        class="btn btn-block border">Submit</button>
                </div>
            </form>
        <?php } ?>
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
                }).then(() => {
                    // location.href = './forgot_password.php';
                    location.reload();
                });
                <?php
            }
            ?>
        })
    </script>

</body>

</html>