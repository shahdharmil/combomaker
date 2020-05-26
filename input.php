

<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login1.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
		.mySlides {display:none};
		
		</style>

		<title>Cafe</title>
		<link rel="stylesheet" type="text/css" href="home.css">
		<link rel="stylesheet" type="text/css" href="home2.css">

		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body style="background: url(coffee.png);">
		<div class="header" style="background-color:#3B170B;">
		<h1 style="color:lightgrey;font-family:lucida calligraphy;">Cafe Restro</h1>
		
			<div class="u">
			
			<p style="font-size:1.3em; color:white;" >Welcome <strong><?php echo ($_SESSION['username']); ?></strong></p>

			<p> &nbsp&nbsp <a href="login1.php?logout='1'" style="text-decoration:none;"><span class="l1">logout</span></a> </p>
			</div>
		</div>
<div class="col">
	<form action="12.php">
		<button method="post" class="btn btn-primary"> Add Menu Items</button>
	</form>
	<form action="123.php">
		<button method="post" class="btn btn-primary" style="margin-top: 20px;"> Update Menu Items</button>
	</form>
<form action="upload.php" method="post" enctype="multipart/form-data" >
    <h2>Select file to upload:</h2>
    <input type="file" name="fileToUpload" id="fileToUpload" class="btn btn-danger">
    

    <input type="submit" value="Upload file" name="submit" class="btn btn-danger" style="margin-left: 100px;">

</form>
</div>
		
		<center>
		<div class="slideshow-container" style="max-width:99%">
		  <img class="mySlides" src="cafe.jpg" >
		  <img class="mySlides" src="cafe2.jpg" >
		  <img class="mySlides" src="cafe3.jpg" >
		  
			<span class="dot" ></span>
			<span class="dot" ></span>
			<span class="dot" ></span>
		 </div>
		</center>
	<script>
		var myIndex=0;
		carousel();
		function carousel() {
		var i;
		var dots = document.getElementsByClassName("dot");
		var x = document.getElementsByClassName("mySlides");
		for (i = 0; i < x.length; i++) {
		   x[i].style.display = "none"; 
			dots[i].style.background="#bbb";
		}  
		myIndex++;
		if (myIndex > x.length) {myIndex = 1;}    
		x[myIndex-1].style.display = "block";
		dots[myIndex-1].style.background="#717171";
		setTimeout(carousel,3000); // Change image every 3 seconds
		}

	</script>
</body>
</html>