<?php
include('DBConnect.php');
$product_id=$_GET['product_id'];
$sql = "select * from epicnames where id=$product_id";
$result = mysqli_query($con, $sql);

echo'
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Favicon -->
  <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">

  <!-- Box icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />

  <!-- Glidejs -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css" />
  <!-- Custom StyleSheet -->
  <link rel="stylesheet" href="./css/styles.css" />
  <title>Boy’s T-Shirt - Codevo</title>
</head>

<body>
  <!-- Navigation -->
  <nav class="nav">
    <div class="navigation container">
      <div class="logo">
        <h1>Epic games</h1>
      </div>

      <div class="menu">
        <div class="top-nav">
          <div class="logo">
            <h1>Epic Games </h1>
          </div>
          <div class="close">
            <i class="bx bx-x"></i>
          </div>
        </div>

        <ul class="nav-list">
          <li class="nav-item">
            <a href="index.html" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="product.html" class="nav-link">Products</a>
          </li>
          <li class="nav-item">
            <a href="#about" class="nav-link">About</a>
          </li>
          <li class="nav-item">
            <a href="#contact" class="nav-link">Contact</a>
          </li>
          <li class="nav-item">
            <a href="#account" class="nav-link">Account</a>
          </li>
          <li class="nav-item">
            <a href="cart.html" class="nav-link icon"><i class="bx bx-shopping-bag"></i></a>
          </li>
        </ul>
      </div>

      <a href="cart.html" class="cart-icon">
        <i class="bx bx-shopping-bag"></i>
      </a>

      <div class="hamburger">
        <i class="bx bx-menu"></i>
      </div>
    </div>
  </nav>

  <!-- Product Details -->
  <section class="section product-detail">
    <div class="details container-md">
    ';while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
      echo'
      <div class="left">
        <div class="main">
          <img src=".'.$row["dashboardimage"].'" alt="">
        </div>
        <div class="thumbnails">
        <div class="thumbnail">
          <img src=".'.$row["productimage"].'" alt="">
        </div>
        <div class="thumbnail">
          <img src=".'.$row["productimage2"].'" alt="">
        </div>
        <div class="thumbnail">
          <img src=".'.$row["productimage3"].'" alt="">
        </div>
      </div>

      </div>

      <div class="right">
        <span></span>
        <h1>'.$row["name"].'</h1>
        <div class="price">'.$row["price"].'</div>              
        <h3>Product Detail</h3>
        <p>'.$row["description"].'</p>
      </div>
      ';}echo'
    </div>
  </section>

  <!-- Related -->

  <section class="section featured">
    <div class="top container">

      <h1>Related Products</h1>
      <a href="#" class="view-more">View more</a>
    </div>

    <div class="product-center container">
      <div class="product">
        <div class="product-header">
          <img src=".\images\anthem.jpg" alt="">
          <ul class="icons">
            <span><i class="bx bx-heart"></i></span>
            <span><i class="bx bx-shopping-bag"></i></span>
            <span><i class="bx bx-search"></i></span>
          </ul>
        </div>
        <div class="product-footer">
          <a href="#"><h3>Anthem</h3></a>
          <div class="rating">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bx-star"></i>
          </div>
          <h4 class="price">$1990</h4>
        </div>
      </div>
      <div class="product">
        <div class="product-header">
          <img src="./images/fc.jpg" alt="">

          <ul class="icons">
            <span><i class="bx bx-heart"></i></span>
            <span><i class="bx bx-shopping-bag"></i></span>
            <span><i class="bx bx-search"></i></span>
          </ul>
        </div>
        <div class="product-footer">
          <a href="#"><h3>far cry</h3></a>
          <div class="rating">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bx-star"></i>
          </div>
          <h4 class="price">$1690</h4>
        </div>
      </div>
      <div class="product">
        <div class="product-header">
          <img src="./images/fortnite.jpg" alt="">

          <ul class="icons">
            <span><i class="bx bx-heart"></i></span>
            <span><i class="bx bx-shopping-bag"></i></span>
            <span><i class="bx bx-search"></i></span>
          </ul>
        </div>
        <div class="product-footer">
          <a href="#"><h3>fornite</h3></a>
          <div class="rating">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bx-star"></i>
          </div>
          <h4 class="price">$1599</h4>
        </div>
      </div>
      <div class="product">
        <div class="product-header">
          <img src=".\images\apex.jpg" alt="">

          <ul class="icons">
            <span><i class="bx bx-heart"></i></span>
            <span><i class="bx bx-shopping-bag"></i></span>
            <span><i class="bx bx-search"></i></span>
          </ul>
        </div>
        <div class="product-footer">
          <a href="#"><h3>apex</h3></a>
          <div class="rating">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bx-star"></i>
          </div>
          <h4 class="price">$1599</h4>
        </div>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <footer id="footer" class="section footer">
    <div class="container">
      <div class="footer-container">
        <div class="footer-center">
          <h3>EXTRAS</h3>
          <a href="#">Brands</a>
          <a href="#">Gift Certificates</a>
          <a href="#">Affiliate</a>
          <a href="#">Specials</a>
          <a href="#">Site Map</a>
        </div>
        <div class="footer-center">
          <h3>INFORMATION</h3>
          <a href="#">About Us</a>
          <a href="#">Privacy Policy</a>
          <a href="#">Terms & Conditions</a>
          <a href="#">Contact Us</a>
          <a href="#">Site Map</a>
        </div>
        <div class="footer-center">
          <h3>MY ACCOUNT</h3>
          <a href="#">My Account</a>
          <a href="#">Order History</a>
          <a href="#">Wish List</a>
          <a href="#">Newsletter</a>
          <a href="#">Returns</a>
        </div>
        <div class="footer-center">
          <h3>CONTACT US</h3>
          <div>
            <span>
              <i class="fas fa-map-marker-alt"></i>
            </span>
            42 Dream House, Dreammy street, 7131 Dreamville, USA
          </div>
          <div>
            <span>
              <i class="far fa-envelope"></i>
            </span>
            company@gmail.com
          </div>
          <div>
            <span>
              <i class="fas fa-phone"></i>
            </span>
            456-456-4512
          </div>
          <div>
            <span>
              <i class="far fa-paper-plane"></i>
            </span>
            Dream City, USA
          </div>
        </div>
      </div>
    </div>
    </div>
  </footer>
  <!-- End Footer -->

  <!-- GSAP -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
  <!-- Custom Script -->
  <script src="./js/index.js"></script>
</body>

</html>
';?>