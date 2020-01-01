<?php

//num1
$days = ["Sat", "Sun", "Mon","Tus","Wed", "Thu", "Fri"];// aray of days 

for ($i=0; $i <count($days) ; $i++) { 
    # code...
    echo $days[$i]."<br>";

    if ($days[$i] == "Sat") {
        # code...
        echo "السبت<br>";
    }

    elseif ($days[$i] == "Sun") {
        # code...
        echo "الاحد<br>";
    }

    elseif ($days[$i] == "Mon") {
        # code...
        echo "الاثنين<br>";
    }

    elseif ($days[$i] == "Tus") {
        # code...
        echo "الثلاثاء<br>";
    }

    elseif ($days[$i] == "Web") {
        # code...
        echo "الاربعاء<br>";
    }

    elseif ($days[$i] == "Thu") {
        # code...
        echo "الخميس<br>";
    }

    elseif ($days[$i] == "Fri") {
        # code...
        echo "الجمعة<br>";
    }


}

echo "<hr>";
//num2

$username ="ahmed";
$password ="123";

if (gettype($username)== "string" && gettype($password)=="string") {
    # code...
    if ($username == "ahmed" && $password =="123") {
        # code...
        echo "Username :".$username;
    }
    elseif ($username == "tariq" && $password =="789") {
        # code...
        echo "Username :".$username;
    }

    else {
        # code...
        echo "Invalid User";
    }
}



echo "<hr>";
//num3

$test =42.12;

if (gettype($test)=="string") {
    # code...
    echo $test;
}

elseif (gettype($test)=="boolean") {
    # code...
    if ($test == true) {
        # code...
        echo "yes";
    }
    else {
        echo "No";
    }
}

elseif (gettype($test)=="integer") {
    # code...
    $test = $test + 5;
    echo $test;
}

elseif (gettype($test)=="double") {
    # code...
    $test = $test * 7;
    echo $test;
}

else {
    echo "Error...";
}



echo "<hr>";
echo "<hr>";
//ass 2

//num1

$films1=array("Fast","Predestination","Persuit","Prestige");
$keyword="avatar";

for ($i=0; $i <count($films1) ; $i++) { 
    # code...
    if ($keyword == $films1[$i]) {
        # code...
        echo "Yes";
        break;
    }
    else {
        echo "No";
        break;
    }
}

echo "<hr>";
//num2


$films2=array("avatar","Prestige","avatar","Prestige");
$keyword="avatar";
$counts=0;

for ($i=0; $i <count($films2) ; $i++) { 
    # code...
    if ($keyword == $films2[$i]) {
        # code...
        $counts=$counts+1;

    }
    
}

echo $counts;


echo "<hr>";
//num3

//function reverse array
for ($i=count($films2)-1; $i >=0 ; $i--) { 
    echo $films2[$i]."<br>";
}



echo "<hr>";
//num4

$tests=array(1,"tariq",1.5,true,7,'s',false);

for ($i=0; $i <count($tests) ; $i++) { 
    # code...
    if ($tests[$i]=="1" && gettype($tests[$i])!="integer"  ){
        # code...
        echo "yes <br>";
    }
    elseif ($tests[$i]=="0" ){
        # code...
        echo "No <br>";
    }


    else {
        echo $tests[$i]."<br>";
    }
    
    
}

echo "<hr>";
//num5

//max of array
$tests1=array(5,4,9,3,1,7,5,8,6);
echo max($tests1);

echo "<hr>";
//num6


$sum=0; 
for ($i=0; $i <count($tests1) ; $i++) { 
    # code...
    $sum= $tests1[$i]+$sum;
}

echo $sum;


echo "<hr>";
//num7

$sum1=0;
$res=0;


$tests2=array(6,4,9,3,12,8,7);
for ($i=0; $i <count($tests2) ; $i++) { 
    # code...
    $sum1= $tests2[$i]+$sum1;
    
}

    $res= $sum1 /count($tests2);
    echo $sum1 ."/".count($tests2)."=".$res."<br>";




    echo "<hr>";
    //num8

    //sorting tests2
    sort($tests2);
    $lenth =count($tests2);
    for ($i=0; $i <$lenth ; $i++) { 
        # code...
        echo $tests2[$i]."<br>";
    }






    echo "<hr>";
  //num9


  $arr1=array('a','b','c','d');
  $arr2=array('c','d','e','f');
  for ($i=0; $i <count($arr1) ; $i++) { 
      # code...

      for ($j=0; $j <count($arr2) ; $j++) { 
          # code...

          if ($arr1[$i] == $arr2[$j]) {
            # code...
  
            echo $arr1[$i]."<br>";
        }
      }
      
  }

?>