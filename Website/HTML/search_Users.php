<?php
// Open Connection 
class show {

function select($category , $place , $option){
	
$connenction_link=mysqli_connect("127.0.0.1","root","","my_db");
if(!$connenction_link)
{
echo " Connection Failed".mysql_error();
}

// Select Database
mysqli_select_db($connenction_link,"my_db");

//$fname=$_POST["fname"];
//$lname=$_POST["lname"];
//$age=$_POST["age"];

if($option == 1 ){
$select_query= "SELECT * FROM `advertisements` WHERE category='$category' ";
// catch resulting records
$result=mysqli_query($connenction_link,$select_query)or die($select_query."<br/><br/>".mysql_error());

}

if($option == 2 ){
$select_query= "SELECT * FROM `advertisements` WHERE adsplace='$place' ";
// catch resulting records
$result=mysqli_query($connenction_link,$select_query)or die($select_query."<br/><br/>".mysql_error());

}

if($option == 3 ){
$select_query= "SELECT * FROM `advertisements` WHERE category='$category' and adsplace='$place' ";
// catch resulting records
$result=mysqli_query($connenction_link,$select_query)or die($select_query."<br/><br/>".mysql_error());

}
if($option == 4 ){
$select_query= "SELECT * FROM `advertisements` ";
// catch resulting records
$result=mysqli_query($connenction_link,$select_query)or die($select_query."<br/><br/>".mysql_error());

}

// view result



$flage = false;
while($row = mysqli_fetch_array($result))
{
$flage =true;
if($row["category"] == "house"){

	
	 echo "<center>"." <table border='1'  bgcolor=\"#7DB818\" width='900px'>
<tr>
<th  bgcolor=\"#BCC820\" >Name</th>
<th  bgcolor=\"#BCC820\" >place</th>
<th  bgcolor=\"#BCC820\" >category</th>
<th  bgcolor=\"#BCC820\" >Description</th>
<th  bgcolor=\"#BCC820\" >Area</th>
<th  bgcolor=\"#BCC820\" >address</th>
<th  bgcolor=\"#BCC820\" >Rooms</th>
<th  bgcolor=\"#BCC820\" >Toillet</th>
<th  bgcolor=\"#BCC820\" >Price</th>
</tr>
";
echo "
<tr>
<td  align=\"center\"> ";
echo $row["adsname"];
echo "
</td>
<td  align=\"center\" >";
echo $row["adsplace"];
echo "
</td>
<td  align=\"center\">";
echo $row["category"];
echo "
</td>";
echo "
<td  align=\"center\"> ";
echo $row["Description"];
echo "
</td>
<td  align=\"center\" >";
echo $row["Area"];
echo "
</td>
<td  align=\"center\">";
echo $row["address"];
echo "
</td>";
echo "
<td  align=\"center\"> ";
echo $row["numOfRooms"];
echo "
</td>
<td  align=\"center\" >";
echo $row["numOfToillet"];
echo "
</td>
<td  align=\"center\">";
echo $row["Price"];
echo "
</td>
</tr>";
echo "</table> </center><br>";
}



if($row["category"] == "Cars"){

	 echo "<center>"." <table border='1'  bgcolor=\"#7DB818\" width='900px'>
<tr>
<th  bgcolor=\"#BCC820\" >Name</th>
<th  bgcolor=\"#BCC820\" >place</th>
<th  bgcolor=\"#BCC820\" >category</th>
<th  bgcolor=\"#BCC820\" >Description</th>
<th  bgcolor=\"#BCC820\" >manufacturer</th>
<th  bgcolor=\"#BCC820\" >Model</th>
<th  bgcolor=\"#BCC820\" >Price</th>
<th  bgcolor=\"#BCC820\" >KM</th>
<th  bgcolor=\"#BCC820\" >capacity</th>
</tr>
";
echo "
<tr>
<td  align=\"center\"> ";
echo $row["adsname"];
echo "
</td>
<td  align=\"center\" >";
echo $row["adsplace"];
echo "
</td>
<td  align=\"center\">";
echo $row["category"];
echo "
</td>";
echo "
<td  align=\"center\"> ";
echo $row["Description"];
echo "
</td>
<td  align=\"center\" >";
echo $row["vendor"];
echo "
</td>
<td  align=\"center\">";
echo $row["Model"];
echo "
</td>";
echo "
<td  align=\"center\"> ";
echo $row["Price"];
echo "
</td>
<td  align=\"center\" >";
echo $row["KM"];
echo "
</td>
<td  align=\"center\">";
echo $row["capacity"];
echo "
</td>
</tr>";
echo "</table> </center><br>";
}




if($row["category"] == "It jops"){

	
	 echo "<center>"." <table border='1'  bgcolor=\"#7DB818\" width='900px'>
<tr>
<th  bgcolor=\"#BCC820\" >Name</th>
<th  bgcolor=\"#BCC820\" >place</th>
<th  bgcolor=\"#BCC820\" >category</th>
<th  bgcolor=\"#BCC820\" >Description</th>
<th  bgcolor=\"#BCC820\" >Type</th>
<th  bgcolor=\"#BCC820\" >Salary</th>
<th  bgcolor=\"#BCC820\" >years_of_experience</th>
<th  bgcolor=\"#BCC820\" >Skills</th>
</tr>
";
echo "
<tr>
<td  align=\"center\"> ";
echo $row["adsname"];
echo "
</td>
<td  align=\"center\" >";
echo $row["adsplace"];
echo "
</td>
<td  align=\"center\">";
echo $row["category"];
echo "
</td>";
echo "
<td  align=\"center\"> ";
echo $row["Description"];
echo "
</td>
<td  align=\"center\" >";
echo $row["Type"];
echo "
</td>
<td  align=\"center\">";
echo $row["Salary"];
echo "
</td>";
echo "
<td  align=\"center\"> ";
echo $row["years_of_experience"];
echo "
</td>
<td  align=\"center\" >";
echo $row["Skills"];
echo "
</td>
</tr>";
echo "</table> </center><br>";


}

}





mysqli_close($connenction_link);
return $flage;
}

}
?>