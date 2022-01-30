<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Cup Cup Mart</title>
</head>

<body>
    <?php include "navbar.php"; ?>
    <div class="container">
        <div class="row mt-4">
            <div class="col">
                <center>
                    <h2>Laporan Transaksi</h2>
                    <hr>
                </center>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-2">
            <div class="col-md-8 offset-md-2">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Pelanggan</th>
                            <th scope="col">Status</th>

                            <th scope="col">Barang</th>
                            <th scope="col">Kuantitas</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Diskon</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "koneksi.php";
                        $data = mysqli_query($conn, "SELECT transaksi.id_transaksi, transaksi.qty,  transaksi.harga, transaksi.diskon, transaksi.id_pelanggan,transaksi.id_barang, pelanggan.nama_pelanggan, pelanggan.id_pelanggan, pelanggan.status, barang.id_barang, barang.nama_barang, transaksi.total_harga
                        FROM ((pelanggan
                        INNER JOIN transaksi ON pelanggan.id_pelanggan = transaksi.id_pelanggan)
                        INNER JOIN barang ON transaksi.id_barang = barang.id_barang);");
                        while ($d = mysqli_fetch_array($data)) { ?>
                            <tr>
                                <td><?php echo $d['nama_pelanggan']; ?></td>
                                <td><?php echo $d['status']; ?></td>

                                <td><?php echo $d['nama_barang']; ?></td>
                                <td><?php echo $d['qty']; ?></td>
                                <td><?php echo $d['harga']; ?></td>
                                <td><?php echo $d['diskon']; ?></td>
                                <td><?php echo $d['total_harga']; ?></td>

                            </tr>
                        <?php }; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>