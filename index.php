<?php


    session_start();
    include'koneksi.php';

    if(isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $data = mysqli_query($koneksi, "SELECT * FROM login WHERE username='$username' AND password = '$password' ");

        $cek = mysqli_num_rows($data);

        if( $cek > 0){
            $_SESSION['status'] = "login";
            header("location: tampil.php");

        }else{
            echo  "<script> window.alert('kesalahan login')
            window.location='index.php'</script>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login md5</title>
    <style type="text/css">
        body{
            font-family: sans-sherif;
            background-color: #3489ab;

        }

        .login {
            padding: 3em;
            margin: 15em auto;
            width: 20em;
            background: #fff;
            border-radius: 10px;

        }

        input {
            border-radius: 5px;
            padding: 10px;
            background: #efefef;
        },

        .btn-login{
    background: #3498db;
    color: #fff;
    border: 0;
    padding: 5px 8px;
    margin: 20px 0;
}

    </style>
</head>
<body>


<div class="login">
    <h2>Login MD5</h2>
    <form action="" methodd="POST">
    <table>
        <tr>
            <td>
                Username
            </td>
            <td>
                <input type= "text" name="username" placeholder="username" required>
            </td>
        </tr>
        <tr>
            <td>
                Password
            </td>
            <td>
                <input type= "password" name="password" placeholder="password" required>
            </td>
        </tr>
            <td colspan="2">
                <input type = "submit" name="login" value="submit">

            </td>
    </table>
    </form>
</div>
    
</body>
</html>