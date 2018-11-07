<?php
session_start();
if (empty($_SESSION)){
	header('location:index.php');
}
elseif (isset($_POST['logout']))
{
	session_destroy();

	// kembali ke halaman form login
	header("location:index.php");
}
else {


error_reporting("E_ALL ^ E_NOTICE");
include 'lib/db.php';
include 'navigation.php';
?>
<!--
*
*  INSPINIA - Responsive Admin Theme
*  version 2.7
*
-->

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Dashboard</title>


</head>

<body>

                <ul>

                     
                    <li>
                        <a href="?page=menu">Menu</a>
                    </li>
                    <li>
                        <a href="?page=users">Users</a>
                    </li>
                    
                    <form method="post">
                        <button type="submit" class="btn btn-primary btn-block"  name="logout">
                        Log out
                        </button>
                    </form>  
                </ul>
				
        	<div class="row">
        		<div class="col-md-12">
        			<?php echo $content;?>
        		</div>
        	</div>
        </div>




    </div>

   
</body>
</html>
<?php }?>
