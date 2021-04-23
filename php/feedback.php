<?php

$conn = mysqli_connect("localhost","root","");
if($conn)
{

	mysqli_select_db($conn,"gptw");

	if (isset($_POST['submit'])) {
		
		$query = "INSERT INTO feedbacks(`NAME`, `EMAIL`, `MESSAGE`) VALUES('$_POST[name]', '$_POST[email]' , '$_POST[message]')";

		$result = mysqli_query($conn , $query);

		if ($result) {
			
			echo "<center style=color:red>FEEDBACK is gven to admin</center>";
		}else{
			echo "<center style=color:red>ERROR!</center>";
		}
	}
}

?>


<!DOCTYPE HTML>
<html>
<head>
	<title>FEEDBACK</title>
	<style>
		.a{background-color: #33ffff;height:125px;width:1335px;border-radius:15px;}#id1{background-color:pink;width:1335px;}
		.b{color:red; }
		.c{background-color: green;height:50px;width:1335px;border-radius:10px}
		a{color: yellow}  #id3{color: red}
		span{color:blue } #id2{height:30px;border-radius: 50%} #id4{color: #3B5998} #id5{color: purple} #id6{color: red}
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
		
		<br><br>
	<form acton="feedback.php" method="post">	
		<div align="center">
			<div>
				<h3>GIVE YOUR FEEDBACK</h3><br>
			<div>

				<input type="text" name="name" placeholder="NAME" size=50 style="padding:8px" required> <br><br>

				<input type="text" name="email" placeholder="EMAIL" size=50 style="padding:8px"required> <br><br>

				<textarea name="message" placeholder="TYPE YOUR MESSAGE" rows="10" cols="54" required></textarea> <br><br>

				<input type="submit" name="submit" valu="submit">
			</div>
		</div>
	</form>

	<!--footer-->
			<br><br><div style= "background-color:maroon ; padding:2px">
				<p  style="color:white" align="center">&copy; 2018  GPTW . Designed  by <b>Sathish kesoju</b> and <b>Rajesh Keshoju</b></p>
			</div>
<!-- /footer-->	


</body>
</html>