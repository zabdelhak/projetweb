<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>TAWSILA</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,600,700&display=swap" rel="stylesheet">

  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
<div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.html">
            <span>
              TAWSILA
            </span>
          </a>

          <div class="navbar-collapse" id="">
            <div class="user_option">
              <a href="#login">
                Login
              </a>
            </div>
            <div class="custom_menu-btn">
              <button onclick="openNav()">
                <span class="s-1"> </span>
                <span class="s-2"> </span>
                <span class="s-3"> </span>
              </button>
            </div>
            <div id="myNav" class="overlay">
              <div class="overlay-content">
                <a href="login.php">Home</a>
                <a href="sign.php">sign up</a>
                <a href="#login">Login</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div class="slider_container">
        <div class="img-box">
          <img src="images/hero-img.jpg" alt="">
        </div>
        <div class="detail_container">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="detail-box">
                  <h1>
                    sign up <br>
                    IN <br>
                    TAWSILA
                  </h1>
                  <a href="sign.php">
                  sign up 
                </a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>
  <!-- book section -->
  <section class="book_section">
    <div class="form_container" id="login">
    <form action="fonction\flogin.php" method="post">
        <div class="form-row">
          <div class="col-lg-8">
            <div class="form-row">
              <div class="col-md-6">
                <label for="parkingName">email</label>
                <input type="text" class="form-control"  id="email" name="email">
              </div>
              <div class="col-md-6">
                <label for="parkingNumber">Password</label>
                <input type="password" class="form-control" id="mdp"  name="mdp">
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="btn-container">
              <button type="submit" id="loginb">
                Login
              </button>
            </div>
          </div>
        </div>

      </form>
    </div>
    <div class="img-box">
      <img src="images/book-car.png" alt="">
    </div>
  </section>
</body>

<script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="js/custom.js"></script>
</html>
