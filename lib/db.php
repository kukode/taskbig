<?php 


// $dbconnect = pg_connect("host=localhost dbname=postgres user=postgres password=postgres");

$host = "localhost";
$user = "root";
$pass = "develop93";
$dbname = "dbapp";

$link = new mysqli($host,$user,$pass,$dbname);

// if($link){
//     echo 'konek';
// }
// else {
//     echo 'gagal konek';
// }

?>