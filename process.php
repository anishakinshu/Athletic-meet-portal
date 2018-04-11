<?php include 'database.php'; ?>
<?php
$first_name=$_POST['post_title'];
$last_name=$_POST['content'];
$email=$_POST['admin_email'];
mysqli_query($connect,"INSERT INTO employees1 (first_name,last_name,email) VALUES ('$first_name','$last_name','$email')");
	if(mysqli_affected_rows($connect) > 0){
	echo "<p>Employee Added</p>";
	echo "<a href='form.html'>Go Back</a>";
} else {
	echo "Employee NOT Added<br />";
	echo mysqli_error ($connect);
}