<?php 
// include('koneksi.php');


// $conn = mysqli_connect("localhost", "root", "", "db_uas");

// cek tombol submit login sudah di tekan atau belum
if ( isset($_POST["login"]) ) {

        header("Location: index.php");
        exit;

       }
    $error = true;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
    <h1>Halaman Login</h1>

    <form action="" method="post">
    <ul>
        <li>
        <label for="username">Username :</label>
        <input type="text" name="username" id="username" autocomplete="off">
        </li>
        <li>
        <label for="password">Password :</label>
        <input type="password" name="password" id="password">
        </li>
        <li><button type="submit" name="login">Login</button></li>
    </ul>
    </form>

</body>
</html>