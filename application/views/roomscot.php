<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Juliana's Garden | Room and Cottages</title>

  <link rel="stylesheet" href="<?php echo base_url('vendors/bootstrap/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('vendors/fontawesome/css/all.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('vendors/themify-icons/themify-icons.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('vendors/linericon/style.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('vendors/magnefic-popup/magnific-popup.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('vendors/owl-carousel/owl.theme.default.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('vendors/owl-carousel/owl.carousel.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('vendors/nice-select/nice-select.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('css/main.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('css/try.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('css/roomscot.css'); ?>">
</head>
<body>
    <?php $this->load->view('header'); ?>
  
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
	<!-- ================ header section end ================= -->	
  
  <!-- ================ start banner area ================= -->	
	<section class="blog-banner-area" id="about">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>Rooms &#38; Cottages</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Rooms &#38; Cottages</li>
            </ol>
          </nav>
				</div>
			</div>
    </div>
	</section>
	<!-- ================ end banner area ================= -->

<!-- ================ Room and Cottages Section Start ================= -->
<section class="room-cottages-area">
    <div class="container">
        <div class="row">
            <!-- Sample Room or Cottage -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card room-card">
                    <div id="roomCarousel1" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo base_url('assets/images/rooms/teepeekubo.jpg'); ?>" class="d-block w-100" alt="Room Image">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo base_url('assets/images/rooms/tp_1.jpg'); ?>" class="d-block w-100" alt="Room Image">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#roomCarousel1" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#roomCarousel1" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Teepee Kubo</h5>
                        <p class="card-text">Experience a cozy retreat in our charming Teepee Kubo, perfect for a rustic getaway with modern comforts.</p>
                        <a href="#" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card room-card">
                    <div id="roomCarousel1" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo base_url('assets/images/rooms/famkubo.jpg'); ?>" class="d-block w-100" alt="Room Image">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo base_url('assets/images/rooms/tp_1.jpg'); ?>" class="d-block w-100" alt="Room Image">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#roomCarousel1" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#roomCarousel1" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Family Kubo</h5>
                        <p class="card-text">Ideal for family stays, our spacious Family Kubo combines comfort and traditional style for a memorable vacation.</p>
                        <a href="#" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card room-card">
                    <div id="roomCarousel1" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo base_url('assets/images/homepage/gardentable.jpg'); ?>" class="d-block w-100" alt="Room Image">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo base_url('assets/images/rooms/tp_1.jpg'); ?>" class="d-block w-100" alt="Room Image">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#roomCarousel1" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#roomCarousel1" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Garden Tables</h5>
                        <p class="card-text">Enjoy our serene garden tables for your relaxing day outs or intimate gatherings in a picturesque outdoor setting.</p>
                        <a href="#" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card room-card">
                    <div id="roomCarousel1" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo base_url('assets/images/homepage/cottage1.jpg'); ?>" class="d-block w-100" alt="Room Image">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo base_url('assets/images/rooms/tp_1.jpg'); ?>" class="d-block w-100" alt="Room Image">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#roomCarousel1" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#roomCarousel1" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Cottages</h5>
                        <p class="card-text">Stay in our quaint cottages, offering a peaceful haven with all the essential amenities for a refreshing escape.</p>
                        <a href="#" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>
            <!-- Additional rooms or cottages can be similarly added -->
        </div>
    </div>
</section>
<!-- ================ Room and Cottages Section End ================= -->


  <!-- ================ start footer Area ================= -->
  <footer class="footer-area section-gap">
		<div class="container">
			<div class="footer-bottom row align-items-center text-center text-lg-left">
				<p class="footer-text m-0 col-lg-8 col-md-12">
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> | Juliana's Garden
        </p>
				<div class="col-lg-4 col-md-12 text-center text-lg-right footer-social">
					<a href="#"><i class="fab fa-facebook-f"></i></a>
				</div>
			</div>
		</div>
	</footer>
  <!-- ================ End footer Area ================= -->



  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/magnefic-popup/jquery.magnific-popup.min.js"></script>
	<script src="vendors/easing.min.js"></script>
  <script src="vendors/superfish.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>  
  <script src="vendors/nice-select/jquery.nice-select.min.js"></script>
  <script src="vendors/jquery.ajaxchimp.min.js"></script>
  <script src="vendors/mail-script.js"></script>
  <script src="js/main.js"></script>
</body>
</html>
