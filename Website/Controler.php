<?php

error_reporting(0);


if (0 > version_compare(PHP_VERSION, '4')) {
    die('This file was generated for PHP 4');
}



 
class Controler
{
    

  
   
     
    function createAds($adsobj,$homeobj,$carobj,$itobj,$index)
    {
        
		if($index==1){ // home ads
			

		
		
		$myfile = fopen("../../user.txt", "r") or die("Unable to open file!");
$userid=fgets($myfile);
fclose($myfile);
			
			
			$connenction_link=mysqli_connect("127.0.0.1","root","","my_db");
if(!$connenction_link)
{
echo " Connection Failed".mysql_error();
}

mysqli_select_db($connenction_link,"my_db");

$insert_query= " INSERT INTO `advertisements`(`Userid`, `adsname`, `adsplace`, `category`, `Description`,`Area`, `address`, `numOfRooms`,  `Price`, `numOfToillet`) 
values ('$userid','$adsobj->adsname','$adsobj->adsplace ','$adsobj->category','$adsobj->Description','$homeobj->Area',
'$homeobj->address','$homeobj->numOfRooms','$homeobj->price','$homeobj->numOfToillet')";
$result=mysqli_query($connenction_link,$insert_query);
$count = mysqli_num_rows($result);
if ($count == 0) {
	
	echo '<script>window.alert("ads created sucssefully");window.open("../../home.html","_self")</script>';
	
}

mysqli_close($connenction_link);
		
		
		}
		
		
		if($index==2){ // cars ads
			

		
		
		$myfile = fopen("../../user.txt", "r") or die("Unable to open file!");
$userid=fgets($myfile);
fclose($myfile);
			
			
			$connenction_link=mysqli_connect("127.0.0.1","root","","my_db");
if(!$connenction_link)
{
echo " Connection Failed".mysql_error();
}

mysqli_select_db($connenction_link,"my_db");


	
$insert_query= " INSERT INTO `advertisements`( `Userid`, `adsname`, `adsplace`, `category`, `Description`,`vendor`,`KM`, `capacity`, `Price`,`Model`) 
values ('$userid','$adsobj->adsname','$adsobj->adsplace ','$adsobj->category','$adsobj->Description','$carobj->vendor',
'$carobj->KM','$carobj->capacity','$carobj->Price','$carobj->Model')";
$result=mysqli_query($connenction_link,$insert_query);
$count = mysqli_num_rows($result);
if ($count == 0) {
	
	echo '<script>window.alert("ads created sucssefully");window.open("../../home.html","_self")</script>';
	
}

mysqli_close($connenction_link);
		
		
		}
		
		
		if($index==3){ // it jobs ads
			

		
	
		
		$myfile = fopen("../../user.txt", "r") or die("Unable to open file!");
$userid=fgets($myfile);
fclose($myfile);
			
			
			$connenction_link=mysqli_connect("127.0.0.1","root","","my_db");
if(!$connenction_link)
{
echo " Connection Failed".mysql_error();
}

mysqli_select_db($connenction_link,"my_db");

$insert_query= "INSERT INTO `advertisements`(`Userid`, `adsname`, `adsplace`, `category`, `Description`,`Salary`, `years_of_experience`,`Type` ,`Skills`) 
values ('$userid','$adsobj->adsname','$adsobj->adsplace ','$adsobj->category','$adsobj->Description','$itobj->Salary',
'$itobj->years_of_experience','$itobj->Type','$itobj->Skills')";
$result=mysqli_query($connenction_link,$insert_query);
$count = mysqli_num_rows($result);
if ($count == 0) {
	
	echo '<script>window.alert("ads created sucssefully");window.open("../../home.html","_self")</script>';
	
}

mysqli_close($connenction_link);
		
		
		}
		
		
		
		
    }

    function removeAds($Advertisment)
    {
    }

    function edtitAds($Advertisment)
    {
        
    }

    
     
