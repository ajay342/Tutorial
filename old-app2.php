<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>
	<header>
		<h1>The Article Site</h1>
	</header>
	<style type="text/css">
		h1,h3{
			color: blue;
		}
		input{
			margin-bottom: 5px;
			padding: 3px;
		}
		button{
			margin-top: 7px;
			padding: 5px;
		}
		#name{
			color: red;
			width: 100px;
			height: 50px;
	        font: 1em sans-serif;
	        width: 300px;
	        box-sizing: border-box;
	        border: 2px solid #999;
	        vertical-align: top;
	        height: 4em;
            }
            textarea{
            color: darkgreen;
            }
	</style>
</head>
<body>
	<form action="as.php" method="post">
	<div>
	<label for=name><h3>Title of Article:</h3></label>
	<input type="textarea" name="name" id=name placeholder="Name of article">
	</div>
	<div>
		<textarea rows="20" cols="100" name=articledata placeholder="Write your article here"></textarea>
	</div>
	<div class="button">
        <button type="submit">Submit your Article</button>
    </div>
    <div>
    	<br><hr><br>
    	<a href="ajay.php">Click here to see the articles</a>
    </div>
    </form>
</body>
</html>