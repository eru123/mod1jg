<?php
$crossenv = require(BASEPATH . '/../crossenv.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .navbar {
            padding: 0.5rem 1rem;
            /* Reduces the default padding and height */
            transition: background-color 0.3s ease;
        }

        .navbar-brand .logo {
            width: 120px;
            /* Smaller logo width */
            height: auto;
            /* Maintain aspect ratio */
            transition: transform 0.3s ease;
        }

        .navbar-brand .logo:hover {
            transform: scale(1.1);
        }

        .navbar-nav .nav-link {
            transition: color 0.3s ease;
            color: #000;
            /* Default color */
        }

        .navbar-nav .nav-link:hover {
            color: green;
        }

        .dropdown:hover .dropdown-menu {
            display: block;
        }

        .btn-login {
            border: 2px solid #008000;
            /* Green border */
            color: green;
            /* Default text color */
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .btn-login:hover {
            background-color: #008000;
            /* Background turns green */
            color: #fff;
            /* Text color turns white */
        }

        @media (max-width: 992px) {
            .navbar-nav {
                text-align: center;
                /* Center links on small screens */
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <div class="container-fluid">
            <a href="<?php echo base_url(); ?>" class="navbar-brand">
                <img src="<?php echo base_url('assets/images//homepage/logo.jpg'); ?>" alt="Logo" class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo site_url('welcome/about'); ?>">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo site_url('welcome/facilities'); ?>">Facilities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo site_url('welcome/roomscot'); ?>">Rooms & Cottages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo site_url('welcome/faqs'); ?>">FAQS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo site_url('welcome/contactus'); ?>">Contact Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Book Now
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo site_url('welcome/avail'); ?>">Rooms & Pool Area</a></li>
                            <li><a class="dropdown-item" href="<?php echo site_url('welcome/availevent'); ?>">Events</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="d-flex">
                    <a class="btn btn-login" href="<?= site_url('login') ?>">
                        Login/Register
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ppRlLDA3ed/7hl7bQc9qlZdsxL++KZHLGO2NQbNH2dqL0Qda6FTRF0J5im7aospr" crossorigin="anonymous"></script>

</body>

</html>