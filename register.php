<?php

  
require 'koneksi.php';

if( isset($_POST["register"]) ) {

    if( registrasi($_POST) > 0) {
        echo "<script>
                alert('user baru berhasil ditambahkan!');
             </script>";
    } else {
        echo mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi </title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body class="bg-light">

<style>
	body{
		background-image : url("img/1.jpg");
		background-repeat: no- repeat;
		background-size: 100%;
	}
</style>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">


        <h4><p><font color="white">Bergabunglah bersama ribuan orang lainnya...</h4></p></font>
        <p><font color="white">Sudah punya akun? <a href="login.php">Login di sini</a></p></font>

        <form action="" method="POST">

            <div class="form-group">
                <font color="white"><label for="name">Nama Lengkap</label></font>
                <input class="form-control" type="text" name="name" id="Nama kamu"required />
            </div>

            <div class="form-group">
                <font color="white"><label for="username">Username</label></font>
                <input class="form-control" type="text" name="username" id="Username"required />
            </div> 

            <div class="form-group">
                <font color="white"><label for="email">Email</label></font>
                <input class="form-control" type="email" name="email" id="Alamat Email" required/>
            </div>

            <div class="form-group">
                <font color="white"><label for="password">Password</label></font>
                <input class="form-control" type="password" name="password" id="Password"required />
            </div>

            <div class="form-group">
                <font color="white"><label for="password">Password</label></font>
                <input class="form-control" type="password" name="password2" id="Password2"required />
            </div>


            <input type="submit" class="button-flat" name="register" value="Daftar" />

        </form>
            
        </div>


		
		<style> 
  .button-flat {
	border: 1px solid #801515;        /* border: tebal[px] tipe[solid,dashed,dotted] warna[#hex, rgb()]; */
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

    </div>
</div>

</body>
</html>
