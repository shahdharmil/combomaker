<?php

session_start();

// variable declaration
 
$_SESSION['success'] = "";

// connect to database
$db = mysqli_connect('localhost', 'root', 'dhruvil', 'cafe');
 
	// receive all input values from the form
	$name = mysqli_real_escape_string($db, $_POST['name']);
	$sell = mysqli_real_escape_string($db, $_POST['sell']);
	$minprice = mysqli_real_escape_string($db, $_POST['minprice']);
	
	$q = "UPDATE menu
		SET max=$sell, min=$minprice
		WHERE name='$name'";

if(mysqli_query($db, $q)){  
    header("Location:123.php");  
    }
?>