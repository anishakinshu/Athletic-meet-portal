 <!DOCTYPE>

 <?php
 
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
					 <form action="signup.php"  method="post" enctype="multipart/form-data" >
                <table align="center" width="800" border="2">
 
                    <tr align="center"> 
					   <td colspan="8"><h2>Create New Account</h2></td>
				     </tr>
					  <tr>
                                 <td  align="right" ><b>Name :  </b></td>
                                <td ><input type="text" id="name" name="name" size="50" placeholder="Please enter your full name" required/></td>
                     </tr>
					  <tr>
                                 <td  align="right" ><b>Registration no. :  </b></td>
                                <td ><input type="text" id="reg_no" name="reg_no" size="50" placeholder="Please enter your registration no." required/></td>
                     </tr>
					  <tr>
                                 <td  align="right" ><b>Institute :  </b></td>
                                <td ><input type="text" id="institute" name="institute" size="50" placeholder="Please enter your institution" required/></td>
                     </tr>
					 
					 
					 
					  <tr>
                                 <td  align="right" ><b>Course :  </b></td>
								 
                                <td>
								    <select name="course">
									
								        <option>Select course</option>
										<option>B.Tech./B.E.</option>
										<option>MBA</option>
										<option>MCA</option>
										<option>M.Tech.</option>
										<option>B.Sc./M.Sc.</option>
									
									</select>
                     </tr>
					  <tr>
                                 <td  align="right" ><b>Branch :  </b></td>
                                <!--<td style="border:gray 1px solid"><input type="text" id="branch" name="branch" size="50" required/></td>-->
								<td>
								    <select name="branch">
									
								        <option>Select your branch</option>
										<option>Computer Science & Engineering</option>
										<option>Information Technology</option>
										<option>Electrical Engineering</option>
										<option>Electronics & communication Engineering</option>
										<option>Mechanical Engineering</option>
									
									</select>
								</td>
                     </tr>
					 <tr>
                                 <td  align="right" ><b>E-mail :  </b></td>
                                <td ><input type="text" id="email" name="email" size="50" required/></td>
                     </tr>
					 <tr>
                                 <td  align="right" ><b>Password :  </b></td>
                                <td ><input type="password" id="password" name="password" size="50" required/></td>
                     </tr>
					  <tr>
                                 <td  align="right" ><b>Contact :  </b></td>
                                <td ><input type="text" id="contact" name="contact" size="50" required/></td>
                     </tr>
					 <tr>
                                 <td  align="right" ><b>Gender:  </b></td>
								 <td>
                                 <input type = "radio" name = "gender" id = "male" value = "Male" checked = "checked" />Male
                                    
                                <input type = "radio" name = "gender" id = "female"  value = "Female" />Female
								  </td>
                     </tr>
					 <tr>
                        <td  align="right" ><b>Upload Photo :  </b></td>
                        <td ><input type="file" name="image" required/></td>
                     </tr>
					 
                                                
                            <tr align="center">
                               
                                <td colspan="8"><input id="submit" type="submit" name = "register" value="Create Account">
                                 </td>

                             </tr>
 
                        </table>
 
                </form>
						
				</div>
				<div >
				<ul id="form">
				 <li style="list-style:none;float:center"><a href = "login.php" >Already have an account, Login!</a></li>
				 </ul>
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

if(isset($_POST['register']))

{
//$ip = getIP();

$name =  $_POST['name'];
$reg_no =  $_POST['reg_no'];
$institute =  $_POST['institute'];
$course =  $_POST['course'];
$branch =  $_POST['branch'];
$email =  $_POST['email'];
$password = $_POST['password'];
$contact =  $_POST['contact'];
$gender =$_POST['gender'];
$image =  $_FILES['image']['name'];
$image_tmp = $_FILES['image']['tmp_name'];


move_uploaded_file($image_tmp,"user/user_images/$image");
//insert posts into database
$insert_user = "INSERT into user(`name`,`reg_no`,`institute`,`course`,`branch`,`email`,`password`,`contact`,`gender`,`image`) values('$name','$reg_no','$institute','$course','$branch','$email','$password','$contact','$gender','$image')";
$add_user = mysqli_query($connect,$insert_user);

if($add_user)
{
//echo "1 record added";
//echo $content;
echo "<script>alert('Account  has been created successfully!!!')</script>";
echo "<script>window.open('login.php','_self')</script>";

//echo "<a href='blog_view.php'> view blog</a>";
}
}

?>