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
				   <img id="banner" src="images/ad_banner.gif" />
			</div>
			    <!-- Header ends here-->
				
			 <!-- Menubar starts here-->
			 <div class="menubar">
			     
				 
				 <ul id="menu">
				 
				    <li><a href="..\index.php">Home</a></li>
					<li><a href="..\contact_us.php">Contact Us</a></li>
					<li><a href="..\faq.php">FAQ</a></li>
					
				 </ul>
				 
				 <div id="form">
				 
				     <span style="float:right; font-size:18px; padding:5px; line-height:40px;">
				    <!--<a href = "login.php" style="color:yellow">LogIn |</a>-->
				    <!--<a href = "signup.php" style="color:yellow">SignUp</a>-->
					<?php
					if(isset($_SESSION['email'])){
						$user = $_SESSION['email'];
					 $get_name = "select * from user where email='$user'";
					 $run_name = mysqli_query($connect,$get_name);
					 $row_name=mysqli_fetch_array($run_name);
					 $user_name=$row_name['name'];
						echo "<b>Hi </b>" .  $user_name .  "<b>    |  </b>";
						
						echo "<a href='..\logout.php' style='color:yellow'>Logout</a>";
						
					}
					
					?>
				 </div>
				 
			 </div>
		     <!-- Menubar ends here-->
			 
			 <!-- Content Wrapper starts here-->
			 <div class="content_wrapper">
			 
			    <div id="sidebar">
			         
					 <div id="sidebar_title">My Account</div>
					 
					 <ul id="cats">
					 <?php
					 $user = $_SESSION['email'];
					 $get_img = "select * from user where email='$user'";
					 $run_img = mysqli_query($connect,$get_img);
					 $row_img=mysqli_fetch_array($run_img);
					 $user_img=$row_img['image'];
					 $name = $row_img['name'];
					 echo "<p style='text-align:center; '><img src='user_images/$user_img' width='150' height='150'/></p>";
					 ?>
					    <li><a href="my_account.php?my_events">My Events</a></li>
						<li><a href="my_account.php?edit_account">Edit Account</a></li>
						<li><a href="my_account.php?change_password">Change Password</a></li>
						<li><a href="my_account.php?delete_account">Delete Account</a></li>
						<li><a href="..\logout.php">Logout</a></li>
						
					 </ul>
					
			    </div>
			 
			    <div id="content_area">
			         
				  
			  <?php
			    if(!isset($_GET['my_events'])){
				    if(!isset($_GET['edit_account'])){
						if(!isset($_GET['change_password'])){
							if(!isset($_GET['delete_account'])){
						         echo "<h2 style='padding:20px; '>Welcome :  $name </h2>";
				  						
					        }
						
						}
					}
										
				}
				  
				  ?>
				  
				  <?php
				    if(isset($_GET['my_events'])){
						include("my_events.php");
					}
					
				    else if(isset($_GET['edit_account'])){
						include("edit_account.php");
					}
					
					else if(isset($_GET['change_password'])){
						include("change_password.php");
					}
					
					else if(isset($_GET['delete_account'])){
						include("delete_account.php");
					}
				   else{
					   include("my_events.php");
				   }
				  ?>
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