 <table width="795" align="center" bgcolor="pink">

   <tr align="center">
        <td colspan='6'><h2 style="text-align:center;color:blue">Result for all events</h2></td>
		
		 
   </tr>
 <?php
     
       include("includes/db.php");
	   $get_event = "select * from event_result";
	   $run_event = mysqli_query($connect,$get_event);
	   
	   $i=0;
	   while($row_event = mysqli_fetch_array($run_event)){
		   $event = $row_event['event_name'];
		   $id1_b = $row_event['winner1_id_b'];
		   $id2_b = $row_event['winner2_id_b'];
		   $id3_b = $row_event['winner3_id_b'];
		   $id1_g = $row_event['winner1_id_g'];
		   $id2_g = $row_event['winner2_id_g'];
		   $id3_g = $row_event['winner3_id_g'];
		 ?>
		    <tr align="center">
        <td colspan='6'><h2 style="text-align:center;"><?php echo $event;?> Boys Event</h2></td>
   
            </tr>
		   <tr align="center" bgcolor="skyblue">
   <th>S.No.</th>
   <th>Name</th>
   <th>Reg.No.</th>
        <th>Email</th>
		<th>Institute</th>
		
	   </tr>
		   
		   <?php
		   $j=1;
		      list($name,$reg_no,$email,$institute) = get_result($id1_b,$j);
			  $j++;
		   ?>
		   <tr align='center'>
                            <td align='center'>1</td>
		                   <td align='center'> <?php echo $name;?></td>
		                  <td align='center'><?php echo $reg_no; ?></td>
		                   <td align='center'><?php echo $email; ?></td>
		                  <td align='center'><?php echo $institute; ?></td>
		                 
		  
            </tr>
			
			<?php
		       list($name,$reg_no,$email,$institute) = get_result($id2_b,$j);
			  $j++;
		   ?>
		   <tr align='center'>
                            <td align='center'>2</td>
		                   <td align='center'> <?php echo $name;?></td>
		                  <td align='center'><?php echo $reg_no; ?></td>
		                   <td align='center'><?php echo $email; ?></td>
		                  <td align='center'><?php echo $institute; ?></td>
		                 
		  
            </tr>
			
			<?php
		       list($name,$reg_no,$email,$institute) = get_result($id3_b,$j);
			  $j++;
		   ?>
		   <tr align='center'>
                            <td align='center'>3</td>
		                   <td align='center'> <?php echo $name;?></td>
		                  <td align='center'><?php echo $reg_no; ?></td>
		                   <td align='center'><?php echo $email; ?></td>
		                  <td align='center'><?php echo $institute; ?></td>
		                 
		  
            </tr>
			
      <tr align="center">
        <td colspan='6'><h2 style="text-align:center;"><?php echo $event;?> Girls Event</h2></td>
   
            </tr>
		   <tr align="center" bgcolor="skyblue">
   <th>S.No.</th>
   <th>Name</th>
   <th>Reg.No.</th>
        <th>Email</th>
		<th>Institute</th>
		
			
   </tr>
		   
		    <?php
			$j=1;
		       list($name,$reg_no,$email,$institute) = get_result($id1_g,$j);
			  $j++;
		   ?>
		   <tr align='center'>
                            <td align='center'>1</td>
		                   <td align='center'> <?php echo $name;?></td>
		                  <td align='center'><?php echo $reg_no; ?></td>
		                   <td align='center'><?php echo $email; ?></td>
		                  <td align='center'><?php echo $institute; ?></td>
		                 
		  
            </tr>
			
			<?php
		       list($name,$reg_no,$email,$institute) = get_result($id2_g,$j);
			  $j++;
		   ?>
		   <tr align='center'>
                            <td align='center'>2</td>
		                   <td align='center'> <?php echo $name;?></td>
		                  <td align='center'><?php echo $reg_no; ?></td>
		                   <td align='center'><?php echo $email; ?></td>
		                  <td align='center'><?php echo $institute; ?></td>
		                 
		  
            </tr>
			
			<?php
		       list($name,$reg_no,$email,$institute) = get_result($id3_g,$j);
			  $j++;
			  ?>
		   <tr align='center'>
                            <td align='center'>3</td>
		                   <td align='center'> <?php echo $name;?></td>
		                  <td align='center'><?php echo $reg_no; ?></td>
		                   <td align='center'><?php echo $email; ?></td>
		                  <td align='center'><?php echo $institute; ?></td>
		                 
		  
            </tr>
			
			
					
					<?php 
				 
	   }
   ?>
   </table>
