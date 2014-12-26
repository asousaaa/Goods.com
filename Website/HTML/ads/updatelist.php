


    <?php	
	
	error_reporting(0);
	$connenction_link=mysqli_connect("127.0.0.1","root","","my_db");
if(!$connenction_link)
{
echo " Connection Failed".mysql_error();
}

// Select Database
mysqli_select_db($connenction_link,"my_db");


$id =$_GET["adsid"];
	
$value = $_GET["value"];	  
if($_GET["change"] == "Change name" ){
	
	 	$select_query= "UPDATE `advertisements` SET `adsname`='$value' WHERE id = '$id' "; 
		
}
if($_GET["change"] == "Change place" ){
		 	$select_query= "UPDATE `advertisements` SET `adsplace`='$value' WHERE id = '$id' "; 
}
if($_GET["change"] == "Delete this ads" ){
		 	$select_query= "DELETE FROM `advertisements` WHERE id = '$id' "; 
		$result=mysqli_query($connenction_link,$select_query)or die($select_query."<br/><br/>".mysql_error());
		
		echo "<script>window.alert(\"Deleted Successfully\");
		window.location.href = \"../../home.php\";
		</script>";
	
	mysqli_close($connenction_link);
	
}
if($_GET["change"] == "Change description" ){
		 	$select_query= "UPDATE `advertisements` SET `Description`='$value' WHERE id = '$id' "; 
}
if($_GET["change"] == "Change Area" ){
		 	$select_query= "UPDATE `advertisements` SET `Area`='$value' WHERE id = '$id' "; 
}
if($_GET["change"] == "Change address" ){
		 	$select_query= "UPDATE `advertisements` SET `address`='$value' WHERE id = '$id' "; 
}
if($_GET["change"] == "Change # rooms" ){
		 	$select_query= "UPDATE `advertisements` SET `numOfRooms`='$value' WHERE id = '$id' "; 
}
if($_GET["change"] == "Change # toillet" ){
		 	$select_query= "UPDATE `advertisements` SET `numOfToillet`='$value' WHERE id = '$id' "; 
}
if($_GET["change"] == "Change price" ){
		 	$select_query= "UPDATE `advertisements` SET `Price`='$value' WHERE id = '$id' "; 
}
if($_GET["change"] == "Change manufacturer" ){
		 	$select_query= "UPDATE `advertisements` SET `vendor`='$value' WHERE id = '$id' "; 
}
if($_GET["change"] == "Change model" ){
		 	$select_query= "UPDATE `advertisements` SET `Model`='$value' WHERE id = '$id' "; 
}
if($_GET["change"] == "Change # KM" ){
		 	$select_query= "UPDATE `advertisements` SET `KM`='$value' WHERE id = '$id' "; 
}
if($_GET["change"] == "Change capacity" ){
		 	$select_query= "UPDATE `advertisements` SET `capacity`='$value' WHERE id = '$id' "; 
}
if($_GET["change"] == "Change type" ){
		 	$select_query= "UPDATE `advertisements` SET `Type`='$value' WHERE id = '$id' "; 
}
if($_GET["change"] == "Change salary" ){
		    $select_query= "UPDATE `advertisements` SET `Salary`='$value' WHERE id = '$id' "; 
}
if($_GET["change"] == "Change # years" ){
		 	$select_query= "UPDATE `advertisements` SET `years_of_experience`='$value' WHERE id = '$id' "; 
}
if($_GET["change"] == "Change skills" ){
		 	$select_query= "UPDATE `advertisements` SET `Skills`='$value' WHERE id = '$id' "; 
}
	
	$result=mysqli_query($connenction_link,$select_query)or die($select_query."<br/><br/>".mysql_error());
		
		
		
		echo "<script>window.alert(\"Changed Successfully\");
		window.location.href = \"list.php?adsid=\"+$id;
		</script>";
	
	mysqli_close($connenction_link);
	
?>
 