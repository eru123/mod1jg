<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juliana's Garden - EVENTS PLACE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/event.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/avail.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/rooms.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/event.css'); ?>">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<?php include 'header.php';?>
<body>

<div class="image-container position-relative">
    <img src="<?php echo base_url('assets/images/homepage/availimg.jpg'); ?>" alt="Descriptive Alt Text" class="img-fluid">
    <div class="overlay position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center">
        <div class="text-white text-center">
            <h2 class="fw-bold h-font">OUR OPEN EVENT SPACE & MINI FUNCTION HALL AREA</h2>
            <div class="fs-4 p-3">
                Experience the serene simplicity of barrio life at Juliana's Garden, <br> where you can reconnect with nature, unwind in the tranquility of our rustic settings, 
                <br>and rediscover the timeless charm of life in the countryside.
            </div>
        </div>
    </div>
</div>

        <div class="container">
            <div class="row">
                <!-- Booking Information -->
                <div class="col-lg-3 col-md-12 mb-lg-0 mb-14 px-lg-0">
                    <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                        <div class="container-fluid flex-lg-column align-items-stretch">
                            <h4 class="mt-2">Booking Information</h4>
                            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
                                <div class="border bg-light p-3 rounded mb-3">
                                    <h5 class="mb-3" style="">CHECK AVAILABILITY</h5>
                                    <p>Check-in: <?php echo isset($_SESSION['check_in']) ? $_SESSION['check_in'] : ''; ?></p>
                                    <p>Check-out: <?php echo isset($_SESSION['check_out']) ? $_SESSION['check_out'] : ''; ?></p>
                                </div>
                            <div id="rateInfo" class="rate-info">
                                <h5 class="booking-highlight"></h5>
                                <p>Price: <span class="booking-highlight" id="price"></span></p>
                                <p>Guests: <span class="booking-highlight" id="guests"></span></p>
                                <p>Additional: <span class="booking-highlight" id="addons"></span> per Succeeding Hours</p>
                                <button class="btn btn-sm w-100 text-white custom-bg-customcolor shadow-none" data-bs-toggle="modal" data-bs-target="#loginModal">Book Now</button>
                            </div>
                            </div>
                        </div>
                    </nav>
                </div>
            
                <div class="col-lg-9 col-md-12 px-4">
                    <div class="card mb-4 border-o shadow">
                        <div class="row g-0 p-3 align-items-center">
                            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                                <!-- Image with data attributes for Bootstrap modal -->
                                <img src="<?php echo base_url('assets/images/openspace/openspace1.jpg'); ?>" class="img-fluid rounded" data-bs-toggle="modal" data-bs-target="#openSpaceModal" style="cursor: pointer;">
                            </div>
                            <div class="col-md-5 px-lg-3 px-md-3 px-0">
                                <h5 class="mb-3">Open Event Space</h5>
                                <div class="facilities mb-4">
                                    <h6 class="mb-1">Facilities</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    <i class='bx bx-wifi' ></i>
                                        Wifi
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    <i class='bx bx-wind' ></i>
                                        Fan
                                    </span>
                                </div>
                                <div class="guests">
                                    <h6 class="mb-1">Guests</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        120 Persons
                                    </span>
                                </div><br>
                                <div class="addons">
                                    <h6 class="mb-1">Additional</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        ₱ 300 per Succeeding Hours
                                    </span>
                                </div>
                                <div class="description">
                                    <p class="text-muted text-justify mt-3">Juliana's Garden is a captivating open events space surrounded by lush greenery, providing an enchanting backdrop for any occasion. 
                                        With its serene ambiance and versatile layout, it offers the perfect setting for memorable gatherings under the open sky.</p>
                                    <a href="#" class="text-justify d-block" data-bs-toggle="modal" data-bs-target="#termsModal">More Information</a>
                                </div>
                            </div>
                            <div class="modal fade" id="termsModal" tabindex="-1" aria-labelledby="termsModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="termsModalLabel">Terms & Conditions</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h6>Deposit / Reservation Fee</h6>
                                            <ul>
                                                <li>You have an option to pay full or pay half of the rate's price!</li>
                                                <li>For a reservation fee, you need to pay at least 1000 pesos, and the remaining amount can be paid before check-out.</li>
                                            </ul>
                                            <h6>Payment Options</h6>
                                            <p>Gcash payment only for online booking.</p>
                                            <ul>
                                                <li>You will be required to upload a receipt for reservation.</li>
                                                <li>Upon reservation, wait for the phone call coming from the resort to confirm your booking.</li>
                                            </ul>
                                            <h6>Cancellation Policy</h6>
                                            <ul>
                                                <li>Half of the deposited amount will be given if the cancellation is requested 7 days prior to the reservation date.</li>
                                                <li>The deposited amount will not be refunded if the cancellation is requested less than 7 days prior to the reservation date.</li>
                                            </ul>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-success" data-bs-dismiss="modal">I agree and will proceed to booking</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 text-center">
                            <h6 class="mb-4">₱ 2500 Whole Day</h6>
                            <button onclick="updateBookingInfo('Open Event Space', '₱ 2500', '120 Persons', '₱ 300')" class="btn btn-sm w-100 text-white custom-bg-customcolor shadow-none mb-2">Select</button>
                            </div>
                        </div>
                    </div>
                    <!-- Modal with Carousel for Open Event Space Gallery -->
                    <div class="modal fade" id="openSpaceModal" tabindex="-1" aria-labelledby="openSpaceModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="openSpaceModalLabel">Open Event Space Gallery</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Bootstrap Carousel -->
                                    <div id="carouselOpenSpace" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="<?php echo base_url('assets/images/openspace/openspace1.jpg'); ?>" class="d-block w-100">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="<?php echo base_url('assets/images/openspace/openspace2.jpg'); ?>" class="d-block w-100">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="<?php echo base_url('assets/images/openspace/openspace3.jpg'); ?>" class="d-block w-100">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="<?php echo base_url('assets/images/openspace/openspace4.jpg'); ?>" class="d-block w-100">
                                            </div>
                                            <!-- Additional images can be added here as more .carousel-item -->
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselOpenSpace" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselOpenSpace" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    <div class="card mb-4 border-o shadow">
                        <div class="row g-0 p-3 align-items-center">
                            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                                <!-- Image with data attributes for Bootstrap modal -->
                                <img src="<?php echo base_url('assets/images/minifunctionhall/minifunc1.jpg'); ?>" class="img-fluid rounded" data-bs-toggle="modal" data-bs-target="#miniFunctionHallModal" style="cursor: pointer;">
                            </div>
                            <div class="col-md-5 px-lg-3 px-md-3 px-0">
                                <h5 class="mb-3">Mini Function Hall</h5>
                                <div class="facilities mb-4">
                                    <h6 class="mb-1">Facilities</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    <i class='bx bx-wifi' ></i>
                                        Wifi
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    <i class='bx bx-wind' ></i>
                                        Fan
                                    </span>
                                </div>
                                <div class="guests">
                                    <h6 class="mb-1">Guests</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        25 Persons
                                    </span>
                                </div><br>
                                <div class="addons">
                                    <h6 class="mb-1">Additional</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        ₱ 300 per Succeeding Hours
                                    </span>
                                </div>
                                <div class="description">
                                    <p class="text-muted text-justify mt-3">The mini function hall at Juliana's Garden offers an intimate yet versatile space for various events. With its cozy ambiance and customizable setup, it's ideal for small gatherings, workshops, or intimate celebrations, providing a charming atmosphere for memorable moments. </p>
                                    <a href="#" class="text-justify d-block" data-bs-toggle="modal" data-bs-target="#termsModal">More Information</a>
                                </div>
                            </div>
                            <div class="modal fade" id="termsModal" tabindex="-1" aria-labelledby="termsModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="termsModalLabel">Terms & Conditions</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h6>Deposit / Reservation Fee</h6>
                                                <ul>
                                                    <li>You have an option to pay full or pay half of the rate's price!</li>
                                                    <li>For a reservation fee, you need to pay at least 1000 pesos, and the remaining amount can be paid before check-out.</li>
                                                </ul>
                                                <h6>Payment Options</h6>
                                                <p>Gcash payment only for online booking.</p>
                                                <ul>
                                                    <li>You will be required to upload a receipt for reservation.</li>
                                                    <li>Upon reservation, wait for the phone call coming from the resort to confirm your booking.</li>
                                                </ul>
                                                <h6>Cancellation Policy</h6>
                                                <ul>
                                                    <li>Half of the deposited amount will be given if the cancellation is requested 7 days prior to the reservation date.</li>
                                                    <li>The deposited amount will not be refunded if the cancellation is requested less than 7 days prior to the reservation date.</li>
                                                </ul>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-bs-dismiss="modal">I agree and will proceed to booking</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <div class="col-md-2 text-center">
                            <h6 class="mb-4"> ₱ 1000 Whole Day</h6>
                            <button onclick="updateBookingInfo('Mini Function Hall', '₱ 1000', '25 Persons', '₱ 300')" class="btn btn-sm w-100 text-white custom-bg-customcolor shadow-none mb-2">Select</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal with Carousel for Mini Function Hall Gallery -->
        <div class="modal fade" id="miniFunctionHallModal" tabindex="-1" aria-labelledby="miniFunctionHallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="miniFunctionHallModalLabel">Mini Function Hall Gallery</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Bootstrap Carousel -->
                        <div id="carouselMiniFunctionHall" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="<?php echo base_url('assets/images/minifunctionhall/minifunc1.jpg'); ?>" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?php echo base_url('assets/images/minifunctionhall/minifunc2.jpg'); ?>" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?php echo base_url('assets/images/minifunctionhall/minifunc3.jpg'); ?>" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?php echo base_url('assets/images/minifunctionhall/minifunc4.jpg'); ?>" class="d-block w-100">
                                </div>
                                <!-- Additional images can be added here as more .carousel-item -->
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselMiniFunctionHall" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselMiniFunctionHall" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
        function updateBookingInfo(name, price, guests, addons) {
            document.getElementById('rateInfo').style.display = 'block';
            document.getElementById('price').textContent = price;
            document.getElementById('guests').textContent = guests;
            document.getElementById('addons').textContent = addons;
            document.querySelector('#rateInfo .booking-highlight').textContent = name;
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Login Required</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    You need to login before proceeding to payment.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="window.location.href='login.php';">Login</button>
                </div>
            </div>
        </div>
    </div>

    
</body>
</html>