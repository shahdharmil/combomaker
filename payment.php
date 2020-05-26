<?php  session_start();
$count=0;
if(!empty($_POST['seat'])){
	$seat=$_POST['seat'];
	foreach ($_POST['seat'] as $selected){
		$count=$count+1;
	}
	// var_dump($seat);
	$_SESSION['seats']=$seat;
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
<link rel="stylesheet" type="text/css" href="home3.css">
<link rel="stylesheet" type="text/css" href="payment.css">

</head>
<body>
<div class="header">
		<h1 style="color:lightgrey;font-family:lucida calligraphy;">Movie Ticket Booking Center</h1>
		
			<div class="u">
			
			<p style="font-size:1.1em;">Welcome <strong><?php echo ($_SESSION['username']); ?></strong></p>
			<p> &nbsp&nbsp <a href="index.php?logout='1'" style="text-decoration:none;"><span class="l1">logout</span></a> </p>
			</div>
	</div>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="done.php" method="post">
      
        <div class="row">
         

          <div class="col-50">
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe" required>
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" maxlength="16" required>
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September" required>
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018" required>
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352" required>
              </div>
            </div>
          </div>
          
        </div>

        <input type="submit" value="Make payment" class="btn">
      </form>
    </div>
  </div>
  <div class="col-25">
    <div class="container">
	
	<?php
      echo "<h4>Cart <span class='price' style='color:black'><i class='fa fa-shopping-cart'></i> <b style='color:lightgrey;'>$count</b></span></h4>";
	  echo "<hr>";
	   
	  $price=150*$count;
      echo "<p><b>Seats X $count</b><span class='price'>Rs $price</span></p>";
	  ?>
	  
	  
      <p><b>GST</b> <span class="price">Rs 55</span></p>
      <hr>
	  
	  <?php $total=$price+55;
	  $_SESSION['total']=$total;
      echo "<p>Total <span class='price' style='color:black'><b>Rs $total</b></span></p>";
	  ?>
	  
    </div>
  </div>
</div>

</body>
</html>