<?php

    $koneksi = mysqli_connect("localhost", "root", "", "pemrograman");

    if (mysqli_connect_error()) {
        echo"koneksi database gagal" . mysqli_connect_error();
    
    }

?>
<br>
<br>
<a href="logout.php">Log out</a>