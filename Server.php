<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="PHP project for 5th Sem">
    <meta name="author" content="Ajay">

    <title>PHP</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="main.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper" class="toggled">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        PHP Project
                    </a>
                </li>
                <li>
                    <a href="http://localhost/My/Server.php">Home</a>
                </li>
                <li id="c">
                    JAVA
                </li>
                <ul>
                <li>
                    <a href='#' onclick="evt('JHistory')">JHistroy</a>
                </li>
                <li>
                    <a href="#" onclick="evt('JBasic')">Basic</a>
                </li>
                </ul>
                <li id="c">
                    PHP
                </li>
                <ul>
                <li>
                    <a href="#" onclick="evt('PHistory')">History</a>
                </li>
                <li>
                    <a href="#" onclick="evt('PBasic')">Basics</a>
                </li>
                </ul>
                <li id="c">
                    PERL
                </li>
                <ul>
                <li>
                    <a href="#" onclick="evt('PeHistory')">History</a>
                </li>
                <li>
                    <a href="#" onclick="evt('PeBasic')">Basics</a>
                </li>
                </ul>
                    <li id="c">RUBY</li>
                    <ul>
                <li>
                    <a href="#" onclick="evt('RHistory')">History</a>
                </li>
                <li>
                    <a href="#" onclick="evt('RBasic')">Basics</a>
                </li>
                </ul>
                    <li id="c">Python</li>
                    <ul>
                <li>
                    <a href="#" onclick="evt('PyHistory')">History</a>
                </li>
                <li>
                    <a href="#" onclick="evt('PyBasic')">Basics</a>
                </li>
                </ul>
        </div>
        <!-- /#sidebar-wrapper -->
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <a href="#menu-toggle" class="btn btn-primary" id="menu-toggle">Hide/Show Menu</a>
                <p id="data"></p>
            </div>  
            <div id="chatbox" class="container form-horizontal">
            <h2 style="color:darkred">Please add a Comment</h2><hr>
                <form method="post">
                <input type="text" name="name" placeholder="Enter Name:"" id="chat" /><br>
                <textarea name="msg" placeholder="Enter Message" id="chat"></textarea><br>
                <input type="submit" name="submit" value="Send!" />
            </form>
        </div>
        <div id="chat_box"> 
        </div> 
    </div>   
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="main.js"></script>

<script>
    $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
    });
</script>
<?php
	$link = mysqli_connect("localhost", "", "", "Java");
 
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
</body>
</html>
