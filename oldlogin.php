 <!DOCTYPE>

 <?php
     session_start();
	 include("functions/functions.php");
    include("includes/db.php");
 ?>
<html>

    <head>
	     <title>
		     MNNIT Annual Athletics meet
         </title>	
		 
		 <link rel="stylesheet" href="styles/style.css" media="all" />
	</head>
	
	<body>
	    
		<!-- Main Container starts here-->
		<div class="main_wrapper">
		
	         <!-- Header starts here-->	
		     <div class="header_wrapper">
			       <img id="logo" src="images/logo.png" />
				   <img id="banner" src="images/ad_banner.jpg" />
			</div>
			    <!-- Header ends here-->
				
			 <!-- Menubar starts here-->
			 <div class="menubar">
			     
				 
				 <ul id="menu">
				 
				    <li><a href="index.php">Home</a></li>
					<li><a href="#">Contact Us</a></li>
					<li><a href="#">FAQ</a></li>
					
				 </ul>
				 
				 <div id="form">
				 
				    <!--<form method="get" action="results.php"  enctype="multipart/form-data">
					     
						 <input type="text" name="user_query"  placeholder="search for  a product" />
						 <input type="submit" name="search" value="search" />
						 
					</form>-->
					<a href = "index.php" style="color:yellow">Go to Home</a>
				 </div>
				 
			 </div>
		     <!-- Menubar ends here-->
			 
			 <!-- Content Wrapper starts here-->
			 <div class="content_wrapper">
			 
			    <div id="sidebar">
			         
					 <div id="sidebar_title">Formal Events</div>
					 
					 <ul id="cats">
					 
					    <li><a href="#">Racing</a></li>
						<li><a href="#">Throwing</a></li>
						<li><a href="#">Jumping</a></li>
						
						
					 </ul>
					 
					
					 
					 <ul id="sidebar_title">
					 
					    <li><a href="#">Informal Events</a></li>
						
						
					 </ul>
			    </div>
			 
			    <div id="content_area">
			         
				  <div id="post_box">
					 <form action="login.php"  method="post" enctype="multipart/form-data" >
                <table align="center" width="800" border="2">
 
                    <tr align="center"> 
					   <td colspan="8"><h2>LogIn To Your Account</h2></td>
				     </tr>
					  
					 <tr>
                                 <td  align="right" ><b>E-mail :  </b></td>
                                <td ><input type="text" id="email" name="email" size="50" placeholder="Enter email" required/></td>
                     </tr>
					 <tr>
                                 <td  align="right" ><b>Password :  </b></td>
                                <td ><input type="password" id="password" name="password" size="50" placeholder="Enter password" required/></td>
                     </tr>
					 <tr align="center">
                                 <td  colspan="3" ><a href="login.php?forgot_pass">Forgot Password?</a></td>
                                
                     </tr>
                                                
                            <tr align="center">
                               
                                <td colspan="8"><input id="submit" type="submit" name = "login" value="LogIn">
                                 </td>

                             </tr>
 
                        </table>
 
                </form>
						
				</div>
			    </div>
			 
			 </div>
			 <!-- Content Wrapper ends here-->
			 
			 
			 <div id="footer">
			    <h2 style="text-align:center; padding-top:30px" >&copy; 2018 by www.mnnit.ac.in</h2>
			 </div>
			 
		</div>
		<!-- Main Container ends here-->
		
	</body>
</html>


<?php

if(isset($_POST['login']))

{
//$ip = getIP();

$email =  $_POST['email'];
$password = $_POST['password'];

$sel_user = "select * from user where email='$email' AND password='$password'";

$run_user = mysqli_query($connect,$sel_user);
   $check_user = mysqli_num_rows($run_user);


if($check_user==0)
{
	echo "<script>alert('email or password is incorrect, please try again! ')</script>";
	exit();
}

else{
	
	$_SESSION['email']=$email;
	echo "<script>alert('You logged in successfully, Thanks !')</script>";
	echo "<script>window.open('index.php','_self')</script>";
}
}

?>