<?php
session_start();
error_reporting('E_ALL');
include 'lib/db.php';
if ($_SESSION){
	header('location:page.php');
}
if (isset($_POST['masuk'])){
	$username = preg_replace('/[^A-Za-z0-9\  ]/', '', $_POST['username']);
	$password = preg_replace('/[^A-Za-z0-9\  ]/', '', sha1($_POST['password']));
	$level  = $_POST['id_kategori'];

	$sql = "select * from tm_user where username = '$username' AND password = '$password'";
	$result = mysqli_query($link,$sql);

	if ($row = mysqli_fetch_assoc($result)){
	
			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;
		
			header('location:page.php');
		
		
	}
	else {
		echo "<script>alert('gagal')</script>";
	}


}


?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login Aplikasi</title>


</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
           
            <h3>Silahkan Login  </h3>

            <form class="m-t" role="form" method="post">
                <div class="form-group">
                    <input type="text" name="username"  placeholder="Username" required>
                </div>
                <div class="form-group">
                    <input type="password"  name="password"  placeholder="Password" required>
                </div>
                
                <button type="submit"  name="masuk">Login</button>


            </form>

        </div>
    </div>

    <!-- Mainly scripts -->
    
</body>

</html>
