<?php

$name=$_POST['name'];
$data=$_POST['articledata'];

//connection from database
$link = mysqli_connect("localhost", "###", "###", "student");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO articles (name,data)
VALUES ('$name','$data')";

if ($link->query($sql) === TRUE) {
    echo "<h1>New record created successfully</h1>";
} else {
    echo "Error: " . $sql . "<br>" . $link->error;
}
// Close connection
mysqli_close($link);
?>
