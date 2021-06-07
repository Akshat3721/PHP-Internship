<?php 
	$host = "localhost";
	$username = "root";
	$passwd = "";
	$dbname = "db_internship";

	$connection = mysqli_connect($host, $username, $passwd, $dbname);

?>
<html>
<head>
<style type="text/css">
		table{
	border-collapse: collapse;
	 width: 50%;
	 margin-left: auto; 
  margin-right: auto;
}
th, td {
  padding: 8px;
  text-align: left;
  font-family:verdana;
}
tr:hover {background-color:#f5f5f5;}


</style>
</head>
</html>

<?php

	$q = mysqli_query($connection,
		"select * from tbl_user where is_delete = 0") or die("Error". mysqli_error($connection));

	echo "<table>";
	echo "<tr>";
	echo "<th>Id</th>";
	echo "<th>Name</th>";
	echo "<th>Gender</th>";
	echo "<th>Mobile</th>";
	echo "<th>Action</th>";
	echo "</tr>";
	
	while ($row = mysqli_fetch_array($q)) {
		echo "<tr>";
		echo "<td>{$row['user_id']}</td>";
		echo "<td>{$row['user_name']}</td>";
		echo "<td>{$row['user_gender']}</td>";
		echo "<td>{$row['user_mobile']}</td>";
		echo "<td> <a href='update.php?id={$row['user_id']}'> update </a> | <a href='delete.php?deleteid={$row['user_id']}'> Delete </a> </td>";
		echo "</tr>";
	}
	echo "<tr> <td> <a href='add-record.php'> Add Record </a> </td> </tr>";
	echo "</table>";
?>