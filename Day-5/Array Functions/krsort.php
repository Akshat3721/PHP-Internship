<?php
$a = array(
"Banana" => "Yellow",
"Apple" => "Red",
"Mango" => "Green",
"Orange" => "Blue");
krsort($arr);
foreach ($a as $key => $value) {
echo "<br />$key - $value ";
}

?>