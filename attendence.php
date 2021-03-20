<?php

if($conn = mysqli_connect("localhost", "root","")) {

	mysqli_select_db($conn,"gptw");
}

?>


<!DOCTYPE HTML>
<html>
<head>
	<title>ATTENDENCE</title> 
	<style type="text/css">
	.a{background-color: #33ffff;height:125px;width:1335px;border-radius:15px;}
	.b{color:red; }
	.c{background-color: green;height:50px;width:1335px;border-radius:10px}
	a{color: yellow}
	.button{background-color:orange; padding:5px}
	    th{

    color:black;
    font-style:oblique;
    background-color: orange;
    padding: 10px;
    width: 180px
  }
  tr{

    background-color:#33ffff;
    padding: 30px
  }
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
		<div align="center"><br>

		<form action="attendence.php" method="post">

			<input type="submit" name="b1" value="VIEW ATTENDENCE" class="button">

			<input type="submit" name="b2" value="VIEW CONDONATION LIST" class="button">

			<input type="submit" name="b3" value="VIEW DETAINED LIST" class="button">
		</form>
		</div>

		<?php

			if (isset($_POST['b1'])) {
		?>

		<div align="center"><br><br>
				
			<form action="attendence.php" method="POST">

				<h3>VIEW YOUR ATTENDENCE</h3><br>
				PIN :&nbsp;<input type="text" name="pin" required><br><br>
				<input type="radio" name="month" value="1">MONTH:1<br>
				<input type="radio" name="month" value="2">MONTH:2<br>
				<input type="radio" name="month" value="3">MONTH:3<br>
				<input type="radio" name="month" value="4">MONTH:4<br>
				<input type="radio" name="month" value="5">MONTH:5<br><br><br>

				<input type="submit" name="submit" value="submit">
			</form>

		</div>

		<?php
	}

		if (isset($_POST['submit'])) {
			
			$query = "SELECT * FROM  attendence$_POST[month] WHERE pin = '$_POST[pin]' ";

			$result = mysqli_query($conn,$query);

			while ($result2 = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
				
				$pin2 = $result2['PIN'];
				$name = $result2['NAME'];
				$wd = $result2['WORKING DAYS'];
				$att = $result2['ATTENDED'];
				$per = $result2['PERCENTAGE'];


		?>

		<div align="center"><br><br>
			<h3>MONTH : <?php echo $_POST['month']; ?> ATTENDENCE</h3>
			<table width="600px">
				<tr style="color:olive"><th>PIN : <?php echo "$pin2"; ?></th><th>NAME : <?php echo "$name"; ?></th></tr>
			</table><br>
			<table width="600px">
				<th>WORKNG DAYS</th><th>ATTENDED</th><th>PERCENTAGE</th>
				<tr align="center"><td><?php echo "$wd"; ?></td><td><?php echo "$att"; ?></td><td><?php echo "$per"; ?></td></tr>
			</table>
		</div>

	<?php	
			}
		}
	
	?>

		<?php

			if (isset($_POST['b2'])) {

				?>
			<br><br>
			<table width="620px" align="center">
				<tr>
					<th width="220px">PIN</th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NAME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><th>PERCENTAGE</th>
				</tr>
			</table>
			<?php
				$query = "SELECT * FROM tatt WHERE total_percentage >= 65 AND total_percentage < 75";
				$result = mysqli_query( $conn,$query);
				while ($result2 = mysqli_fetch_array($result , MYSQLI_ASSOC)) {
					$pin2 = $result2['PIN'];
					$name = $result2['NAME'];
					$per = $result2['TOTAL_PERCENTAGE'];

					
		?>
<div>
		<table align="center">
			<tr>
			<td>
			<table width="200px" align="center" style="text-align:center">
				<tr>
					<td><?php echo "$pin2"; ?></td>
				</tr>
			</table>
		</td>
		<td>
			<table width="200px" align="center" style="text-align:center">
				<tr>
					<td><?php echo "$name"; ?></td>
				</tr>
			</table >
		</td>
		<td>
			<table width="200px" align="center" style="text-align:center">
				<tr>
					<td><?php echo "$per"; ?></td>
				</tr>
			</table>
		</td>
	</tr>
</table>
		</div>
		<?php

			}
		}
		?>


		<?php

			if (isset($_POST['b3'])) {

				?>
			<br><br>
			<table width="620px" align="center">
				<tr>
					<th width="200px">PIN</th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NAME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><th>PERCENTAGE</th>
				</tr>
			</table>
			<?php

				$query = "SELECT * FROM tatt WHERE total_percentage < 65";
				$result = mysqli_query( $conn,$query);
				while ($result2 = mysqli_fetch_array($result , MYSQLI_ASSOC)) {
					$pin2 = $result2['PIN'];
					$name = $result2['NAME'];
					$per = $result2['TOTAL_PERCENTAGE'];
					
		?>

		<div>
		<table align="center">
			<tr>
			<td>
			<table width="200px" align="center" style="text-align:center">
				<tr>
					<td><?php echo "$pin2"; ?></td>
				</tr>
			</table>
		</td>
		<td>
			<table  width="200px" align="center" style="text-align:center">
				<tr>
					<td><?php echo "$name"; ?></td>
				</tr>
			</table>
		</td>
		<td>
			<table  width="200px" align="center" style="text-align:center">
				<tr>
					<td><?php echo "$per"; ?></td>
				</tr>
			</table>
		</td>
	</tr>
</table>
		</div>

		<?php

			}
		}
		?>


	<!--footer-->
			<br><br><div style="background-color:maroon;padding:2px">
				<p style="color:white" align="center">&copy; 2018  GPTW . Designed  by <b>Sathish kesoju</b> and <b>Rajesh Keshoju</b></p>
			</div>
<!-- /footer-->	



</body>
</html>