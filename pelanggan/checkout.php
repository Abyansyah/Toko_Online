<?php
session_start();
include "../koneksi.php";
$cart=@$_SESSION['cart'];
if(count($cart)>0){


    foreach ($cart as $key_produk => $val_produk) {
        mysqli_query($conn, "insert into transaksi(id_pelanggan, id_produk, tgl_transaksi) value('".$_SESSION['id_pelanggan']."','".$val_produk['id_produk']."','".date("Y/m/d")."')");

        $id=mysqli_insert_id($conn);

        $subtotal = $val_produk['qty']*$val_produk['harga'];

mysqli_query($conn,"insert into detail_transaksi(id_transaksi,qty,subtotal) value('".$id."','".$val_produk['qty']."','".$subtotal."')");
}
unset($_SESSION['cart']);
echo '<script>alert("Anda berhasil membeli produk");location.href="histori.php"</script>';
}

?>