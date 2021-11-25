<?php
    session_start();
    include "config.php";

    $username = $_POST['username'];
    $password = $_POST['password'];
    

    $query = mysqli_query($connection, "SELECT * FROM petugas WHERE username='$username' && password='$password'") or die (mysqli_error($connection));

    $cek = mysqli_num_rows($query);

    if($cek>0)
    {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        header("location:home.php");
    }
    else{
        echo "
            <script>
                alert('Login gagal! Username atau password Anda salah.');
                document.location.href = 'login.html';
            </script>
        ";
    }
?>