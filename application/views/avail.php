<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juliana's Garden - Availability</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/book.css'); ?>">
    <style>
    .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    .modal-content {
        background-color: #fefefe;
        margin: 15% auto; /* 15% from the top and centered */
        padding: 20px;
        border: 1px solid #888;
        width: 80%; /* Could be more or less, depending on screen size */
    }

    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
    </style>

</head>
<body>
    <?php $this->load->view('header'); ?> <!-- Include header -->
    
    <!-- Image Area -->
    <div class="image-container">
        <img src="<?php echo base_url('assets/images/homepage/availimg.jpg'); ?>" alt="Descriptive Alt Text">
    </div>

    <!-- Check availability form -->
    <div class="container availability-form">
        <div class="row justify-content-center">
            <div class="col-lg-8 bg-white shadow p-4 rounded">
                <?php if (!empty($error)): ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error; ?>
                    </div>
                <?php endif; ?>
                <h5 class="mb-4">Check booking availability</h5>
                <form method="post" action="<?php echo site_url('AvailCon'); ?>">
                <div class="row align-items-end">
                            <div class="col-lg-5 mb-3">
                                <label class="form-label" style="font-weight: 500;">Check-in</label>
                                <input type="date" class="form-control shadow-none" name="check_in">
                            </div>
                            <div class="col-lg-5 mb-3">
                                <label class="form-label" style="font-weight: 500;">Check-out</label>
                                <input type="date" class="form-control shadow-none" name="check_out">
                            </div>
                            <div class="col-lg-2 mb-lg-3 mt-2">
                            <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Custom Modal for Date Validation Errors -->
    <div id="dateErrorModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>Wrong input of date, try again. Check-out date must be after Check-in date.</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const checkIn = document.querySelector('[name="check_in"]');
            const checkOut = document.querySelector('[name="check_out"]');
            const submitButton = document.querySelector('.availability-form button[type="submit"]');
            const modal = document.getElementById("dateErrorModal");
            const span = document.getElementsByClassName("close")[0];

            const today = new Date().toISOString().split('T')[0];
            checkIn.setAttribute('min', today);
            checkOut.setAttribute('min', today);

            function validateDates() {
                if (checkIn.value && checkOut.value && checkIn.value >= checkOut.value) {
                    modal.style.display = "block";
                    return false;
                }
                return true;
            }

            submitButton.addEventListener('click', function(event) {
                if (!validateDates()) {
                    event.preventDefault(); // Prevent form submission if the validation fails
                }
            });

            span.onclick = function() {
                modal.style.display = "none";
            }

            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        });
    </script>


</body>
</html>
