
<table width="850" align="center" bgcolor="pink">
<br>
   <tr align="center">
        <td colspan='6'><h2 style="text-align:center;">Your Registered Events</h2></td>
   
   </tr>
   
   <?php
       include("includes/db.php");
	     $user = $_SESSION['email'];
					 $get_user = "select * from user where email='$user'";
					 $run_user = mysqli_query($connect,$get_user);
					 
                      $row_user=mysqli_fetch_array($run_user);
					 
					 $id = $row_user['user_id'];
	   $get_event = "select event_name from registered_participant where user_id='$id'";
	   $run_event= mysqli_query($connect,$get_event);
	   ?>
	   <tr align="center">
	   <td colspan='6' ><h2  style="text-align:center;">Your User id for Annual Athletic Meet :<?php echo $id; ?></h2>
	   <h3 style="color:blue">Provide this user id at the time of event.</h3>
	   </td>
	   </tr>
   <tr align="center" bgcolor="skyblue">
   <th>S.No.</th>
   <th>Event Name</th>
   			
   </tr>
   
	  <?php
	    
	   $i=0;
	   while($row_event = mysqli_fetch_array($run_event)){
		   $event = $row_event['event_name'];
		    $i++;
		  	   
   ?>
   <tr align="center">
        <td><?php echo $i?></td>
		 <td><?php echo $event;?></td>
		 
		  
   </tr>
   
	   <?php } 
	   
	   ?>
	   
</table> 