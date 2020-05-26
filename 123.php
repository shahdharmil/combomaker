
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

<form action="server2.php" method="post">
	<div class="form-group" >
	
  <label>Item Name:</label>
  <input type="text" class="form-control" name="name" placeholder="Enter Item Name" required>
</div>
<div class="form-group">
  <label >Selling Price:</label>
  <input  class="form-control" name="sell"  placeholder="Enter New Selling Price" required>
</div>
  <div class="form-group">
  <label >Minimum Price:</label>
  <input  class="form-control" name="minprice" placeholder="Enter New Minimum Price" required>
</div>
<button style="margin-left: 20px;" class="btn btn-danger"  name="submit"  type="submit" > Update
</button>
</form>	
	<form action="input.php">
		<button style="margin-left: 20px; margin-top: 20px" class="btn btn-primary"  name="submit"  type="submit" > Back to Home
 </button>
</form>

</body>
</html>