<?php


echo $name."<br>";
echo $articledata."<br>";
echo "<hr>";
$link = mysqli_connect("localhost", "", , "student");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM Db";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>firstname</th>";
                echo "<th>lastname</th>";
                echo "<th>Address</th>";
                echo "<th>pincode</th>";
                echo "<th>email</th>";
                echo "<th>date</th>";
                echo "<th>post</th>";
                echo "<th>type</th>";
               echo "<th>experience</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['firstname'] . "</td>";
                echo "<td>" . $row['lastname'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['pincode'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
                echo "<td>" . $row['post'] . "</td>";
                echo "<td>" . $row['type'] . "</td>";
                echo "<td>" . $row['experience'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
    } else{
        echo "No records found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>
