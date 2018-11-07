<?php 
ob_start();

if(isset($_POST['save']))
{
  
  $username = $_POST['username'];
  $password = sha1($_POST['password']);
  
  $query = "insert into tm_user(username,password) values ('$username','$password')";
  $result = mysqli_query($link,$query);
  if($result)
  {
    echo "<script>alert('sukses');window.location.assign(\"page.php?page=users\")</script>";
  }
  else {
    echo "<script>alert('gagal');window.location.assign(\"page.php?page=users\")</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <input type="text" name="username" />
    <input type="password" name="password" />
    <button type="submit" name="save">Save</button>
</form>

<table>
    <thead>
        <tr>
            <th>username</th>
            <th>password</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            $query = mysqli_query($link,"select * from tm_user");
            while($row = mysqli_fetch_array($query)){
        ?>
            <tr>
                <td><?php echo $row['username'] ?></td>
                <td><?php echo $row['password'] ?></td>
            </tr>
        <?php 
            }
        ?>
    </tr>
</table>
</body>
</html>
<?php 
$users = ob_get_clean();
?>

