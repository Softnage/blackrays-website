<?php include 'header.php' ?>

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
        <div class="header-content-about">
            <div class="container">
                <div class="row text-start">
                    <h2 class="about-header">Contact Us</h2>
                    <p class="text-white">
                        Maximize your brand’s potential through our services.
                    </p>
                    <div class="about-buttons">
                        <button class="about mt-3 about-page-button"  onclick="window.location.href='portfolio.html'" >
                            About Blackdarts
                        </button> 
                    </div> 
            </div>
        </div>
    </header>

    <section class="contact-form-area">
        <div class="container d-flex justify-content-center align-items-center min-vh-100">
            <div class="form-container p-5 text-center text-light">
              <h2 class="form-topic">Lets Have a Chat <span>👋</span></h2>
              <p class="form-text">Questions about our products/services, or just want to say hello? We're here to help</p>
              
              <form>
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" placeholder="First name">
                  </div>
                  <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" placeholder="Last name">
                  </div>
                </div>
                <div class="mb-3">
                  <input type="email" class="form-control" placeholder="Email">
                </div>
                <div class="mb-3">
                  <input type="text" class="form-control" placeholder="Phone number">
                </div>
                <div class="mb-3">
                  <input type="text" class="form-control" placeholder="Subject">
                </div>
                <div class="mb-3">
                  <textarea class="form-control" rows="4" placeholder="Message"></textarea>
                </div>
                <button type="submit" class="btn btn-light w-100">Send message</button>
              </form>
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>