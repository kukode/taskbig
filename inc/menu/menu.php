<?php 
ob_start();

if(isset($_POST['save']))
{
  $name = $_POST['name'];
  $text = $_POST['text'];
  $parent_id = $_POST['parent_id'];
  
  $query = "insert into treeview_items(name,text,parent_id) values ('$name','$text','$parent_id')";
  $result = mysqli_query($link,$query);
  if($result)
  {
    echo "<script>alert('sukses');window.location.assign(\"page.php?page=menu\")</script>";
  }
  else {
    echo "<script>alert('gagal');window.location.assign(\"page.php?page=menu\")</script>";
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
    <input type="text" name="name" placeholder="name"/>
    <input type="text" name="text"  placeholder="text"/>
    <input type="text" name="parent_id" placeholder="parent_id"/>
    <button type="submit" name="save">Save</button>
</form>
<ul>
 <?php 
            $query = mysqli_query($link,"select * from treeview_items");
            while($row = mysqli_fetch_array($query)){
        ?>
            <li>
               <input type="checkbox" /> <?php echo $row['name'] ?>  
                <ul>
                    <li> <input type="checkbox" />  <?php echo $row['text'] ?></li>  
                </ul>  
                <a href="?page=edit&id=<?php echo $row['id_menu']?>">Edit</a>
                <a href="?page=delete&id=<?php echo $row['id_menu']?>">Delete</a>
            </li>       
         <?php 
            }
        ?>
</ul>

</body>
</html>
<?php 
$menu = ob_get_clean();
?>

