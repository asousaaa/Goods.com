<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<link type="text/css" rel="stylesheet" href="CSS/welcome.css" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Goods.com | Welcome </title>
		<meta name="author" content="hosam azzam" />
		<!-- Date: 2014-11-16 -->
	</head>
	
	<body bgcolor="#ffffff" id="dody">
    <?php

require_once('Controler.php');

class user{
    
    var $name = 'hosam';
    var $mobileNumber = 01115736750;
    var $email = 'hos@yahoo.com';
    var $password = 'hosam';
	

} 


if(isset($_POST['loginsubmit'] ) ){
	$obj = new user;
	$obj->email=$_POST['Email'];
	$obj->password=$_POST['Password'];
	$obj2 = new Controler;
	$obj2->Login($obj);
}

if(isset($_POST['signupsubmit'] ) ){
	$obj = new user;
	$obj->email =$_POST['Email'];
	$obj->password=$_POST['Password'];
	$obj->name=$_POST['username'];
	
	$obj->mobileNumber=$_POST['mobilenumber'];
	$obj2 = new Controler;
	$obj2->Sign_up($obj);
}


?>
		<center>
			<br />
			<br />
			<br />
			<br />
			<br />
			<center>
			<div id="loginScreen">
				<a href="" class="cancel">&times;</a>
               <br/><br/><br/>
               <form id="loginfunction"  action="" method="post"  >
               E-mail <br/>
             <input type="email" name="Email"  style="border:hidden; height:30px; width:250px; font-style:inherit; font-size:18px;" /> <br/><br/>
               Password <br/>
               <input type="password" name="Password"  style="border:hidden; height:30px; width:250px; font-style:inherit; font-size:18px; "/>
               <br/><br/>
               <input type="submit" name="loginsubmit" value="Log in" style="font-size:24px; background-color:#ED1B7D; font-style:normal; border:hidden; "  > 
			</form>
            </div>
			<div id="signupScreen">
				<a href="" class="cancel">&times;</a>
                 <br/>
               <form id="signupfunction" action="" method="post"  >
               User-name <br/>
             <input type="text" name="username" style="border:hidden; height:30px; width:250px; font-style:inherit; font-size:18px;"/> <br/>
               E-mail <br/>
             <input type="email" name="Email"  style="border:hidden; height:30px; width:250px; font-style:inherit; font-size:18px;" /> <br/>
               Password <br/>
               <input type="password" name="Password" style="border:hidden; height:30px; width:250px; font-style:inherit; font-size:18px;"/><br/>
                mobile <br/>
               <input type="number" name="mobilenumber" style="border:hidden; height:30px; width:250px; font-style:inherit; font-size:18px;"/>
               <br/><br/>
               <input type="submit" name="signupsubmit" value="sign up" style="font-size:24px; background-color:#ED1B7D; font-style:normal; border:hidden; " /> 
			</form>
                
			</div>
			</center>
			<div id="Goods.com" align="center" style="margin-right: 30px; height: 100px; width: 750px;">
				<div align="center" class="header_word" style="border-radius: 100%; height: 54px; width: 54px; background-color: #11cdf5;
				padding: 12px; margin-left: 15px; float: left;  background-color: #BCC820; " >
					<font face="fantasy" color="#012D38" size="7">
						<center>
							G
						</center> </font>
				</div>
				<div align="center" class="header_word" style="border-radius: 100%; height: 54px; width: 54px; background-color: #11cdf5;
				padding: 12px; margin-left: 15px; float: left;  background-color: #DC042B; " >
					<font face="fantasy" color="#012D38" size="7">
						<center>
							O
						</center> </font>
				</div>
				<div class="header_word" align="center"  style="border-radius: 100%; height: 54px; width: 54px; background-color: #11cdf5;
				padding: 12px; margin-left: 15px; float: left; background-color: #E9510E; " >
					<font face="fantasy" color="#012D38" size="7">
						<center>
							O
						</center> </font>
				</div>
				<div class="header_word" align="center" style="border-radius: 100%; height: 54px; width: 54px; background-color: #11cdf5;
				padding: 12px; margin-left: 15px; float: left; background-color: #F49600 ;  " >
					<font face="fantasy" color="#012D38" size="7">
						<center>
							D
						</center> </font>
				</div>
				<div class="header_word" align="center"  style="border-radius: 100%; height: 54px; width: 54px; background-color: #11cdf5;
				padding: 12px; margin-left: 15px; float: left; background-color: #FCC513; " >
					<font face="fantasy"  color="#012D38" size="7">
						<center>
							S
						</center> </font>
				</div>
				
			
				<div align="center" class="header_word" style="border-radius: 100%; height: 27px; width: 27px; background-color: #11cdf5;
				margin-left: 20px; float: left; margin-top:55px; background-color: #E3328C; " ></div>
				<div align="center" class="header_word" style="border-radius: 100%; height: 27px; width: 27px; background-color: #11cdf5;
				padding: 10px; margin-left: 20px; float: left; margin-top:25px;  background-color: #CCCE00; " >
					<font face="fantasy" color="#012D38" size="5">
						<center>
							c
						</center> </font>
				</div>
				<div align="center" class="h" style="border-radius: 100%; height: 27px; width: 27px; background-color: #11cdf5;
				padding: 10px; margin-left: 20px; float: left; margin-top:25px;  background-color: #00A5A9; " >
					<font face="fantasy" color="#012D38" size="5">
						<center>
							o
						</center> </font>
				</div>
				<div align="center" class="h" style="border-radius: 100%; height: 27px; width: 27px; background-color: #11cdf5;
				padding: 10px; margin-left: 20px; float: left; margin-top:25px;  background-color: #52BFD3; " >
					<font face="fantasy" color="#012D38" size="5">
						<center>
							m
						</center> </font>
				</div>
	
			</div>
			
			<br />
			<br />
			<br />
			<br />
			<div id="login_signup" align="center" style="height: 250px; width: 450px; ">
			<a href="#loginScreen">
				<div class="login" align="center" style="height: 100px; width: 175px; margin: 25px; background-color: #33817f;
				float: left; border-radius: 75Px; padding-top: 30px;" >
				<font face="fantasy" color="#BCC820" size="7">
						<center>
							Log in
						</center> </font>
			</div></a>
				
			<a href="#signupScreen">
				<div id="log"  align="center" style="height: 100px; width: 175px; margin: 25px; background-color: #33817f;
				float: left; border-radius: 75px; padding-top: 30px; "  >
					<font face="fantasy" color="#BCC820" size="7">
						<center>
							Sign up
						</center> </font>
				</div></a>

			</div>
			
			
			
			
			
		</center>
		
	</body>
</html>

