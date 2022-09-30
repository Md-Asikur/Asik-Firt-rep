<?php
require('connection.php');
$sql="UPDATE asikur SET category='allahu akber',heading='I love muhammad sm.' WHERE id=2";
$query=mysqli_query($conn,$sql);
if ($query ){
    echo 'update succesful';
    # code...
}else {
    # code...
    echo 'not inserted';
}

?>