<?php //include("include/config.php");?>
<?php include("include/header.php");?>
		<a href="index.php"><li>  Home </li> </a>
			  <a href="donor.php"><li>  Donors  </li></a>
			  <a href="apply.php"><li> Apply </li> </a>
			  <a href="gallery.php"><li class='active'> Gallery  </li> </a>
			  <a href="rules.php"><li> Rules  </li> </a>
			  <a href="login.php"><li>  Login   </li></a>
			</ul>
		  
		</div>
		   <div id="body">	
	    <div style="height:500px;width:800px;border:1px solid black;overflow-y:scroll;margin:0 auto;margin-top:50px;padding:10px;">

		    
			<?php 	
					$sql = "select * from gallery";
					$result=mysql_query($sql);	
					while($arr= mysql_fetch_array($result))
					{
						
						echo '<img src="images/galary/'.$arr['photo'].'" height="200" width="350" style="margin-top:20px;margin-bottom:20px;">';
					
						
                    }

	    ?>
			
		</div>
		
		
			 
<?php include("include/footer.php");?>