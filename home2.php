<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: home.html');
	}
	?>
<!doctype html>
<html>
	<head>
		<title>Movie page</title>
		<link rel="stylesheet" type="text/css" href="home.css">
		<link rel="stylesheet" type="text/css" href="home2.css">

		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<div class="header">
		<h1 style="color:lightgrey;font-family:lucida calligraphy;">Movie Ticket Booking Center</h1>
		
			<div class="u">
			
			<p style="font-size:1.3em;">Welcome <strong><?php echo ($_SESSION['username']); ?></strong></p>
			<p> &nbsp&nbsp <a href="index.php?logout='1'" style="text-decoration:none;"><span class="l1">logout</span></a> </p>
			</div>
		
		</div>
		<div id="wrap">
		<aside>
			<center>
			<h2>Hello <?php echo ($_SESSION['username']); ?></h2>
			<div class="t">
			Top Bollywood Movies<br>
			<a href="home3.php?moviename=gold"><img src="movies/gold.jpg"></img></a>
			<a href="home3.php?moviename=stree"><img src="movies/stree.jpg"></img></a>
			</div>
			
			<div class="t">
			Top Hollywood Movies<br>
			
			<a href="home3.php?moviename=infinitywar"><img src="movies/aif.jpg"></img></a>
			<a href="home3.php?moviename=deadpool"><img src="movies/dp2.jpg"></img></a>
			</div>
			<center>
		</aside>
			
		<section id="s1">
		
			<b>Movie Section</b>
			<div class="c">
				
				<a href="home3.php?moviename=gold"><img src="movies/gold.jpg"></img></a>
				
				
				<a href="home3.php?moviename=stree"><img src="movies/stree.jpg"></img></a>
				
				<a href="home3.php?moviename=infinitywar"><img src="movies/aif.jpg"></img></a>
				
				<a href="home3.php?moviename=deadpool"><img src="movies/dp2.jpg"></img></a>
				
			</div>
		</section>
		<section id="s2">
			
			<b>Upcoming Movies</b>
			<div class="c">
			<img src="movies/2.0.jpg"></img>
				
				
				<img src="movies/bgmc.jpg"></img>
				
				<img src="movies/mif.jpg"></img>
				
				<img src="movies/amatw.jpg"></img>
			
			</div>
		
		</section>


		</div>
		
	</body>
<html>