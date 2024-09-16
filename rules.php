<?php //include("include/config.php");?>
<?php include("include/header.php");?>
	 <a href="index.php"><li>  Home </li> </a>
			  <a href="donor.php"><li>  Donors  </li></a>
			  <a href="apply.php"><li> Apply </li> </a>
			  <a href="gallery.php"><li> Gallery  </li> </a>
			  <a href="rules.php"><li class='active'> Rules  </li> </a>
			  <a href="login.php"><li>  Login   </li></a>
			</ul>
		  
		</div>
	    <div id="body">	
	<?php 	
					$sql = "select * from rules";
					$result=mysql_query($sql);	
					while($arr= mysql_fetch_array($result))
					{
						//echo $arr['rules_and_regulation'];
						echo '<p style="text-align:justify;margin-bottom:20px; padding: 0px 10px 0px 10px;font-size:18px;">'.$arr['rules_and_regulation'].'</p>';
                    }

	?>
			 
<?php include("include/footer.php");?>
		