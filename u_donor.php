<?php //include("include/config.php");?>
<?php include("include/u_header.php");?> 

			  <a href="u_index.php"><li>  Home </li> </a>
			  <a href="u_donor.php"><li class='active'>  Donors  </li></a>
			  <a href="u_profile.php"><li> Edit Profile </li> </a>
			  <a href="u_gallery.php"><li> Gallery  </li> </a>
			  <a href="u_rules.php"><li> Rules  </li> </a>
			  <a href="index.php"><li>  LogOut   </li></a>
			</ul>
		  
		</div>
		
		
	    <div id="body">
	
	<div style="height:500px;width:700px;border:1px solid black;overflow-y:scroll;margin:0 auto;margin-top:50px;padding:10px;">
	
	<?php 
		$sql="select * from user order by full_name asc ";
		$res=mysql_query($sql);
	?>	
		<table width="690px" style="border: 2px solid purple;font-size:12px;" align="center" >
		<tr style="background:purple;color:white;height:30px;text-align:center;">
		<td><b>SL.</b></td>
		<td><b>Name</b></td>
		<td><b>Phone</b></td>
		<td><b>Blood Group</b></td>
		<td><b>Status</b></td>
		</tr>
		
		
		<?php
		$c=1;
		while($arr=mysql_fetch_array($res))
		{
			//echo $arr['full_name'];
			//echo '</br>';
			?>
			<tr style="text-align:center;height:25px;">
			
			  <td><?php echo $c;?></td>
		
		      <td><?php echo $arr['full_name'];?></td>
			  
			   <td><?php echo $arr['phone'];?></td>
			    <td><?php echo $arr['blood_group'];?></td>
			   <td><?php echo $arr['status'];?></td>
			  
			</tr>
	
	
	
	
	<?php
		$c++;}
		
	?>
	
	
	</table>
	</div>
			 
<?php include("include/footer.php");?>