    function search($category , $place , $option)
    {
        
		
			
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
";
echo "
<tr>
<td width=\"300px\" align=\"center\" bgcolor=\"#BCC820\" >Name</td>
<td  align=\"center\"> ";
echo $row["adsname"];
echo "
</td>
</tr>
<tr>
<td width=\"300px\" align=\"center\" bgcolor=\"#BCC820\" >place</td>
<td  align=\"center\" >";
echo $row["adsplace"];
echo "
</td>
</tr>
<tr>
<td width=\"300px\" align=\"center\"  bgcolor=\"#BCC820\" >category</td>
<td  align=\"center\">";
echo $row["category"];
echo "
</td>";
echo "
</tr>
<tr>
<td width=\"300px\" align=\"center\"  bgcolor=\"#BCC820\" >Description</td>
<td  align=\"center\"> ";
echo $row["Description"];
echo "
</td>
</tr>
<tr>
<td width=\"300px\" align=\"center\"  bgcolor=\"#BCC820\" >Area</td>
<td  align=\"center\" >";
echo $row["Area"];
echo "
</td>
</tr>
<tr>
<td width=\"300px\" align=\"center\"  bgcolor=\"#BCC820\" >address</td>
<td  align=\"center\">";
echo $row["address"];
echo "
</td>";
echo "
</tr>
<tr>
<td width=\"300px\" align=\"center\"  bgcolor=\"#BCC820\" >Rooms</td>
<td  align=\"center\"> ";
echo $row["numOfRooms"];
echo "
</td>
</tr>
<tr>
<td width=\"300px\" align=\"center\" bgcolor=\"#BCC820\" >Toillet</td>
<td  align=\"center\" >";
echo $row["numOfToillet"];
echo "
</td>
</tr>
<tr>
<td width=\"300px\" align=\"center\"  bgcolor=\"#BCC820\" >Price</td>
<td  align=\"center\">";
echo $row["Price"];
echo "
</td>
</tr>";
echo "</table> </center><br>";
}



if($row["category"] == "Cars"){

	 echo "<center>"." <table border='1'  bgcolor=\"#7DB818\" width='900px'>
";
echo "
<tr>
<td width=\"300px\" align=\"center\"  bgcolor=\"#BCC820\" >Name</td>
<td  align=\"center\"> ";
echo $row["adsname"];
echo "
</td>
</tr>
<tr>
<td width=\"300px\" align=\"center\"  bgcolor=\"#BCC820\" >place</td>
<td  align=\"center\" >";
echo $row["adsplace"];
echo "
</td>
</tr>
<tr>
<td width=\"300px\" align=\"center\" bgcolor=\"#BCC820\" >category</td>
<td  align=\"center\">";
echo $row["category"];
echo "
</td>";
echo "
</tr>
<tr>
<td width=\"300px\" align=\"center\" bgcolor=\"#BCC820\" >Description</td>
<td  align=\"center\"> ";
echo $row["Description"];
echo "
</td>
</tr>
<tr>
<td width=\"300px\" align=\"center\" bgcolor=\"#BCC820\" >manufacturer</td>
<td  align=\"center\" >";
echo $row["vendor"];
echo "
</td>
</tr>
<tr>
<td width=\"300px\" align=\"center\" bgcolor=\"#BCC820\" >Model</td>
<td  align=\"center\">";
echo $row["Model"];
echo "
</td>";
echo "
</tr>
<tr>
<td width=\"300px\" align=\"center\" bgcolor=\"#BCC820\" >Price</td>
<td  align=\"center\"> ";
echo $row["Price"];
echo "
</td>
</tr>
<tr>
<td width=\"300px\" align=\"center\" bgcolor=\"#BCC820\" >KM</td>
<td  align=\"center\" >";
echo $row["KM"];
echo "
</td>
</tr>
<tr>
<td width=\"300px\" align=\"center\" bgcolor=\"#BCC820\" >capacity</td>
<td  align=\"center\">";
echo $row["capacity"];
echo "
</td>
</tr>";
echo "</table> </center><br>";
}




if($row["category"] == "It_jobs"){
	
	 echo "<center>"." <table border='1'  bgcolor=\"#7DB818\" width='900px'>

";
echo "
<tr>
<td width=\"300px\" align=\"center\" bgcolor=\"#BCC820\" >Name</td>
<td  align=\"center\"> ";
echo $row["adsname"];
echo "
</td>
</tr>
<tr>
<td width=\"300px\" align=\"center\" bgcolor=\"#BCC820\" >place</td>
<td  align=\"center\" >";
echo $row["adsplace"];
echo "
</td>
</tr>
<tr>
<td width=\"300px\" align=\"center\" bgcolor=\"#BCC820\" >category</td>
<td  align=\"center\">";
echo $row["category"];
echo "
</td>";
echo "
</tr>
<tr>
<td width=\"300px\" align=\"center\" bgcolor=\"#BCC820\" >Description</td>
<td  align=\"center\"> ";
echo $row["Description"];
echo "
</td>
</tr>
<tr>
<td width=\"300px\" align=\"center\" bgcolor=\"#BCC820\" >Type</td>
<td  align=\"center\" >";
echo $row["Type"];
echo "
</td>
</tr>
<tr>
<td width=\"300px\" align=\"center\" bgcolor=\"#BCC820\" >Salary</td>
<td  align=\"center\">";
echo $row["Salary"];
echo "
</td>";
echo "
</tr>
<tr>
<td width=\"300px\" align=\"center\" bgcolor=\"#BCC820\" >years_of_experience</td>
<td  align=\"center\"> ";
echo $row["years_of_experience"];
echo "
</td>
</tr>
<tr>
<td width=\"300px\" align=\"center\" bgcolor=\"#BCC820\" >Skills</td>
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

   
     
    function contact ($string)
    {
        
    }




function select($selectoption){
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

$myfile = fopen("../../user.txt", "r") or die("Unable to open file!");
$userid=fgets($myfile);
fclose($myfile);

$select_query= "SELECT *FROM `advertisements` WHERE Userid = '$userid' and category ='$selectoption' ";
// catch resulting records
$result=mysqli_query($connenction_link,$select_query)or die($select_query."<br/><br/>".mysql_error());

// view result


$flage = false;

 echo "<center>"." <table border='1'  bgcolor=\"#7DB818\" width='900px'>
<tr>
<th  bgcolor=\"#BCC820\" >Name</th>
<th  bgcolor=\"#BCC820\" >place</th>
<th  bgcolor=\"#BCC820\" >category</th>
<th  bgcolor=\"#BCC820\" >Action</th>
</tr>
";
while($row = mysqli_fetch_array($result))
{
$flage =true;
	
	
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
$s = $row["id"];
echo"
<td  align=\"center\" >
<form name=\"$s\" action=\"list.php\" method=\"get\" >
<input type=\"hidden\" name=\"adsid\" value=\"$s\" />
<input type=\"submit\" name=\"view\" value=\"View Details\" style=\"background:none; border:hidden; color:#ffffff; \" />
</form>
</td>
</tr>";
}
echo "</table> </center><br>";





mysqli_close($connenction_link);
return $flage;
}




    
    function updateInfo ()
    {
        
		$connenction_link=mysqli_connect("127.0.0.1","root","","my_db");
if(!$connenction_link)
{
echo " Connection Failed".mysql_error();
}

// Select Database
mysqli_select_db($connenction_link,"my_db");


$myfile = fopen("../../user.txt", "r") or die("Unable to open file!");
$userid=fgets($myfile);
fclose($myfile);

$select_query= " SELECT * FROM `users` WHERE ID = '$userid'  ";
		
	$result=mysqli_query($connenction_link,$select_query)or die($select_query."<br/><br/>".mysql_error());

// view result
return $result;



    }

    
    function sign_up($obj)
    {
		
		 $email =$obj->email;
            $pass =$obj->password;
		    $name =$obj->name;
           $mobileNumber =$obj->mobileNumber;
	               
				if($email !=null && $pass !=null && $name !=null && $mobileNumber !=null){  
$connenction_link=mysqli_connect("127.0.0.1","root","","my_db");
if(!$connenction_link)
{
echo " Connection Failed".mysql_error();
}

// Select Database
mysqli_select_db($connenction_link,"my_db");


$select_query= " SELECT * FROM `users` WHERE Email ='$email' ";
// catch resulting records
$result=mysqli_query($connenction_link,$select_query);
$count = mysqli_num_rows($result);
if ($count >0) {
	echo '<script>window.open("welcome.php#signupScreen","_self");window.alert("E-mail may be used try again.")</script>';
	
}
else {
	$insert_query= " INSERT into users (Email,Password,Name,Mobile) values ('$email','$pass','$name','$mobileNumber')";
$result=mysqli_query($connenction_link,$insert_query);
	echo '<script>window.alert("Your account created , now you can Log in.");window.open("welcome.php","_self")</script>';
	
}

mysqli_close($connenction_link);
		
    }
	else {
		echo '<script>window.alert("one or more fields are missed.");window.open("welcome.php#signupScreen","_self")</script>';
	}
	}
	
	
	
	
	
   
    function Login($obj)
    {
        $emails =$obj->email;
$pass =$obj->password;
if($emails != " " ){
	if($pass != " "){
		$connenction_link=mysqli_connect("127.0.0.1","root","","my_db");
if(!$connenction_link)
{
echo " Connection Failed".mysql_error();
}

// Select Database
mysqli_select_db($connenction_link,"my_db");


$select_query= " SELECT * FROM `users` WHERE Email ='$emails' and Password ='$pass' ";
// catch resulting records
$result=mysqli_query($connenction_link,$select_query);
$count = mysqli_num_rows($result);
if ($count > 0) {
	
$row = mysqli_fetch_array($result);

	$myfile = fopen("user.txt", "w") or die("Unable to open file!");
fwrite($myfile,$row["ID"]);
fclose($myfile);

	
	header('Location: home.html');
}
else {
	echo '<script>window.alert("E-mail or password may be wrong try again.");window.open("welcome.php#loginScreen","_self")</script>';
}
mysqli_close($connenction_link);
	}

}
    }

    
    function viewmyads($id)
    {
     
	 $connenction_link=mysqli_connect("127.0.0.1","root","","my_db");
if(!$connenction_link)
{
echo " Connection Failed".mysql_error();
}

// Select Database
mysqli_select_db($connenction_link,"my_db");



$myfile = fopen("../../user.txt", "r") or die("Unable to open file!");
$userid=fgets($myfile);
fclose($myfile);

$select_query= "SELECT *FROM `advertisements` WHERE id = '$id'  ";
// catch resulting records
$result=mysqli_query($connenction_link,$select_query)or die($select_query."<br/><br/>".mysql_error());


	 
	 mysqli_close($connenction_link);
	    return $result;
    }

  
    function creatsavingfList($savingList)
    {
        
    }

} 

?>