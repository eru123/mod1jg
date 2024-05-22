<?php
defined('BASEPATH') or exit('No direct script access allowed');

class InventoryCon extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('inventory');
        $this->load->helper('url');

        $crossenv = $this->config->item('crossenv');
        $host = isset($crossenv['db']['hostname']) ? $crossenv['db']['hostname'] : 'localhost';
        $user = isset($crossenv['db']['username']) ? $crossenv['db']['username'] : 'root';
        $password = isset($crossenv['db']['password']) ? $crossenv['db']['password'] : '';
        $database = isset($crossenv['db']['database']) ? $crossenv['db']['database'] : 'booking_and_reservation_db';

        $conn = new mysqli($host, $user, $password);
        if ($conn->connect_error)
            die('Database connection failed: ' . $conn->connect_error);
        $query = "CREATE DATABASE IF NOT EXISTS $database";
        if (!$conn->query($query)) {
            echo "Error creating database: " . $conn->error;
        }
        $conn->close();
        $conn = new mysqli($host, $user, $password, $database);
        if ($conn->connect_error) {
            die('Database connection failed: ' . $conn->connect_error);
        }

        $queryCreateTable = "CREATE TABLE IF NOT EXISTS accounts (
            id INT AUTO_INCREMENT PRIMARY KEY,
            email VARCHAR(255),
            phone VARCHAR(255),
            password VARCHAR(255),
            firstname VARCHAR(255),
            middle_initial VARCHAR(255),
            lastname VARCHAR(255),
            account_no VARCHAR(255),
            address VARCHAR(500),
            profile VARCHAR(255),
            role VARCHAR(255) DEFAULT 'user',
            enable2FA VARCHAR(255) DEFAULT 'true',
            status VARCHAR(255) DEFAULT 'Active',
            date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )";

        if (!$conn->query($queryCreateTable)) {
            die("Error creating table: " . $conn->error);
        }

        $queryCreateTable = "CREATE TABLE IF NOT EXISTS room_inventory (
            id INT AUTO_INCREMENT PRIMARY KEY,
            product VARCHAR(255),
            description VARCHAR(255),
            max_item_qty INT(11),
            available INT(11),
            date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )";

        if (!$conn->query($queryCreateTable)) {
            die("Error creating table: " . $conn->error);
        }

        $queryCreateTable = "CREATE TABLE IF NOT EXISTS restaurant_inventory (
            id INT AUTO_INCREMENT PRIMARY KEY,
            product VARCHAR(255),
            description VARCHAR(255),
            max_item_qty INT(11),
            available INT(11),
            date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )";

        if (!$conn->query($queryCreateTable)) {
            die("Error creating table: " . $conn->error);
        }

        $queryCreateTable = "CREATE TABLE IF NOT EXISTS rooms_and_venues (
            id INT AUTO_INCREMENT PRIMARY KEY,
            image VARCHAR(255),
            room_venue_type VARCHAR(255),
            status VARCHAR(255),
            max_capacity INT(11),
            price INT(11),
            date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )";

        if (!$conn->query($queryCreateTable)) {
            die("Error creating table: " . $conn->error);
        }


        $queryCreateTable = "CREATE TABLE IF NOT EXISTS reviews (
            id INT AUTO_INCREMENT PRIMARY KEY,
            review VARCHAR(1000),
            account_no VARCHAR(100),
            review_for VARCHAR(100),
            date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )";

        if (!$conn->query($queryCreateTable)) {
            die("Error creating table: " . $conn->error);
        }
    }

    public function index()
    {
        $this->load->helper('url');
        $this->load->view('header');
        $this->load->view('index');
    }

    public function login()
    {
        $email = $password = $err_msg = $success_msg = null;
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email'])) {
            $post = $this->inventory->validate_post_data($_POST);
            $email = $post['email'];
            $password = $post['password'];
            $hashPass = $password;
            $condition = "email = '$email' AND password = '$hashPass' AND status IN ('Approved', 'Active')";
            if ($this->inventory->isDataExists('accounts', '*', $condition)) {
                foreach ($this->inventory->getRows($condition, 'accounts') as $row) {
                    $token = random_int(100000, 999999);
                    $body = '
                    <!DOCTYPE html>
                    <html>
                        <head>
                            <title>Verification Code</title>
                        </head>
                        <body>
                            <p>Dear ' . $row['email'] . ',</p>
                            <p>We received a verification code request for your account. If you did not initiate this request, please ignore this email, please enter the following verification code:</p>
                            <h2 style="text-align:center; font-size:32px;">' . $token . '</h2>
                            <p>This code is valid for <b>10 minutes</b>, so please enter it as soon as possible.</p>
                            </body>
                    </html>';

                    if ($row['enable2FA'] == 'true') {
                        if ($this->inventory->send_mail($row['email'], $body)) {
                            // $_SESSION['validate_otp'] = $token;
                            // $_SESSION['email'] = $row['email'];
                            // $_SESSION['password'] = $row['password'];
                            // $_SESSION['start'] = time();
                            // $_SESSION['expire'] = $_SESSION['start'] + (10 * 60);
                            $this->session->set_userdata('validate_otp', $token);
                            $this->session->set_userdata('email', $row['email']);
                            $this->session->set_userdata('password', $row['password']);
                            $this->session->set_userdata('start', time());
                            $this->session->set_userdata('expire', $this->session->userdata('start') + (10 * 60));
                        } else {
                            $err_msg = "Please check your internet connection";
                        }
                    } else {
                        // $_SESSION['validate_otp'] = null;
                        // $_SESSION['login'] = true;
                        // $_SESSION['role'] = $row['role'];
                        // $_SESSION['email'] = $row['email'];
                        // $_SESSION['id'] = $row['id'];
                        // $_SESSION['profile'] = $row['profile'];
                        // $_SESSION['account_no'] = $row['account_no'] ?? null;
                        // $_SESSION['name'] = $row['firstname'] . ' ' . $row['middle_initial'] . '. ' . $row['lastname'];

                        $this->session->set_userdata('validate_otp', null);
                        $this->session->set_userdata('login', true);
                        $this->session->set_userdata('role', $row['role']);
                        $this->session->set_userdata('email', $row['email']);
                        $this->session->set_userdata('id', $row['id']);
                        $this->session->set_userdata('profile', $row['profile']);
                        $this->session->set_userdata('account_no', @$row['account_no']);
                        $this->session->set_userdata('name', $row['firstname'] . ' ' . $row['middle_initial'] . '. ' . $row['lastname']);
                        $success_msg = 'Logged in successfully';
                    }
                }
            } else {
                $err_msg = 'Invalid email or password';
            }
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['otp'])) {
            if ($_POST['otp'] == $_SESSION['validate_otp']) {
                $condition = "email = '{$_SESSION['email']}' AND password = '{$_SESSION['password']}' AND status IN ('Approved', 'Active')";
                if ($this->inventory->isDataExists('accounts', '*', $condition)) {
                    foreach ($this->inventory->getRows($condition, 'accounts') as $row) {
                        // $_SESSION['validate_otp'] = null;
                        // $_SESSION['login'] = true;
                        // $_SESSION['role'] = $row['role'];
                        // $_SESSION['email'] = $row['email'];
                        // $_SESSION['id'] = $row['id'];
                        // $_SESSION['profile'] = $row['profile'];
                        // $_SESSION['account_no'] = @$row['account_no'];
                        // $_SESSION['name'] = $row['firstname'] . ' ' . $row['middle_initial'] . '. ' . $row['lastname'];

                        $this->session->set_userdata('validate_otp', null);
                        $this->session->set_userdata('login', true);
                        $this->session->set_userdata('role', $row['role']);
                        $this->session->set_userdata('email', $row['email']);
                        $this->session->set_userdata('id', $row['id']);
                        $this->session->set_userdata('profile', $row['profile']);
                        $this->session->set_userdata('account_no', @$row['account_no']);
                        $this->session->set_userdata('name', $row['firstname'] . ' ' . $row['middle_initial'] . '. ' . $row['lastname']);
                    }
                }

                $success_msg = 'Logged in successfully';
            } else {
                $err_msg = 'Invalid OTP code';
            }
        }

        if (!empty($this->session->userdata('role'))) {
            if ($this->session->userdata('role') == 'user') {
                // header('location: ./user/');
                redirect('user');
            } else {
                // header('location: ./admin/');
                redirect('admin');
            }
        }

        $this->load->view('inventory/login', compact('err_msg', 'success_msg'));
    }

    public function resend_otp()
    {
        // if (isset($_SESSION['email'])) {
        if ($this->session->userdata('email')) {
            $token = random_int(100000, 999999);
            $email = $this->session->userdata('email');

            $body = '
                    <!DOCTYPE html>
                            <html>
                                <head>
                                    <title>Verification Code</title>
                                </head>
                                <body>
                                    <p>Dear ' . $email . ',</p>
                                    <p>We received a verification code request for your account. If you did not initiate this request, please ignore this email, please enter the following verification code:</p>
                                    <h2 style="text-align:center; font-size:32px;">' . $token . '</h2>
                                    <p>This code is valid for <b>10 minutes</b>, so please enter it as soon as possible.</p>
                                    </body>
                            </html>    
            ';

            if ($this->inventory->send_mail($email, $body)) {
                $_SESSION['validate_otp'] = $token;
                $_SESSION['start'] = time();
                $_SESSION['expire'] = $_SESSION['start'] + (10 * 60);
            } else {
                $err_msg = "Please check your internet connection";
            }
        }

        // header('location: login.php');
        redirect('login');
    }

    public function forgot_password()
    {
        // if (isset($_SESSION['role'])) {
        //     if ($_SESSION['role'] == 'user') {
        //         header('location: ./user/');
        //     } else {
        //         header('location: ./admin/');
        //     }
        // }

        if (!empty($this->session->userdata('role'))) {
            if ($this->session->userdata('role') == 'user') {
                redirect('user');
            } else {
                redirect('admin');
            }
        }

        $email = $err_msg = $success_msg = null;
        $conn = $this->inventory->conn();

        if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['email'])) {
            $email = trim(strval($_POST['email']));
            $query = "SELECT * FROM accounts WHERE email = '$email' LIMIT 1";
            if ($result = mysqli_query($conn, $query)) {
                if (!mysqli_num_rows($result) > 0) {
                    $err_msg = "User email did not exist!";
                } else {
                    $row = mysqli_fetch_assoc($result);

                    $token = random_int(100000, 999999);
                    $body = '
                        <!DOCTYPE html>
                        <html>
                            <head>
                                <title>Verification Code</title>
                            </head>
                            <body>
                                <p>Dear ' . $row['email'] . ',</p>
                                <p>We received a reset verification code request for your account. If you did not initiate this request, please ignore this email, please enter the following verification code:</p>
                                <h2 style="text-align:center; font-size:32px;">' . $token . '</h2>
                                <p>This code is valid for <b>2 minutes</b>, so please enter it as soon as possible.</p>
                                <p>If you have any trouble entering the code, please don\'t hesitate to contact us at <a href="mailto:cabaleroaldrin02@gmail.com">loremipsum@gmail.com</a>.</p>
                            </body>
                        </html>';
                    if ($this->inventory->send_mail($row['email'], $body, 'Reset Password Verification')) {
                        // $_SESSION['reset_verification'] = $token;
                        // $_SESSION['start'] = time();
                        // $_SESSION['expire'] = $_SESSION['start'] + (2 * 60);
                        // $_SESSION['email'] = $row['email'];
                        $this->session->set_userdata('reset_verification', $token);
                        $this->session->set_userdata('start', time());
                        $this->session->set_userdata('expire', $this->session->userdata('start') + (2 * 60));
                        $this->session->set_userdata('email', $row['email']);
                    } else {
                        $err_msg = "Something went wrong, please try again!";
                    }
                }
            }
        }
        if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['otp'])) {
            // if (!($_SESSION['reset_verification'] == $_POST['otp'])) {
            //     $err_msg = "Invalid OTP verification code!";
            // } else {
            //     $_SESSION['reset_verification'] = null;
            //     $_SESSION['new_password'] = true;
            //     $success_msg = "OTP verified successfully!";
            // }
            if (!($this->session->userdata('reset_verification') == $_POST['otp'])) {
                $err_msg = "Invalid OTP verification code!";
            } else {
                $this->session->set_userdata('reset_verification', null);
                $this->session->set_userdata('new_password', true);
                $success_msg = "OTP verified successfully!";
            }
        }

        if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['password'])) {
            $inpt_password = trim($_POST['password']);
            $hashPass = $inpt_password;
            $confirm_password = trim($_POST['confirm_password']);
            // Validate password
            $uppercase = preg_match('@[A-Z]@', $inpt_password);
            $lowercase = preg_match('@[a-z]@', $inpt_password);
            $_number = preg_match('@[0-9]@', $inpt_password);
            $specialChars = preg_match('@[^\w]@', $inpt_password);
            $length = strlen($inpt_password) < 8;

            // validate code 
            if (!$lowercase)
                $err_msg = 'Password must atleast have one lowercase!';
            elseif (!$_number)
                $err_msg = 'Password must atleast have one digit!';
            elseif (!$specialChars)
                $err_msg = 'Password must atleast have one special character!';
            elseif ($length)
                $err_msg = 'Password must atleast eight characters!';
            elseif ($inpt_password != $confirm_password) {
                $err_msg = 'Confirm password did not match, please try again!';
            } else {
                // update password
                // if (isset($_SESSION['email'])) {
                //     $sql = "UPDATE accounts SET password = '$hashPass' WHERE email = '{$_SESSION['email']}'";
                //     if (mysqli_query($conn, $sql)) {
                //         $success_msg = 'Password changed successfully!';

                //         session_destroy();
                //     }
                // }
                if (!empty($this->session->userdata('email'))) {
                    $sql = "UPDATE accounts SET password = '$hashPass' WHERE email = '{$this->session->userdata('email')}'";
                    if (mysqli_query($conn, $sql)) {
                        $success_msg = 'Password changed successfully!';
                        $this->session->sess_destroy();
                    }
                }
            }
        }

        $this->load->view('inventory/forgot_passwordx', compact('err_msg', 'success_msg', 'email'));
    }

    public function logout()
    {
        $this->session->sess_destroy();
        // header('location: login.php');
        redirect('');
    }

    public function register()
    {
        $conn = $this->inventory->conn();
        $phone = $password = $firstname = $email = $err_msg = $success_msg = null;
        // Handle form fields
        $post = $this->inventory->validate_post_data($_POST);
        $email = @$_POST["email"];
        $phone = @$_POST["phone"];
        $password = @$_POST["password"];
        $hashPass = $password;
        $confirm_password = @$_POST["confirm_password"];
        $firstname = @$_POST["firstname"];
        $middle_initial = @$_POST["middle_initial"];
        $lastname = @$_POST["lastname"];
        $address = @$_POST["address"];
        $account_no = $this->inventory->generateRandomNumber(24);

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($this->inventory->isDataExists("accounts", "*", "email = '$email'")) {
                $err_msg = "Email already registered";
            } elseif (strlen($password) < 6) {
                $err_msg = "Password must atleast 6 or more characters.";
                return;
            } elseif ($password != $confirm_password) {
                $err_msg = "Confirm password did not match.";
                return;
            } else {
                $sql = "INSERT INTO accounts (email, phone, password, firstname, middle_initial, lastname, address, account_no) VALUES ('$email', '$phone', '$hashPass', '$firstname', '$middle_initial', '$lastname', '$address', '$account_no')";

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
                                    location.href = "<?= site_url('login') ?>";
                                }
                            });

                        })
                    </script>
