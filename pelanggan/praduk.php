<?php 
session_start();
    if($_SESSION['status_login']!=true){
        header('location: ../login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-Commerce</title>
    <script src="https://code.iconify.design/iconify-icon/1.0.0/iconify-icon.min.js"></script>
    <link rel="stylesheet" href="style.css" />
  </head>
  <!-- Navbar Start  -->
  <body>
    <section id="header">
      <a href="#"><img src="img/features/logo.svg" class="logo" alt="" /></a>

      <div>
        <ul id="navbar">
          <li><a  href="index.php">Home</a></li>
          <li><a class ="active" href="praduk.php">Produk</a></li>
          <li><a href="histori.php">History</a></li>
          <li><a  href="logout.php">Logout</a></li>
          <li>
            <a href="chart.php"><iconify-icon icon="ant-design:shopping-cart-outlined" alt="cart"></a>
          </li>
        </ul>
      </div>
    </section>
<!-- End of Navbar -->
    


 <!-- Checkout Page -->
 <section id="product1" class="section-p1">
 <h2>Featured Products</h2>
 <p>Look at newest trend on this year</p> 
<div class="pro-container">
  <div class="pro">
  <?php 
    include "../koneksi.php";
    $qry_buku=mysqli_query($conn,"select * from produk");
    while($dt_buku=mysqli_fetch_array($qry_buku)){
        ?>
    <img src="../petugas/gambar/<?=$dt_buku['foto_produk']?>" alt="">
    <div class="des">
      <span><?=$dt_buku['nama_produk']?></span>
      <h5>Rp. <?=substr($dt_buku['harga'], 0,20)?></h5>
      <button style="padding: 8px 8px; font-size: 10px; margin-top: 4px;"><a style="text-decoration:none; color: white; font-family" href="beli.php?id_produk=<?=$dt_buku['id_produk']?>">Beli Produk</a></button>
    </div>
    <?php
    }
    ?>
  </div>
  

</div>
 </section>

 <!-- Promo Banner  -->
 <section id="banner" class="section-m1">
    <h4>Discover Your Fits</h4>
    <h2>Up to <span>75% off</span> - All Brands</h2>
    <button>Find more</button>
 </section>

 <!-- Offers Banner -->
 <section id="sm-banner" class="section-p1">
    <div class="banner-box">
        <h4>Best deals</h4>
        <h2>Cashback up to IDR 500.000</h2>
        <span>for limited products</span>
        <button class="white">Learn More</button>
    </div>

    <div class="banner-box box2">
      <h4>Pick What's Fit On You</h4>
      <h2>Search In Specific Categories</h2>
      <span>Beauty and Fabulous</span>
      <button class="white">Collection</button>
  </div>
 </section>

 <!-- Newsletter Subscription -->
 <section id="newsletter" class="section-p1 section-m1">
    <div class="newstext">
        <h4>Sign Up For Newsletter</h4>
        <p>Get e-mail updates about our latest item and <span>special offers</span></p>
    </div>

    <div class="form">
      <input type="text" placeholder="Your Email Address">
      <button class="normal">Sign Up</button>
    </div>
 </section>

 <!-- Footer -->
    <footer class="section-p1">
      <div class="col">
        <h4>Contact</h4>
        <p><strong>Address</strong> : Jl. Danau Ranau Sawojajar, Kota Malang</p>
        <p><strong>Phone</strong> : (0341) 712500</p>
        <p><strong>Hours</strong> : 06:15 - 15.15 WIB, Mon - Fri</p>

        <div class="follow">
          <h4>Follow Us</h4>
          <div class="icon">
            <a href="https://www.youtube.com/c/smktelkommalang"><iconify-icon icon="ant-design:youtube-filled"></iconify-icon></a>
            <a href="https://www.instagram.com/smktelkommalang/"><iconify-icon icon="ant-design:instagram-filled"></iconify-icon></a>
            <a href="https://smktelkom-mlg.sch.id/"><iconify-icon icon="ant-design:search-outlined"></iconify-icon></a>
          </div>
        </div>
      </div>

        <div class="col">
            <h4>About</h4>
            <a href="#">About Us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Contact Us</a>
        </div>

        <div class="col">
          <h4>My Account</h4>
          <a href="#">Sign-In</a>
          <a href="#">View Cart</a>
          <a href="#">My Wishlist</a>
          <a href="#">Track My Order</a>
          <a href="#">Help</a>
      </div>

        <div class="row">
          <p>Payment Methods</p>
          <img src="img/footer/gopay.svg" alt="Gopay">
          <img src="img/footer/linkAja.svg" alt="linkAja">
          <img src="img/footer/jenius.svg" alt="Jenius">
        </div>

        <div class="copyright">
          <p>&copy XI RPL 1 Legion 30 - SMK Telkom Malang</p>
        </div>
    </footer>
    <script src="script.js"></script>
  </body>
</html>
