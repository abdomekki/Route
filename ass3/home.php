<?php
session_start();
function del($x){

    foreach ($_SESSION["product"] as $key => $value) {
        # code...
        if ($x === $key) {
            # code...
            unset($_SESSION["product"][$key]);
            return true;
        }
        
        
    }


    return false;
}

function update_prod($old,$new,$newprice)
{
    del($old);
    $_SESSION["product"][$new]=$newprice;
    
    echo"product ".$new."  updated successfully..<br>";


    
}







if(isset($_SESSION["uname"]))
{
echo "Hello ".$_SESSION["uname"]."<br> <br>";
?>

<form action="calprice.php" method="post">
<input type="number" name="price" placeholder="Enter Price" required>
<br>
<input type="number" name="count" placeholder="Enter count " required>
<br>
<br>
<input type="submit" value="calculate">

</form>


<hr>

<form action="" method="post">
<input type="text" name="prod" placeholder="Search" required>
<br>
<input type="submit" value="Search" name="search">
<br>

</form>


<form action="" method="post">
<input type="submit" value="Result" name="result">
<br>
<input type="submit" value="Sort By Price from Low" name="sort_p_a">
<br>

<input type="submit" value="Sort By Price from High" name="sort_p_d">
<br>

<input type="submit" value="Sort By product from Low" name="sort_pr_a">
<br>
<input type="submit" value="Sort By product from High" name="sort_pr_d">
<br>
</form>

<hr>
<form action="" method="post">
<input type="text" name="a_prod" placeholder="Enter product" required>
<br>
<input type="number" name="a_price" placeholder="Enter Price" required>
<br>
<input type="submit" value="Add" name="add">
<br>

</form>


<form action="" method="post">
<input type="text" name="delete" placeholder="Enter Product" required>
<br>
<input type="submit" value="Delete" name="delete_btn">
<br>

</form>

<form action="" method="post">
<input type="text" name="ou_prod" placeholder="Enter old product" required>
<br>
<input type="text" name="nu_prod" placeholder="Enter new product" required>
<br>
<input type="number" name="u_price" placeholder="Enter Price" required>
<br>
<input type="submit" value="Update" name="update">
<br>

</form>




<?php


if (isset($_POST['search'])) {
    # code...
    $prod=$_POST["prod"];
    $found=true;

    foreach ($_SESSION["product"] as $key => $value) {
        # code...
        $secr=strpos($key,$prod);
        if ($secr !== false) {
            # code...
           echo $key."=>".$value."<br>";

        }
        
    }
   
    
}
echo "<hr>";
echo " sorting...<br>";

if (isset($_POST['sort_p_a'])) {
    # code...
    $s_array=asort($_SESSION["product"]);
    foreach ($_SESSION["product"]as $key => $value) {
        # code...
        echo $key."=>".$value."<br>";
    }
}elseif (isset($_POST['sort_p_d'])) {
    # code...
    $s_array=arsort($_SESSION["product"]);
    foreach ($_SESSION["product"]as $key => $value) {
        # code...
        echo $key."=>".$value."<br>";
    }
}elseif (isset($_POST['sort_pr_a'])) {
    # code...
    $s_array=ksort($_SESSION["product"]);
    foreach ($_SESSION["product"]as $key => $value) {
        # code...
        echo $key."=>".$value."<br>";
    }
}elseif (isset($_POST['sort_pr_d'])) {
    # code...
    $s_array=krsort($_SESSION["product"]);
    foreach ($_SESSION["product"]as $key => $value) {
        # code...
        echo $key."=>".$value."<br>";
    }
}
elseif (isset($_POST['result'])) {
    # code...
    foreach ($_SESSION["product"]as $key => $value) {
        # code...
        echo $key."=>".$value."<br>";
    }
    
}elseif (isset($_POST['add'])) {
    # code...
    $n_prod=$_POST["a_prod"];
    $n_price=$_POST["a_price"];
    $_SESSION["product"][$n_prod]=$n_price;
    
    echo"product ".$n_prod."  added successfully..<br>";
    
}
elseif (isset($_POST['delete'])) {
    # code...
    $d_prod=$_POST["delete"];
    $_SESSION["d_prod"]=$d_prod;
    if (del($_SESSION["d_prod"])) {
        # code...
        echo $_SESSION["d_prod"]." yes";
    }
    else {
        # code...
        echo "no";
    }
    
}elseif (isset($_POST['update'])) {
    # code...
    $old_prod=$_POST["ou_prod"];
    $new_prod=$_POST["nu_prod"];
    $new_price=$_POST["u_price"];
    update_prod($old_prod,$new_prod,$new_price);
    
    
}


echo "<br>";
echo "Go to <a href='logout.php'>Logout</a>";
}
else {
    echo "Go to <a href='index.php'>login </a> page ";
}





?>