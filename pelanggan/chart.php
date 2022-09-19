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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
  </head>
  <!-- Navbar Start  -->
  <body>
    <section id="header">
      <a href="#"><img src="img/features/logo.svg" class="logo" alt="" /></a>

      <div>
        <ul id="navbar">
          <li><a  href="index.php">Home</a></li>
          <li><a  href="praduk.php">Produk</a></li>
          <li><a href="histori.php">History</a></li>
          <li><a href="logout.php">Logout</a></li>
          <li>
            <a class ="active" href="chart.php"><iconify-icon icon="ant-design:shopping-cart-outlined" alt="cart"></a>
          </li>
        </ul>
      </div>
    </section>
<!-- End of Navbar -->
    

<div class="container" >
<table class="table table-hover striped">
    <thead>
        <tr>
            <th>NO</th>
            <th>Nama Buku</th>
            <th>Jumlah</th>
            <th>Harga Satuan</th>
            <th>Total</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (@$_SESSION['cart']) {
           
        
        // session_start();
        foreach (@$_SESSION['cart'] as $key_produk => $val_produk): 
        $subtotal = $val_produk['harga'] * $val_produk['qty']; ?>
        
            <tr>
                <td><?=($key_produk+1)?></td>
                <td><?=$val_produk['nama_produk']?></td>
                <td><?=$val_produk['qty']?></td>
                <td><?=$val_produk['harga']?></td>
                <td><?=$subtotal?></td>
                <td><a href="hapus_cart.php?id=<?=$key_produk?>" class="btn btn-danger"><strong>X</strong></a></td>
            </tr>

        <?php endforeach ;
        } else {
            echo("
            
            ");
        }
    ?>
    </tbody>
</table>
<a href="checkout.php"  style="background-color: #FFB200; color:#fff;" class="btn ">Check Out</a>
</div>


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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>
