<!DOCTYPE html>
<html>
<head>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <div class="container">
        <h3>Tambah Produk</h3>
        <form action="proses_tambah_produk.php" method="post" enctype="multipart/form-data">
            <label for="">Nama produk</label>
            <input type="text" name="nama_produk" value="" class="form-control">
            <label for="">Deskripsi</label>
            <input type="text" name="desk" value="" class="form-control">
            <label for="">Harga</label>
            <input type="text" name="harga" value="" class="form-control">
            <label for="">Foto produk</label>
            <input type="file" name="foto" value="" class="form-control">
            <br>
            <input type="submit" name="" value="tambah produk" class="btn btn-primary">
            
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>

