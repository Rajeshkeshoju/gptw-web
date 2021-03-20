<?php

	$conn = mysqli_connect("localhost","root","");
	//if($conn) echo "connection";
 	mysqli_select_db($conn,"gptw");


 	if (isset($_POST['submit'])) {
 

 		$pin=$_POST['pin'];	
 		$name=$_POST['name'];
 		$branch=$_POST['branch'];
 		$year=$_POST['year'];
 		$semester=$_POST['semester'];
 		$dob = $_POST['dob'];
 		$phno=$_POST['phno'];
 		$address=$_POST['address'];
 		

$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["fileupload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if($_POST) {
    $check = getimagesize($_FILES["fileupload"]["tmp_name"]);
    if($check !==false) {
        
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileupload"]["size"] > 5000000000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileupload"]["tmp_name"], $target_file)) {
        
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}






$photo = basename( $_FILES["fileupload"]["name"]);
 		/*$_FILES["photo"]["type"]=$_POST['photo'];
 		//echo $_FILES["photo"]["type"];



 		if ((($_FILES["photo"]["type"]=="image/jpeg")
 			|| ($_FILES["photo"]["type"]=="image/png")
 			|| ($_FILES["photo"]["type"]=="image/gif"))
 			&& ($_FILES["photo"]["size"]<50000000)) {

 			if ($_FILES["photo"]["error"]>0) {
 				echo "Return code:" . $_FILES["photo"]["error"];
 			}

 			if(file_exists("images/" . $_FILES["photo"]["name"]))
 				echo $_FILES["photo"]["name"]." is already exists";
 			else
 			{
 				move_uploaded_file($_FILES["photo"]["temp_name"], "images/".$_FILES["photo"]["name"]);
 			}
 		} */

 		//$query = "INSERT INTO 'students'('PIN','NAME','BRANCH',YEAR,SEMESTER,PHONE,'ADDRESS','PHOTO','DATE') VALUES('$_POST[pin]','$_POST[name]',$_POST[branch],$_POST[year],$_POST[semester],$_POST[phno],$_POST[address],'$_POST[photo]',sysdate());";
 		$query = "INSERT INTO students(`PIN`, `NAME`, `BRANCH`, `YEAR`, `SEMESTER`, `DOB`, `PHONE`, `ADDRESS`, `PHOTO`, `DATE`) VALUES('$pin','$name','$branch','$year','$semester','$dob','$phno','$address','$photo',sysdate())";
 		 
 		If(mysqli_query($conn,$query))
 		{
 			//echo "<center style=color:red>Student details are saved.</center>";
 			?>
 			<script>alert("Student details saved");</script>
 			<?php
 		}else
 		{
 			//echo "<center style=color:red>OOPS! Student details cannot be saved.</center>";
 			?>
 			<script type="text/javascript">alert("OOPS! Something went wrong...!");</script>
 			<?php
 		}
	 	
 	}	
?>

<!DOCTYPE HTML>
<html>
<head>
   <title>ADD STUDENT</title>	
	<style type="text/css">
	.a{background-color: #33ffff;height:125px;width:1335px;border-radius:15px;}
	.b{color:red; }
	.c{background-color: green;height:50px;width:1335px;border-radius:10px}
	a{color: yellow}
	.button{background-color:orange;}
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

<div align="left"><br/>
	 <div>
	 	<h2>ADD STUDENT</h2><br/>
	 	<sub>ENTER DETAILS</sub>
	 </div><br>
	 <form action="addstd.php" method="POST">
	 <div>
	 	PIN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<input type="text" name="pin" size="33" required><br/><br>
	 	NAME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<input type="text" name="name" size="33" required><br/><br>
	 	BRANCH&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<select name="branch"  required>
	 		<option>-----SELECT-----</option>
	 		<option value="CIV">CIVIL ENGG.</option>
	 		<option value="CME">COMPUTER ENGG.</option>
	 		<option value="ECE">ELECTRONICS & COMMUNICATION ENGG.</option>
	 		<option value="EEE">ELECTRICAL & ELECTRONICS ENGG.</option>
	 		<option value="MEC">MECHANICAL ENGG.</option>
	 	</select><br/><br>
	 	YEAR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
	 	<select name="year" required>
	 		<option>--select--</option>
	 		<option value="1">I YEAR</option>
	 		<option value="2">II YEAR</option>
	 		<option value="3">III YEAR</option>
	 	</select>
	 	SEMESTER:
	 	<select name="semester" required>
	 		<option>--select--</option>
	 		<option value="1">1 semester</option>
	 		<option value="2">2 semester</option>
	 		<option value="3">3 semester</option>
	 		<option value="4">4 semester</option>
	 		<option value="5">5 semester</option>
	 		<option value="6">6 semester</option>
	 	</select><br><br>
	 	DATE OF BIRTH&nbsp;&nbsp;:&nbsp;<input type="date" name="dob" required><br><br>
	 	PHONE NO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<input type="text" name="phno" size="33" required><br><br>
	 	ADDRESS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<textarea name="address" rows=5 cols=35 required></textarea><br><br>
	 	PHOTO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<input type="file" name="fileupload"  required>
	 </div><br><br>
	 <div align="center">
        <input type="submit" name="submit" value="   submit   "><br/>
	 </div>
   </form>
</div>
<!--footer-->
			<br><br><div style="background-color:maroon;height:40px">
				<p style="color:white" align="center">&copy; 2018  GPTW . Designed  by <b>Sathish kesoju</b> and <b>Rajesh Keshoju</b></p>
			</div>
<!-- /footer-->	
</body>
</html>

<?php mysqli_close($conn) ?>