<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: home.html');
	}
	
	
		$_SESSION['movie']=$_GET['moviename'];
	
	?>
<html>
<head><title>Select Theater and Timings</title>
	<link rel="stylesheet" type="text/css" href="home.css">
	<link rel="stylesheet" type="text/css" href="home2.css">
	<link rel="stylesheet" type="text/css" href="home3.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
</head>
<body>
	<div class="header">
		<h1 style="color:lightgrey;font-family:lucida calligraphy;">Movie Ticket Booking Center</h1>
		
			<div class="u">
			
			<p style="font-size:1.3em;text-transform:capitalize;">Welcome <strong><?php echo ($_SESSION['username']); ?></strong></p>
			<p> &nbsp&nbsp <a href="index.php?logout='1'" style="text-decoration:none;"><span class="l1">logout</span></a> </p>
			</div>
		
	</div>
		<div id="wrap1">
		<aside id="aside1">
		<p style="text-transform:uppercase;">Hello &nbsp <?php echo ($_SESSION['username']); ?>!</p>
		
		<!-- getting appropriate name of movie --> 
		<?php 
		$m=($_GET['moviename']);
		switch($m){
		case "stree":{$movpos="movies/stree.jpg";
		$name="STREE";
		$rat="8.3";
		$lk="https://www.youtube.com/watch?v=gzeaGcLLl_A";
		break;}
		case "gold":{$movpos="movies/gold.jpg";
		$name="GOLD";
		$rat="8";
		$lk="https://www.youtube.com/watch?v=Pcv0aoOlsLM";
		break;}
		case "deadpool":{$movpos="movies/dp2.jpg";
		$name="DEADPOOL 2";
		$rat="7.9";
		$lk="https://www.youtube.com/watch?v=Iumvj9HtmhE";
		break;}
		case "infinitywar":{$movpos="movies/aif.jpg";
		$name="AVENGERS:INFINITY WAR";
		$rat="8.6";
		$lk="https://www.youtube.com/watch?v=6ZfuNTqbHE8";
		break;}
		default:{header('location: home.html');
		break;}
		}
		?>
		<!-- php code in src tag -->
		<img src="<?php echo"$movpos"; ?>" id="movpos">
		<!-- php code here -->
		<p>Movie:<BR>
		<?php echo"$name"; ?></p>
		<p>Movie Rating:<br>
		<?php echo"$rat"; ?>&nbsp/&nbsp10</p>
		</aside>
		
		
		<section class="s">
		<!-- php code here -->
		
		
			<p><center><b style="font-size:25px;font-weight:h3;margin-left:20px;"><?php echo"$name"; ?></b>
			<a href=<?php echo "$lk";?> target="_blank" style="text-decoration:none"><span id="t1">Click to view trailer</span></a><center>
			</p>
			<form name="f1" >
			<table cellspacing="20px" cellpadding="10px">
				<tr>
				<th colspan=2><input type="Radio" name="day" value="22" required /><label>22nd Oct</label></th>
				<th colspan=2><input type="Radio" name="day" value="23"/><label>23rd Oct</label></th>

				</tr>
				<tr>
				<th colspan=4>Theater 1</th>
				</tr>
				<tr>
				<td onclick=fn1('t1',11)>11:00</td>
				<td onClick=fn1('t1',14)>14:00</td>
				<td onclick=fn1('t1',17)>17:00</td>
				<td onclick=fn1('t1',20)>20:00</td>
				</tr>
				<tr>
				<th colspan=4>Theater 2</th>
				</tr>
				<tr>
				<td onclick=fn1('t2',11)>11:00</td>
				<td onclick=fn1('t2',14)>14:00</td>
				<td onclick=fn1('t2',17)>17:00</td>
				<td onclick=fn1('t2',20)>20:00</td>
				</tr>
				<tr>
				<th colspan=4>Theater 3</th>
				</tr>
				<tr>
				<td onclick=fn1('t3',11)>11:00</td>
				<td onclick=fn1('t3',14)>14:00</td>
				<td onclick=fn1('t3',17)>17:00</td>
				<td onclick=fn1('t3',20)>20:00</td>
				</tr>
				<tr>
				<th colspan=4>Theater 4</th>
				</tr>
				<tr>
				<td onclick=fn1('t4',11)>11:00</td>
				<td onclick=fn1('t4',14)>14:00</td>
				<td onclick=fn1('t4',17)>17:00</td>
				<td onclick=fn1('t4',20)>20:00</td>
				</tr>
			</table>
			</form>
		</section>
			
		</div>
		<script>
		function fn1(tname,time)
		{
			var radios=document.getElementsByTagName('input');
			
				// if(document.getElementById('23').checked){
				// alert("hello");
				// }
				
			for(var i=0;i<2;i++)
			{	 var j=1;
				if (radios[i].checked)
				{
					var date=radios[i].value;
					j=0;
					break;
				}
			}
			
			
			
			
			if(j==0)
			{
					var hr=('home4.php?date='+date+'&&tname='+tname+'&&time='+time);
					location.href=hr;
				
			}
			else 
				alert("Select A Date First");
			
		}
		</script>
</body>
</html>