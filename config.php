<?php 
$host = "localhost";
$user = "root";
$pw = "";
$db = "note";

$conn = mysqli_connect($host,$user,$pw,$db);

if($conn){
    echo "";
}else{
    echo "koneksi gagal";
}

mysqli_select_db($conn,$db)
?>