  <?php
    require('connection.php');
	if(isset($_POST['cname']) && isset($_POST['contact']) && isset($_POST['address'])){
		
		$cname=$_POST['cname'];
		$contact=$_POST['contact'];
		$address=$_POST['address'];
		/*echo $cname.'<br>';
		echo $contact.'<br>';
		echo $address.'<br>';*/
$sql="INSERT INTO form(Username,Contact,address)
VALUES('$cname','$contact','$address')";
	}
	$query=mysqli_query($conn,$sql);
    if ($query) {
       echo 'data inserted';
    }else{
       echo 'not inserted';
    }

    ?>
  <form action='form with mysql.php' method='POST'>
      <pre>
	Name:<input type="text" name="cname"><br>
	
	
	Contact:<input type="text" name="contact"><br>
	
	
	Address:<input type="text" name="address"><br>
	
	
	<input type="submit" value="submit">
	</pre>
  </form>