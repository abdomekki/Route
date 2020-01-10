<?php
session_start();

$username=$_POST["username"];
$password=$_POST["password"];

$_SESSION["uname"]=$username;
$_SESSION["upass"]=$password;
$products=array("tshirt"=>200 , "shirt"=>80 , "pantalon"=>220 , "shoes"=>120 , "short"=>90 , "jacket"=>60 , "glasses"=>80 , "sunglasses"=>100);
$_SESSION["product"]=$products;

header( "refresh:2;url=Home.php" );


echo "You will Redirect to Home page in 2 sec ".$username . " ,you can go to <a href='Home.php'>Here </a>  to Home page.. ";


?>