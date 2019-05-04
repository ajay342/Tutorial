<?php
	$link = mysqli_connect("localhost", "", ", "Java");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$msg = $_POST['msg'];
	$query = "INSERT INTO chatid (name,msg) VALUES ('$name','$msg')";
	$run = $link->query($query);
}
// Close connection
mysqli_close($link);
  
?>
