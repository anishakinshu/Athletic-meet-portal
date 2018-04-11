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
					$gender = $row_user['gender'];
					
 ?>
 <form action=""  method="post" enctype="multipart/form-data" >
                <table align="center" width="800" border="2">
 
                    <tr align="center"> 
					   <td colspan="8"><h2>Register for an event</h2></td>
				     </tr>
					  <tr>
                                 <td  align="right" ><b>Name :  </b></td>
                                <td ><input type="text" id="name" name="user_name" disabled value="<?php echo $name ;?>" size="50" placeholder="Please enter your full name" required/></td>
                     </tr>
					  <tr>
                                 <td  align="right" ><b>Registration no. :  </b></td>
                                <td ><input type="text" id="reg_no" name="reg_no" disabled value="<?php echo $reg_no ;?>" size="50" placeholder="Please enter your registration no." required/></td>
                     </tr>
					  <tr>
                                 <td  align="right" ><b>Institute :  </b></td>
                                <td ><input type="text" id="institute" name="institute" disabled value="<?php echo $institute ;?>" size="50" placeholder="Please enter your institution" required/></td>
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
                                 <td  align="right" ><b>Event :  </b></td>
                                <!--<td style="border:gray 1px solid"><input type="text" id="branch" name="branch" size="50" required/></td>-->
								<td>
								    <select name="event" >
								        <option>Select Event</option>
										<option>100m Race </option>
										<option >200m Race</option>
										<option>400m Race</option>
										<option>800m Race</option>
										<option>1500m Race</option>
										<option>Discus Throw</option>
										<option>Hammer Throw</option>
										<option>Javelin Throw</option>
										<option>Shot put Throw</option>
										<option>Long Jump</option>
										<option>High Jump</option>
										
								
									</select>
								</td>
                     </tr>
					 					 
                                                
                            <tr align="center">
                               
                                <td colspan="8"><input id="submit" type="submit" name = "register" value="REGISTER">
                                 </td>

                             </tr>
 
                        </table>
 
                </form>
						
<?php

if(isset($_POST['register']))
{
//$ip = getIP();
$c_id=$id;
$event =  $_POST['event'];
$gend=$gender;

   $reg_event = "select count(user_id) as get_no_event from registered_participant where user_id='$c_id'";
   $run_reg_event = mysqli_query($connect,$reg_event);
$get_row = mysqli_fetch_assoc($run_reg_event);
$get_no_of_event = $get_row['get_no_event'];
    if($get_no_of_event<4){
	  
	     $get_event = "select count(user_id) as no_event from registered_participant where user_id='$c_id' and event_name='$event'";
         $run_get_event = mysqli_query($connect,$get_event);
        $row = mysqli_fetch_assoc($run_get_event);
        $no_of_event = $row['no_event'];
        if($no_of_event >0)
       {
           echo "<script>alert('Already registered for this event.Please select another event!!!')</script>";
        
        }
		else{
           $reg_part="insert into registered_participant(`user_id`,`event_name`,`gender`) values('$c_id','$event','$gend')";
           $run_reg_part = mysqli_query($connect,$reg_part);

         if($run_reg_part)
        {

            echo "<script>alert('Registered for event ---> $event!!!')</script>";
            echo "<script>window.open('index.php','_self')</script>";
        }
		}
	  
    }
   else
  {
	    echo "<script>alert('You have already registered for 4 events.So can not register!!!')</script>";
		echo "<script>window.open('index.php','_self')</script>";
   }

 
}

?>			