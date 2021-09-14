 <?php 
 include '../controllers/DBloodController.php'; 
	$key = $_GET["key"];
	$dblood = search($key);
	
	if(count($dblood) > 0){
			echo "<db>".$dblood["bloodgrp"]."</db>";
		}
	
?>