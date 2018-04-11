 <!DOCTYPE html>

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
					<li><a href="index.php?register">Register</a></li>
					<!--<li><a href="user/my_account.php">My Account</a></li>
					<li><a href="#">Sign Up</a></li>-->
					<li><a href="index.php?contact">Contact Us</a></li>
					<!--<li><a href="index.php?faq">FAQ</a></li>-->
					<a href="index.php?show_result">Show Result</a>
					
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
						echo "<a href='user\my_account.php' style='color:yellow'>My Account</a>";
						//echo "<a href='logout.php' style='color:yellow'>Logout</a>";
						
					}
					else{
					if(isset($_GET['register']) ||  isset($_GET['signup']))
				        {
						}
						else{
						echo "<a href = 'index.php?signup' style='color:yellow'>SignUp  |  </a>";
					    echo "<a href='index.php?login' style='color:yellow'>Login</a>";	
						}
					}
					?>
				 </div>
				 
			 </div>
		     <!-- Menubar ends here-->
			 
			 <!-- Content Wrapper starts here-->
			 <div class="content_wrapper">
			 
			    <div id="sidebar" height="400">
			         
					 <div id="sidebar_title">Formal Events</div>
					 
					 <ul id="cats">
					 
					    <li><a href="index.php?racing">Racing</a></li>
						<li><a href="index.php?throwing">Throwing</a></li>
						<li><a href="index.php?jumping">Jumping</a></li>
						
						
					 </ul>
					 
					
					 
					 <ul id="sidebar_title">
					 
					    <li><a href="index.php?informal_events">Informal Events</a></li>
						
						
					 </ul>
			    </div>
			 
			    <div id="content_area">
			         
				 
				<?php
				  
				   if(isset($_GET['racing']))
				   {
					    include("racing.php");
				   }
				   
				   else if(isset($_GET['throwing']))
				   {
					    include("throwing.php");
				   }
				   
				   else if(isset($_GET['jumping']))
				   {
					    include("jumping.php");
				   }
				    else if(isset($_GET['informal_events']))
				   {
					    include("informal_events.php");
				   }
				   else if(isset($_GET['signup']))
				   {
					    include("signup.php");
				   }
				     else if(isset($_GET['login']))
				   {
					    include("login.php");
				   }
				    else if(isset($_GET['register']))
				   {
					    //include("register.php");
						if(isset($_SESSION['email'])){
						
						    include("register.php");
						
					    }
						else{
							 include("signup.php");
						}
				   }
				   else if(isset($_GET['contact']))
				   {
					    include("contact.php");
				   }
				   else if(isset($_GET['faq']))
				   {
					    include("faq.php");
				   }
				   else  if(isset($_GET['show_result']))
				   {
					    include("show_result.php");
				   }
				 else{
					  echo "<div id='post_box'>";					 
						getsBlogs();
				      echo "</div>";
					 
				 }
				   
				?>
			    </div>
			 
			 </div>
			 <!-- Content Wrapper ends here-->
			 
			 
			 <div id="footer">
			    <h4 style="text-align:center; padding-top:10px" >&copy; 2018 by www.mnnit.ac.in</h4>
			 </div>
			 
		</div>
		<!-- Main Container ends here-->
		
	</body>
</html>