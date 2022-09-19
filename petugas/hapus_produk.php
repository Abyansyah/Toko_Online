<?php
    if($_GET['id_produk']){
        include "../koneksi.php";
        $qry_hapus=mysqli_query($conn,"delete from produk where
        id_produk='".$_GET['id_produk']."'");
    if($qry_hapus){
        echo "<script>alert('Sukses hapus siswa');location.href='tables.php';</script>";
    } else {
        echo "<script>alert('Gagal hapus siswa');location.href='tables.php';</script>";
}
}
?>