<?php
                } else {
                }
            }
        }
        $this->load->view('inventory/register', compact('err_msg', 'success_msg', 'email', 'phone', 'password', 'confirm_password', 'firstname', 'middle_initial', 'lastname', 'address', 'account_no'));
    }

    public function admin()
    {
        if (isset($_SESSION['role'])) {
            if ($_SESSION['role'] == 'user') {
                // header('location: ../user');
                redirect('user');
            }
        } else {
            redirect('login');
        }

        $conn = $this->inventory->conn();
        $sql = "SELECT * FROM accounts WHERE email = '{$_SESSION['email']}' LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        // $profile = !empty($row['profile']) ? $row['profile'] : 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Circle-icons-profile.svg/1200px-Circle-icons-profile.svg.png';
        $email = $row['email'] ?? null;
        $this->load->view('inventory/admin/index', compact('email'));
    }

    public function rooms_and_cottages()
    {
        if (isset($_SESSION['role'])) {
            if ($_SESSION['role'] == 'user') {
                // header('location: ../user');
                redirect('user');
            }
        } else {
            redirect('login');
        }

        $conn = $this->inventory->conn();
        $sql = "SELECT * FROM accounts WHERE email = '{$_SESSION['email']}' LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        // $profile = !empty($row['profile']) ? $row['profile'] : 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Circle-icons-profile.svg/1200px-Circle-icons-profile.svg.png';
        $email = $row['email'] ?? null;

        $this->load->view('inventory/admin/rooms_and_cottages', compact('email'));
    }

    public function delete_data()
    {
        $conn = $this->inventory->conn();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = mysqli_real_escape_string($conn, $_POST['id']);
            $table = mysqli_real_escape_string($conn, $_POST['table']);

            $checkDataExistence = "SELECT * FROM $table WHERE id = '$id'";
            $resultCheckData = mysqli_query($conn, $checkDataExistence);

            if (mysqli_num_rows($resultCheckData) > 0) {
                if ($table == 'customer_ticket') {
                    // get document
                    $document = getRows("id='$id'", $table)[0]['document'];
                    unlink(FCPATH . 'user/' . $document);
                }
                $sql = "DELETE FROM $table WHERE id = '$id'";
                if (mysqli_query($conn, $sql)) {
                    $response = [
                        'status' => 'success',
                        'message' => 'Data removed successfully'
                    ];
                } else {
                    $response = [
                        'status' => 'error',
                        'message' => mysqli_error($conn)
                    ];
                }
            } else {
                // Data does not exist
                $response = [
                    'status' => 'error',
                    'message' => 'Data with the specified ID does not exist'
                ];
            }

            header('Content-Type: application/json');
            echo json_encode($response);
        }
    }

    public function profile()
    {
        if (isset($_SESSION['role'])) {
            if ($_SESSION['role'] == 'user') {
                // header('location: ../user');
                redirect('user');
            }
        } else {
            redirect('login');
        }

        $conn = $this->inventory->conn();
        $sql = "SELECT * FROM accounts WHERE email = '{$_SESSION['email']}' LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        $this->load->view('inventory/admin/profile', compact('row', 'conn'));
    }

    public function update_profile()
    {
        $conn = $this->inventory->conn();
        if (isset($_FILES['profileImage'])) {
            $file = $_FILES['profileImage'];
            if ($file['error'] === UPLOAD_ERR_OK) {
                $uploadDir = 'profile/';
                $fileName = uniqid('profile_') . '_' . basename($file['name']);
                $uploadPath = $uploadDir . $fileName;
                $actualPath = FCPATH . $uploadPath;
                if (move_uploaded_file($file['tmp_name'], $actualPath)) {
                    $sql = "UPDATE accounts SET profile = '$uploadPath' WHERE email= '{$_SESSION['email']}'";

                    mysqli_query($conn, $sql);
                } else {
                    echo 'Error moving the uploaded file.';
                }
            } else {
                echo 'Error during file upload. Error code: ' . $file['error'];
            }
        }
    }

    public function inventory()
    {
        if (isset($_SESSION['role'])) {
            if ($_SESSION['role'] == 'user') {
                // header('location: ../user');
                redirect('user');
            }
        } else {
            redirect('login');
        }

        $conn = $this->inventory->conn();
        $sql = "SELECT * FROM accounts WHERE email = '{$_SESSION['email']}' LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        // $profile = !empty($row['profile']) ? $row['profile'] : 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Circle-icons-profile.svg/1200px-Circle-icons-profile.svg.png';
        $email = $row['email'] ?? null;

        $rooms = $this->inventory->getRows(" 1", 'rooms');
        $rooms_and_venues = $this->inventory->getRows(" 1", 'rooms_and_venues');
        $table = ($_GET['val'] ?? null) == 'Restaurant inventory' ? 'restaurant_inventory' : 'room_inventory';
        $this->load->view('inventory/admin/inventory', compact('email', 'conn', 'rooms', 'rooms_and_venues', 'table'));
    }

    public function house_keeping()
    {
        if (isset($_SESSION['role'])) {
            if ($_SESSION['role'] == 'user') {
                // header('location: ../user');
                redirect('user');
            }
        } else {
            redirect('login');
        }

        $conn = $this->inventory->conn();
        $sql = "SELECT * FROM accounts WHERE email = '{$_SESSION['email']}' LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        // $profile = !empty($row['profile']) ? $row['profile'] : 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Circle-icons-profile.svg/1200px-Circle-icons-profile.svg.png';
        $email = $row['email'] ?? null;

        $this->load->view('inventory/admin/house_keeping', compact('email', 'conn'));
    }

    public function user()
    {
        if (isset($_SESSION['role'])) {
            if ($_SESSION['role'] == 'admin') {
                redirect('admin');
            }
        } else {
            redirect('login');
        }

        $conn = $this->inventory->conn();
        $row = @$this->inventory->getRows("email = '{$_SESSION['email']}'", "accounts")[0];
        $profile = !empty(@$row['profile']) ? base_url($row['profile']) : 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Circle-icons-profile.svg/1200px-Circle-icons-profile.svg.png';
        $email = @$row['email'];

        $this->load->view('inventory/user/index', compact('profile', 'email', 'row', 'conn'));
    }

    public function user_profile()
    {
        if (isset($_SESSION['role'])) {
            if ($_SESSION['role'] == 'admin') {
                redirect('admin');
            }
        } else {
            redirect('login');
        }

        $conn = $this->inventory->conn();
        $sql = "SELECT * FROM accounts WHERE email = '{$_SESSION['email']}' LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        $this->load->view('inventory/user/profile', compact('row', 'conn'));
    }

    public function user_update_profile()
    {
        $conn = $this->inventory->conn();
        if (isset($_FILES['profileImage'])) {
            $file = $_FILES['profileImage'];
            if ($file['error'] === UPLOAD_ERR_OK) {
                $uploadDir = 'profile/';
                $fileName = uniqid('profile_') . '_' . basename($file['name']);
                $uploadPath = $uploadDir . $fileName;
                $actualPath = FCPATH . $uploadPath;
                if (move_uploaded_file($file['tmp_name'], $actualPath)) {
                    $sql = "UPDATE accounts SET profile = '$uploadPath' WHERE email= '{$_SESSION['email']}'";

                    mysqli_query($conn, $sql);
                } else {
                    echo 'Error moving the uploaded file.';
                }
            } else {
                echo 'Error during file upload. Error code: ' . $file['error'];
            }
        }
    }
}
