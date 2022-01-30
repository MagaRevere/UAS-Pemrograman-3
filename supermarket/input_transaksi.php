<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Input Transaksi</title>


</head>

<?php
$host = "localhost"; //host server
$user = "root"; //user login phpMyAdmin
$pass = ""; //pass login phpMyAdmin
$db = "cupcup"; //nama database
$conn = mysqli_connect($host, $user, $pass, $db) or die("Koneksi gagal"); ?>


<body>
<?php include "navbar.php"; ?>
    <div class="container" style="margin-top: 20px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h3><b>
                        <center>Input Transaksi</center>
                    </b></h3>
                <hr>

                <form action="master_transaksi.php" method="POST">

                    <div class="form-group">
                        <label for="id_transaksi">ID Transaksi</label>
                        <input type="text" name="id_transaksi" id="id_transaksi" placeholder="" class="form-control">
                    </div>

                    <div class="form-group mt-3">
                        <label for="nama_transaksi">Nama Transaksi</label>
                        <input type="text" name="nama_transaksi" id="nama_transaksi" placeholder="" class="form-control">
                    </div>

                    <div class="form-group mt-3">
                        <label for="tgl_transaksi">Tanggal Transaksi</label>
                        <input type="date" name="tgl_transaksi" id="tgl_transaksi" placeholder="" class="form-control">
                    </div>

                    <div class="form-group mt-3">
                        <label for="harga">Harga</label>
                        <input type="number" min="0" name="harga" id="harga" placeholder="" class="form-control">
                    </div>

                    <div class="form-group mt-3">
                        <label for="qty">Kuantitas</label>
                        <input type="number" min="0" name="qty" id="qty" placeholder="" class="form-control">
                    </div>


                    <div class="form-group mt-3">
                        <label for="id_barang">ID Barang</label>
                        <select class="form-select" name="id_barang" id="id_barang" aria-label="Default select example">
                            <option selected>Pilih Barang</option>
                            <?php
                            $sql = mysqli_query($conn, "SELECT * FROM barang");
                            while ($data = mysqli_fetch_array($sql)) {
                            ?>
                                <option value="<?= $data['id_barang'] ?>"><?= $data['nama_barang'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group mt-3">
                        <label for="id_pelanggan">ID Pelanggan</label>
                        <select class="form-select" name="id_pelanggan" id="id_pelanggan" aria-label="Default select example">
                            <option selected>Pilih Pelanggan</option>
                            <?php
                            $sql = mysqli_query($conn, "SELECT * FROM pelanggan");
                            while ($data = mysqli_fetch_array($sql)) {
                            ?>
                                <option value="<?= $data['id_pelanggan'] ?>"><?= $data['nama_pelanggan'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>

                    <br>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    <a href="tampil_transaksi.php"><button type="button" class="btn btn-dark float-end">Kembali</button></a>
                </form>
                <br>


            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>