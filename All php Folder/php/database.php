<?php
require('connection.php');

    $sql= "SELECT * FROM asikur";
   $result=mysqli_query($conn,$sql);
   if($result){
  while ($data= mysqli_fetch_assoc($result)) {
     
        $heading = $data['heading'];
        $category= $data['category'];
        $details= $data['details'];
        echo $heading.'<br>';
        echo $category.'<br>';
        echo $details.'<br>';
        echo '<br><br>';
  }  
   }
?>