
<h2 style="text-align:center;">Change Your Passowrd</h2>

<form action="" method="post">
<table align="center" width="800">

<tr align="center" >
    <td  align="right" ><b>Enter Current Password :  </b></td>
    <td ><input type="password" name="curr_pass" size="50" required/></td>
 </tr>
<tr align="center">
    <td  align="right" ><b>Enter New Password :  </b></td>
    <td ><input type="password" name="new_pass" size="50" required/></td>
 </tr>
 
 <tr align="center">
    <td  align="right" ><b>Enter New Password Again :  </b></td>
    <td ><input type="password" name="new_pass_again" size="50" required/></td>
 </tr>
 <tr align="center">
                               
    <td colspan="6"><input id="submit" type="submit" name = "change_pass" value="Change Password">
    </td>
 </tr>
</table>
</form>

<?php

include("includes/db.php");

if(isset($_POST['change_pass'])){
	$user = $_SESSION['email'];
	$curr_pass = $_POST['curr_pass'];
	$new_pass = $_POST['new_pass'];
	$new_pass_again = $_POST['new_pass_again'];
	
	$sel_pass = "select * from user where password='$curr_pass' and email='$user'";
     
	 $run_pass = mysqli_query($connect,$sel_pass);
	 
	 $check_pass=mysqli_num_rows($run_pass);
	 
	 if($check_pass==0){
		echo "<script>alert('Your current password is wrong!')</script>";
       exit();
	   //echo "<script>window.open('login.php','_self')</script>";
	}
	
	if($new_pass!=$new_pass_again){
		echo "<script>alert('New password do not match!')</script>";
	 exit();
	}
	
	else{
		$update_pass ="update user set password='$new_pass' where email='$user'";
		$run_pass=mysqli_query($connect,$update_pass);
		
		
		if($run_pass){
			echo "<script>alert('Your password has updated successfully!!!')</script>";
		   echo "<script>window.open('my_account.php','_self')</script>";
		}
	}
	
}

?>