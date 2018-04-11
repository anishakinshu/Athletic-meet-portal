 
				<div id="post_box">
					 <form action=""  method="post" enctype="multipart/form-data" >
                <table align="center" width="800" border="2">
 
                    <tr align="center"> 
					   <td colspan="8"><h2>Create New Account</h2></td>
				     </tr>
					  <tr align="center">
                                 <td  align="right" ><b>Name :  </b></td>
                                <td align="left"><input type="text" id="name" name="name" size="50" placeholder="Please enter your full name" required/></td>
                     </tr>
					  <tr align="center">
                                 <td  align="right" ><b>Registration no. :  </b></td>
                                <td align="left"><input type="text" id="reg_no" name="reg_no" size="50" placeholder="Please enter your registration no." required/></td>
                     </tr>
					  <tr align="center">
                                 <td  align="right" ><b>Institute :  </b></td>
                                <td align="left"><input type="text" id="institute" name="institute" size="50" placeholder="Please enter your institution" required/></td>
                     </tr>
					 
					 
					 
					  <tr align="center">
                                 <td  align="right" ><b>Course :  </b></td>
								 
                                <td align="left">
								    <select name="course">
									
								        <option>Select course</option>
										<option>B.Tech./B.E.</option>
										<option>MBA</option>
										<option>MCA</option>
										<option>M.Tech.</option>
										<option>B.Sc./M.Sc.</option>
									
									</select>
                     </tr>
					  <tr align="center">
                                 <td  align="right" ><b>Branch :  </b></td>
                                <!--<td style="border:gray 1px solid"><input type="text" id="branch" name="branch" size="50" required/></td>-->
								<td align="left">
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
					 <tr align="center">
                                 <td  align="right" ><b>E-mail :  </b></td>
                                <td align="left"><input type="text" id="email" name="email" size="50" required/></td>
                     </tr>
					 <tr align="center">
                                 <td  align="right" ><b>Password :  </b></td>
                                <td align="left"><input type="password" id="password" name="password" size="50" required/></td>
                     </tr >
					  <tr align="center">
                                 <td  align="right" ><b>Contact :  </b></td>
                                <td align="left"><input type="text" id="contact" name="contact" size="50" required/></td>
                     </tr>
					 <tr align="center">
                                 <td  align="right" ><b>Gender:  </b></td>
								 <td align="left">
                                 <input type = "radio" name = "gender" id = "male" value = "Male" checked = "checked" />Male
                                    
                                <input type = "radio" name = "gender" id = "female"  value = "Female" />Female
								  </td>
                     </tr>
					 <tr align="center">
                        <td  align="right" ><b>Upload Photo :  </b></td>
                        <td align="left"><input type="file" name="image" /></td>
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
				 <li style="list-style:none;float:center"><a href = "oldlogin.php" >Already have an account, Login!</a></li>
				 </ul>
				 </div>
			    </div>
			 

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


$get_email="select * from user where email='$email'";
$run_email = mysqli_query($connect,$get_email);

if($run_email)
{
	echo "<script>alert('This email is already registered.Please use another email!!!')</script>";
}
else
{
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
}

?>