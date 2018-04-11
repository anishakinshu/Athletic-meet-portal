<br>
<h2 style ="text-align:center;">Do you really want to delete your account?</h2>
<form action="" method="post">
<br>
<input type="submit" name="yes" value="Yes, I want"/>
<input type="submit" name="no" value="No, I don't"/>
</form>

<?php
include("includes/db.php");

$user=$_SESSION['email'];

if(isset($_POST['yes']))
{
	$delete_customer = "delete from user where email='$user'";
	
     session_destroy();
	$run_customer = mysqli_query($connect,$delete_customer);
	
	echo "<script>alert('Your account has been deleted.')</script>";

   echo "<script>window.open('../index.php','_self')</script>";
}

if(isset($_POST['no']))
{
	echo "<script>window.open('my_account.php','_self')</script>";
}
?>