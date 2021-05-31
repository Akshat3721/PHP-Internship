<?php
$arr1 = array("Banana" , "Apple" , "Mango","Orange");
$arr2 = array("Yellow","Red", "Green","Blue");
$NewVar = array_combine($arr1, $arr2);
print_r($NewVar);
?>
