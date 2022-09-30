<?php
require('connection.php');
$sql="INSERT INTO asikur(heading,category,details)
VALUES('7TH HEAD','GAMES','7TH DETAILS')";
$query=mysqli_query($conn,$sql);
 if ($query) {
    echo 'data inserted';
}else{
    echo 'not inserted';
}

?>