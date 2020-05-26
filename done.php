<?php  session_start();

if(!empty($_SESSION['seats'])){
	$count=0;
	// var_dump($_SESSION['seats']);
	
}
if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: home.html');
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="home.css">
<link rel="stylesheet" type="text/css" href="home2.css">
<style>
section{
margin:auto;
opacity:0.9;
margin-top:25px;
width:75%;
text-align:center;
height:auto;
background:#f2f2f2;
padding:3%;
font-family:"Arial";
font-size:1.2em;
border-radius:25px;
}
</style>
</head>
<body>
<div class="header">
		<h1 style="color:lightgrey;font-family:lucida calligraphy;">Movie Ticket Booking Center</h1>
		
			<div class="u">
			
			<p style="font-size:1.3em;">Welcome <strong><?php echo ($_SESSION['username']); ?></strong></p>
			<p> &nbsp&nbsp <a href="index.php?logout='1'" style="text-decoration:none;"><span class="l1">logout</span></a> </p>
			</div>
</div>
<section>
DO NOT REFRESH<br>
<?php
$username=$_SESSION['username'];
echo "Username: ".$username."<br>";

$movie=$_SESSION['movie'];
echo "Movie: ".$movie."<br>";

$theater=$_SESSION['theater'];
echo "Theater: ".$theater."<br>";

$date=$_SESSION['date'];
echo "Date: ".$date." October <br>";

$time=$_SESSION['time'];
echo "Time: ".$time.":00 <br>";

$s=$_SESSION['seats'];
$seat_selected=serialize( $_SESSION['seats']);
// foreach ($_SESSION['seats'] as $key => $value)
// {
	// echo "key: $key and value: $value<br>";
	
// }
// echo "$seat_selected<br>";
foreach ($_SESSION['seats'] as $value)
{
	echo "Seat :$value<br>";
	
}

$total=$_SESSION['total'];
echo "<br> Total Cost: ".$total;



// connect to database
$db = mysqli_connect('localhost', 'root', 'dhruvil', 'registration');

	
$query = "INSERT INTO seats (username, movie,theater,date,time,seats,total) VALUES('$username', '$movie','$theater',$date,$time, '$seat_selected',$total)";
mysqli_query($db, $query);
mysqli_commit($db);
mysqli_close($db);
?>
<br><BUTTON href="home2.php" onclick="fn1()" style="margin:auto;margin-top:20px;padding:15px 25px;color:white;border-radius:25px;background-color: #4CAF50;box-shadow: 1px 1px 1px hsla(0,0%,26.6667%,0.8);outline:none;">Click for Main Page</button>
</section>
<script>
function fn1()
{
	window.location='home2.php';
}

</script>
</body>
</html>	