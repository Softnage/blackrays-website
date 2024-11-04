<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="header bg-1">
        <div class="background-image">
            <!-- <img src="images/header-background.jpg" alt=""> -->
        </div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
              <a class="navbar-brand" href="index.html">Blackdarts</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll ms-auto" style="--bs-scroll-height: 100px;">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.html">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.html">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="services.html">Our Services</a>
                  </li>
                  <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button"  data-bs-toggle="dropdown" aria-expanded="true">
                      Our Services
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="about">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li> -->
                  <!-- <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                  </li> -->
                </ul>
                
                <form class="d-flex justify-content-center align-items-center" role="search">
                    <button class="btn button-outline me-2" type="button"><i>Contact Us</i></button>
                </form>
              </div>
            </div>
        </nav>
        <div class="header-content-about">
            <div class="container">
                <div class="row text-start">
                    <h2 class="about-header">Our Proudest Moments</h2>
                    <p class="text-white">
                        Maximize your brand’s potential through our services.
                    </p>
                    <div class="about-buttons">
                        <button class="about mt-3 about-page-button"  onclick="window.location.href='about.html'" >
                            About Blackdarts
                        </button> 
                    </div> 
            </div>
        </div>
    </header>

    <section class="moments py-5">
        <div class="container">
            <div class="section-title">
                <div class="line"></div>
                    CONTENT SAMPLE
                <div class="line"></div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <video width="100%" height="100%" controls >
                        <source src="videos/panacea-asokwa-trailer.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="col-md-6">
                    <video width="100%" height="100%" controls >
                        <source src="videos/panacea-asokwa-trailer.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="col-md-6">
                    <video width="100%" height="100%" controls >
                        <source src="videos/panacea-asokwa-trailer.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="col-md-6">
                    <video width="100%" height="100%" controls >
                        <source src="videos/panacea-asokwa-trailer.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>

    </section>

    <section class="gallery py-5">
        <div class="container gallery-container">
            <img src="images/photography.jpg" alt="" class="gallery-item gallery-item-1" data-index="1">
            <img src="images/photography.jpg" alt="" class="gallery-item gallery-item-2" data-index="2">
            <img src="images/photography.jpg" alt="" class="gallery-item gallery-item-3" data-index="3">
            <img src="images/photography.jpg" alt="" class="gallery-item gallery-item-4" data-index="4">
            <img src="images/photography.jpg" alt="" class="gallery-item gallery-item-5" data-index="5">
            <!-- <img src="" alt="" class="gallery-item gallery-item-1">
            <img src="" alt="" class="gallery-item gallery-item-1">
            <img src="" alt="" class="gallery-item gallery-item-1"> -->
            <div class="gallery-controls"></div>
        </div>
    </section>
    <section class="partners py-5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-4">
              <h2 class="partners-heading">Our partners include</h2>
            </div>
            <div class="col-md-8">
              <section class="customer-logos slider">
                <div class="slide"><img src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg"></div>
                <div class="slide"><img src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg"></div>
                <div class="slide"><img src="https://image.freepik.com/free-vector/blue-tech-logo_1103-822.jpg"></div>
                <div class="slide"><img src="https://image.freepik.com/free-vector/colors-curl-logo-template_23-2147536125.jpg"></div>
                <div class="slide"><img src="https://image.freepik.com/free-vector/abstract-cross-logo_23-2147536124.jpg"></div>
                <div class="slide"><img src="https://image.freepik.com/free-vector/football-logo-background_1195-244.jpg"></div>
                <div class="slide"><img src="https://image.freepik.com/free-vector/background-of-spots-halftone_1035-3847.jpg"></div>
               
              </section>
            </div>
          </div>
        </div>
    </section>
    <section class="work-with-us bg-2">
      <div class="container">
        <div class="row">
          <h1 class="work-heading">
              Work with Blackdarts.
          </h1>
          <p class="text-center text-white">Partner with <span class="black-nary">Blackdarts</span>, our dedicated team is ready to elevate your projects and exceed your expectations.</p>
          <button class="about mt-3" onclick="window.location,href='#'" >
            Connect With Us
          </button>
        </div>
      </div>
    </section>
    <footer class="py-5 text">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            
          </div>
          <div class="col-md-3">
            <h6 class="footer-heading">Home</h6>
            <ul class="footer-list">
              <li>Our Services</li>
              <li>Our Portfolio</li>
              <li>News and Resources</li>
            </ul>
          </div>
          <div class="col-md-3">
            <h6 class="footer-heading">About Us</h6>
            <ul class="footer-list">
              <li>Our Mission</li>
              <li>Our Vision</li>
              <li>Our History</li>
            </ul>
          </div>
          <div class="col-md-3">
            <h6 class="footer-heading">Contact Us</h6>
            <ul class="footer-list">
              <li><i class="bi bi-envelope-fill"></i>info@blackdarts.com</li>
              <li><i class="bi bi-telephone-fill"></i> +233 202 202 2020</li>
              <!-- <li>Our History</li> -->
            </ul>
          </div>
        </div>
      </div>      
    </footer>
    <div class="footer-bottom py-2">
      <div class="container">
        <div class="row">
            <h6 class="text-white">All rights reserved &#169; <span class="black-nary">Blackdarts</span></h6>
        </div>
      </div>
    </div>
    <script src="js/jQuery.js"></script>
    <script src="js/app.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script src="js/slider.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>