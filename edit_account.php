 <?php
     include("includes/db.php");
	                $user = $_SESSION['email'];
					 $get_user = "select * from user where email='$user'";
					 $run_user = mysqli_query($connect,$get_user);
					 
                      $row_user=mysqli_fetch_array($run_user);
					 
					 $id = $row_user['user_id'];
					 $name = $row_user['name'];
					 $reg_no = $row_user['reg_no'];
					 $institute = $row_user['institute'];
					 $course = $row_user['course'];
					 $branch = $row_user['branch'];
					 $email= $row_user['email'];
					 $password= $row_user['password'];
					 $contact = $row_user['contact'];
					 $name = $row_user['name'];
					 $image= $row_user['image'];
					 
 ?>
 <form action=""  method="post" enctype="multipart/form-data" >
                <table align="center" width="800" border="2">
 
                    <tr align="center"> 
					   <td colspan="8"><h2>Update Your Account</h2></td>
				     </tr>
					  <tr>
                                 <td  align="right" ><b>Name :  </b></td>
                                <td ><input type="text" id="name" name="user_name" value="<?php echo $name ;?>" size="50" placeholder="Please enter your full name" required/></td>
                     </tr>
					  <tr>
                                 <td  align="right" ><b>Registration no. :  </b></td>
                                <td ><input type="text" id="reg_no" name="reg_no" value="<?php echo $reg_no ;?>" size="50" placeholder="Please enter your registration no." required/></td>
                     </tr>
					  <tr>
                                 <td  align="right" ><b>Institute :  </b></td>
                                <td ><input type="text" id="institute" name="institute" value="<?php echo $institute ;?>" size="50" placeholder="Please enter your institution" required/></td>
                     </tr>
					  <tr>
                                 <td  align="right" ><b>Course :  </b></td>
                                <td>
								    <select name="course" disabled>
									
								        <option><?php echo $course ;?></option>
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
								    <select name="branch" disabled>
									
								        <option><?php echo $branch;?></option>
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
                                <td ><input type="text" id="email" name="email" value="<?php echo $email ;?>" size="50" required/></td>
                     </tr>
					 
					  <tr>
                                 <td  align="right" ><b>Contact :  </b></td>
                                <td ><input type="text" id="contact" name="contact" value="<?php echo $contact ;?>" size="50" required/></td>
                     </tr>
					 
					 <tr>
                        <td  align="right" ><b>Upload Photo :  </b></td>
                        <td ><input type="file" name="image" value="<?php echo $image; ?>"/><img src="user_images/<?php echo $image ;?>" width="50" height="50"/></td>
                     </tr>
					 
                                                
                            <tr align="center">
                               
                                <td colspan="8"><input id="submit" type="submit" name = "update" value="Update Account">
                                 </td>

                             </tr>
 
                        </table>
 
                </form>
						
<?php

if(isset($_POST['update']))
{
//$ip = getIP();
$c_id=$id;
$name =  $_POST['user_name'];
$reg_no =  $_POST['reg_no'];
$institute =  $_POST['institute'];
//$course =  $_POST['course'];
//$branch =  $_POST['branch'];
$email =  $_POST['email'];
$password = $_POST['password'];
$contact =  $_POST['contact'];

$image =  $_FILES['image']['name'];
$image_tmp = $_FILES['image']['tmp_name'];


move_uploaded_file($image_tmp,"user_images/$image");
//insert posts into database
$update_user = "update user set name='$name',reg_no='$reg_no',email='$email',password='$password',institute='$institute',contact='$contact',image='$image'  where user_id='$c_id'";
$run_update = mysqli_query($connect,$update_user);

if($run_update)
{

echo "<script>alert('Your account  successfully updated!!!')</script>";
echo "<script>window.open('my_account.php','_self')</script>";


}
}

?>			