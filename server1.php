<?php

session_start();

// variable declaration
 
$_SESSION['success'] = "";

// connect to database
$db = mysqli_connect('localhost', 'root', 'dhruvil', 'cafe');
 
	// receive all input values from the form
	$itemname = mysqli_real_escape_string($db, $_POST['itemname']);

	$sell = mysqli_real_escape_string($db, $_POST['sell']);
	$minprice = mysqli_real_escape_string($db, $_POST['minprice']);
	
	$q = "INSERT INTO menu (name, max, min) 
				  VALUES('$itemname', '$sell', '$minprice')";
		
		 if( mysqli_query($db, $q))
		 {  
    header("Location:12.php");  
    }

		

?>