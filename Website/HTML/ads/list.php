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
	require_once("../../Controler.php");
	$id=$_GET["adsid"];
	 $obj = new Controler;
	 $result = $obj->viewmyads($id);
	 
	 
	 

$flage = false;
while($row = mysqli_fetch_array($result))
{
$flage =true;
$id =  $row["id"];
if($row["category"] == "house"){

	
	 echo "<form id=\"chanfe\" name=\"chanfe\" method=\"get\" action=\"preupdatelist.php\"> <center>"." <table border='1'  bgcolor=\"#7DB818\" width='900px'>

<input type=\"hidden\" name=\"adsid\" value=\"$id\" />
";
echo "
<tr>
<td align=\"center\" bgcolor=\"#BCC820\" >Name</td>
<td  align=\"center\"> ";
echo $row["adsname"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change name\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>
<tr>
<td align=\"center\" bgcolor=\"#BCC820\" >place</td>
<td  align=\"center\" >";
echo $row["adsplace"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change place\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>
<tr>
<td align=\"center\" bgcolor=\"#BCC820\" >category</td>
<td  align=\"center\">";
echo $row["category"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Delete this ads\" style=\"background-color:#ffffff; border:hidden;  color:#DC042B; \" />
</td>";
echo "
</tr>
<tr>
<td align=\"center\" bgcolor=\"#BCC820\" >Description</td>
<td  align=\"center\"> ";
echo $row["Description"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change description\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>
<tr>
<td align=\"center\" bgcolor=\"#BCC820\" >Area</td>
<td  align=\"center\" >";
echo $row["Area"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change Area\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>
<tr>
<td align=\"center\" bgcolor=\"#BCC820\" >address</td>
<td  align=\"center\">";
echo $row["address"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change address\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>";
echo "
</tr>
<tr>
<td align=\"center\" bgcolor=\"#BCC820\" >Rooms</td>
<td  align=\"center\"> ";
echo $row["numOfRooms"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change # rooms\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>
<tr>
<td align=\"center\" bgcolor=\"#BCC820\" >Toillet</td>
<td  align=\"center\" >";
echo $row["numOfToillet"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change # toillet\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>
<tr>
<td align=\"center\" bgcolor=\"#BCC820\" >Price</td>
<td  align=\"center\">";
echo $row["Price"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change price\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>";
echo "</table> </center> </form> <br>";
}



if($row["category"] == "Cars"){

	 echo "<form id=\"chanfe\" name=\"chanfe\" method=\"get\" action=\"preupdatelist.php\"> <center>"." <table border='1'  bgcolor=\"#7DB818\" width='900px'>
<input type=\"hidden\" name=\"adsid\" value=\"$id\" />
";
echo "
<tr>
<td align=\"center\" bgcolor=\"#BCC820\" >Name</td>
<td  align=\"center\"> ";
echo $row["adsname"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change name\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>
<tr>
<td align=\"center\" bgcolor=\"#BCC820\" >place</td>
<td  align=\"center\" >";
echo $row["adsplace"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change place\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>
<tr>
<td align=\"center\" bgcolor=\"#BCC820\" >category</td>
<td  align=\"center\">";
echo $row["category"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Delete this ads\" style=\"background-color:#ffffff; border:hidden;  color:#DC042B; \" />
</td>";
echo "
</tr>
<tr>
<td align=\"center\" bgcolor=\"#BCC820\" >Description</td>
<td  align=\"center\"> ";
echo $row["Description"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change description\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>
<tr>
<td align=\"center\" bgcolor=\"#BCC820\" >manufacturer</td>
<td  align=\"center\" >";
echo $row["vendor"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change manufacturer\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>
<tr>
<td align=\"center\" bgcolor=\"#BCC820\" >Model</td>
<td  align=\"center\">";
echo $row["Model"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change model\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>";
echo "
</tr>
<tr>
<td align=\"center\" bgcolor=\"#BCC820\" >Price</td>
<td  align=\"center\"> ";
echo $row["Price"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change price\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>
<tr>
<td align=\"center\" bgcolor=\"#BCC820\" >KM</td>
<td  align=\"center\" >";
echo $row["KM"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change # KM\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>
<tr>
<td align=\"center\" bgcolor=\"#BCC820\" >capacity</td>
<td  align=\"center\">";
echo $row["capacity"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change capacity\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>";
echo "</table> </center> </form> <br>";
}




if($row["category"] == "It_jobs"){

	
echo " <form id=\"chanfe\" name=\"chanfe\" method=\"get\" action=\"preupdatelist.php\"> <center>"." <table border='1'  bgcolor=\"#7DB818\" width='900px'>";
echo "<input type=\"hidden\" name=\"adsid\" value=\"$id\" />
<tr>
<td  align=\"center\" bgcolor=\"#BCC820\" >  Name</td>
<td  align=\"center\"> ";
echo $row["adsname"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change name\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>
<tr>
<td align=\"center\" bgcolor=\"#BCC820\" >  place</td>
<td  align=\"center\" >";
echo $row["adsplace"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change place\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>
<tr>
<td align=\"center\" bgcolor=\"#BCC820\" >  category</td>
<td  align=\"center\">";
echo $row["category"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Delete this ads\" style=\"background-color:#ffffff; border:hidden;  color:#DC042B; \" />
</td>
</tr>
<tr>";
echo "
<td align=\"center\" bgcolor=\"#BCC820\"> Description</td>
<td  align=\"center\"> ";
echo $row["Description"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change description\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>
<tr>
<td align=\"center\" bgcolor=\"#BCC820\">  Type</td>
<td  align=\"center\" >";
echo $row["Type"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change type\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>
<tr>
<td align=\"center\" bgcolor=\"#BCC820\" >  Salary</td>
<td  align=\"center\">";
echo $row["Salary"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change salary\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>
<tr>";
echo "
<td align=\"center\" bgcolor=\"#BCC820\" >years_of_experience</td>
<td  align=\"center\"> ";
echo $row["years_of_experience"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change # years\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>
<tr>
<td align=\"center\" bgcolor=\"#BCC820\" >Skills</td>
<td  align=\"center\" >";
echo $row["Skills"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change skills\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>";
echo "</table> </center> </form> <br>";


}

}

	
	 
	 
	 if($result==false){
	  echo "no ads found.";
	  }
	
	
?>
  </div>
</center>
</body>
</html>
