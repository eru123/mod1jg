<?php
require_once '../config.php';
require_once '../global.php';

if (isset($_SESSION['role'])) {
    if ($_SESSION['role'] == 'admin') {
        header('location: ../admin');
    }
} else {
    header('location: ../index.php');
}

$sql = "SELECT * FROM accounts WHERE email = '{$_SESSION['email']}' LIMIT 1";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>
    <link rel="stylesheet" href="../src/bootstrap.min.css" />
    <link rel="icon" href="../src/img/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="../src/img/favicon.ico" type="image/x-icon" />
    <meta name="theme-color" content="#ffffff">
    <meta name="background-color" content="#ffffff">
    <meta name="display" content="standalone">
    <link rel="icon" type="image/png" sizes="192x192" href="../src/img/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="512x512" href="../src/img/android-chrome-512x512.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Poppins font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />

    <!-- google icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <script src="../src/jquery.min.js"></script>
    <script src="../src/sweetalert2/sweetalert2.all.min.js"></script>

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
    <form id="updateForm" action="" method="post" style="max-width: 900px; border-radius: 40px;" class="form p-5 py-3 col-12 bg-white mx-auto">

        <?php
        // update profile
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $post = validate_post_data($_POST);
            $firstname = $post['firstname'];
            $lastname = $post['lastname'];
            $email = $post['email'];
            $phone = $post['phone'];
            $address = $post['address'];
            $password = $post['password'];

            $updateQuery = "UPDATE accounts SET firstname = '$firstname', lastname = '$lastname', email = '$email', phone = '$phone', address = '$address', password = '$password' WHERE email = '{$_SESSION['email']}'";
            if ($conn->query($updateQuery)) {
                $success_msg = "Profile updated successfully";
                $_SESSION['email'] = $email;
            } else {
                $err_msg = "something went wrong please try again";
            }
        }
        $data = getRows("email = '{$_SESSION['email']}'", "accounts")[0];
        ?>

        <img class="col-3 mx-auto d-block shadow rounded" src="<?= $data['profile'] ?? '../assets/img/default_avatar.png'  ?>" alt="Profile">
        <input type="file" accept="image/*" class="d-none" id="chooseFile">
        <div class="d-flex align-items-center justify-content-center my-3">
            <button type="button" id="profile2" class="btn btn-dark btn-sm" style="height: 40px; font-size: 12px;">Change profile</button>
        </div>
        <h2 class="fw-bold text-center mt-3"><?= $_SESSION['name'] ?></h2>
        <hr class="divider mt-2">

        <div class="d-flex">
            <div class="container my-2">
                <label class="form-label">First name</label>
                <input name="firstname" value="<?= $data['firstname'] ?? null ?>" required type="text" class="form-control form-control-sm input" disabled>
            </div>

            <div class="container my-2">
                <label class="form-label">Last name</label>
                <input name="lastname" value="<?= $data['lastname'] ?? null ?>" required type="text" class="form-control form-control-sm input" disabled>
            </div>
        </div>

        <div class="container my-2">
            <label class="form-label">Email</label>
            <input name="email" value="<?= $data['email'] ?? null ?>" required type="email" class="form-control form-control-sm input" disabled>
        </div>

        <div class="container my-2">
            <label class="form-label">Phone</label>
            <input name="phone" value="<?= $data['phone'] ?? null ?>" required type="number" class="form-control form-control-sm input" disabled>
        </div>

        <div class="container my-2">
            <label class="form-label">Address</label>
            <input name="address" value="<?= $data['address'] ?? null ?>" required type="text" class="form-control form-control-sm input" disabled>
        </div>

        <div class="container my-2">
            <label class="form-label">Password</label>
            <input name="password" value="<?= $data['password'] ?? null ?>" required type="text" class="form-control form-control-sm input" disabled>
        </div>

        <div class="container mt-4">
            <button id="editBtn" type="button" class="btn mb-3 btn-sm btn-primary px-5">Edit</button>
            <button id="updateBtn" style="display: none;" type="submit" class="btn mb-3 btn-sm btn-success px-5 mx-2">Save Changes</button>
        </div>
        <script>
            $(() => {
                let state = true;
                $('#editBtn').click(function() {
                    $('#updateBtn').toggle(50);
                    if (state) {
                        $('#updateForm input').prop('disabled', false);
                        $('#updateForm input[name="firstname"]').focus();
                        $(this).html('Cancel');
                        state = false;
                    } else {
                        $('#updateForm input').prop('disabled', true);
                        $(this).html('Edit');
                        state = true;
                    }
                })
            })
        </script>
    </form>

    <script>
        $(document).ready(function() {
            $('#profile, #profile2').on('click', function() {
                Swal.fire({
                    title: "Change profile",
                    text: "Do you want to Update your profile?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, Continue"
                }).then((result) => {
                    if (result.isConfirmed) {
                        $('#chooseFile').click();
                    }
                });

            })

            $('#chooseFile').on('change', function() {
                let reader = new FileReader();
                reader.onload = function(e) {
                    $('#profile').attr('src', e.target.result);

                    let formData = new FormData();
                    formData.append('profileImage', $('#chooseFile')[0].files[0]);

                    $.ajax({
                        url: 'update_profile.php',
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            Swal.fire(
                                'Success!',
                                'Profile updated successfully',
                                'success'
                            )
                        },
                        error: function(error) {
                            Swal.fire(
                                'Error!',
                                'Failed to update profile',
                                'success'
                            )
                        }
                    });
                }
                reader.readAsDataURL($('#chooseFile').prop('files')[0]);


            })
        })
    </script>


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
                });
            <?php
            }
            ?>
        })
    </script>

</body>

</html>