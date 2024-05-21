<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Juliana's Garden | Facilities</title>

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
  <link rel="stylesheet" href="<?php echo base_url('css/facilities.css'); ?>">

</head>
<body>
  <?php $this->load->view('header'); ?>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <section class="blog-banner-area" id="about">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>Facilities</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Facilities</li>
            </ol>
          </nav>
				</div>
			</div>
    </div>
	</section>

  <section class="facilities-section">
    <div class="container-fluid">
        <div class="facility-wrapper">
            <!-- Original set of facilities -->
            <div class="facility-card" id="pool">
                <img src="<?php echo base_url('img/gallery/pool2.jpg'); ?>" alt="Pool Area" class="img-fluid">
                <h3 class="facility-title">Pool Area</h3>
                <p>Enjoy our exquisite pool area designed for relaxation and family fun, equipped with modern amenities.</p>
            </div>
            <div class="facility-card" id="fishing">
                <img src="<?php echo base_url('img/gallery/kubo.jpg'); ?>" alt="Fishing Area" class="img-fluid">
                <h3 class="facility-title">Fishing Area</h3>
                <p>Perfect spot for anglers of all skill levels to catch and release or simply enjoy the serene environment.</p>
            </div>
            <div class="facility-card" id="restaurant">
                <img src="<?php echo base_url('img/gallery/resto.jpg'); ?>" alt="Restaurant" class="img-fluid">
                <h3 class="facility-title">Restaurant</h3>
                <p>Experience quality but very affordable samgyeopsal and many more  on our restaurant.</p>
            </div>
            <div class="facility-card" id="events">
                <img src="<?php echo base_url('img/gallery/event.jpg'); ?>" alt="Event Spaces" class="img-fluid">
                <h3 class="facility-title">Event Spaces</h3>
                <p>Ideal for weddings, meetings, and special events, offering customizable spaces to meet your needs.</p>
            </div>

            <!-- Duplicate set of facilities for looping -->
            <div class="facility-card" id="pool2">
                <img src="<?php echo base_url('img/gallery/pool2.jpg'); ?>" alt="Pool Area" class="img-fluid">
                <h3 class="facility-title">Pool Area</h3>
                <p>Enjoy our exquisite pool area designed for relaxation and family fun, equipped with modern amenities.</p>
            </div>
            <div class="facility-card" id="fishing2">
                <img src="<?php echo base_url('img/gallery/kubo.jpg'); ?>" alt="Fishing Area" class="img-fluid">
                <h3 class="facility-title">Fishing Area</h3>
                <p>Perfect spot for anglers of all skill levels to catch and release or simply enjoy the serene environment.</p>
            </div>
            <div class="facility-card" id="restaurant2">
                <img src="<?php echo base_url('img/gallery/resto.jpg'); ?>" alt="Restaurant" class="img-fluid">
                <h3 class="facility-title">Restaurant</h3>
                <p>Experience quality but very affordable samgyeopsal and many more  on our restaurant.</p>
            </div>
            <div class="facility-card" id="events2">
                <img src="<?php echo base_url('img/gallery/event.jpg'); ?>" alt="Event Spaces" class="img-fluid">
                <h3 class="facility-title">Event Spaces</h3>
                <p>Ideal for weddings, meetings, and special events, offering customizable spaces to meet your needs.</p>
            </div>
        </div>
    </div>
</section>



<script>
    // Example of a simple JavaScript effect if needed
    document.addEventListener("DOMContentLoaded", function() {
    const facilityWrapper = document.querySelector('.facility-wrapper');

    facilityWrapper.addEventListener('mouseenter', () => {
        facilityWrapper.style.animationPlayState = 'paused';
    });

    facilityWrapper.addEventListener('mouseleave', () => {
        facilityWrapper.style.animationPlayState = 'running';
    });
});


</script>
  
</body>
</html>