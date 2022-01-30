<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Input Pelanggan</title>
</head>

<body>
<?php include "navbar.php"; ?>
    <div class="container" style="margin-top: 20px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h3><b>
                        <center>Input Pelanggan</center>
                    </b></h3>
                <hr>

                <form action="master_pelanggan.php" method="POST">

                    <div class="form-group">
                        <label for="id_pelanggan">ID Pelanggan</label>
                        <input type="text" name="id_pelanggan" id="id_pelanggan" placeholder="" class="form-control">
                    </div>

                    <div class="form-group mt-3">
                        <label for="nama_pelanggan">Nama Pelanggan</label>
                        <input type="text" name="nama_pelanggan" id="nama_pelanggan" placeholder="" class="form-control">
                        <div class="form-text text-danger"></div>
                    </div>

                    <div class="form-group mt-3">
                        <label for="no_telp">No Telepon</label>
                        <input type="text" name="no_telp" id="no_telp" placeholder="" class="form-control">
                        <div class="form-text text-danger"></div>
                    </div>

                    <div class="form-group mt-3">
                        <label for="status">Status</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="Member" name="status" id="status1" checked>
                            <label class="form-check-label" for="member">
                                Member
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="Non-member" name="status" id="status2">
                            <label class="form-check-label" for="non-member">
                                Non-member
                            </label>
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    <a href="tampil_pelanggan.php"><button type="button" class="btn btn-dark float-end">Kembali</button></a>
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