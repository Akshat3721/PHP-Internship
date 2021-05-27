
<?php

$a=$_POST["txt1"];
$b=$_POST["txt2"];
$c=$_POST["txt3"];
$d=$_POST["txt4"];
$e=$_POST["txt5"];
$total=$a+$b+$c+$d+$e;
$avg=$total/5;



?>

<html>

<style>
 table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 50%;
margin-left: auto; 
  margin-right: auto;
}
th, td {
  padding: 15px;
  text-align: left;
}
</style>
<body>
<h2 style="text-align:center;font-family:verdana;"> Result </h2>
<table>
<tr>
	<td> Maths </td>
	<td><?php echo "$a"; ?> </td>
<tr>
<tr>
	<td> Physics </td>
	<td><?php echo "$b"; ?> </td>
<tr>
<tr>
	<td> Chemistry </td>
	<td><?php echo "$c"; ?> </td>
<tr>
<tr>
	<td> English </td>
	<td> <?php echo "$d"; ?> </td>
<tr>
<tr>
	<td> Computer </td>
	<td> <?php echo "$e"; ?> </td>
<tr>
<tr>
	<td> Total </td>
	<td> <?php echo "$total"; ?> </td>
<tr>
<tr>
	<td> Percentage </td>
	<td> <?php echo "$avg%"; ?> </td>
<tr>
</table>

</body>
</html>
<?php
 if($avg>=80){
   echo"<p style='color:green;text-align:center;font-family:verdana;>Congratulation You did great job! </p>";
 }else if($avg<=80&&$avg>=30){
   echo"<p style='color:green;text-align:center;font-family:verdana;'>Congratulation you have passed this exam.</p>";
  }else if($avg<=30){
    echo"<p style='color:red;text-align:center;font-family:verdana;'>You failed.</p>";
  }
  ?>