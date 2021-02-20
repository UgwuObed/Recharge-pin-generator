<!DOCTYPE html>
<html>

<head>

</head>

<bod>
<?php

function myfunction():array{
    $randomNumbers = array();
    $i=0;
    do{

        $k=mt_rand(0,999999999999);
        $i++;

        $randomNumbers[] = $k;
    } while($i<=300) ;

    return $randomNumbers;
} 
print_r(myfunction());
?>

<form action="index.php" method="POST">
   <input type="submit" name="Recharge" value="Click To Generate Your Pin">
</form>
</bod>
</html>