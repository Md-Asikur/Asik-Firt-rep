<?php
if(isset($_POST['submit'])){
  $total=  count( $_FILES['file']['name']);
for ($x=0;$x<$total;$x++) {
    $filename= $_FILES['file']['name'][$x];
    $tmp_name=$_FILES['file']['tmp_name'][$x];
    $uploc='images/'.$filename;
    move_uploaded_file($tmp_name, $uploc);
}
}
?>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
    select file:<br><br>
    <input type="file" name="file[]" multiple><br><br>
    <input type="submit" name="submit" value="upload">


</form>