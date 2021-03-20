<?php

$conn = mysqli_connect("localhost" , "root" ,"");

if ($conn) {
	
	mysqli_select_db($conn , "gptw");

	if (isset($_POST['submit'])) {


	$query1 = "INSERT INTO attendence1(`PIN`, `NAME`, `WORKING DAYS`, `ATTENDED`, `PERCENTAGE`) VALUES('$_POST[pinh]','$_POST[name]','$_POST[m1w]','$_POST[m1a]','$_POST[m1p]') ";
	$result1 = mysqli_query($conn,$query1);

	$query2 = "INSERT INTO attendence2(`PIN`, `NAME`, `WORKING DAYS`, `ATTENDED`, `PERCENTAGE`) VALUES('$_POST[pinh]','$_POST[name]','$_POST[m2w]','$_POST[m2a]','$_POST[m2p]') ";
	$result2 = mysqli_query($conn,$query2);

	$query3 = "INSERT INTO attendence3(`PIN`, `NAME`, `WORKING DAYS`, `ATTENDED`, `PERCENTAGE`) VALUES('$_POST[pinh]','$_POST[name]','$_POST[m3w]','$_POST[m3a]','$_POST[m3p]') ";
	$result3 = mysqli_query($conn,$query3);

	$query4 = "INSERT INTO attendence4(`PIN`, `NAME`, `WORKING DAYS`, `ATTENDED`, `PERCENTAGE`) VALUES('$_POST[pinh]','$_POST[name]','$_POST[m4w]','$_POST[m4a]','$_POST[m4p]') ";
	$result4 = mysqli_query($conn,$query4);

	$query5 = "INSERT INTO attendence5(`PIN`, `NAME`, `WORKING DAYS`, `ATTENDED`, `PERCENTAGE`) VALUES('$_POST[pinh]','$_POST[name]','$_POST[m5w]','$_POST[m5a]','$_POST[m5p]') ";
	$result5 = mysqli_query($conn,$query5);

	$query6 = "INSERT INTO tatt(`PIN`, `NAME`, `TOTAL WORKING DAYS`, `TOTAL ATTENDED`, `TOTAL_PERCENTAGE`) VALUES('$_POST[pinh]','$_POST[name]','$_POST[tw]','$_POST[ta]','$_POST[tp]') ";
	$result6 = mysqli_query($conn,$query6);

	echo "<center>ATTENDENCE INSERTED</center>";
}
}

?>

<!DOCTYPE HTML>
<html>
<head>
   <title>ATTENDENCE ENTRY</title>	
	<style type="text/css">
	.a{background-color: #33ffff;height:125px;width:1335px;border-radius:15px;}
	.b{color:red; }
	.c{background-color: green;height:50px;width:1335px;border-radius:10px}
	a{color: yellow}
	.button{background-color:orange;}
	.bar{background-color: orange; height:10px;width: 200px}
	.navbar-right {
    float: none !important;
    margin-right: 0;
}
.navbar-collapse {
    padding: 0;
}
div#bs-example-navbar-collapse-1 {
		background: rgba(0, 0, 0, 0.83);
		margin: 0;
		padding: 0;
		position: absolute;
		width: 100%;
		z-index: 999;
		border: 1px solid #656363;
	}
.menu__list {
	position: relative;
	margin: 0;
	padding: 0;
	list-style: none;
}
	</style>
</head>

<body bgcolor="silver">
	<!--header-->	

	<div class="w3_navigation">
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
		    </div><br><br>
	</div>
<!--/header-->

<div align="center">
	<div><h2>ATTENDENCE ENTRY</h2></div>
<?php
	if (isset($_GET['search'])) {
	$pin = $_GET['pin'];

}

	?>
 	<div>
      <form action="<?php $_php_self ?>" method="get">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PIN :&nbsp;&nbsp;&nbsp;<input type="text" name="pin" placeholder="Enter your PIN" value="<?php if(empty($pin)) echo ""; else{ echo $pin;} ?>" required>
        <input type="submit"  name="search" value="submit" />
    </form>
        
   
    </div>
</div><br>
<form action="attendenceentry.php" method="post">
	
	<?php
if (isset($_GET['search'])) {
	$pin = $_GET['pin'];
	$found=0;
	$query = "SELECT * FROM students WHERE PIN = '$pin'";   
      $result = mysqli_query($conn, $query);
       while($result2=mysqli_fetch_array($result,MYSQLI_ASSOC)){

     if (strcasecmp($result2['PIN'], $pin)) {

     	$found=0;
     }else
     {
     	$name=$result2['NAME'];
     	$found=1;
     }
     
    }
     
	  if ($found==0) {
       echo "<center style='color:red'>STUDENT NOT EXISTED. TRY AGAIN...!</center>";
       }else{
 ?>
 
	<div>
		<input type="hidden" name="pinh" value="<?php if (empty($pin)) {echo "";} else echo "$pin";?>">
		<center>NAME:<input type="text" name="name" size="23" value="<?php if (empty($name)) {echo "";} else echo "$name";?>"></center>
		<br>	
		<hr>

		<div align="center"><br>
				<table cellspacing="10px">
					<th>MONTH</th><th>WORKING DAYS</th><th>ATTENDED</th><th>PERCENTAGE(%)</th>
					<tr>
						<td class="bar"> MONTH : 1</td>
						<td><input type="text" name="m1w"></td>
						<td><input type="text" name="m1a"></td>
						<td><input type="text" name="m1p"></td>

					</tr>
					<tr>
						<td class="bar"> MONTH : 2</td>
						<td><input type="text" name="m2w"></td>
						<td><input type="text" name="m2a"></td>
						<td><input type="text" name="m2p"></td>
					</tr>
					<tr>
						<td class="bar"> MONTH : 3</td>
						<td><input type="text" name="m3w"></td>
						<td><input type="text" name="m3a"></td>
						<td><input type="text" name="m3p"></td>
					</tr>
					<tr>
						<td class="bar"> MONTH : 4</td>
						<td><input type="text" name="m4w"></td>
						<td><input type="text" name="m4a"></td>
						<td><input type="text" name="m4p"></td>
					</tr>
					<tr>
						<td class="bar"> MONTH : 5</td>
						<td><input type="text" name="m5w"></td>
						<td><input type="text" name="m5a"></td>
						<td><input type="text" name="m5p"></td>
					</tr><tr><td></td></tr>
					<tr>
						<td class="bar"> TOTAL </td>
						<td><input type="text" name="tw"></td>
						<td><input type="text" name="ta"></td>
						<td><input type="text" name="tp"></td>
					</tr>
				</table>

				<br><br>
				<input type="submit" name="submit">
		</div>


<?php
 	}
 }
 ?>

</form>
<br><br><br><br><br><br><br><br><br><br>

<!--footer-->
			<br><br><br><br><br><div style="background-color:maroon;height:40px">
				<p style="color:white" align="center">&copy; 2018  GPTW . Designed  by <b>Sathish kesoju</b> and <b>Rajesh Keshoju</b></p>
			</div>
<!-- /footer-->	

</body>
</html>