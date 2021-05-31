<?php
$arr = array(1,"php",2,"android",3,"android");
$newarr = array_count_values($arr);
foreach ($newarr as $key => $value) {
echo "<br/>$key - <strong>$value</strong> ";
}
?>