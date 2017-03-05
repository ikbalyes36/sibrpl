
<?php
 
$user_name = "root";
$password = "";
$database = "inventaris";
$host_name = "localhost";
 
$Open = mysql_connect($host_name, $user_name, $password,$database);
 
$Koneksi=mysql_select_db($database);
 
 
?>