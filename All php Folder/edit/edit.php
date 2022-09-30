<?php
require('connection.php');

    $sql= "SELECT * FROM editable";
   $result=mysqli_query($conn,$sql);
   if($result){
  while ($data= mysqli_fetch_array($result)) {
		$id=$data['customer_id'];
        $username = $data['Username'];
        $contact= $data['Contact'];
        $address= $data['Address'];
		echo '<br><br>';
        echo $username.'<br>';
        echo  $contact.'<br>';
        echo $address.'<br>'.'<a href="mainedit.php?id='.$id.'">Edit</a>';
        echo '<br><br>';
		
  }  
   }
?>
<?php
    
	if(isset($_POST['cname']) && isset($_POST['contact']) && isset($_POST['address'])){
		
		$cname=$_POST['cname'];
		$contact=$_POST['contact'];
		$address=$_POST['address'];
		/*echo $cname.'<br>';
		echo $contact.'<br>';
		echo $address.'<br>';*/
$sql="INSERT INTO editable(Username,Contact,Address)
VALUES('$cname','$contact','$address')";
	}
	$query=mysqli_query($conn,$sql);
    if ($query) {
       echo 'data inserted';
    }else{
       echo 'not inserted';
    }

    ?>
  <form action='edit.php' method='POST' style="text-align:left">
  <h1 style="text-align:left; color:red;" >Login Here</h1>
      
	Name:<input type="text" name="cname"><br><br><br>
	
	
	Contact:<input type="text" name="contact"><br><br><br>
	
	
	Address:<input type="text" name="address"><br><br><br>
	
	
	<input type="submit" value="submit">
	
  </form>