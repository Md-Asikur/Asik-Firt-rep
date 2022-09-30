<?php
require('connection.php');//include connection php
if(isset($_POST['name']) && isset($_POST['password']) && isset($_POST['email'])){//post method call with input data
	
	$name= test_input($_POST['name']);
	$password=test_input($_POST['password']);
	$email=test_input($_POST['email']);
	//echo $name;
	//echo $password;
	//echo $email;
}
	function test_input($data) {//validation side php
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
//Data insert into mysqil
$sql="INSERT INTO mytable(Name,Password,Email)
VALUES('$name','$password','$email')";
$query=mysqli_query($conn,$sql);
 if ($query) {
    echo 'data inserted';
}else{
    echo 'not inserted';
}


 ?>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

   Name:
   <input type="text" name="name" placeholder="Enter your name">
   <br><br>
	password:
	<input type="password" name="password">
	email:
	<input type="email" name="email">
   <input type="submit" value="submit">

   </form>
  <!-- <!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
// define variables and set to empty values
/*$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php/* echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Website: <input type="text" name="website">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php/*
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>*/


//</body>
//</html> -->