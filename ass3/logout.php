<?php
session_start();

session_destroy();

header( "refresh:2;url=index.php" );

echo "You will Redirect to Home page in 2 sec , you can go to <a href='index.php'>Here </a> to login page ";



?>