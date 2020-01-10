<?php

//Functions...

//Function get array and return sum of this value

function sum(array $array)
{
    $sum="0";
    foreach ($array as $key) {
        # code...
        $sum +=  $key;
    }
    return $sum;
}


// Function sort array ...
function RouteBubble(array $array)
{

    for ($i=0; $i <count($array) ; $i++) { 
        # code...
        for ($j=0; $j <count($array) ; $j++) { 
            # code...

            if ($array[$i]< $array[$j]) {
                # code...
                $swap = $array[$i];
                $array[$i]=$array[$j];
                $array[$j]=$swap;
            }
        }
    }
    return $array;
}



//Function search value in array 
function search(array $arr,$str)
{
    $found=false;
    // loop on array
    foreach ($arr as $key => $value) {
        # code...

        //check value in array or not 
        if ($str == $value) {
            # code...
            //return true
            $found=true;
        break;
        }
    }

    if ($found==true) {
        # code...
        echo "yes <br>";
    }
    else {
        
        echo "No...";
    }
}


// Function search value in array with binary search algorithm 
function RouteBinarySearch(array $arry, $x) 
{ 
    // check for empty array 
    if (count($arry) === 0) return false; 
    $min = 0; 
    $max = count($arry) - 1; 
      
    while ($min <= $max) { 
          
        // compute middle index 
        $mid = floor(($min + $max) / 2); 
   
        // element found at mid 
        if($arry[$mid] == $x) { 
            return true; 
        } 
  
        if ($x < $arry[$mid]) { 
            // search the left side of the array 
            $max = $mid -1; 
        } 
        else { 
            // search the right side of the array 
            $min = $mid + 1; 
        } 
    } 
      
    
    return false; 
} 


//Function get random chars..
function getName($n) { 

    $char = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    $random = ''; 

    for ($i = 0; $i < $n; $i++) { 
        //choose random char
        $index = rand(0, strlen($char) - 1); 
        //concat char to empty random value
        $random .= $char[$index]; 
    } 
  
    return $random; 
} 





//implement functions 



$array=array("10","80","60","20","50","40","30","70",);



$res=sum($array);
echo $res."<br>";
echo "<hr>";


$sort=RouteBubble($array);
foreach ($sort as $key => $value) {
    # code...
    echo $value."<br>";
}


echo "<hr>";



$sec=search($array, "10");
echo $sec;

echo "<hr>";



  
// code...
$value = 5; 
if(RouteBinarySearch($sort, $value) == true) { 
    echo $value." Yes.."; 
} 
else { 
    echo $value." No..."; 
} 



echo "<hr>";



  $getr=getName(20);
echo  $getr."<br>";

?>