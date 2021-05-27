<?php

$name=$_POST["name"];
$email=$_POST["email"];
$mobilenum=$_POST["number"];
$DOB=$_POST["DOB"];
$gender=$_POST["Gender"];
$address=$_POST["address"];
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
<h2 style="text-align:center;font-family:verdana;"> Display Data </h2>
<table>

<tr>
	<td> Name </td>
	<td><?php echo "$name"; ?> </td>
<tr>
<tr>
	<td> Email </td>
	<td><?php echo "$email"; ?> </td>
<tr>
<tr>
	<td> Phone </td>
	<td><?php echo "$mobilenum"; ?> </td>
<tr>
<tr>
	<td> Date of Bithh </td>
	<td> <?php echo "$DOB"; ?> </td>
<tr>
<tr>
	<td> Gender </td>
	<td> <?php echo "$gender"; ?> </td>
<tr>
<tr>
	<td> Address </td>
	<td> <?php echo "$address"; ?> </td>
<tr>

</table>
</body>
</html>