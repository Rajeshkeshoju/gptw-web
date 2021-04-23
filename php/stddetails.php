<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="gptw";
 $conn=mysqli_connect($dbhost,$dbuser,$dbpass); 
  	if (!$conn) {
  		die("connection not established". mysql_error());
  		} 
 	mysqli_select_db($conn,$dbname);

?>


<!DOCTYPE HTML>
<html>
<head>
  <title>SEARCH STUDENT</title> 
  <style type="text/css">
  .a{background-color: #33ffff;height:125px;width:1335px;border-radius:15px;}
  .b{color:red; }
  .c{background-color: green;height:50px;width:1335px;border-radius:10px}
  a{color: yellow}
  .th{background-color:red;height:50px;width:100px;}
    th{

    color:black;
    font-style:oblique;
    background-color: orange;
    height: 40px;
    padding: 20px;
    width: 200px
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

<br>
  <div align="center"><br>
    <h2>SEARCH STUDENT</h2><br>
    <div>
      <form action="<?php $_php_self ?>" method="get">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PIN :&nbsp;&nbsp;&nbsp;<input type="text" name="pin" placeholder="Enter your PIN" value="<?php if(empty($pin)) echo ""; else{ echo $pin;} ?>">
        <input type="submit"  value="submit" /><br><br>OR<br><br>
        BRANCH:<input type="text" name="b" placeholder="Enter branch code" value="<?php if(empty($branch1)) echo ""; else{ echo $branch1;} ?>"> <input type="submit" value="submit">
             
           <?php

    if(isset($_GET['pin'])){

      if($pin = $_GET["pin"]) 
      {

      $query="SELECT * FROM students WHERE PIN='$pin'";
      $result = mysqli_query($conn, $query);
      }
      if ($branch1 = $_GET['b']) {

      $query = "SELECT * FROM students WHERE branch = '$branch1' ";   
      $result = mysqli_query($conn, $query);

      }
       
      ?>
       <br><br><table cellpadding="1" width="1000px">
      <tr><th>PIN</th><th>NAME</th><th>BRANCH</th><th>YEAR</th><th>SEMESTER</th><th>PHONE</th><th>ADDRESS</th><th>PHOTO</th><th>RESULT</th></tr>
      <?php


           while($result2=mysqli_fetch_array($result,MYSQLI_ASSOC)){
        $pin1 = $result2['PIN'];
        $name = $result2['NAME'];
        $branch = $result2['BRANCH'];
        $year = $result2['YEAR'];
        $semester = $result2['SEMESTER'];
        $phno = $result2['PHONE'];
        $address = $result2['ADDRESS'];
        $photo = $result2['PHOTO'];

           ?>
           <tr> 
              <td> <?php if(empty($pin1)){echo "";} else{echo $pin1;} ?></td> 
              <td><?php if(empty($name)){echo "";} else{echo $name;} ?></td> 
              <td><?php if(empty($branch)){echo "";} else{echo $branch;} ?></td> 
              <td><?php if(empty($year)){echo "";} else{echo $year;} ?></td>
              <td><?php if(empty($semester)){echo "";} else{echo $semester;} ?></td>
              <td><?php if(empty($phno)){echo "";} else{echo $phno;} ?></td>
              <td><?php if(empty($address)){echo "";} else{echo $address;} ?></td>
              <td><?php if(empty($photo)){echo "";} else{echo "<img src = 'images/$photo' height=90px width=90px>";} ?></td>
              <td><a href="results.php"> <input type="button" value="VIEW RESULTS" style="color:black;font-weight:bold;background-color:silver;padding:10px"></a></td>
              <?php
      }
      
}


?>
             
          <br><br><br></tr>    
        </table>
      </form>
    </div>
  </div>
 
  <!--footer-->
      <br><br><br><br><br><br><br><br><br><br></b><div style="background-color:maroon;height:40px">
        <p style="color:white" align="center">&copy; 2018  GPTW . Designed  by <b>Sathish kesoju</b> and <b>Rajesh Keshoju</b></p>
      </div>
<!-- /footer--> 
</body>
</html>


<?php mysqli_close($conn)?>