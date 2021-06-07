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
				<h2 class="title"><a href="#">Contact us </a></h2>
				<p class="meta"><span class="date">May 20, 2021</span></p>
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
					<p> This website is made for demo purpose of theme integration.</p>
			
			<div class="flex-container">
<div style="flex-basis:5000px">
    
<div class="subtitle">          

<hr class="heading">
</div> 
            
<form action="regdata.php" method="POST">
<table >
     
	<tr>
		<td >Name:</td>
		<td><input type="text" name="name" placeholder="Enter Your Full Name"></td>
	</tr>
	<tr>
		<td >Email:</td>
		<td><input type="email" name="email" placeholder="Enter Email Id"></td>
	</tr>
	<tr>
		<td>Mobile Number:</td>
		<td><input type="text" name="number" placeholder="Enter Mobile Number" pattern="[0-9]{10}"></td>
	</tr>
	<tr>
		<td >Date Of Birth:</td>
		<td><input type="date" name="DOB" placeholder="YYYY-MM-DD" ></td>
	</tr>
	<tr>
		<td><label> Gender : </label> </td>
                        <td>
                            <input type="radio" id="male" name="gender"><label for="male" class="gender"> Male </label>
                            <input type="radio" id="female" name="gender"><label for="female" class="gender"> Female </label>
                            <input type="radio" id="other" name="gender"><label for="other" class="gender"> Other </label>
                        </td>
	</tr>
	<tr>
		<td >Address:</td>
		<td><textarea name="address"></textarea></td>
	</tr>
	</table>
    
 
     <div class="end">
    <tr>
        <th colspan="2">
            <input style="background-color: lightgreen" type="submit" name="submit" value="Submit Data">
            <input style="background-color: deepskyblue" type= "reset" name="reset" value="Reset Data">
        </th>
    </tr>
        </div>
    </form>
            
     </div>

    </div>       
					
					
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
