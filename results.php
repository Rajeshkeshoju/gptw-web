<?php

if($conn = mysqli_connect("localhost", "root","")) {

	mysqli_select_db($conn,"gptw");


?>


<!DOCTYPE HTML>
<html>
<head>
	<title>VIEW RESULTS</title> 
	<style type="text/css">
	.a{background-color: #33ffff;height:125px;width:1335px;border-radius:15px;}
	.b{color:red; }
	.c{background-color: green;height:50px;width:1335px;border-radius:10px}
	a{color: yellow}
	.button{background-color:orange;}
        th{

    color:black;
    font-style:oblique;
    background-color: orange;
    height: 20px;
    padding: 10px;
    width: 200px;
    border: thin groove;
    border-style:dashed;
  }
  tr{

    background-color:#33ffff;
    padding: 30px;
     border: thin groove;
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

			<h2>VIEW YOUR RESULTS</h2><br>


     	 	<form action="results.php" method="POST">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PIN :&nbsp;&nbsp;&nbsp;<input type="text" name="pin" placeholder="Enter your PIN" value="<?php if(empty($pin)) echo ""; else{ echo $pin;} ?>" required><br>
        		<br><br>SEMETSER:&nbsp;&nbsp;&nbsp;<input type="radio" name="semester" value="1">1 semester<br>
        		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="semester" value="2">2 semester<br>
        		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="semester" value="3">3 semester <br> 
        		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="semester" value="4">4 semester <br>
        		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="semester" value="5">5 semester <br>
        		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="semester" value="6">6 semester<br>
        		<br><br>
        		<input type="submit"  name="submit" value="submit" /><br><br><br><br>

        	<div>

        		<?php

        			if (isset($_POST['submit'])) {

					$sql = "SELECT * FROM $_POST[semester]sem WHERE pin = '$_POST[pin]'";

					$result = mysqli_query($conn , $sql);

                    if ($_POST['semester'] == 6) {
                        while ($result3 = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                            $pin1 = $result3['PIN'];
                            $name1 = $result3['NAME'];
                            $s1 = $result3['s1'];
                            $total2 = $result3['TOTAL'];
                        }
                    ?>

                        <div>

                            <b>SEMSTER :<?php echo "$_POST[semester]"; ?> RESULTS</b><br>
                            <table width="600px">
                        
                                <tr><th align="center">PIN : <?php echo $pin1; ?></th><th align="center">NAME : <?php echo $name1; ?></th></tr>
                                <br></table><br>
                                <table>
                                    <tr>
                                        <th align="center">SUBJECT</th><th align="center">MARKS</th>
                                    </tr>
                                    <tr>
                                        <td align="center"><b>s1</b></td>
                                        <td align="center"><?php echo "$s1"; ?></td>
                                    </tr>
                                    <tr>
                                        <td align="center"><b>TOTAL</b></td>
                                        <td align="center"><?php echo "$total2"; ?></td>
                                    </tr>
                                </table>    
                </div>  
                    <?php
                    }
			
						while ($result2 = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							$pin1 = $result2['PIN'];
							$name1 = $result2['NAME'];
							$s1 = $result2['s1'];
							$s2 = $result2['s2'];
							$s3 = $result2['s3'];
							$s4 = $result2['s4'];
							$s5 = $result2['s5'];
							$s6 = $result2['s6'];
							$s7 = $result2['s7'];
							$s8 = $result2['s8'];
							$s9 = $result2['s9'];
							$s10 = $result2['s10'];
							$total = $result2['TOTAL'];
					?>

        		<div>

        			<b style="color:red;border:thick">SEMSTER :<?php echo "$_POST[semester]"; ?> RESULTS</b><br>
        			<table width="600px">
        				
        				<tr><th>PIN : <?php echo $pin1; ?></th><th>NAME : <?php echo $name1; ?></th></tr>
        			<br></table><br>
        			<table width="600px">
        				<tr>
        					<th align="center">SUBJECT</th><th align="center">MARKS</th>
        				</tr>
        				<tr>
        					<td align="center"><b>s1</b></td>
        					<td align="center"><?php echo "$s1"; ?></td>
        				</tr>
        				<tr>
        					<td  align="center"><b>s2</b></td>
        					<td align="center"><?php echo "$s2"; ?></td>
        				</tr>
        				<tr>
        					<td align="center"><b>s3</b></td>
        					<td align="center"><?php echo "$s3"; ?></td>
        				</tr>
        				<tr>
        					<td align="center"><b>s4</b></td>
        					<td align="center"><?php echo "$s4"; ?></td>
        				</tr>
        				<tr>
        					<td align="center"><b>s5</b></td>
        					<td align="center"><?php echo "$s5"; ?></td>
        				</tr>
        				<tr>
        					<td align="center"><b>s6</b></td>
        					<td align="center"><?php echo "$s6"; ?></td>
        				</tr>
        				<tr>
        					<td align="center"><b>s7</b></td>
        					<td align="center"><?php echo "$s7"; ?></td>
        				</tr>
        				<tr>
        					<td align="center"><b>s8</b></td>
        					<td align="center"><?php echo "$s8"; ?></td>
        				</tr>
        				<tr>
        					<td align="center"><b>s9</b></td>
        					<td align="center"><?php echo "$s9"; ?></td>
        				</tr>
        				<tr>
        					<td align="center"><b>s10</b></td>
        					<td align="center"><?php echo "$s10"; ?></td>
        				</tr>
        				<tr>
        					<td></td><td></td>
        				</tr>
        				<tr>
        					<td align="center"><b>TOTAL</b></td>
        					<td align="center"><?php echo "$total"; ?></td>
        				</tr>
        			</table>	
        		</div>	
        		<?php

        		}
		
			}
		}
       ?>

        </div>
        </form>	

<!--footer-->
			<br><br><br><br><br><div style="background-color:maroon;height:40px">
				<p style="color:white" align="center">&copy; 2018  GPTW . Designed  by <b>Sathish kesoju</b> and <b>Rajesh Keshoju</b></p>
			</div>
<!-- /footer-->		
</body>
</html>