<?php

session_start();
if ($_SESSION ['status']!="login" ) {
    header("location: index.php "); 
    echo"Selamat Datang" . $_SESSION['username'];

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tampil</title>
</head>
<body>

<h1>selamat berhasil login</h1>

<a href="logout.php">Logout</a>
    
</body>
</html>