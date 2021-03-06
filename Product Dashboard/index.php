<?php
   session_start();
if(isset($_SESSION['userid']) && !empty($_SESSION['userid'])){
  include('DBConnect.php');
  $sql = "select * from epicnames";
  $result = mysqli_query($con, $sql);
  echo '<!DOCTYPE html>
  <html lang="en">
  
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
    <!-- Box icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
  
    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="./css/styles.css" />
    <title>Codevo - Ecommerce Website</title>
  </head>
  
  <body>
    <!-- Header -->
    <header id="home" class="header">
      <!-- Navigation -->
      <nav class="nav">
        <div class="navigation container">
          <div class="logo">
            <h1>Epic Games</h1>
          </div>
  
          <div class="menu">
            <div class="top-nav">
              <div class="logo">
                <h1>Codevo</h1>
              </div>
              <div class="close">
                <i class="bx bx-x"></i>
              </div>
            </div>
  
            <ul class="nav-list">
              <li class="nav-item">
                <a href="logout.php" class="nav-link">Home</a>
              </li>
              <li class="nav-item">
                <a href="product.php" class="nav-link">Products</a>
              </li>              
              <li class="nav-item">
                <a href="logout.php" class="nav-link">About</a>
              </li>
              <li class="nav-item">
                <a href="logout.php" class="nav-link">Contact</a>
              </li>
              <li class="nav-item">
                <a href="logout.php" class="nav-link">Logout</a>
              </li>
              <li class="nav-item">
                <a href="Cart.php" class="nav-link icon"><i class="bx bx-shopping-bag"></i></a>
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
  
      <!-- Hero -->
      <img src="./images/MainBanner.png" alt="" class="hero-img" />
  
      <div class="hero-content">
        <h2><span class="discount">70% </span> SALE OFF</h2>
        <h1>
          <span>Summer Vibes</span>
          <span>mode on</span>
        </h1>
        <a class="btn" href="#">shop now</a>
      </div>
    </header>
  
    <!-- Main -->
    <main>
      <section class="advert section">
        <div class="advert-center container">
          <div class="advert-box">
            <div class="dotted">
              <div class="content">
                <h2>
                  Action <br />
                  Games
                </h2>
                <h4>Worlds Best Brands</h4>
              </div>
            </div>
            <img src="./images/Catagory1.png" alt="">
          </div>
  
          <div class="advert-box">
            <div class="dotted">
              <div class="content">
                <h2>
                  FPP <br />
                  Shooting
                </h2>
                <h4>Worlds Best Brands</h4>
              </div>
            </div>
            <img src="./images/Catagory2.png" alt="">
          </div>
  
          <div class="advert-box">
            <div class="dotted">
              <div class="content">
                <h2>
                  Battle<br />
                  Royale
                </h2>
                <h4>Worlds Best Brands</h4>
              </div>
            </div>
            <img src="./images/Catagory3.png" alt="">
          </div>
        </div>
      </section>
  
      <!-- Featured -->
      <section class="section featured">
        <div class="title">
          <h1>Featured Products</h1>
        </div>
        <div class="product-center container">
      ';
  $count = 0;
  while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC) and $count <= 3) {
      $count++;
      echo '<div class="product">
      <div class="product-header">
      <img src=".'.$row["dashboardimage"].'" alt="">
        <ul class="icons">
          <span><i class="bx bx-heart"></i></span>
          <a href="addToCart.php?pr_id='.$row["id"].'&here=index.php';
                    echo '">
          <span><i class="bx bx-shopping-bag"></i></span>
          <span><i class="bx bx-search"></i></span>
        </ul>
      </div>
      <div class="product-footer">
      <a href="product-details.php?product_id='.$row["id"].'">  
          <h3>'.$row["name"].'</h3>
        </a>
        <div class="rating">
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bx-star"></i>
        </div>
        <h4 class="price">&#8377;'.$row["price"].'</h4>
      </div>
    </div>';  
  }
  echo '    
  </div>
        </div>
      </section>
  
      <!--Latest -->
      <section class="section featured">
        <div class="title">
          <h1>Latest Products</h1>
        </div>      
        ';      
        $count = 1;
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC) and $count <= 8) {                    
            if($count == 1 or $count == 5){
                echo $count;
                echo '<div class="product-center container">';
            }
            echo '
              <div class="product">
              <div class="product-header">
              <img src=".'.$row["dashboardimage"].'" alt="">
                  <ul class="icons">
                  <span><i class="bx bx-heart"></i></span>
                  <a href="addToCart.php?pr_id='.$row["id"].'&here=index.php';
                    echo '">
                  <span><i class="bx bx-shopping-bag"></i></span>
                  <span><i class="bx bx-search"></i></span>
                  </ul>
              </div>
              <div class="product-footer">
              <a href="product-details.php?product_id='.$row["id"].'">  

                  <h3>'.$row["name"].'</h3>
                  </a>
                  <div class="rating">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bx-star"></i>
                  </div>
                  <h4 class="price">&#8377;'.$row["price"].'</h4>
              </div>
            </div>
            ';
            if($count == 4 or $count == 8){
              echo '</div>';
          }                
          $count++;
        }
        echo '                  
      </section>
  
      <!-- Product Banner -->
      <section class="section">
        <div class="product-banner">
          <div class="left">
            <img src="./hd_images/General/DashBoard.jpg" alt="" />
          </div>
          <div class="right">
            <div class="content">
              <h2><span class="discount">70% </span> SALE OFF</h2>
              <h1>
                <span>Collect Your</span>
                <span>Action Collection</span>
              </h1>
              <a class="btn" href="#">shop now</a>
            </div>
          </div>
        </div>
      </section>
  
      <!-- Testimonials -->
      <section class="section">
        <div class="testimonial-center container">
          <div class="testimonial">
            <span>&ldquo;</span>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis,
              fugiat labore. Veritatis et omnis consequatur.
            </p>
            <div class="rating">
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bx-star"></i>
            </div>
            <div class="img-cover">
              <img src="./images/profile1.jpg" alt="" />
            </div>
            <h4>Will Smith</h4>
          </div>
          <div class="testimonial">
            <span>&ldquo;</span>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis,
              fugiat labore. Veritatis et omnis consequatur.
            </p>
            <div class="rating">
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bx-star"></i>
            </div>
            <div class="img-cover">
              <img src="./images/profile2.jpg" alt="" />
            </div>
            <h4>Will Smith</h4>
          </div>
          <div class="testimonial">
            <span>&ldquo;</span>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis,
              fugiat labore. Veritatis et omnis consequatur.
            </p>
            <div class="rating">
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bx-star"></i>
            </div>
            <div class="img-cover">
              <img src="./images/profile3.jpg" alt="" />
            </div>
            <h4>Will Smith</h4>
          </div>
        </div>
      </section>
  
      <!-- Brands -->
      <section class="section">
        <div class="brands-center container">
          <div class="brand">
            <img src="./images/brand1.png" alt="" />
          </div>
          <div class="brand">
            <img src="./images/brand2.png" alt="" />
          </div>
          <div class="brand">
            <img src="./images/brand1.png" alt="" />
          </div>
          <div class="brand">
            <img src="./images/brand2.png" alt="" />
          </div>
          <div class="brand">
            <img src="./images/brand1.png" alt="" />
          </div>
          <div class="brand">
            <img src="./images/brand2.png" alt="" />
          </div>
        </div>
      </section>
    </main>
  
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
                        A-406 Narmada Nagar Bhayander East India
                    </div>
                    <div>
                        <span>
                            <i class="far fa-envelope"></i>
                        </span>
                        EpicGames@gmail.com
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
                        Maharashtra, India
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
  
  </html>';
}
else{   
  echo '<script>alert("Not Loged in Yet !!!\nPlease login first");
        window.location.href = "../index.php"
        </script>';
}
?>