 
<?php
$user = "admin";
$pass = "gptw004";

?>

<html>
<head>
	<title>ADMIN LOGIN</title>
	<link rel='stylesheet' href='https://w3schools.com/w3css/4/w3.css'>
	<style type="text/css">
	.align{text-align: center;margin: 100}
	.a{background-color: #33ffff;height:125px;width:1335px;border-radius:15px;}
	.b{color:red; }
	.c{background-color: green;height:50px;width:1335px;border-radius:10px}
	a{color: yellow}
	.button{background-color:orange; width:180px;padding: 10px}

	</style>
</head>
<body bgcolor="silver">
		<!--header-->	
		<div class="a" align="center"><br><br>
	    	<h2 class="b"><font color="blue" face="lucida handwriting">GOVT. POLYTECHNIC</font><font color="black"> ,</font><font face="Segoe Script"> WARANGAL</font></h2>
		</div>

			<div class="c" align="center"><br>
			 	<a href="index.php">HOME </a> &nbsp;|&nbsp;
		      	<a href="about.php">ABOUT </a> &nbsp;|&nbsp;
		      	<a href="gallery.php">GALLERY</a> &nbsp;|&nbsp;
		      	<a href="stdcorner.php">STUDENT CORNER</a> &nbsp;|&nbsp;
		      	<a href="login.php">LOGIN</a> &nbsp;|&nbsp;
		      	<a href="feedback.php">FEEDBACK</a> &nbsp;|&nbsp;
		      	<a href="contact.php">CONTACT US</a>
		    </div>

<!--/header-->
<br>
<h2 class="b" align="center">ADMIN LOGIN</h2>		
<div class="align">
	<table align="center">
				<form action="login.php" method="post" >
			<tr>
				<td>
				<label>UserName:</label>
				<input type="text" name="username" style="padding:5" size="30" required>
				</td>
			</tr>
			<tr>
				<td><br/></td>
			</tr>
			<tr>
				<td><br/></td>
			</tr>
			<tr>
				<td>
				<label>PassWord:&nbsp;</label>
				<input type="password" name="password" style="padding:5" size="30" required>
				</td>
			</tr>
			<tr>
				<td><br/></td>
			</tr>
			<tr>
				<td><br/></td>
			</tr>
			<tr align="center">
				<td>
				<input type="submit" name="submit" value="submit" class="button">
				</td>
			</tr>
	</form>
</div>

	<?php
		if (isset($_POST['submit'])) {
 		$username = $_POST["username"];
 		$password = $_POST["password"];
 		if ($username == $user && $password == $pass) {
 			?>

 			<div>
				   <table cellspacing="50">
				   	<tr>
				   		<td>
					<div align="center">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images\gptimages\sc1.jpeg" height="105px" width="107px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="addstd.php" ><input type="button" value="ADD STUDENT" class="button"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					</div></td><td>
					<div align="center">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images\gptimages\sc2.jpeg" height="105px" width="107px"><br><br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="stddetails.php"><input type="button" value="SEARCH STUDENT" class="button"></a>
					</div></td></tr>
					<tr>
				   		<td>
					<div align="center">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images\gptimages\sc3.jpg" height="105px" width="107px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="marksentry.php"><input type="button" value="MARKS ENTRY" class="button"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					</div></td><td>
					<div align="center">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images\gptimages\sc4.jpg" height="105px" width="107px"><br><br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="results.php"><input type="button" value="VIEW RESULTS" class="button"></a>
					</div></td></tr>
					<tr>
						   		<td>
					<div align="center">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images\gptimages\attentry.jpg" height="105px" width="107px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="attendenceentry.php"><input type="button" value="ATTENDENCE ENTRY" class="button"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					</div></td><td>

						<div align="center">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images\gptimages\viewatt.jpg" height="105px" width="107px"><br><br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="attendence.php"><input type="button" value="VIEW ATTENDENCE" class="button"></a>
					</div></td></tr>
					</tr>
				   </table>
			</div>

 		<?php

  			}
 			else{
 		?>
 			<script type="text/javascript">alert("You're An Unauthorized Person");</script>
 		<?php

 			}

 			}
 		?>


</body>
</html>
