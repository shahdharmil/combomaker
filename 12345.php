<?php

if($_POST['addition']){


$file_open = fopen("output.txt","a+"); //fopen("something.txt","a+"); to add the contents to file
fwrite($file_open, $_POST['addition']);
fclose($file_open);
header("Location:1.php");
}
?>
#hello
