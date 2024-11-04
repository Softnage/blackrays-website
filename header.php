    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="#"><img class="img-fliud" src="images/blackrays-logo.png" alt=""></a>
        <button
          type="button" class="navbar-toggler"
          data-bs-toggle="modal"
          data-bs-target="#staticBackdrop">
          <input type="checkbox" name="checkbox" id="toggle-menu">
          <label for="toggle-menu" type="button" class="toggle-btn">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
          </label>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul
            class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About Us</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#"
                id="drop_cases"
                role="button"
                data-bs-toggle="dropdown">Our Services</a>
              <ul class="dropdown-menu">
                <li class="nav-item">
                  <a href="web-solutions.php" class="dropdown-item">
                    Web Solutions
                  </a>
                </li>
                <li class="nav-item">
                  <a href="marketing.php" class="dropdown-item">
                    Digital Marketing
                  </a>
                </li>
                <li class="nav-item">
                  <a href="outdoor.php" class="dropdown-item">
                    LED & Outdoor Advertising
                  </a>
                </li>
                <li class="nav-item">
                  <a href="brand.php" class="dropdown-item">
                    Brand & Identity
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Mobile Modal -->
    <div class="modal fade" id="staticBackdrop"
      data-bs-backdrop="static"
      data-bs-keyboard="false"
      tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
          <img src="images/blackrays-logo.png" alt="logo">
        </div>
        <div class="modal-body">
          <ul
            class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.html">
              <i class="fas fa-home"></i>  
              Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
              <i class="fas fa-users"></i>  
              About Us</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#"
                id="drop_cases"
                role="button"
                data-bs-toggle="dropdown">
                <i class="fas fa-service"></i>
                Our Services</a>
              <ul class="dropdown-menu">
                <li class="nav-item">
                  <a href="#" class="dropdown-item">
                    Web Solutions
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="dropdown-item">
                    Digital Advertising
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="dropdown-item">
                    LED & Outdoor Advertising
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="dropdown-item">
                    Brand & Identity
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
              <i class="fas fa-reply-all"></i>  
              Contact Us</a>
            </li>
          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary"
            data-bs-dismiss="modal">
            <label for="toggle-menu">
              Close
            </label>

          </button>
        </div>
        </div>
      </div>

    </div>