<?php
$conn=mysqli_connect('localhost','root','','myform');
if(isset($_POST['submit']));

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
//img upload section
 
 
$imagename=$_FILES['image']['name'];
$tmpname=$_FILES['image']['tmp_name'];
$uploc='images/'.$imagename;
$sql="INSERT INTO mytablee(firstname,lastname,email,image)
VALUES('$firstname','$lastname','$email','$imagename')";
   if(mysqli_query($conn,$sql)== TRUE){
	  move_uploaded_file($tmpname,$uploc);
	  echo 'data inserted';
   }else{
	  echo 'not inserted';
  }
 

 ?>
<html>

<head>
    <style>
    .img {
        height: auto;
        width: 200px;
    }
    </style>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
        Firstname:<br>
        <input type="text" name="firstname"><br><br>
        Lastname:<br>
        <input type="text" name="lastname"><br><br>
        Email:<br>
        <input type="email" name="email"><br><br>
        Picture:<br>
        <input type="file" name="image">
        <br><br>
        <input type="submit" name="submit" value="insert">


    </form>
    <?php
   $sql="SELECT * FROM mytablee ORDER BY id DESC LIMIT 2";
   $data=mysqli_query($conn,$sql);
    echo "<table border=4><tr></tr>";
  while($row=mysqli_fetch_assoc($data)){
   $firstname= $row['firstname'];
   $lastname= $row['lastname'];
   $email= $row['email'];
   $image= $row['image'];
  
   echo "<tr><td>$firstname</td><td>$lastname</td><td>$email</td>";
   echo "<td><img src='images/$image' class='img'></td></tr>";
  }
   ?>
    </table>
</body>

</html>