<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<link type="text/css" rel="stylesheet" href="../../CSS/search.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Goods.com | profile </title>
<meta name="author" content="hosam azzam" />
<!-- Date: 2014-11-16 -->
</head>

<body bgcolor="#ffffff" id="body">
<center>
  <div id="header" >
    <div class="logo" > <font face="fantasy" color="#BCC820" size="7">
      <center>
        Goods.com
      </center>
      </font> </div>
    <div class="heder-content" align="left" > <font face="fantasy" color="#33817f" size="5" > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp; <a href="../../home.html">&nbsp;&nbsp;home </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <select onchange="location = this.options[this.selectedIndex].value;"  style="background-color:#2AAFCB; border:hidden; font-size:24px; font-family:fantasy; color:#33817f; ">
        <option value="">Create ads</option>
        <option value="homeads.php">Home</option>
        <option value="carsads.php">Cars</option>
        <option value="itjobsads.php">It jobs</option>
      </select>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="">&nbsp;&nbsp;&nbsp;&nbsp;Inbox </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="search.php">&nbsp;&nbsp;&nbsp;&nbsp;Search </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <select onchange="location = this.options[this.selectedIndex].value;"  style="background-color:#2AAFCB; border:hidden; font-size:24px; font-family:fantasy; color:#33817f; ">
        <option value="">View Lists</option>
        <option value="homelists.php">Home List</option>
        <option value="carslists.php">Cars List</option>
        <option value="itjobslists.php">It jobs List</option>
      </select>
      &nbsp;&nbsp;&nbsp; <a href="profile.php">&nbsp;&nbsp;&nbsp;&nbsp;Profile </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a onClick=" window.close()" href="../../welcome.php" target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;		Log out </a> </font> </div>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <div id="content" align="left"> <br>
    <!-- onchange="location = this.options[this.selectedIndex].value;"-->
    
   
    <?php
		error_reporting(0);	
		
		 require_once("../../Controler.php");
		 $obj = new Controler;
		$result= $obj->updateInfo();
		 
		 $row = mysqli_fetch_array($result);

echo " <form id=\"chanfe\" name=\"chanfe\" method=\"post\" action=\"profile.php\"><center><table border='1'  bgcolor=\"#BCC820\" width='900px'>
<tr>
<td align=\"center\" >Name</td>
<td  bgcolor=\"#BCC820\" align=\"center\" >";
echo $row["Name"];
echo "</td>
<td  bgcolor=\"#BCC820\" align=\"center\"  >
<input type=\"submit\" name=\"changename\" value=\"Change\" />
</td>
</tr>
<tr>
<td  align=\"center\">Email</td>
<td  bgcolor=\"#BCC820\" align=\"center\" >";
echo $row["Email"];
echo "</td>
<td  bgcolor=\"#BCC820\" align=\"center\" >
<input type=\"submit\" name=\"changeemail\" value=\"Change\" />
</td>
</tr>
<tr>
<td  align=\"center\" >Password</td>
<td  bgcolor=\"#BCC820\" align=\"center\" >";
echo $row["Password"];
echo "</td>
<td  bgcolor=\"#BCC820\" align=\"center\" >
<input type=\"submit\" name=\"changepassword\" value=\"Change\" />
</td>
</tr>
<tr>
<td  align=\"center\">Mobile</td>
<td  bgcolor=\"#BCC820\" align=\"center\" >";
echo $row["Mobile"];
echo "</td>
<td  bgcolor=\"#BCC820\" align=\"center\" >
<input type=\"submit\" name=\"changemobile\" value=\"Change\" />
</td>
</tr>
 <tr>
<td   align=\"center\" >Place</td>
<td  bgcolor=\"#BCC820\" align=\"center\" >";
echo $row["Place"];
echo "</td>
<td  bgcolor=\"#BCC820\" align=\"center\" >
<input type=\"submit\" name=\"changeplace\" value=\"Change\" />
</td>
</tr>
<tr>
<td  align=\"center\">Information</td>
<td  bgcolor=\"#BCC820\" align=\"center\" >";
echo $row["Information"];
echo "</td>
<td  bgcolor=\"#BCC820\" align=\"center\" >

<input type=\"submit\" name=\"changeinfo\" value=\"Change\" />

</td>
</tr>
  </center>  </table> </form> <br><br>  ";

		
		if(isset($_POST["changename"])){
	 echo "<script > 
	  var ff = prompt(\"Please enter your name\", \"\")
	  if(ff !=null ){
 window.location.href = \"updateprofile.php?name=\" +ff +\"&option=name\"; 
	  }
	  </script>";
}

if(isset($_POST["changeemail"])){
	 echo "<script > 
	  var ff = prompt(\"Please enter your mail\", \"\")
	  if(ff !=null ){
 window.location.href = \"updateprofile.php?name=\" +ff +\"&option=email\"; 
	  }
	  </script>";
}

if(isset($_POST["changepassword"])){
	 echo "<script > 
	  var ff = prompt(\"Please enter your password\", \"\")
	  if(ff !=null ){
 window.location.href = \"updateprofile.php?name=\" +ff +\"&option=password\"; 
	  }
	  </script>";
}

if(isset($_POST["changemobile"])){
	 echo "<script > 
	  var ff = prompt(\"Please enter your mobile\", \"\")
	  if(ff !=null ){
 window.location.href = \"updateprofile.php?name=\" +ff +\"&option=mobile\"; 
	  }
	  </script>";
}

if(isset($_POST["changeplace"])){
	 echo "<script > 
	  var ff = prompt(\"Please enter your place\", \"\")
	  if(ff !=null ){
 window.location.href = \"updateprofile.php?name=\" +ff +\"&option=place\"; 
	  }
	  </script>";
}

if(isset($_POST["changeinfo"])){
	 echo "<script > 
	  var ff = prompt(\"Please enter your information\", \"\")
	  if(ff !=null ){
 window.location.href = \"updateprofile.php?name=\" +ff +\"&option=info\"; 
	  }
	  </script>";
}
	
	
?>
  </div>
</center>
</body>
</html>
