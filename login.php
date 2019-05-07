<?php 
session_start();
if(isset ($_SESSION["login"])){
    header("Location: index.php");
    exit;
  }
require 'koneksi.php';

if( isset($_POST["login"]) ) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result=mysqli_query($conn , "SELECT *FROM  user WHERE username='$username'");
    if (mysqli_num_rows($result)=== 1){
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"])){
            $_SESSION["login"]=true;
            header("Location: index.php");
            exit;
        }
    }
    $error = true;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="   ">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login locapass</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body class="bg-light">

<style>
	body{
		background-image : url("img/1.jpg");
		background-repeat: no-repeat;
		background-size: 100%;
	}
</style>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">

        

        <h4><font color="white">Masuk ke Locapass</h4></font>
        <p><font color="white">Belum punya akun? <a href="register.php">Daftar di sini</a></p></font>
        <?php if(isset($error)):?>
        <P style="color:red; font-style: italic">username atau password anda salah</P>
        <?php endif;?>
        <form action="" method="post">

            <div class="form-group">
                <p><label for="username"><font color="white">Username</label></p>
                <input class="form-control" type="text" name="username" id="Username atau email" />
            </div>


            <div class="form-group">
                <p><label for="password"><font color="white">Password</label></p></font>
                <input class="form-control" type="password" name="password" id="Password" />
            </div>

            

        </form>
           <button type="submit" class="button-flat btn-block btn-lg" name="login">Login</button> 
        </div>

        <div class="col-md-6">
            <!-- isi dengan sesuatu di sini -->
        </div>

    </div>
</div>

<style> 
  .button-flat {
	border: 1px solid;       		 /* border: tebal[px] tipe[solid,dashed,dotted] warna[#hex, rgb()]; */
	background-color: #801515;        /* ubah warna background */
	color: #FFFFFF;                   /* ubah warna font */
	font-size: 16px;                  /* ubah ukuran font */
	padding: 0.5em 16em 0.5em 15em;     /* padding: top right bottom left; */
}
.button-flat:hover {
	opacity: 0.8;                     /* ubah tingkat transparansi saat cursor menuju button. 0.0 s.d 1.0 */
}
.button-flat:active {
	background: #550000;              /* ubah background saat button ditekan */
}
</style>
    
</body>
</html>
