<?php
if($_POST){
    $nama_pelanggan=$_POST['nama_pelanggan'];
    $alamat=$_POST['alamat'];
    $telephone=$_POST['telephone'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    if(empty($nama_pelanggan)){
        echo "<script>alert('nama pelanggan tidak boleh kosong');location.href='Tambah_pelanggan.php';</script>";

    } elseif(empty($username)){
        echo "<script>alert('kelompok tidak boleh kosong');location.href='Tambah_pelanggan.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('nama telephone tidak boleh kosong');location.href='Tambah_pelanggan.php';</script>";

    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into pelanggan (nama_pelanggan, alamat, telephone, username, password) value ('".$nama_pelanggan."','".$alamat."','".$telephone."','".$username."','".$password."')");
        if($insert){
            echo "<script>alert('Sukses menambahkan pelanggan');location.href='login.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan pelanggan');location.href='login.php';</script>";
        }
    }
}
?>
