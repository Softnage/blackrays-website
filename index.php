

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
  </head>
  <body>
  <header class="header bg-8">
      <video autoplay muted loop class="background-video">
        <source src="" type="video/mp4" />
      </video>
      <?php include 'header.php'; ?>
      <div class="header-content">
        <div class="container">
          <div class="row text-center">
            <h1 class="header-heading">
              Crafting Your Digital Presence, One Step at a Time.
            </h1>
            <p class="text-white">
              Maximize your brand’s potential through our services.
            </p>
            <button class="send">
              <span class="button-decor"></span>
              <div class="button-content">
                <div class="button__icon">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-send-check-fill"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 1.59 2.498C8 14 8 13 8 12.5a4.5 4.5 0 0 1 5.026-4.47zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471z"
                    />
                    <path
                      d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0m-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686"
                    />
                  </svg>
                </div>
                <span class="button__text">Get Started With Us</span>
              </div>
            </button>
          </div>
        </div>
      </div>
    </header>

    <section class="what-we-do py-5">
      <div class="container">
        <div class="row text-center py-3 section-title">
          <div class="line"></div>
          WHAT WE DO
          <div class="line"></div>
        </div>
        <div class="row">
          <div class="col-md-12 hero-text">
            <p class="what-we-do-summary">
              <span class="black-nary">Blackrays</span> is a leading multimedia
              and production agency based in Ghana, with locations in Accra and
              Kumasi, dedicated to delivering top-tier digital and outdoor
              marketing solutions.
            </p>
          </div>
          <button class="about mt-3" onclick="window.location.href='#'">
            About Blackrays
          </button>
        </div>
      </div>
    </section>
    <section class="services py-5">
      <div class="d-flex align-items-start">
        <div class="container hidden">
          <a href=""><h1 class="services-heading">Our Services</h1></a>
          <div class="row py-5">
            <div class="col-md-4">
              <div
                class="nav flex-column nav-pills me-3"
                id="v-pills-tab"
                role="tablist"
                aria-orientation="vertical"
              >
                <button
                  class="nav-link active"
                  id="v-pills-home-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#v-pills-home"
                  type="button"
                  role="tab"
                  aria-controls="v-pills-home"
                  aria-selected="true"
                >
                  Web Solutions
                </button>
                <button
                  class="nav-link"
                  id="v-pills-profile-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#v-pills-profile"
                  type="button"
                  role="tab"
                  aria-controls="v-pills-profile"
                  aria-selected="false"
                >
                  Digital Marketing
                </button>
                <button
                  class="nav-link"
                  id="v-pills-contact-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#v-pills-contact"
                  type="button"
                  role="tab"
                  aria-controls="v-pills-contact"
                  aria-selected="false"
                >
                  LED & Outdoor Advertising
                </button>
                <button
                  class="nav-link"
                  id="v-pills-service-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#v-pills-service"
                  type="button"
                  role="tab"
                  aria-controls="v-pills-service"
                  aria-selected="false"
                >
                  Brand and Identity
                </button>
              </div>
            </div>
            <div class="col-md-8">
              <div class="tab-content" id="v-pills-tabContent">
                <div
                  class="tab-pane fade show active"
                  id="v-pills-home"
                  role="tabpanel"
                  aria-labelledby="v-pills-home-tab"
                  tabindex="0"
                >
                  <div class="services-body">
                    <img src="images/web-dev-solutions.png" alt="" />
                    <div class="services-overlay">
                      <img
                        class=""
                        src="images/icons/web-solutions.png"
                        alt=""
                      />
                      <p class="text-justify">
                        A strong online presence is non-negotiable in today’s
                        world. We provide cutting-edge web development, design,
                        and maintenance to ensure your digital identity is not
                        only attractive but also functional and user-friendly.
                      </p>
                    </div>
                  </div>
                </div>
                <div
                  class="tab-pane fade"
                  id="v-pills-profile"
                  role="tabpanel"
                  aria-labelledby="v-pills-profile-tab"
                  tabindex="0"
                >
                  <div class="services-body2">
                    <img src="images/digital-marketing.png" alt="" />
                    <div class="services-overlay2">
                      <p class="text-justify">
                        From SEO to social media, our digital marketing
                        strategies are designed to put your brand in front of
                        the right audience. We craft custom campaigns to boost
                        your online visibility and drive engagement.
                      </p>
                    </div>
                  </div>
                </div>
                <div
                  class="tab-pane fade"
                  id="v-pills-contact"
                  role="tabpanel"
                  aria-labelledby="v-pills-contact-tab"
                  tabindex="0"
                >
                  <div class="services-body">
                    <img src="images/outdoor-and-advertsing.png" alt="" />
                    <div class="services-overlay">
                      <p class="text-justify">
                        Capture attention with high-impact outdoor advertising.
                        Our LED displays and out-of-home media solutions ensure
                        your brand is seen and remembered across high-traffic
                        locations.
                      </p>
                    </div>
                  </div>
                </div>
                <div
                  class="tab-pane fade"
                  id="v-pills-service"
                  role="tabpanel"
                  aria-labelledby="v-pills-service-tab"
                  tabindex="0"
                >
                  <div class="services-body2">
                    <img src="images/brand-identity.png" alt="" />
                    <div class="services-overlay2">
                      <p class="text-justify">
                        Your brand is your promise to your audience. Our
                        branding and identity services shape how the world sees
                        you, ensuring every element, from logos to color
                        schemes, aligns with your vision.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="why-choose-why">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-7">
            <h6 class="why-choose-head">Why choose Us</h6>
            <h2 class="why-choose-heading">
              Leading Digital Advertising and Branding Agency In Ghana and
              Beyond
            </h2>
            <p class="text-white">
              Blackrays is your partner for creative, strategic solutions that
              make an impact. With expertise across digital and outdoor
              platforms, we deliver customized, measurable results to elevate
              your brand and drive lasting success.
            </p>
            <div class="about-buttons">
              <button
                class="about mt-3 about-page-button"
                onclick="window.location.href='portfolio.html'"
              >
                Discover More
              </button>
            </div>
          </div>
          <div class="col-md-5">
            <div class="row mb-3">
              <div class="col-md-6 col-sm-12">
                <div class="boxes p-4">
                  <img class="mb-3" src="images/icons/solution.png" alt="" />
                  <h3 class="why-headings">Innovative Solutions</h3>
                </div>
                <!-- <p class="text-white">We bring fresh, creative strategies tailored to make your brand stand out in today’s competitive market.</p> -->
              </div>
              <div class="col-md-6 col-sm-12">
                <div class="boxes p-4">
                  <img
                    class="mb-3"
                    src="images/icons/proven-espertise.png"
                    alt=""
                  />
                  <h3 class="why-headings">Proven Expertise</h3>
                </div>
                <!-- <p class="text-white">We bring fresh, creative strategies tailored to make your brand stand out in today’s competitive market.</p> -->
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-sm-12">
                <div class="boxes p-4">
                  <img class="mb-3" src="images/icons/client.png" alt="" />
                  <h3 class="why-headings">Client-Centric Approah</h3>
                </div>
                <!-- <p class="text-white">We bring fresh, creative strategies tailored to make your brand stand out in today’s competitive market.</p> -->
              </div>
              <div class="col-md-6 col-sm-12">
                <div class="boxes p-4">
                  <img class="mb-3" src="images/icons/measurable.png" alt="" />
                  <h3 class="why-headings">Measurable Impact</h3>
                </div>
                <!-- <p class="text-white">We bring fresh, creative strategies tailored to make your brand stand out in today’s competitive market.</p> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- <section class="sevices py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <a href="">
              <div class="services-body">
                <img src="images/photography.jpg" alt="image-1 here">
                <div class="services-overlay">
                  <p>
                    We are a multimedia
                    agency with good 
                    production and 
                    a good content 
                    creation
                    management
                  </p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-6">
            <a href="">
              <div class="services-body">
                <img src="images/africa.jpg" alt="image-1 here">
                <div class="services-overlay">
                  <p>
                    We are a multimedia
                    agency with good 
                    production and 
                    a good content 
                    creation
                    management
                  </p>
                </div>
              </div>
            </a>
          </div>
          <button class="about mt-5" onclick="window.location.href='services.html'" >
            Our Services
          </button>
        </div>
      </div>
    </section> -->
    

    <section class="experience py-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <img class="img-fluid" src="images/laptop.png" alt="" />
          </div>
          <div class="col-md-6">
            <h6 class="why-choose-head">our experience</h6>
            <h3 class="why-choose-heading">
              Digital Solutions, Branding & Identity
            </h3>
            <p class="text-white">
              With years of experience, Blackrays has brought brands to life
              through digital and outdoor marketing. Our team blends technical
              expertise with creative insight, working with clients from
              startups to established brands. We don’t just follow trends—we set
              them, keeping our clients ahead in a fast-evolving market.
            </p>
            <div class="about-buttons">
              <button
                class="about mt-3 about-page-button"
                onclick="window.location.href='portfolio.html'"
              >
                Get in touch
              </button>
            </div>
          </div>
        </div>
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
              <div class="slide">
                <img
                  src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg"
                />
              </div>
              <div class="slide">
                <img
                  src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg"
                />
              </div>
              <div class="slide">
                <img
                  src="https://image.freepik.com/free-vector/blue-tech-logo_1103-822.jpg"
                />
              </div>
              <div class="slide">
                <img
                  src="https://image.freepik.com/free-vector/colors-curl-logo-template_23-2147536125.jpg"
                />
              </div>
              <div class="slide">
                <img
                  src="https://image.freepik.com/free-vector/abstract-cross-logo_23-2147536124.jpg"
                />
              </div>
              <div class="slide">
                <img
                  src="https://image.freepik.com/free-vector/football-logo-background_1195-244.jpg"
                />
              </div>
              <div class="slide">
                <img
                  src="https://image.freepik.com/free-vector/background-of-spots-halftone_1035-3847.jpg"
                />
              </div>
            </section>
          </div>
        </div>
      </div>
    </section>

    <section class="finest-multi py-5">
      <div class="container py-5">
        <div class="row text-center">
          <h2 class="partners-heading">GHANA’S FINEST DIGITAL SPECIALISTS</h2>
          <p class="what-we-do-summary">
            As a <span class="black-nary">Ghanaian based </span> company,
            Blackrays specializes in branding and identity across the African
            continent. With key partners and in-depth knowledge, we excel in
            navigating and adapting to challenging environments.
          </p>
          <button class="about mt-5" onclick="window.location,href='#'">
            Connect With us
          </button>
        </div>
      </div>
    </section>
    <section>
      <div class="section-title">
        <div class="line"></div>
        TRUSTED BY TOP BRANDS
        <div class="line"></div>
      </div>
      <div class="testimonial-container text-center">
        <div class="progress-bar"></div>
        <div class="fas fa-quote-left fa-quote"></div>
        <div class="fas fa-quote-right fa-quote"></div>
        <p class="testimonial">
          Since applying the Copercoat system I have been delighted with its
          performance. There's been much less weed build-up than in previous
          years, and what did appear has been easy to remove. It’s quite a high
          initial outlay, but a lot of money will be saved over the years and it
          seems to work as a very effective anti-fouling with the bonus of
          offering good hull protection.
        </p>
        <div class="user">
          <img src="images/black.jpg" alt="user" class="user-image" />
          <div class="user-details">
            <h4 class="username">Serena Black</h4>
            <p class="role">Model</p>
          </div>
        </div>
      </div>
    </section>
    <footer class="py-5 text">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <img class="img-fluid footer-logo" src="images/blackrays-logo.png" alt="">
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
              <li><i class="bi bi-envelope-fill"></i>info@blackrays.com</li>
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
          <h6 class="text-white">
            All rights reserved &#169;
            <span class="black-nary">Blackrays</span>
          </h6>
        </div>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
      integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
      crossorigin="anonymous"
    ></script>
    <script src="js/app.js"></script>
    <!-- Alpine Slider Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.2/cdn.js"></script>
    <script
      src="https://code.jquery.com/jquery-2.2.0.min.js"
      type="text/javascript"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script src="js/slider.js"></script>
  </body>
</html>
