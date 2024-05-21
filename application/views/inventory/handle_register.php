<?php
require_once './config.php';
require_once './global.php';

$phone = $password = $firstname = $email = $err_msg = $success_msg = null;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle form fields
    $post = validate_post_data($_POST);
    $email = $post["email"] ?? "";
    $phone = $post["phone"] ?? "";
    $password = $post["password"] ?? "";
    $hashPass = $password;
    $confirm_password = $post["confirm_password"] ?? "";
    $firstname = $post["firstname"] ?? "";
    $middle_initial = $post["middle_initial"] ?? "";
    $lastname = $post["lastname"] ?? "";
    $address = $post["address"] ?? "";
    $account_no = generateRandomNumber(24);


    if (isDataExists("accounts", "*", "email = '$email'")) {
        $err_msg = "Email already registered";
    } elseif (strlen($password) < 6) {
        $err_msg = "Password must atleast 6 or more characters.";
        return;
    } elseif ($password != $confirm_password) {
        $err_msg = "Confirm password did not match.";
        return;
    } else {
        $sql = "INSERT INTO accounts (email, phone, password, firstname, middle_initial, lastname, address, account_no)
        VALUES ('$email', '$phone', '$hashPass', '$firstname', '$middle_initial', '$lastname', '$address', '$account_no')";

        if (mysqli_query($conn, $sql)) {
?>
            <script>
                $(document).ready(function() {
                    Swal.fire({
                        title: "Thank you for signing up",
                        text: "Try login",
                        icon: "success",
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Go to login'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            location.href = './login.php';
                        }
                    });

                })
            </script>
<?php
        } else {
        }
    }

}