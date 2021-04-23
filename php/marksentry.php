<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="gptw";
 $conn=mysqli_connect($dbhost,$dbuser,$dbpass); 
 mysqli_select_db($conn,$dbname);
  	if (!$conn) {
  		die("connection not established". mysql_error());
  		} 
 

if (isset($_POST['submit'])) {
	$pin1 = $_POST['pinh'];
	$query1 = "INSERT INTO 1sem(`PIN`, `NAME`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `s7`, `s8`, `s9`, `s10`, `TOTAL`) VALUES('$pin1','$_POST[name]','$_POST[101]','$_POST[102]','$_POST[103]','$_POST[104]','$_POST[105]','$_POST[106]','$_POST[107]','$_POST[108]','$_POST[109]','$_POST[110]','$_POST[total]')";
	$result1 = mysqli_query($conn,$query1);

		$query2 = "INSERT INTO 2sem(`PIN`, `NAME`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `s7`, `s8`, `s9`, `s10`, `TOTAL`) VALUES('$pin1','$_POST[name]','$_POST[201]','$_POST[202]','$_POST[203]','$_POST[204]','$_POST[205]','$_POST[206]','$_POST[207]','$_POST[208]','$_POST[209]','$_POST[210]','$_POST[total2]')";
	$result2 = mysqli_query($conn,$query2);

		$query3 = "INSERT INTO 3sem(`PIN`, `NAME`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `s7`, `s8`, `s9`, `s10`, `TOTAL`) VALUES('$pin1','$_POST[name]','$_POST[301]','$_POST[302]','$_POST[303]','$_POST[304]','$_POST[305]','$_POST[306]','$_POST[307]','$_POST[308]','$_POST[309]','$_POST[310]','$_POST[total3]')";
	$result3 = mysqli_query($conn,$query3);

		$query4 = "INSERT INTO 4sem(`PIN`, `NAME`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `s7`, `s8`, `s9`, `s10`, `TOTAL`) VALUES('$pin1','$_POST[name]','$_POST[401]','$_POST[402]','$_POST[403]','$_POST[404]','$_POST[405]','$_POST[406]','$_POST[407]','$_POST[408]','$_POST[409]','$_POST[410]','$_POST[total4]')";
	$result4 = mysqli_query($conn,$query4);

		$query5 = "INSERT INTO 5sem(`PIN`, `NAME`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `s7`, `s8`, `s9`, `s10`, `TOTAL`) VALUES('$pin1','$_POST[name]','$_POST[501]','$_POST[502]','$_POST[503]','$_POST[504]','$_POST[505]','$_POST[506]','$_POST[507]','$_POST[508]','$_POST[509]','$_POST[510]','$_POST[total5]')";
	$result5 = mysqli_query($conn,$query5);

		$query6 = "INSERT INTO 6sem(`PIN`, `NAME`, `s1`, `TOTAL`) VALUES('$pin1','$_POST[name]','$_POST[601]','$_POST[total6]')";
	$result6 = mysqli_query($conn,$query6);

	if ($result1) {
		echo " 1 sem marks inserted ";
	}else{
		echo " failed to insert  1sem marks ";
	}
	if ($result2) {
		echo "2sem marks inserted ";
	}else{
		echo " failed to insert 2sem marks ";
	}
	if ($result3) {
		echo " 3sem marks inserted ";
	}else{
		echo " failed to insert 3sem marks ";
	}
	if ($result4) {
		echo "4sem marks inserted ";
	}else{
		echo " failed to insert 4sem marks ";
	}
	if ($result5) {
		echo " 5sem marks inserted ";
	}else{
		echo " failed to insert 5sem marks ";
	}
	if ($result6) {
		echo " 6sem marks inserted ";
	}else{
		echo " failed to insert 6sem marks ";
	} 
	
}
	


?>


