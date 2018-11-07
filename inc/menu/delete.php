<?php
ob_start();
$id = $_GET['id'];
$result = mysqli_query($link,"delete from treeview_items where id_menu = '$id'");
if ($result){
	echo "<script>alert('sukses hapus');window.location.assign(\"page.php?page=menu\")</script>";
}
else {
	echo "<script>alert('gagal hapus');window.location.assign(\"page.php?page=menu\")</script>";
}
?>

<?php 
$delete = ob_get_clean();
?>