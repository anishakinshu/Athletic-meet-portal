<html
>
<body>

<?php include 'database.php'; ?>
<?php


$result = mysqli_query($connect,"SELECT * FROM news");


while($row = mysqli_fetch_array($result))
{


?>

<p>
<?php echo $row['post_title'];
?>
</p>
<p>
 by 
 <?php echo $row['admin_email'];
 ?>
 </p>   
   
<p><?php echo $row['content']; ?></p>
<?php } ?>


</body>

</html>
