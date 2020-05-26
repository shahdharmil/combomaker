<?php 
session_start();
// echo $_GET['date'].$_GET['time'].$_GET['tname'];
$theater=$_GET['tname'];
$date=$_GET['date'];
$time=$_GET['time'];
if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: home.html');
	}
		$m=($_SESSION['movie']);
		switch($m){
		case "stree":{$movpos="movies/stree.jpg";
		$name="STREE";
		$rat="8.3";
		break;}
		case "gold":{$movpos="movies/gold.jpg";
		$name="GOLD";
		$rat="8";
		break;}
		case "deadpool":{$movpos="movies/dp2.jpg";
		$name="DEADPOOL 2";
		$rat="7.9";
		break;}
		case "infinitywar":{$movpos="movies/aif.jpg";
		$name="AVENGERS:INFINITY WAR";
		$rat="8.6";
		break;}
		default:{header('location: home.html');
		break;}
		}
		
		switch($theater){
			case "t1":{$theater="Theater 1";
			break;}
			case "t2":{$theater="Theater 2";
			break;}
			case "t3":{$theater="Theater 3";
			break;}
			case "t4":{$theater="Theater 4";
			break;}
			default:break;
		}
		$_SESSION['theater']=$theater;
		$_SESSION['time']=$time;
		$_SESSION['date']=$date;
		?>
<html>
<head>
 
<link rel="stylesheet" type="text/css" href="home.css">
<link rel="stylesheet" type="text/css" href="home2.css">
<!-- <link rel="stylesheet" type="text/css" href="home3.css"> -->
<link rel="stylesheet" type="text/css" href="home4.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Seat Booking</title>
</head>
<body>
	<div class="header">
		<h1 style="color:lightgrey;font-family:lucida calligraphy;">Movie Ticket Booking Center</h1>
		
			<div class="u">
			
			<p style="font-size:1.3em;">Welcome <strong><?php echo ($_SESSION['username']); ?></strong></p>
			<p> &nbsp&nbsp <a href="index.php?logout='1'" style="text-decoration:none;"><span class="l1">logout</span></a> </p>
			</div>
	</div>
	<div class="wrap">
	<aside id="aside2">
	<h3>Your Selection</h3>
	
	
	<?php
	echo"<img src='$movpos' style='background:blue;width:78%;max-height:400px;border-radius:25px;border: white solid 5px;'></img>";
	echo"<h3>$name</h3>";
	echo"<h3>$theater</h3>";
	echo "<p>Date : $date October</p>";
	echo"<p>Time : $time:00</p>";
	?>
	
	
	</aside>
