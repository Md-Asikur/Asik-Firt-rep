<?php
$hostname='localhost';
$username='root';
$password='';
$dbname= 'myform';//database main folder name
$conn=mysqli_connect($hostname,$username,$password,$dbname);
if (!$conn) {
  die("connecttion failed");
  # code...
}
//echo 'connection succeful';
?>