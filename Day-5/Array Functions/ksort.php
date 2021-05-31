<?php
$a = array(
"Banana" => "Yellow",
"Apple" => "Red",
"Mango" => "Green",
"Orange" => "Blue");
ksort($a);
foreach ($a as $key => $value) {
echo "<br />$key - $value ";
}
?>
