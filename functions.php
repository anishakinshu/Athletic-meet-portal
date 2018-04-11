<?php

$con = mysqli_connect('localhost','root','','atheleticmeet');
function getsBlogs(){
	 global $con;
	 
	 $get_blogs = "select * from news order by RAND() LIMIT 0,20";
	 $run_blogs = mysqli_query($con,$get_blogs);
	 
	 while($row_blogs = mysqli_fetch_array($run_blogs)){
		 
		 $post_title = $row_blogs['post_title'];
		 $content = $row_blogs['content'];
		 $email = $row_blogs['admin_email'];
		 
		 
		 echo "
		            <div class='post' id='single_post'>
					  
					     <table align='center' width='800' border='4' border-color='black' bgcolor='white'>
 
						    <tr>
							    <td><b style='color:red;'>$post_title</b>  by <b id='author'>$email </b></td>
							</tr>
							 <tr>
							    <td colspan='2'>$content</td>
							</tr>
						 </table>
					  
					</div>";

	 }
	
}

