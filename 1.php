
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
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="home.css">
		<link rel="stylesheet" type="text/css" href="home2.css">

		<meta name="viewport" content="width=device-width, initial-scale=1">
	
		<title>Cafe</title>
		<link rel="stylesheet" type="text/css" href="home.css">
		<style>
			.btn {
  
  border: none;
  color: white;
  padding: 12px 30px;
  cursor: pointer;
  font-size: 20px;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}
		</style>

		<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
	<body style="background: url(coffee.png);">
		
		
		<div class="header" style="background-color:#3B170B;">
		<h1 style="color:lightgrey;font-family:lucida calligraphy;">Cafe Restro</h1>
		
			<div class="u">
			
			<p style="font-size:1.3em; color:white;">Welcome <strong><?php echo ($_SESSION['username']); ?></strong></p>

			<p> &nbsp&nbsp <a href="login1.php?logout='1'" style="text-decoration:none;"><span class="l1" >logout</span></a> </p>
			</div>
		</div>

<?php
// Create connection
//echo file_get_contents("C:/xampp/htdocs/youtube/Registration/output.html");
?>
<hr width="1350px" size="500px">

<button class="btn btn-danger"  name="submit" value=" Analyse" type="submit" style="margin-left: 10px; "> Analyse	

<form action="input.php">
<button  class="btn btn-primary"  name="submit"  type="submit" style=" margin-left: 1000px; "> Back to Home 
</button>		
</button> </form>
 <?php
 $output=shell_exec('parthil.py');
 ?>
<h3 > Combo Offers Evaluated:</h3>
<h4 style="margin-left: 470px;">Items</h4><h4 style="margin-left: 770px; margin-top: -30px"> Price</h4>
<aside style=" border-style: groove; border-color:brown; border-width: 2px;  margin: 5px; margin-top:5px; margin-left:350px;
	float:center;
	background-color:#F2F5A9;
	color:black;
	height:350px;
	width:30%;
	border-radius:20px;">

<?php
$fh=fopen("output.txt", 'r');
$pageText=fread($fh,25000);
echo nl2br($pageText);
?>
</aside>
<aside style=" border-style: groove; border-color:brown; border-width: 2px;  margin : 5px; margin-top:5px margin-left:800px; text-align: center;
	float:center;
	background-color:#F2F5A9;
	color:black;
	height:350px;
	width:65px;
	border-radius:20px;">

<?php
$fh=fopen("output1.txt", 'r');
$pageText=fread($fh,25000);
echo nl2br($pageText);
?>
</aside>
<form action="1234.php">
<button class="btn btn-primary" style="margin-top: 400px; margin-left: -400px;"> Edit </button>
<button class="btn btn-danger" style=" margin-left: 50px; margin-top: 400px">
<a href="output_file.txt" download>Download </a></button></form>


</body>
</html>