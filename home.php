<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- local css -->
    <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>
    <div class="judul-homepage">
        <center>
            <h1>DAFTAR INVENTARIS BARANG</h1>
            <H2>KANTOR SERBA ADA</H2>
        </center>
    </div>
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
    <div class="container">
        <center>
        <h2 class="welcome">selamat datang</h2>
        <h1 class="user">
            <?php
                session_start(); 
                echo $_SESSION['username'];

                if(empty($_SESSION['username'])) {
                    echo "
                        <script>
                            alert('Anda belum login. Silakan login terlebih dahulu.');
                            document.location.href = 'login.html';
                        </script>
                    ";
                }
            ?>
        </h1>
        </center>
    </div>
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>