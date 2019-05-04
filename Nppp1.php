<!DOCTYPE html>
<html>
    <head>
        <title>Chatter Box</title>
        <link rel="stylesheet" href="Npp2.css" media="all" />
        <script>
            function chat_ajax(){
            var req = new XMLHttpRequest();
            req.onreadystatechange = function() {
            if(req.readyState == 4 && req.status == 200){
                document.getElementById('chat_box').innerHTML = req.responseText;
                    }
                }
            req.open('GET', 'Npp3.php', true);
            req.send(null); 
            }
    
            setInterval(function(){chat_ajax()}, 5000)
        </script>
    </head>
   <body> 
        <div id="container"> 
            <h1>Please add a Comment</h1>
            <div id="chat_box"> 
                <?php
                    $host = "localhost";
                    $user = "root";
                    $pass = "";
                    $db_name = "chat";
                    $con =   new mysqli($host, $user, $pass, $db_name);
                   
                    $query = "SELECT * FROM chat ORDER BY id";
                    $run = mysqli_query($con,$query);
                    while($row = mysqli_fetch_array($run)) :
                ?>

                <div id="chat_data"> 
                    <span style="color:green;"><?php echo $row['name']; ?> : </span> 
                    <span style="color:brown;"><?php echo $row['msg']; ?></span>
                    <span style="float:right;"><?php echo $row['date']; ?></span>
                </div>
                    <?php
                     endwhile;
                    ?> 
                 </div> 
                <form method="post" action="Nppp1.php">
                <input type="text" name="name" placeholder="Enter Name: " />
                <textarea name="enter message" placeholder="Enter Message"></textarea>
                <input type="submit" name="submit" value="Send!" />
            </form>
        </div>
    </body>
<?php
    $host = "localhost";
    $user = "";
    $pass = "";
    $db_name = "chat";
    $con =   new mysqli($host, $user, $pass, $db_name);
?>
<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $msg = $_POST['enter_message'];
        $query = "INSERT INTO chat (name,msg) VALUES ('$name','$msg')";
        $run = $con->query($query);
    }  
?>
</html>
