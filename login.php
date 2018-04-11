         
				  <div id="post_box">
					 <form action=""  method="post" enctype="multipart/form-data" >
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