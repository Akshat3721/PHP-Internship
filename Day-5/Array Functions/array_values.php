<?php
$arr = array("i"=>"c","a"=>"c++","b"=>"php");
$myarr = array_values($arr);
foreach($myarr as $key => $value) {
echo " <br />$key - $value";
}
?>