<!DOCTYPE HTML>
<html>
<head>
   <title>MARKS ENTRY</title>	
	<style type="text/css">
	.a{background-color: #33ffff;height:125px;width:1335px;border-radius:15px;}
	.b{color:red; }
	.c{background-color: green;height:50px;width:1335px;border-radius:10px}
	a{color: yellow}
	.button{background-color:orange;}
	.bar{background-color: orange; height:30px;}
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
		    </div><br><br>
<!--/header-->
<div align="center">
	<div><h2>MARKS ENTRY</h2></div>
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
<form action="marksentry.php" method="post">
	
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
			<h4 class="bar" align="center">  1 SEMESTER</h4><br><br>
		<table cellpadding="4" cellspacing="10">
			<tr>
				<td>101:<input type="text" name="101"></td>
				<td>102:<input type="text" name="102"></td>
				<td>103:<input type="text" name="103"></td>
				<td>104:<input type="text" name="104"></td>
				<td>105:<input type="text" name="105"></td>
				<td>106:<input type="text" name="106"></td>
			</tr>
			<tr>
				<td>107:<input type="text" name="107"></td>
				<td>108:<input type="text" name="108"></td>
				<td>109:<input type="text" name="109"></td>
				<td>110:<input type="text" name="110"></td>
				<td>TOTAL :<input type="text" name="total"></td>
			</tr>			
		</table>
	</div><br><br>
	<div>
		<h4 class="bar" align="center">  2 SEMESTER</h4><br><br>
		<table cellpadding="4" cellspacing="10">
			<tr>
				<td>201:<input type="text" name="201"></td>
				<td>202:<input type="text" name="202"></td>
				<td>203:<input type="text" name="203"></td>
				<td>204:<input type="text" name="204"></td>
				<td>205:<input type="text" name="205"></td>
				<td>206:<input type="text" name="206"></td>
			</tr>
			<tr>
				<td>207:<input type="text" name="207"></td>
				<td>208:<input type="text" name="208"></td>
				<td>209:<input type="text" name="209"></td>
				<td>210:<input type="text" name="210"></td>
				<td>TOTAL :<input type="text" name="total2"></td>
			</tr>			
		</table>
	</div>
	<div>
		<h4 class="bar" align="center">  3 SEMESTER</h4><br><br>
		<table cellpadding="4" cellspacing="10">
			<tr>
				<td>301:<input type="text" name="301"></td>
				<td>302:<input type="text" name="302"></td>
				<td>303:<input type="text" name="303"></td>
				<td>304:<input type="text" name="304"></td>
				<td>305:<input type="text" name="305"></td>
				<td>306:<input type="text" name="306"></td>
			</tr>
			<tr>
				<td>307:<input type="text" name="307"></td>
				<td>308:<input type="text" name="308"></td>
				<td>309:<input type="text" name="309"></td>
				<td>310:<input type="text" name="310"></td>
				<td>TOTAL :<input type="text" name="total3"></td>
			</tr>			
		</table>
	</div>
	<div>
		<h4 class="bar" align="center">  4 SEMESTER</h4><br><br>
		<table cellpadding="4" cellspacing="10">
			<tr>
				<td>401:<input type="text" name="401"></td>
				<td>402:<input type="text" name="402"></td>
				<td>403:<input type="text" name="403"></td>
				<td>404:<input type="text" name="404"></td>
				<td>405:<input type="text" name="405"></td>
				<td>406:<input type="text" name="406"></td>
			</tr>
			<tr>
				<td>407:<input type="text" name="407"></td>
				<td>408:<input type="text" name="408"></td>
				<td>409:<input type="text" name="409"></td>
				<td>410:<input type="text" name="410"></td>
				<td>TOTAL :<input type="text" name="total4"></td>
			</tr>			
		</table>
	</div>
	<div>
		<h4 class="bar" align="center">  5 SEMESTER</h4><br><br>
		<table cellpadding="4" cellspacing="10">
			<tr>
				<td>501:<input type="text" name="501"></td>
				<td>502:<input type="text" name="502"></td>
				<td>503:<input type="text" name="503"></td>
				<td>504:<input type="text" name="504"></td>
				<td>505:<input type="text" name="505"></td>
				<td>506:<input type="text" name="506"></td>
			</tr>
			<tr>
				<td>507:<input type="text" name="507"></td>
				<td>508:<input type="text" name="508"></td>
				<td>509:<input type="text" name="509"></td>
				<td>510:<input type="text" name="510"></td>
				<td>TOTAL :<input type="text" name="total5"></td>
			</tr>			
		</table>
	</div>
	<div>
		<h4 class="bar" align="center">  6 SEMESTER</h4><br><br>

		<table cellpadding="4" cellspacing="10">
			<tr>
				<td>601:<input type="text" name="601"></td>
				<td>TOTAL :<input type="text" name="total6"></td>
			</tr>		
		</table><hr>
	</div>
	<div align="center"><input type="submit" name="submit" value="submit"></div>
</form>

<?php	      		
       }

     

}

?>

	<!--footer-->
			<br><br><br><br><br><div style="background-color:maroon;height:40px">
				<p style="color:white" align="center">&copy; 2018  GPTW . Designed  by <b>Sathish kesoju</b> and <b>Rajesh Keshoju</b></p>
			</div>
<!-- /footer-->	

</body>
</html>

<?php mysqli_close($conn); ?>