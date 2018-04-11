 <table width="850" align="center" bgcolor="pink">
<br>
   <tr align="center">
        <td colspan='6'><h2 style="text-align:center;">Contact For Any Information!!!</h2></td>
   
   </tr>
   <tr>
   <td><pre>   </pre></td>
   </tr>
   <tr align="center" bgcolor="skyblue">
   <th>S.No.</th>
   <th>Admin Name</th>
   <th>Email</th>
   <th>Contact</th>
   			
   </tr>
   <?php
       include("includes/db.php");
	     
					 $get_admin = "select * from admin";
					 $run_admin = mysqli_query($connect,$get_admin);
					 $i=0;
                     while( $row_admin=mysqli_fetch_array($run_admin)){
					 
					 $id = $row_admin['admin_id'];
					 $name = $row_admin['admin_name'];
					 $email = $row_admin['admin_email'];
					 $contact = $row_admin['contact'];
	              $i++;
   ?>
   <tr align="center" rowspan='2'>
        <td><?php echo $i?></td>
		 <td><?php echo $name;?></td>
		 <td><?php echo $email;?></td>
		 <td><?php echo $contact;?></td>
		 
		  
   </tr>
   
	   <?php } ?>
</table> 