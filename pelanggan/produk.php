<?php 
    include "header.php";
?>
<h2>Daftar Produk</h2>
<div class="row">
    <?php 
    include "../koneksi.php";
    $qry_buku=mysqli_query($conn,"select * from produk");
    while($dt_buku=mysqli_fetch_array($qry_buku)){
        ?>
        <div class="col-md-3">
            <div class="card" >
              <img src="../petugas/gambar/<?=$dt_buku['foto_produk']?>" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title"><?=$dt_buku['nama_produk']?></h5>
                <p class="card-text">Rp. <?=substr($dt_buku['harga'], 0,20)?></p>
                <a href="beli_produk.php?id_produk=<?=$dt_buku['id_produk']?>" class="btn btn-primary">Beli</a>
              </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>
<?php 
    include "footer.php";
?>
