<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<link type="text/css" rel="stylesheet" href="../../CSS/search.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Goods.com | Search</title>
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
    
    <form method="post" action="search.php">
      &nbsp;&nbsp;&nbsp; Place :
      <input type="text" name="searchtext"   style="background-color:#BCC820; border-color:#33817f; border:double; font-size:16px; color:#191A1A; width:450px; " />
      Category :
      <select name="s_category"  style="background-color:#2AAFCB; border:hidden; font-size:16px; font-family:fantasy; color:#33817f; " >
        <option value="house">House</option>
        <option value="Cars">Cars</option>
        <option value="It_jobs">It jobs</option>
      </select>
      option :
      <select name="s_option"  style="background-color:#2AAFCB; border:hidden; font-size:16px; font-family:fantasy; color:#33817f; " >
        <option value="cat">Category only</option>
        <option value="pla">Place only</option>
        <option value="both">Both</option>
      </select>
      <input type="submit" value="Filter"  style="background-color:#7DB818; border:hidden; font-size:24px; font-family:fantasy; color:#33817f; " />
    </form>
    <br>
    <br>
    <?php
		error_reporting(0);	
		
		 require_once("../../Controler.php");
	if( $_POST["s_option"] == "cat" ){
		
	 $obj = new Controler;
	 $result = $obj->search($_POST["s_category"]," ","1");
	  if($result==false){
	  echo "no ads found.";
	  }
	}
	else if( $_POST["s_option"] == "pla" ){
		
	 $obj = new Controler;
	 $result = $obj->search(" ",$_POST["searchtext"],"2");
	  if($result==false){
	  echo "no ads found.";
	  }
	}
	else if( $_POST["s_option"] == "both" ){
		 
	 $obj = new Controler;
	 $result = $obj->search($_POST["s_category"],$_POST["searchtext"],"3");
	  if($result==false){
	  echo "no ads found.";
	  }
	}
	 
	 else {
	
	
	
	 $obj = new Controler;
	 $result = $obj->search(" "," ","4");
	  if($result==false){
	  echo "no ads found.";
	  }
	 
	 }
?>
  </div>
</center>
</body>
</html>
