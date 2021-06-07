<?php 
	$host = "localhost";
	$username = "root";
	$passwd = "";
	$dbname = "db_student";

	$connection = mysqli_connect($host, $username, $passwd, $dbname);


        $id=$_GET['id'];

      

        $q = mysqli_query($connection,
                "select * from tbl_student where st_id = '{$id}'") or die("Error". mysqli_error($connection));

        $row = mysqli_fetch_array($q);

        

        if($_POST){

	$name  = $_POST['txt1'];
	$email = $_POST['txt2'];
	$mobile = $_POST['txt3'];
	$pass = $_POST['txt4'];
	$dob = $_POST['txt5'];
	$gender = $_POST['txt6'];
	$bg = $_POST['txt7'];
	$address = $_POST['txt8'];
	$area = $_POST['txt9'];
	$pincode = $_POST['txt10'];




	$qd = mysqli_query($connection,
		"update tbl_student set st_name='$name',st_email='$email',st_mobile='$mobile',st_password='$pass',st_dob='$dob',st_gender='$gender',st_bloodgroup='$bg', st_area='$area',st_address='$address',st_pincode='$pincode' where id = '{$st_id}'") or die("Error". mysqli_error($connection));



            if($qd){
                echo"<script>alert('Record Added');</script>";
	}
            else{
                echo"<script>alert('Please try again');</script>";
	}
            
        

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : StampALike  
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20120528

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
	<title>	Day-6 </title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Akshat Panchal</title>
<link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css" />
<link href="http://fonts.googleapis.com/css?family=Coda:400,800" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />

<style type="text/css">
		table{
	border-collapse: collapse;
	 width: 60%;
	 margin-left: auto; 
  margin-right: auto;
}
th, td {
  padding: 8px;
  text-align: left;
  font-family:verdana;
}
.button {
  background-color: #555555;;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
	</style>
</head>
<body>
<?php include 'header.php'; ?>
<div id="header-wrapper">
	<div id="header">
		<div id="logo">
			<h1><a href="#">Akshat Panchal</a></h1>
			
		</div>
	</div>
</div>
<div id="wrapper"> 
	<!-- end #header -->
	<div id="page-bgtop"></div>
	<div id="page">
		<div><img src="images/pic1.jfif" width="920" height="450" alt="" /></div>
		<div id="content">
			<div class="post">
				<h2 class="title"><a href="#">Registration  Form </a></h2>
				<p class="meta"><span class="date">June 1, 2021</span></p>
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
					





	<form method="post">
		<table align="center">
			<tr>
				<td> Name :</td>
				<td><input type="text" name="txt1" value="<?php echo $st_name;  ?>"  /> <br/><br/> </td>
			</tr>
			<tr>
				<td>Email : </td>
				<td><input type="email" name="txt2" value="<?php echo $st_email;  ?>" /><br/> <br/></td>
			</tr>
			<tr>
				<td>Mobile: </td>
				<td><input type="Number" name="txt3" value="<?php echo $st_mobile;  ?>" /><br/> <br/></td>
			</tr>
			<tr>
				<td>Password: </td>
				<td><input type="password" name="txt4" value="<?php echo $st_password;  ?>" /><br/> <br/></td>
			</tr>
			<tr>
				<td>Date of Birth: </td>
				<td><input type="date" name="txt5" value="<?php echo $st_dob;  ?>" /><br/> <br/></td>
			</tr>
			<tr>
				<td>Gender : </td>
				<td><input type="radio" <?php if($row['st_gender']=="Male") { echo "checked";} ?> value="Male" name="txt6"> name="txt6"/>
					<input type="radio" <?php if($row['st_gender']=="Female") { echo "checked";} ?> value="Female" name="txt6" /> 
					</td>
			</tr>
			
			<tr>
				<td>Address : </td>
				<td><textarea name="txt8" value="<?php echo $st_address;  ?>" cols="50" rows="5"></textarea><br/> <br/></td>
			</tr>
			<tr>
				<td>Area : </td>
				<td><input type="text" name="txt9" value="<?php echo $st_area;  ?>" /><br/> <br/></td>
			</tr>
			<tr>
				<td>Pincode : </td>
				<td><input type="Number" name="txt10" value="<?php echo $st_pincode;  ?>"><br/> <br/></td>
			</tr>
			<tr>
				<td>Blood Group : </td>
				<td><input type="text" name="txt7" value="<?php echo $st_bloodgroup;  ?>" /><br/> <br/></td>
			</tr>
			<tr>
				<td><input class="button" type="submit" /></td>
				<td><input class="button" type="reset" /></td>
			</tr>
		</table>
	</form>


				</div>
			</div>
			
			<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
		<?php include 'sidebar.php'; ?>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<div id="page-bgbtm"></div>
	<!-- end #page --> 
</div>
<?php include 'footer.php'; ?>
<!-- end #footer -->
</body>
</html>

 