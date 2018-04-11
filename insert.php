<?php include 'database.php'; ?>
<?php



if(isset($_POST["Submit"]))

{

$post_title = $_POST['post_title'];

$content = $_POST['content'];

$email= $_POST['admin_email'];
//insert posts into database

mysqli_query($connect,"INSERT into news (`post_title`,`content`,`admin_email`) values('$post_title','$content','$email')");

if(mysqli_affected_rows($connect) > 0)
{
//echo "1 record added";


//echo "<a href='blog_view.php'> view blog</a>";
}
}
?>
