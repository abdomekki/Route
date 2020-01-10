<?php
$price=$_POST["price"];
$count=$_POST["count"];

$discount="0";

if ($price<1000 && $price >0) {
    # code...

    echo "Price before discount is : ".$price."<br>";
    $discount = ($price - ($price * 0.1))*$count;

    echo "New price is : ".$discount."<br>";

}
elseif ($price>=1000) {
    # code...

    echo "Price before discount is : ".$price."<br>";
    $discount = ($price - ($price * 0.15))*$count;

    echo "New price is : ".$discount."<br>";


}
elseif ($price<0 || $count<0) {
    # code...
    echo "Please Enter Postive Number...<br>";
}
else {
    # code...
    echo "Please Enter Numbers Only...<br>";
}


echo "<br> Go to <a href='Home.php'>Home </a> page ";


?>