<div class="plan1">
   
   <?php 
		$db = new mysqli('localhost', 'root', 'dhruvil', 'registration');
		$query="SELECT seats FROM seats WHERE movie='$m' AND theater='$theater' AND date=$date AND time=$time ";
		// echo $query;
		$result = $db->query($query);
		$i=0;
		if(mysqli_num_rows($result) > 0)
		{while($row = $result->fetch_assoc())
		{
			
			$s[$i]=$row["seats"];
			$i++;
		}
		// var_dump( $s);
		for ($i=0;$i<sizeof($s);$i++){
		$array[$i]=unserialize($s[$i]);
		}
		// var_dump($array);
		
		foreach ($array as $value)
		{	foreach($value as $v){
				$r[]=$v;}}
		
		// var_dump($r);
		}
		else{
		$r=['0A'];
		}
	?>
   
    <h3>Please select your seats</h3>
	<input type="checkbox" disabled /><label>Occupied</label>
	&nbsp <label >Available</label>
	&nbsp <label style="background:#bada55">Selected</label>
    <form action="payment.php" method="post" name="f1">
    <div class="exit exit--front" align="center">
    Screen 1
    </div>
  
  
  
	<?php// store in variable that if it is disable or not..if in db it is disabled..?>
  <center>
  <ol class="cabin">
    <li class="row row--1">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="1A" value="1A" name="seat[]" <?php if(in_array('1A',$r)) echo'disabled';?>>
          <label for="1A">1A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="1B" value="1B" name="seat[]" <?php if(in_array('1B',$r)) echo'disabled';?>>
          <label for="1B">1B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="1C" value="1C" name="seat[]" <?php if(in_array('1C',$r)) echo'disabled';?>>
          <label for="1C">1C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="1D" value="1D" name="seat[]" <?php if(in_array('1D',$r)) echo'disabled';?>>
          <label for="1D">1D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="1E" name="seat[]" value="1E" <?php if(in_array('1E',$r)) echo'disabled';?>>
          <label for="1E">1E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="1F" name="seat[]" value="1F" <?php if(in_array('1F',$r)) echo'disabled';?>>
          <label for="1F">1F</label>
        </li>
      </ol>
    </li>
    <li class="row row--2">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="2A" name="seat[]" value="2A" <?php if(in_array('2A',$r)) echo'disabled';?>>
          <label for="2A">2A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="2B" name="seat[]" value="2B" <?php if(in_array('2B',$r)) echo'disabled';?>>
          <label for="2B">2B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="2C" name="seat[]" value="2C" <?php if(in_array('2C',$r)) echo'disabled';?>>
          <label for="2C">2C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="2D" name="seat[]" value="2D" <?php if(in_array('2D',$r)) echo'disabled';?>>
          <label for="2D">2D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="2E" name="seat[]" value="2E" <?php if(in_array('2E',$r)) echo'disabled';?>>
          <label for="2E">2E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="2F" name="seat[]" value="2F" <?php if(in_array('2F',$r)) echo'disabled';?>>
          <label for="2F">2F</label>
        </li>
      </ol>
    </li>
    <li class="row row--3">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="3A" name="seat[]" value="3A" <?php if(in_array('3A',$r)) echo'disabled';?>>
          <label for="3A">3A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="3B" name="seat[]" value="3B" <?php if(in_array('3B',$r)) echo'disabled';?>>
          <label for="3B">3B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="3C" name="seat[]" value="3C" <?php if(in_array('3C',$r)) echo'disabled';?>>
          <label for="3C">3C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="3D" name="seat[]" value="3D" <?php if(in_array('3D',$r)) echo'disabled';?>>
          <label for="3D">3D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="3E" name="seat[]" value="3E" <?php if(in_array('3E',$r)) echo'disabled';?>>
          <label for="3E">3E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="3F" name="seat[]" value="3F" <?php if(in_array('3F',$r)) echo'disabled';?>>
          <label for="3F">3F</label>
        </li>
      </ol>
    </li>
    <li class="row row--4">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="4A" name="seat[]" value="4A" <?php if(in_array('4A',$r)) echo'disabled';?>>
          <label for="4A">4A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="4B" name="seat[]" value="4B" <?php if(in_array('4B',$r)) echo'disabled';?>>
          <label for="4B">4B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="4C" name="seat[]" value="4C" <?php if(in_array('4C',$r)) echo'disabled';?>>
          <label for="4C">4C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="4D" name="seat[]" value="4D" <?php if(in_array('4D',$r)) echo'disabled';?>>
          <label for="4D">4D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="4E" name="seat[]" value="4E" <?php if(in_array('4E',$r)) echo'disabled';?>>
          <label for="4E">4E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="4F" name="seat[]" value="4F" <?php if(in_array('4F',$r)) echo'disabled';?>>
          <label for="4F">4F</label>
        </li>
      </ol>
    </li>
    <li class="row row--5">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="5A" name="seat[]" value="5A" <?php if(in_array('5A',$r)) echo'disabled';?>>
          <label for="5A">5A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="5B" name="seat[]" value="5B" <?php if(in_array('5B',$r)) echo'disabled';?>>
          <label for="5B">5B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="5C" name="seat[]" value="5C" <?php if(in_array('5C',$r)) echo'disabled';?>>
          <label for="5C">5C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="5D" name="seat[]" value="5D" <?php if(in_array('5D',$r)) echo'disabled';?>>
          <label for="5D">5D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="5E" name="seat[]" value="5E" <?php if(in_array('5E',$r)) echo'disabled';?>>
          <label for="5E">5E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="5F" name="seat[]" value="5F" <?php if(in_array('5F',$r)) echo'disabled';?>>
          <label for="5F">5F</label>
        </li>
      </ol>
    </li>
    <li class="row row--6">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="6A" name="seat[]" value="6A" <?php if(in_array('6A',$r)) echo'disabled';?>>
          <label for="6A">6A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="6B" name="seat[]" value="6B" <?php if(in_array('6B',$r)) echo'disabled';?>>
          <label for="6B">6B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="6C" name="seat[]" value="6C" <?php if(in_array('6C',$r)) echo'disabled';?>>
          <label for="6C">6C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="6D" name="seat[]" value="6D" <?php if(in_array('6D',$r)) echo'disabled';?>>
          <label for="6D">6D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="6E" name="seat[]" value="6E" <?php if(in_array('6E',$r)) echo'disabled';?>>
          <label for="6E">6E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="6F" name="seat[]" value="6F" <?php if(in_array('6F',$r)) echo'disabled';?>>
          <label for="6F">6F</label>
        </li>
      </ol>
    </li>
    <li class="row row--7">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="7A" name="seat[]" value="7A" <?php if(in_array('7A',$r)) echo'disabled';?>>
          <label for="7A">7A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="7B" name="seat[]" value="7B" <?php if(in_array('7B',$r)) echo'disabled';?>>
          <label for="7B">7B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="7C" name="seat[]" value="7C" <?php if(in_array('7C',$r)) echo'disabled';?>>
          <label for="7C">7C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="7D" name="seat[]" value="7D" <?php if(in_array('7D',$r)) echo'disabled';?>>
          <label for="7D">7D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="7E" name="seat[]" value="7E" <?php if(in_array('7E',$r)) echo'disabled';?>>
          <label for="7E">7E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="7F" name="seat[]" value="7F" <?php if(in_array('7F',$r)) echo'disabled';?>>
          <label for="7F">7F</label>
        </li>
      </ol>
    </li>
    <li class="row row--8">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="8A" name="seat[]" value="8A" <?php if(in_array('8A',$r)) echo'disabled';?>>
          <label for="8A">8A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="8B" name="seat[]" value="8B" <?php if(in_array('8B',$r)) echo'disabled';?>>
          <label for="8B">8B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="8C" name="seat[]" value="8C" <?php if(in_array('8C',$r)) echo'disabled';?>>
          <label for="8C">8C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="8D" name="seat[]" value="8D" <?php if(in_array('8D',$r)) echo'disabled';?>>
          <label for="8D">8D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="8E" name="seat[]" value="8E" <?php if(in_array('8E',$r)) echo'disabled';?>>
          <label for="8E">8E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="8F" name="seat[]" value="8F" <?php if(in_array('8F',$r)) echo'disabled';?>>
          <label for="8F">8F</label>
        </li>
      </ol>
    </li>
    <li class="row row--9">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="9A" name="seat[]" value="9A" <?php if(in_array('9A',$r)) echo'disabled';?>>
          <label for="9A">9A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="9B" name="seat[]" value="9B" <?php if(in_array('9B',$r)) echo'disabled';?>>
          <label for="9B">9B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="9C" name="seat[]" value="9C" <?php if(in_array('9C',$r)) echo'disabled';?>>
          <label for="9C">9C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="9D" name="seat[]" value="9D" <?php if(in_array('9D',$r)) echo'disabled';?>>
          <label for="9D">9D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="9E" name="seat[]" value="9E" <?php if(in_array('9E',$r)) echo'disabled';?>>
          <label for="9E">9E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="9F" name="seat[]" value="9F" <?php if(in_array('9F',$r)) echo'disabled';?>>
          <label for="9F">9F</label>
        </li>
      </ol>
    </li>
    <li class="row row--10">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="10A" name="seat[]" value="10A" <?php if(in_array('10A',$r)) echo'disabled';?>>
          <label for="10A">10A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="10B" name="seat[]" value="10B" <?php if(in_array('10B',$r)) echo'disabled';?>>
          <label for="10B">10B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="10C" name="seat[]" value="10C" <?php if(in_array('10C',$r)) echo'disabled';?>>
          <label for="10C">10C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="10D" name="seat[]" value="10D" <?php if(in_array('10D',$r)) echo'disabled';?>>
          <label for="10D">10D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="10E" name="seat[]" value="10E" <?php if(in_array('10E',$r)) echo'disabled';?>>
          <label for="10E">10E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="10F" name="seat[]" value="10F" <?php if(in_array('10F',$r)) echo'disabled';?>>
          <label for="10F">10F</label>
        </li>
      </ol>
    </li>
  </ol>
  </center>
	<div class="exit exit--back">
	<b>&mapstodown; &nbsp &ddarr; &nbsp  Screen this way &nbsp &ddarr; &nbsp &mapstodown;</b> 
	</div>
	<input type="button" value="Next" style="padding:10px;border-radius:20px;background-color:#4CAF50;color:white;font-size:1.2em;
	box-shadow: 1px 1px 1px hsla(0,0%,26.6667%,0.8);outline:none;" onclick="fn1()">
	</form>

   </div>
</div>
<script>
function fn1()
		{
			var radios=document.getElementsByTagName('input');
			for(var i=0;i<radios.length;i++)
			{	 var j=1;
				if (radios[i].checked)
				{
					j=0;
					break;
				}
			}
			if(j==1)
			{
			alert("Select A Seat First");
			}
			else 
			{	
			document.f1.submit();
			}
			
		}
</script>
</body>
</html>