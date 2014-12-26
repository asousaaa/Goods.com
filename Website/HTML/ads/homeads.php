<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<link type="text/css" rel="stylesheet" href="../../CSS/createads.css" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Goods.com | house </title>
		<meta name="author" content="hosam azzam" />
		<!-- Date: 2014-11-16 -->
	</head>
	
	<body bgcolor="#ffffff" id="body">
    
     <?php
	 
	 require_once('../Advertisement.php');
	  require_once('../Home_ads_class.php');
	   require_once('../../Controler.php');
	  
if(isset($_POST['submitbutton'])){
	if($_POST['Area'] =="" ||$_POST['adsname'] =="" || $_POST['adsplace'] =="" ||$_POST['Price'] =="" ||$_POST['Rooms'] =="" ||$_POST['Address'] ==""  ||$_POST['toilets'] =="" ){
echo '<script>window.alert("one or more field are requeried")</script>';
	
	}
	else {
		
		
		$adsobj= new Advertisement;
	$adsobj->adsname = $_POST['adsname'];
	$adsobj->adsplace =$_POST['adsplace'];
	$adsobj->category='house';
	$adsobj->Description= $_POST['Description'];
	
	$homeobj= new Home;
	$homeobj->Area = $_POST['Area'];
	$homeobj->address = $_POST['Address'];
	$homeobj->numOfRooms = $_POST['Rooms'];
	$homeobj->price = $_POST['Price'];
	$homeobj->numOfToillet = $_POST['toilets'];
	
	$controlobj = new Controler;
	$controlobj->createAds($adsobj,$homeobj,null,null,1);
		
	
	
	}
}

if(isset($_POST['cancelbutton'])){
echo 'window.open("../../home.html","_self")</script>';
}
?>
 
 
    
    
		<center>
        	<div id="header" >
            <div class="logo" >
            <font face="fantasy" color="#BCC820" size="7">
           <center> Goods.com</center>
            </font>
            </div>
            <div class="heder-content" align="left" >
             <font face="fantasy" color="#33817f" size="5" >
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               &nbsp;&nbsp;&nbsp;&nbsp;
           <a href="../../home.html">&nbsp;&nbsp;home </a> 				   
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <select onchange="location = this.options[this.selectedIndex].value;"  style="background-color:#2AAFCB; border:hidden; font-size:24px; font-family:fantasy; color:#33817f; ">
           <option value="">Create ads</option>
    <option value="homeads.php">Home</option>
    <option value="carsads.php">Cars</option>
    <option value="itjobsads.php">It jobs</option>
	</select>  
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="">&nbsp;&nbsp;&nbsp;&nbsp;Inbox </a> 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <a href="search.php">&nbsp;&nbsp;&nbsp;&nbsp;Search </a> 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <select onchange="location = this.options[this.selectedIndex].value;"  style="background-color:#2AAFCB; border:hidden; font-size:24px; font-family:fantasy; color:#33817f; ">
           <option value="">View Lists</option>
    <option value="homelists.php">Home List</option>
    <option value="carslists.php">Cars List</option>
    <option value="itjobslists.php">It jobs List</option>
	</select>  
            &nbsp;&nbsp;&nbsp;
            <a href="profile.php">&nbsp;&nbsp;&nbsp;&nbsp;Profile </a> 
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a onClick=" window.close()" href="../../welcome.php" target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;		Log out </a> 
            </font>
           </div>
           </div>
       <br><br><br><br><br><br>
       <div id="content" align="left">
       <form id="create" method="post" >
         <font face="fantasy" color="#33817f" size="5" >
         <center> Advertisement for home </center>
          <input id="image" type="image" name="adsimage" src="../../image/adsimage.png" > <br>
        &nbsp;&nbsp;&nbsp;&nbsp; Titel : <br>
        
       
         &nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="adsname" style=" height:20px; width:400px; " > <br><br>
        &nbsp;&nbsp;&nbsp;&nbsp; place :<br>
          &nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="adsplace" style=" height:20px; width:400px; "  ><br><br>
         &nbsp;&nbsp;&nbsp;&nbsp; Description :<br>  <input type="file" name="browser" id="browseimage" title="choose image"> 
          &nbsp;&nbsp;&nbsp;&nbsp; <textarea name="Description" rows="6" cols="100" style="max-width:700px; max-height:100px;"></textarea>
<br>
         
         &nbsp;&nbsp;&nbsp;&nbsp; Area :					
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;Address : <br>&nbsp;&nbsp;&nbsp;&nbsp;
         
         <input type="text" name="Area" style=" height:20px; width:200px; " > 
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;
         <input type="text" name="Address" style=" height:20px; width:200px; " > <br>
         
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Price :					
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         Number of Rooms : <br>&nbsp;&nbsp;&nbsp;&nbsp;
         
         <input type="text" name="Price" style=" height:20px; width:200px; " > 
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;
         <input type="text" name="Rooms" style=" height:20px; width:200px; " > <br>
          &nbsp;&nbsp;&nbsp;&nbsp; Number of toilets :					
          <br>&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="text" name="toilets" style=" height:20px; width:200px; " > 
          

        
    </font>

<div align="center" id="submit-button" >


<input type="submit" name="submitbutton" value=&#10004 style="font-size:65px; color:#33817f; background-color:transparent; border:hidden; " />


</div>
<div align="center" id="cancel-button">

<input type="submit" name="cancelbutton" value=&#10006 style="font-size:65px; color:#33817f; background-color:transparent; border:hidden; " />

</div>
 
<br><br>
 
 </form>
</div>

       
       
       
        </center>
        
        
	</body>
</html>

