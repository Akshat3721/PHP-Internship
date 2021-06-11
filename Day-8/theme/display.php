<?php 
					$host = "localhost";
					$username = "root";
					$passwd = "";
					$dbname = "db_student";

					$connection = mysqli_connect($host, $username, $passwd, $dbname);

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
	 width: 100%;
	 margin-left: auto; 
  margin-right: auto;
}
th, td {
  padding: 10px;
  text-align: left;
  font-family:verdana;
}
tr:hover {background-color:#f5f5f5;}
th {
  background-color:  #002699;
  color: white;
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
				<h2 class="title"><a href="#">Display Data</a></h2>
				<p class="meta"><span class="date">May 20, 2021</span></p>
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
					<?php

					$q = mysqli_query($connection,
							"select * from tbl_student where is_delete = 0") or die("Error". mysqli_error($connection));

						echo "<table border='1px' style='border-style: solid; border-width: 2px'>";
						echo "<tr>";
						echo "<th>Name</hd>";
						echo "<th>Email</th>";
						echo "<th>Mobile</th>";
						echo "<th>Date Of Birth</th>";
						echo "<th>Gender</th>";
						echo "<th>Blood Group</th>";
						echo "<th>Address</th>";
						echo "<th>Area</th>";
						echo "<th>Pincode</th>";
						echo "<th>Action</th>";
						echo "</tr>";
						
						while ($row = mysqli_fetch_array($q)) {
							echo "<tr>";
							echo "<td>{$row['st_name']}</td>";
							echo "<td>{$row['st_email']}</td>";
							echo "<td>{$row['st_mobile']}</td>";
							echo "<td>{$row['st_dob']}</td>";
							echo "<td>{$row['st_gender']}</td>";
							echo "<td>{$row['st_bloodgroup']}</td>";
							echo "<td>{$row['st_address']}</td>";
							echo "<td>{$row['st_area']}</td>";
							echo "<td>{$row['st_pincode']}</td>";
							echo "<td> <a href='update.php?id={$row['st_id']}'> Update </a> | <a href='delete.php?deleteid={$row['st_id']}'> Delete </a> </td>";
							echo "</tr>";
						}
						echo "</table>";
					
				?>
				</div>
			</div>
			
			<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
		
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
