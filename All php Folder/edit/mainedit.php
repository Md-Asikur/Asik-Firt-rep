<?php
require('connection.php');

$getid=$_GET['id'];
$sql="SELECT * FROM editable WHERE customer_id='$getid'"; 
$query=mysqli_query($conn,$sql);
$data=mysqli_fetch_array($query);
		$id=$data['customer_id'];
        $username = $data['Username'];
        $contact= $data['Contact'];
        $address= $data['Address'];
		//post method select data
		if(isset($_POST['cname']) && isset($_POST['contact']) && isset($_POST['address']) && isset($_POST['id'])){
		$id=$_POST['id'];
		$cname=$_POST['cname'];
		$contact=$_POST['contact'];
		$address=$_POST['address'];
		/*echo $cname.'<br>';
		echo $contact.'<br>';
		echo $address.'<br>';*/
		$sql="UPDATE editable SET Username='$cname',Contact='$contact',Address='$address' WHERE customer_id=$id";
	}
	$query=mysqli_query($conn,$sql);
    if ($query) {
		
       echo 'data inserted/updata';
    }else{
       echo 'not inserted/update';
    }
	
?>
<form action='mainedit.php' method='POST'>
      <pre>
	Name:<input type="text" name="cname" value="<?php echo $username;?>"><br>
	
	
	Contact:<input type="text" name="contact" value="<?php echo $contact;?>"><br>
	
	
	Address:<input type="text" name="address" value="<?php echo $address;?>"><br>
	
	<input type="text" name="id" value="<?php echo $id;?>"><br>
	<input type="submit" value="submit" >
	</pre>
  </form>