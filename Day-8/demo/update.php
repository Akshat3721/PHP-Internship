<?php 
if(!isset($_GET['id']) || empty($_GET['id'])) {
	header("location:db_display.php");
}
	$host = "localhost";
	$username = "root";
	$passwd = "";
	$dbname = "db_internship";

	$connection = mysqli_connect($host, $username, $passwd, $dbname);

	$id = $_GET['id'];

	$q = mysqli_query($connection,
		"select * from tbl_user where user_id='{$id}'") or die("Error". mysqli_error($connection));

	$row = mysqli_fetch_array($q);

if ($_POST) {
	$name = $_POST['txt1'];
	$gender = $_POST['txt2'];
	$mobile = $_POST['txt3'];

	$qd = mysqli_query($connection,
		"update tbl_user set user_name='{$name}',user_gender='{$gender}',user_mobile='{$mobile}' where user_id='{$id}'") or die("Error". mysqli_error($connection));

	if($qd){
		echo"<script>alert('Record Updated'); window.location='display.php';</script>";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Update	</title>
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
</style>
</head>
<body>
	<form method="post">
	<table align="center">
		<tr>
		<td>Name : </td> 
		<td><input type="text" name="txt1" value="<?php echo $row['user_name']; ?>" /></td>
		</tr>
		<tr>
		<td>Gender : </td> 
		<td><select name="txt2">
					<option value="Male" <?php if($row['user_gender']=="Male"){ echo "selected"; } ?> >Male</option>
					<option value="Female" <?php if($row['user_gender']=="Female"){ echo "selected"; } ?> >Female</option>
				</select>
		</td>
		</tr>
		<tr>
		<td>Mobile : </td> 
		<td><input type="Number" name="txt3" value="<?php echo $row['user_mobile']; ?>" /> </td>
		</tr>
		<tr>
		<td><input type="submit" /> </td>
		<td><a href='display.php'> View Records </a> </td>
		</tr>
	</table>
	</form>
</body>
</html>