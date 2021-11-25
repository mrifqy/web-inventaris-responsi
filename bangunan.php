<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangunan</title>

     <!-- bootstrap css -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- local css -->
    <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>
    <div class=container>
        <h1 class="text-center" style="margin: 20px 0 20px 0;">DATA INVENTARIS KATEGORI BANGUNAN</h1>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php">Beranda</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="inventaris.php">Daftar Inventaris</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    List per Kategori
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="bangunan.php">Bangunan</a></li>
                    <li><a class="dropdown-item" href="kendaraan.php">Kendaraan</a></li>
                    <li><a class="dropdown-item" href="atk.php">Alat Tulis Kantor</a></li>
                    <li><a class="dropdown-item" href="elektronik.php">Elektronik</a></li>
                </ul>
                </li>
            </ul>
            <div class="logout text-end">
                <a href="logout.php">
                    <button class="btn btn-danger" >Logout</button>
                </a>
            </div>
            </div>
        </div>
    </nav>
        <?php
            session_start(); 
            if(empty($_SESSION['username'])) {
                echo "
                    <script>
                        alert('Anda belum login. Silakan login terlebih dahulu.');
                        document.location.href = 'login.html';
                    </script>
                ";
                }
        ?>
        <div class="tb-isi text-center col align-self-end">
            <table class="table table-light table-striped" >
            <thead>
                <tr >
                <th scope="col">No</th>
                <th scope="col">Kode</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Satuan</th>
                <th scope="col">Tanggal Datang</th>
                <th scope="col">Kategori</th>
                <th scope="col">Status</th>
                <th scope="col">Harga Satuan</th>
                <th scope="col">Total Harga</th>
                </tr>
            </thead>
            <tbody >
                <?php
                    include "config.php";

                    $query = mysqli_query ($connection, "SELECT * FROM inventaris WHERE kategori LIKE '%Bangunan%'");
                        $s=1;
                        while ($data=mysqli_fetch_array($query))

                        {?>

                        <tr>
                        <!-- <th scope="row">1</th> -->
                        <td> <?php echo $s++?></td>
                        <td> <?php echo $data['kode_barang'];?></td>
                        <td> <?php echo $data['nama_barang'];?></td>
                        <td> <?php echo $data['jumlah'];?></td>
                        <td> <?php echo $data['satuan'];?></td>
                        <td> <?php echo $data['tgl_datang'];?></td>
                        <td> <?php echo $data['kategori'];?></td>
                        <td> <?php echo $data['status_barang'];?></td>
                        <td> <?php echo $data['harga'];?></td>
                        <td> <?php echo $data['harga']*$data['jumlah'];?></td>
                        
                        </tr>
                        <?php 
                        }
                        ?> 
            </tbody>
            </table>
            </div>
        </div>
    </div>
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>


