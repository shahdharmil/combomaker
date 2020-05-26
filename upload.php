
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
	<link rel="stylesheet" type="text/css" href="home.css">
		<link rel="stylesheet" type="text/css" href="home2.css">

		<meta name="viewport" content="width=device-width, initial-scale=1">
	
		<title>Cafe</title>
		<link rel="stylesheet" type="text/css" href="home.css">
	

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
$conn =  mysqli_connect('localhost', 'root' , 'dhruvil','cafe');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
//$sql="INSERT INTO cafe(id,name)VALUES("
} 


$target_dir = "uploads/";
$a= basename( $_FILES["fileToUpload"]["name"]);
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        
        echo "<b>The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.</b>";
        echo "<br>";

       
    } else {

        echo "<b>Sorry, there was an error uploading your file</b>";
        echo "<br>";
    }
$sql="INSERT INTO user1(name)VALUES('$a')";
mysqli_query($conn, $sql);

//echo file_get_contents("C:/xampp/htdocs/youtube/Registration/output.html");
?>
<hr width="5000px" size="500px">
<form action="1.php"> 
<button class="btn btn-danger"  name="submit" value=" Analyse" type="submit" style="margin-left: 10px; "> Analyse	
</button>
</form>
 <?php
 $output=shell_exec('parthil.py');
?>

</body>
</html>