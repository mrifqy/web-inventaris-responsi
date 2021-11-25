<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Inventaris</title>

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- local css -->
    <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>
    <div class="text-center judul-edit">
        <center>
            <h5>Ubah Data Inventaris</h5>
        </center>
    </div>
    <?php
        include "config.php";

        session_start(); 
        if(empty($_SESSION['username'])) {
            header("location:login.php?pesan=belum_login");
        }


        $kode_barang = $_GET['kode_barang'];

        $data = mysqli_query($connection, "SELECT * FROM inventaris WHERE kode_barang='$kode_barang'"); ?>

    <?php while ($hasil = mysqli_fetch_array($data)) : ?>
        <br>
        <div class="container container-login">
            <form method="POST" action="cekedit.php">
                <div class="mb-3">
                    <label class="form-label">Kode Barang</label>
                    <input type="text" class="form-control" name="kode_barang" value="<?php echo $hasil["kode_barang"]; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" name="nama_barang" value="<?php echo $hasil["nama_barang"]; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Jumlah</label>
                    <input type="text" class="form-control" name="jumlah" value="<?php echo $hasil["jumlah"];?> ">
                </div>
                <div class="mb-3">
                    <label class="form-label">Satuan</label>
                    <input type="text" class="form-control" name="satuan" value="<?php echo $hasil["satuan"];?> ">
                </div>

                <div class="mb-3">
                    <label class="form-label">Tanggal Datang</label>
                    <input type="text" class="form-control" name="tgl_datang" value="<?php echo $hasil["tgl_datang"];?> ">
                </div>
                <div class="mb-3">
                    <label class="form-label select">Kategori</label> <br>
                    <select name="kategori">
                        <option value="Bangunan">Bangunan</option>
                        <option value="Kendaraan">Kendaraan</option>
                        <option value="Alat Tulis Kantor">Alat Tulis Kantor</option>
                        <option value="Elektroniik">Elektronik</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Status</label> <br>
                    <input type="radio"  name="status_barang" value="Baik">
                    <label for="<?php echo $hasil["status_barang"];?>">Baik</label>
                    <input type="radio" name="status_barang" value="Perawatan">
                    <label for="<?php echo $hasil["status_barang"];?>">Perawatan</label>
                    <input type="radio" name="status_barang" value="Rusak">
                    <label for="<?php echo $hasil["status_barang"];?>">Rusak</label>
                </div> 
                <div class="mb-3">
                    <label class="form-label">Harga Satuan</label>
                    <input type="text" class="form-control" name="harga" value="<?php echo $hasil["harga"];?> ">
                <center>
                    <button type="submit" class="btn btn-primary" style="margin-top: 20px">Ubah</button> 
                    <a href="inventaris.php">
                        <button type="button" id="tombol" class="btn btn-primary">Batal</button>
                    </a>
                </center>
            </form>
        </div>
    <?php endwhile; ?>
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>