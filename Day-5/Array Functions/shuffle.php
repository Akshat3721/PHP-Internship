<?php
$a = array("Football", "Baseball", "Hockey", "Tennis","Boxing","Cricket");
shuffle($a); // Shuffle the array
foreach ($a as $key => $value) {
echo "<br /> $value ";
}
