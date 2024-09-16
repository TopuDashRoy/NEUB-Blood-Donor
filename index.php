<?php //include("include/config.php");?>
<?php include("include/header.php");?>
<a href="index.php"><li class='active'>  Home </li> </a>
			  <a href="donor.php"><li>  Donors  </li></a>
			  <a href="apply.php"><li> Apply </li> </a>
			  <a href="gallery.php"><li> Gallery  </li> </a>
			  <a href="rules.php"><li> Rules  </li> </a>
			  <a href="login.php"><li>  Login   </li></a>
			</ul>
		  
		</div>
	    <div id="body">	
		<?php 	
					$sql = "select * from home";
					$result=mysql_query($sql);	
					while($arr= mysql_fetch_array($result))
					{
						echo '<img src="images/news/'.$arr['img'].'" height="280" width="900" style="margin-top:20px;margin-bottom:20px;">';
						echo '</br>';
						echo '<p style="text-align:justify;margin-bottom:20px;padding: 0px 10px 0px 10px;font-size:18px;">'.$arr['message'].'</p>';
						//echo $arr['img'];
                    }

	    ?>
			 
<?php 
	include("include/footer.php"); 
?>
		