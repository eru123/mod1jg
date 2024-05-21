<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Juliana's Garden</title>


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

    <!-- <link rel="icon" href="img/favicon.png" type="image/png">
    <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="vendors/magnefic-popup/magnific-popup.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/nice-select/nice-select.css">

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/try.css"> -->

</head>
<body>
    <?php $this->load->view('header'); ?>
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <main class="site-main">
    
    <section>
      <div class="owl-carousel owl-theme home-carousel">
        <div class="home-carousel__item">
          <img src="./img/gallery/gallery1.jpg" alt="">
          <div class="container home-carousel__item__content text-center text-white">
            <h4>Juliana's Garden</h4>
            <h1>Your Ideal Getaway for Events and Relaxation.</h1>
            <a class="button home-banner-btn" href="booking.html">Book Now</a>
          </div>
        </div>
        <div class="home-carousel__item">
          <img src="./img/gallery/gallery2.jpg" alt="">
          <div class="container home-carousel__item__content text-center text-white">
            <h4>Juliana's Garden</h4>
            <h1>DISCOVER A SEAMLESS BOOKING AND RESERVATION.</h1>
            <a class="button home-banner-btn" href="#">Learn More</a>
          </div>
        </div>
        <div class="home-carousel__item">
          <img src="./img/gallery/gallery6.jpg" alt="">
          <div class="container home-carousel__item__content text-center text-white">
            <h4>Juliana's Garden</h4>
            <h1>ESCAPE. EMBRACE NATURE. UNWIND </h1>
            <a class="button home-banner-btn" href="#">I'm Interested</a>
          </div>
        </div>
      </div>
    </section>

    <!-- ================ welcome section start ================= --> 
    <div class="video-container">
      <video autoplay loop muted>
        <source src="img/home/bg-video.mp4" type="video/mp4">
      </video>
      <div class="video-content">
        <h1>Welcome to our residence</h1>
        <p>Welcome to our charming resort, where relaxation meets excitement. Unwind in our cozy rooms and cottages, surrounded by nature's beauty. Dive into the fun with our fantastic facilities – from a refreshing pool to spaces designed for your celebrations. Your perfect getaway is just a stay away at our resort, where happiness comes naturally.</p>
      </div>
    </div>
    
    <section class="welcome">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 mb-4">
            <div class="welcome-images">
              <div class="card">
                <img class="" src="img/gallery/night.png" alt="Card image cap">
              </div>
              <div class="card">
                <img class="" src="img/gallery/dayss.jpg" alt="Card image cap">
              </div>
              <div class="card">
                <img class="" src="img/b4.HEIC" alt="Card image cap">
              </div>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="welcome-content">
              <p>Indulge in the comfort of our well-appointed accommodations and savor the moments in our serene surroundings. Whether you're here for a peaceful escape or a joyous event, our resort offers the ideal blend of simplicity and luxury. Experience the magic of our haven – where each stay is a promise of unforgettable memories.</p>
              <a class="button button--active home-banner-btn mt-4" href="#">Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <!-- ================ welcome section end ================= --> 


    <!-- ================ highlights section start ================= -->
    <section class="section-padding bg-porcelain">
      <div class="">
        <div class="container section-intro text-center">
          <div class="section-intro__style">
            <img src="img/home/bed-icon.png" alt="">
          </div>
          <h2>Facilities &#38; Events Highlights</h2>
          <p>Our Gallery</p>
        </div>     
        <div class="gallery">
          <div class="gallery__item">
            <img src="./img/gallery/kubo.jpg" alt="">
            <div class="gallery__item__overlay">
              <h4>Kubo</h4>
            </div>
            <div class="gallery__item__title">
              <h4>Kubo</h4>
            </div>
          </div>
          <div class="gallery__item">
            <img src="./img/gallery/gallery7.jpg" alt="">
            <div class="gallery__item__overlay">
              <h4>Function Hall</h4>
            </div>
            <div class="gallery__item__title">
              <h4>Function Hall</h4>
            </div>
          </div>
          <div class="gallery__item">
            <img src="./img/gallery/dayss.jpg" alt="">
            <div class="gallery__item__overlay">
              <h4>Open Space</h4>
            </div>
            <div class="gallery__item__title">
              <h4>Open Space</h4>
            </div>
          </div>
          <div class="gallery__item">
            <img src="./img/gallery/morning.jpg" alt="">
            <div class="gallery__item__overlay">
              <h4>Pool</h4>
            </div>
            <div class="gallery__item__title">
              <h4>Pool</h4>
            </div>
          </div>
  
        </div>
      </div>
    </section>
    <!-- ================ highlights section end ================= -->

    <!-- ================ carousel section start ================= -->
    <section class="section-margin">
      <div class="container">
        <div class="section-intro text-center">
          <div class="section-intro__style">
            <img src="img/home/bed-icon.png" alt="">
          </div>
          <h2>Testimonials</h2>
          <p>What others think about us</p>
        </div>
        <div class="owl-carousel owl-theme testi-carousel">
          <div class="testi-carousel__item">
            <div class="media">
              <div class="testi-carousel__img">
                <img src="img/gallery/tes2.png" alt="">
              </div>
              <div class="media-body">
                <p>The resort is beautiful and friendly ang mga staff!</p>
                <div class="testi-carousel__intro">
                  <h3>Kate De Leon</h3>
                  <p>Customer</p>
                </div>
              </div>
            </div>
          </div>

          <div class="testi-carousel__item">
            <div class="media">
              <div class="testi-carousel__img">
                <img src="img/gallery/tes3.png" alt="">
              </div>
              <div class="media-body">
                <p>Will recommend to my family and friends!</p>
                <div class="testi-carousel__intro">
                  <h3>Atasha Valdez</h3>
                  <p>Customer</p>
                </div>
              </div>
            </div>
          </div>

          <div class="testi-carousel__item">
            <div class="media">
              <div class="testi-carousel__img">
                <img src="img/gallery/tes4.png" alt="">
              </div>
              <div class="media-body">
                <p>Napaka-friendly ng staff! Maganda ang service.</p>
                <div class="testi-carousel__intro">
                  <h3>Jake Nolasco</h3>
                  <p>Customer</p>
                </div>
              </div>
            </div>
          </div>

          <div class="testi-carousel__item">
            <div class="media">
              <div class="testi-carousel__img">
                <img src="img/gallery/tes1.png" alt="">
              </div>
              <div class="media-body">
                <p>Hindi lang maganda, malinis pa! Perfect para sa relaxation.</p>
                <div class="testi-carousel__intro">
                  <h3>Jane Reyes</h3>
                  <p>Customer</p>
                </div>
              </div>
            </div>
          </div>

          <div class="testi-carousel__item">
            <div class="media">
              <div class="testi-carousel__img">
                <img src="img/gallery/tes5.png" alt="">
              </div>
              <div class="media-body">
                <p>Mabilis at maayos ang check-in process. Thumbs up, Juliana's Garden!</p>
                <div class="testi-carousel__intro">
                  <h3>David Alejandro</h3>
                  <p>Customer</p>
                </div>
              </div>
            </div>
          </div>

          <div class="testi-carousel__item">
            <div class="media">
              <div class="testi-carousel__img">
                <img src="img/gallery/tes6.png" alt="">
              </div>
              <div class="media-body">
                <p>Our stay at Juliana's Garden was absolutely delightful! Thanks for the excellent service!</p>
                <div class="testi-carousel__intro">
                  <h3>Carl Ignacio</h3>
                  <p>Customer</p>
                </div>
              </div>
            </div>
          </div>

          <div class="testi-carousel__item">
              <div class="media">
                <div class="testi-carousel__img">
                  <img src="img/gallery/tes7.png" alt="">
                </div>
                <div class="media-body">
                  <p>The ambiance is stunning, feels like you're in paradise!</p>
                  <div class="testi-carousel__intro">
                    <h3>John Ramirez</h3>
                    <p>Customer</p>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="testi-carousel__item">
              <div class="media">
                <div class="testi-carousel__img">
                  <img src="img/home/testimonial2.png" alt="">
                </div>
                <div class="media-body">
                  <p>The food is delicious! Worth every penny. Thank you, Juliana's Garden</p>
                  <div class="testi-carousel__intro">
                    <h3>Kirk Legazpi</h3>
                    <p>Customer</p>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </section>
    <!-- ================ carousel section end ================= -->
  </main>



  <!-- ================ start footer Area ================= -->
  <footer class="footer-area section-gap">
    <div class="container">
      <div class="row align-items-center justify-content-between">
        <div class="col-lg-8 col-md-12 d-flex flex-column flex-lg-row align-items-center">
          <p class="footer-text m-0 mr-lg-4 mb-3 mb-lg-0">
            <span class="text-uppercase">©</span> <script>document.write(new Date().getFullYear());</script> Juliana's Garden. All rights reserved.
          </p>
          <div class="ml-auto d-none d-md-block d-md-flex">
            <div class="media header-top-info align-items-center">
              <span class="header-top-info__icon"></i></span>
            </div>
            <div class="media header-top-info align-items-center ml-3">
              <span class="header-top-info__icon"><i class="ti-email"></i></span>
              <div class="media-body ml-2">
                <p class="mb-0">Have any questions?</p>
                <p class="mb-0"><a href="mailto:julianashaven@gmail.com" class="text-decoration-none">julianashaven@gmail.com</a></p>
                <p class="mb-0"><a href="tel:+639071020700" class="text-decoration-none">+63 9071020700</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12 text-lg-right">
          <div class="footer-social">
            <a href="#" class="text-dark"><i class="fab fa-facebook-f"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  
  
  <!-- ================ End footer Area ================= -->



  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/magnefic-popup/jquery.magnific-popup.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="vendors/easing.min.js"></script>
  <script src="vendors/superfish.min.js"></script>
  <script src="vendors/nice-select/jquery.nice-select.min.js"></script>
  <script src="vendors/jquery.ajaxchimp.min.js"></script>
  <script src="vendors/mail-script.js"></script>
  <script src="js/main.js"></script>
  <script>
        document.addEventListener('DOMContentLoaded', function () {
  var footer = document.querySelector('footer');
  var header = document.querySelector('header');

  window.addEventListener('scroll', function () {
    var scrollPosition = window.scrollY;
    var windowHeight = window.innerHeight;
    var bodyHeight = document.body.offsetHeight;

    // Calculate how far from the bottom of the page we are
    var distanceToBottom = bodyHeight - (scrollPosition + windowHeight);

    // Show the footer when nearing the bottom of the page
    if (distanceToBottom < 200) {
      footer.classList.add('visible');
    } else {
      footer.classList.remove('visible');
    }

    // Fade the header when nearing the bottom of the page
    if (distanceToBottom < 500) {
      header.style.opacity = '0';
    } else {
      header.style.opacity = '1';
    }
  });
});

  </script>
</body>
</html>
