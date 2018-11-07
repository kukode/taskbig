<?php 
ob_start();


$id = abs($_GET['id']);

if(isset($_POST['update']))
{
  $name = $_POST['name'];
  $text = $_POST['text'];
  $parent_id = $_POST['parent_id'];
  
  $query = "update treeview_items set name='$name',text='$text',parent_id='$parent_id' where treeview_items.id_menu = '$id'";
  $result = mysqli_query($link,$query);
  if($result)
  {
    echo "<script>alert('sukses');window.location.assign(\"page.php?page=menu\")</script>";
  }
  else {
    echo "<script>alert('gagal');window.location.assign(\"page.php?page=menu\")</script>";
  }
}
else {

    $querys = mysqli_query($link,"select * from treeview_items where treeview_items.id_menu='$id' ");
    $row = mysqli_fetch_array($querys)
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
    <input type="text" name="name" placeholder="name" value="<?php echo $row['name'] ?>"/>
    <input type="text" name="text"  placeholder="text" value="<?php echo $row['text'] ?>"/>
    <input type="text" name="parent_id" placeholder="parent_id" value="<?php echo $row['parent_id'] ?>"/>
    <button type="submit" name="update">Save</button>
</form>


</body>
</html>
<?php 
}
$edit = ob_get_clean();
?>

