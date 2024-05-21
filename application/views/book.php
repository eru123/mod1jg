<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juliana's Garden - Book Now</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/avail.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/rooms.css'); ?>">
</head>
<body>
    <?php $this->load->view('header'); ?>

    <div class="image-container position-relative">
    <img src="<?php echo base_url('assets/images/homepage/availimg.jpg'); ?>" alt="Descriptive Alt Text" class="img-fluid">
    <div class="overlay position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center">
        <div class="text-white text-center">
            <h2 class="fw-bold h-font">OUR ROOMS AND POOL AREA</h2>
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
                    <div class="border bg-light p-3 rounded mb-3">
                        <h5 class="mb-3">CHECK AVAILABILITY</h5>
                        <p>Check-in: <?php echo $check_in; ?></p>
                        <p>Check-out: <?php echo $check_out; ?></p>
                    </div>
                    <div id="rateInfo" class="rate-info border bg-light p-3 rounded mb-3">
                        <h5 class="booking-highlight"></h5>
                        <p>Price: <span class="booking-highlight" id="price"></span></p>
                        <p>Capacity: <span class="booking-highlight" id="guests"></span></p>
                        <button class="btn btn-sm w-100 text-white custom-bg-customcolor shadow-none" data-bs-toggle="modal" data-bs-target="#loginModal">Book Now</button>
                    </div>
                </div>
            </nav>
            <!-- Container to display selected rooms -->
            <div id="selectedRoomsContainer">
            </div>
        </div>
        
        <!-- First Teepee -->
        <div class="col-lg-9 col-md-12 px-4">
            <div class="card mb-4 border-o shadow">
                <div class="row g-0 p-3 align-items-center">
                    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                    <img src="<?php echo base_url('./assets/images/rooms/teepeekubo/Teepee1.JPG'); ?>" class="img-fluid rounded" data-bs-toggle="modal" data-bs-target="#teepeeKuboModal">
                    </div>
                    <div class="col-md-5 px-lg-3 px-md-3 px-0">
                        <h5 class="mb-3">Teepee Kubo</h5>
                        <div class="features mb-3">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                <i class='bx bx-bed'></i>
                                1 bed
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap"> 
                                <i class='bx bx-bath'></i>
                                1 bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                <i class='bx bx-shower'></i>
                                1 shower
                            </span>
                        </div>
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
                                2 adults
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Child
                            </span>
                        </div>
                        <div class="description">
                            <p class="text-muted text-justify mt-3">Escape to the enchanting Teepee Kubo, where you'll discover a unique blend of rustic charm and modern comfort. 
                                Tucked away in a serene natural setting, our teepees offer an authentic camping experience surrounded by the sights and sounds of nature.</p>
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
                        <h6 class="mb-4">₱ 1000 per night</h6>
                        <!-- <button onclick="updateBookingInfo('Teepee Kubo', '₱ 1000', '2 adults, 1 children')" class="btn btn-sm w-100 text-white custom-bg-customcolor shadow-none mb-2">Select</button> -->
                        <button onclick="updateBookingInfo('Teepee Kubo', '1000', '2 adults, 1 children', 'Room', '1')" class="btn btn-sm w-100 text-white custom-bg-customcolor shadow-none mb-2">Select</button>
                    </div>
                </div>
            </div>
            <!-- Modal with Carousel for Teepee Kubo Gallery -->
            <div class="modal fade" id="teepeeKuboModal" tabindex="-1" aria-labelledby="teepeeKuboModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="teepeeKuboModalLabel">Teepee Kubo Gallery</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- Bootstrap Carousel -->
                            <div id="carouselTeepeeKubo" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">                                
                                    <div class="carousel-item active">
                                        <img src="<?php echo base_url('./assets/images/rooms/teepeekubo/Amenity.JPG'); ?>" class="d-block w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?php echo base_url('./assets/images/rooms/teepeekubo/Amenity2.JPG'); ?>" class="d-block w-100">
                                    </div>
                                    <div class="carousel-item active">
                                        <img src="<?php echo base_url('./assets/images/rooms/teepeekubo/Teepee1.JPG'); ?>" class="d-block w-100">
                                    </div>
                                    <!-- Additional images can be added here as more .carousel-item -->
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselTeepeeKubo" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselTeepeeKubo" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Second Teepee -->
            <div class="card mb-4 border-o shadow">
                <div class="row g-0 p-3 align-items-center">
                    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                        <img src="<?php echo base_url('./assets/images/rooms/teepeekubo/Teepee2.JPG'); ?>" class="img-fluid rounded" data-bs-toggle="modal" data-bs-target="#teepeeKuboModal2">
                    </div>
                    <div class="col-md-5 px-lg-3 px-md-3 px-0">
                        <h5 class="mb-3">Teepee Kubo 2</h5>
                        <div class="features mb-3">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                <i class='bx bx-bed'></i>
                                1 bed
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap"> 
                                <i class='bx bx-bath'></i>
                                1 bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                <i class='bx bx-shower'></i>
                                1 shower
                            </span>
                        </div>
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
                                2 adults
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Child
                            </span>
                        </div>
                        <div class="description">
                            <p class="text-muted text-justify mt-3">Escape to the enchanting Teepee Kubo, where you'll discover a unique blend of rustic charm and modern comfort. 
                                Tucked away in a serene natural setting, our teepees offer an authentic camping experience surrounded by the sights and sounds of nature.</p>
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
                        <h6 class="mb-4">Price for Teepee Kubo 2</h6>
                        <button onclick="updateBookingInfo('Teepee Kubo 2', '1000', '2 adults, 1 children', 'Room', '2')" class="btn btn-sm w-100 text-white custom-bg-customcolor shadow-none mb-2">Select</button>
                    </div>
                </div>
            </div>
             <!-- Modal with Carousel for Teepee Kubo Gallery -->
             <div class="modal fade" id="teepeeKuboModal2" tabindex="-1" aria-labelledby="teepeeKuboModalLabel2" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="teepeeKuboModalLabel2">Teepee Kubo Gallery</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- Bootstrap Carousel -->
                            <div id="carouselTeepeeKubo2" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="<?php echo base_url('./assets/images/rooms/teepeekubo/Amenity.JPG'); ?>" class="d-block w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?php echo base_url('./assets/images/rooms/teepeekubo/Amenity2.JPG'); ?>" class="d-block w-100">
                                    </div>
                                    <div class="carousel-item active">
                                        <img src="<?php echo base_url('./assets/images/rooms/teepeekubo/Teepee2.JPG'); ?>" class="d-block w-100">
                                    </div>
                                    <!-- Additional images can be added here as more .carousel-item -->
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselTeepeeKubo2" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselTeepeeKubo2" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Third Teepee -->
            <div class="card mb-4 border-o shadow">
                <div class="row g-0 p-3 align-items-center">
                    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                        <img src="<?php echo base_url('./assets/images/rooms/teepeekubo/Teepee3.JPG'); ?>" class="img-fluid rounded" data-bs-toggle="modal" data-bs-target="#teepeeKuboModal3">
                    </div>
                    <div class="col-md-5 px-lg-3 px-md-3 px-0">
                        <h5 class="mb-3">Teepee Kubo 3</h5>
                        <div class="features mb-3">
                        <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                <i class='bx bx-bed'></i>
                                1 bed
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap"> 
                                <i class='bx bx-bath'></i>
                                1 bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                <i class='bx bx-shower'></i>
                                1 shower
                            </span>
                        </div>
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
                                2 adults
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Child
                            </span>
                        </div>
                        <div class="description">
                            <p class="text-muted text-justify mt-3">Escape to the enchanting Teepee Kubo, where you'll discover a unique blend of rustic charm and modern comfort. 
                                Tucked away in a serene natural setting, our teepees offer an authentic camping experience surrounded by the sights and sounds of nature.</p>
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
                        <h6 class="mb-4">Price for Teepee Kubo 3</h6>
                        <button onclick="updateBookingInfo('Teepee Kubo 3', '1000', '2 adults, 1 children', 'Room', '3')" class="btn btn-sm w-100 text-white custom-bg-customcolor shadow-none mb-2">Select</button>
                    </div>
                </div>
            </div>
             <!-- Modal with Carousel for Teepee Kubo Gallery -->
             <div class="modal fade" id="teepeeKuboModal3" tabindex="-1" aria-labelledby="teepeeKuboModalLabel3" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="teepeeKuboModalLabel3">Teepee Kubo Gallery</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- Bootstrap Carousel -->
                            <div id="carouselTeepeeKubo3" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="<?php echo base_url('./assets/images/rooms/teepeekubo/Amenity.JPG'); ?>" class="d-block w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?php echo base_url('./assets/images/rooms/teepeekubo/Amenity2.JPG'); ?>" class="d-block w-100">
                                    </div>
                                    <div class="carousel-item active">
                                        <img src="<?php echo base_url('./assets/images/rooms/teepeekubo/Teepee3.JPG'); ?>" class="d-block w-100">
                                    </div>
                                    <!-- Additional images can be added here as more .carousel-item -->
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselTeepeeKubo3" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselTeepeeKubo3" data-bs-slide="next">
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
                    <img src="<?php echo base_url('./assets/images/rooms/famkubo/FamKuboA.jpg'); ?>" class="img-fluid rounded" data-bs-toggle="modal" data-bs-target="#famKuboModal">
                    </div>
                    <div class="col-md-5 px-lg-3 px-md-3 px-0">
                        <h5 class="mb-3">Family Kubo</h5>
                        <div class="features mb-3">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                            <i class='bx bx-bath' ></i>
                                2 beds
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                            <i class='bx bx-bath' ></i>
                                1 bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                            <i class='bx bx-shower' ></i>
                                1 shower
                            </span>
                        </div>
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
                                4 adults
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                2 Child
                            </span>
                        </div>
                        <div class="description">
                            <p class="text-muted text-justify mt-3">Discover the perfect family getaway at our charming Family Kubo. Step inside to find comfortable furnishings and ample space for the whole family to unwind, Family Kubo provides the ideal setting for creating lasting memories together. </p>
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
                    <h6 class="mb-4"> ₱ 1,500 per night</h6>
                    <!-- <button onclick="updateBookingInfo('Family Kubo', '₱ 1,500', '4 adults, 2 children')" class="btn btn-sm w-100 text-white custom-bg-customcolor shadow-none mb-2">Select</button> -->
                    <button onclick="updateBookingInfo('Family Kubo', '1500', '4 adults, 2 children', 'Room', '4')" class="btn btn-sm w-100 text-white custom-bg-customcolor shadow-none mb-2">Select</button>


                    </div>
                </div>
            </div>
            <!-- Modal with Carousel for Teepee Kubo Gallery -->
            <div class="modal fade" id="famKuboModal" tabindex="-1" aria-labelledby="famKuboModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="famKuboModalLabel">Family Kubo Gallery</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- Bootstrap Carousel -->
                            <div id="carouselfamKubo" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="<?php echo base_url('./assets/images/rooms/famkubo/Famkubo1.1.jpg'); ?>" class="d-block w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?php echo base_url('./assets/images/rooms/famkubo/Famkubo1.2.jpg'); ?>" class="d-block w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?php echo base_url('./assets/images/rooms/famkubo/FamKuboA.jpg'); ?>" class="d-block w-100">
                                    </div>
                                    <!-- Additional images can be added here as more .carousel-item -->
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselfamKubo" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselfamKubo" data-bs-slide="next">
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
                        <img src="<?php echo base_url('./assets/images/poolarea/PoolArea1.jpg'); ?>" class="img-fluid rounded" data-bs-toggle="modal" data-bs-target="#PoolModal">
                    </div>
                    <div class="col-md-5 px-lg-3 px-md-3 px-0">
                        <h5 class="mb-3">Pool Area</h5>
                        <div class="features mb-3">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                            <i class='bx bx-chair' ></i>
                                Cottages
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                            <i class='bx bxs-florist' ></i>
                                Garden Tables
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                            <i class='bx bx-shower' ></i>
                                shower rooms
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                            <i class='bx bx-wifi' ></i>
                                Wifi
                            </span>
                        </div>
                        <div class="guests">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                25 Maximum Capacity
                            </span>
                        </div>
                        <div class="description">
                            <p class="text-muted text-justify mt-3">Dive into relaxation at our refreshing pool area! Surrounded by lush greenery and comfortable lounging spaces. Whether you're looking to soak up the sun, take a refreshing swim, or simply unwind with a good book, our pool area is the perfect spot for your next getaway.</p>
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
                        <h6 class="mb-4"> ₱ 2,500 Exclusive Day Swimming </h6>
                        <button onclick="updateBookingInfo('Pool Area', '2500', '25 Maximum Capacity', 'Exclusive Day Swimming', '5')" class="btn btn-sm w-100 text-white custom-bg-customcolor shadow-none mb-2">Select</button>

                        <h6 class="mb-4"> ₱ 3,000 Exclusive Night Swimming </h6>
                        <button onclick="updateBookingInfo('Pool Area', '3000', '25 Maximum Capacity', 'Exclusive Night Swimming', '6')" class="btn btn-sm w-100 text-white custom-bg-customcolor shadow-none mb-2">Select</button>
                    </div>
                </div>
            </div>
            <!-- Modal with Carousel for Teepee Kubo Gallery -->
            <div class="modal fade" id="PoolModal" tabindex="-1" aria-labelledby="PoolModal" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="PoolModal">Family Kubo Gallery</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- Bootstrap Carousel -->
                            <div id="carouselPoolArea" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                <div class="carousel-item">
                                        <img src="<?php echo base_url('./assets/images/poolarea/PoolArea1.jpg'); ?>" class="d-block w-100">
                                    </div>
                                    <div class="carousel-item active">
                                        <img src="<?php echo base_url('./assets/images/poolarea/PoolArea2.jpg'); ?>" class="d-block w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?php echo base_url('./assets/images/poolarea/PoolArea3.jpg'); ?>" class="d-block w-100">
                                    </div>
                                    <!-- Additional images can be added here as more .carousel-item -->
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselPoolArea" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselPoolArea" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
// Keep track of selected rooms
let selectedRooms = [];

