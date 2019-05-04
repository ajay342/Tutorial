<?php
//connection from database
$link = mysqli_connect("localhost", "", "", "Java");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$query = "SELECT * from chatid";

if($res = mysqli_query($link, $query)){
    if(mysqli_num_rows($res) > 0){
        while($row = mysqli_fetch_object($res)){
                echo "Name:"."<span style=color:green;padding:5px>".$row->name."</span><br>";
                echo "Message:"."<span style=color:brown;padding:5px>".$row->msg."</span><br><hr>";
        } 
        mysqli_free_result($res);
    }else{
        echo "No comments Found";
    }
}
// Close connection
mysqli_close($link);

?>
