<?php 

// $name=$_POST["name"];
// $dish=$_POST["dish"];


// echo "Welcome " .$name. "your favourite food is " .$dish ."is very delicious";

// $name = $_POST["name"] ?? "";
// $dish = $_POST["dish"] ?? "";

// if ($name && $dish) {
//     echo "Welcome " . $name . ", your favourite food " . $dish . " is very delicious.";
// } else {
//     echo "Please enter your name and favourite dish.";
// }


$num1=$_POST["num1"];
$num2=$_POST["num2"];

function sum($a,$b ){
    $sum = $a + $b;
    return $sum ;  
}

echo "The sum is " . sum($num1, $num2);

?>