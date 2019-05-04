<?php
//connection from database
$link = mysqli_connect("localhost", "", ", "Java");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$query = "SELECT * from javaT WHERE heading='$_GET[id]'";

if($result = mysqli_query($link, $query)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_object($result)){
                echo '<br><h2 style=color:red>'.$row->heading."</h2><br>";
                echo $row->date."<br>";
                echo $row->content."<br>";
        } 
        mysqli_free_result($result);
    }else{
        echo "No data Found";
    }
}
// Close connection
mysqli_close($link);
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
echo '<br><div style="color:lightblue"><p>You Are On:</p>'.$actual_link.'</div><br><hr>';
?>