function updateBookingInfo(area, price, capacity, type, roomId) {
    // Check if the room is already selected
    const index = selectedRooms.findIndex(room => room.area === area && room.type === type && room.id === roomId);
    if (index !== -1) {
        // If already selected, remove it
        selectedRooms.splice(index, 1);
    } else {
        // Otherwise, add it to selected rooms
        selectedRooms.push({ area, price: parseFloat(price), capacity, type, id: roomId });
    }

    // Update the booking information
    updateBookingDisplay();
}

// Update the display of selected rooms and total price
function updateBookingDisplay() {
    // Display the rate info section
    document.getElementById('rateInfo').style.display = 'block';

    // Calculate total price and total capacity
    let totalPrice = 0;
    let totalCapacityAdults = 0;
    let totalCapacityChildren = 0;
    let displayText = '';
    selectedRooms.forEach(room => {
        totalPrice += room.price;
        const capacityArr = room.capacity.split(', ');
        totalCapacityAdults += parseInt(capacityArr[0].split(' ')[0]);
        totalCapacityChildren += parseInt(capacityArr[1].split(' ')[0]);
        displayText += `<div>${room.area} - ${room.type} (ID: ${room.id})</div>`;
    });

    // Update the HTML elements
    const priceElement = document.getElementById('price');
    const guestsElement = document.getElementById('guests');
    const bookingHighlight = document.querySelector('#rateInfo .booking-highlight');
    priceElement.textContent = `₱ ${totalPrice.toFixed(2)}`;
    guestsElement.textContent = `${totalCapacityAdults} adults, ${totalCapacityChildren} children`;
    bookingHighlight.innerHTML = displayText;

    // Display selected rooms in the booking information section
    const selectedRoomsContainer = document.getElementById('selectedRoomsContainer');
    selectedRoomsContainer.innerHTML = '';
    selectedRooms.forEach(room => {
        const roomCard = document.createElement('div');
        roomCard.classList.add('card', 'mb-2', 'border-o', 'shadow');
        roomCard.innerHTML = `
            <div class="card-body">
                <h6 class="card-title">${room.area}</h6>
                <p class="card-text">Type: ${room.type}</p>
                <p class="card-text">Price: ₱ ${room.price.toFixed(2)}</p>
                <p class="card-text">Capacity: ${room.capacity}</p>

            </div>
        `;
        selectedRoomsContainer.appendChild(roomCard);
    });
}
</script>
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
