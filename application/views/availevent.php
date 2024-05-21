<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juliana's Garden - Availability</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/book.css'); ?>">
</head>
<body>
    <?php $this->load->view('header'); ?>

    <!-- Image Area -->
    <div class="image-container">
        <img src="<?php echo base_url('assets/images/openspace/openspace3.jpg'); ?>" alt="Descriptive Alt Text">
    </div>

    <!-- Check availability form -->
    <div class="container availability-form">
        <div class="row justify-content-center">
            <div class="col-lg-8 bg-white shadow p-4 rounded">
                <h5 class="mb-4">Check booking availability</h5>
                <?php if(isset($error)): ?>
                    <div class="alert alert-danger"><?php echo $error; ?></div>
                <?php endif; ?>
                <form method="post" action="<?php echo site_url('AvailEveCon'); ?>">
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

    <br> <br> <br>
    <br> <br> <br>

    <!-- JavaScript for Navbar Background Color Change -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var navbar = document.querySelector('.navbar');
            var scroll = new SmoothScroll('a[href*="#"]', {
                speed: 800,
                speedAsDuration: true
            });

            window.addEventListener('scroll', function() {
                if (window.scrollY > 0) {
                    navbar.style.backgroundColor = '#ffffff'; /* Change to desired color */
                } else {
                    navbar.style.backgroundColor = 'transparent';
                }
            });
        });
    </script>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
