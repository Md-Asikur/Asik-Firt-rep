<?php
$hostname='localhost';
$username='root';
$password='';
$dbname= 'php_first';
$conn=mysqli_connect($hostname,$username,$password,$dbname);
if (!$conn) {
  die("connecttion failed");
  # code...
}
echo 'connection succeful';
?>
