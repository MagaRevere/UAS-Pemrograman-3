<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Data Barang</title>
</head>

<body>
<?php include "navbar.php"; ?>

    <div class="container">
        <div class="row mt-4">
            <div class="col">
                <center>
                    <h2>Data Barang</h2>
                    <hr>
                </center>
                <a href="input_barang.php"><button type="button" class="btn btn-primary">Tambah Barang</button></a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-2">
            <div class="col-md-8 offset-md-2">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">ID Barang</th>
                            <th scope="col">Nama</th>
                            <th scope="col">ID Kategori</th>
                            <th scope="col">Nama Kategori</th>
                            <th scope="col">ID Satuan</th>
                            <th scope="col">Nama Satuan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "koneksi.php";
                        $data = mysqli_query($conn, "SELECT * FROM barang");
                        
$data = mysqli_query($conn, "SELECT barang.id_barang, barang.nama_barang, barang.id_kategori, kategori.nama_kategori, barang.id_satuan, satuan.nama
FROM ((barang
INNER JOIN kategori ON barang.id_kategori = kategori.id_kategori)
INNER JOIN satuan ON barang.id_satuan = satuan.id_satuan);");
                        $nomor = 1;
                        while ($d = mysqli_fetch_array($data)) { ?>
                            <tr>
                                <th scope="row"><?php echo $nomor++ ?></th>
                                <td><?php echo $d['id_barang']; ?></td>
                                <td><?php echo $d['nama_barang']; ?></td>
                                <td><?php echo $d['id_kategori']; ?></td>
                                <td><?php echo $d['nama_kategori']; ?></td>
                                <td><?php echo $d['id_satuan']; ?></td>
                                <td><?php echo $d['nama']; ?></td>
                            </tr>
                        <?php }; ?>
                    </tbody>
                </table>
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