<?php
include '../models/db_config.php';
$rate="";
	$err_rate="";
	$err_db="";
	

$hasError=false;

$rates= array("*","**","***","****","*****");
if(isset($_POST["select"])){
	if(empty($_POST["rate"])){
			$err_rate="rate required";
			$hasError = true;
		}
       else{
			$rate=$_POST["rate"];
		}	
	if(!$hasError){
			
			$rs = insertRate($rate);
			if($rs === true){
				header("Location: dashboard.php");
			}
			$err_db = $rs;
		}	
	}	
	function insertRate($rate){
		$query = "INSERT INTO `rate`(`rate` ) VALUES ('$rate')";
		return execute($query);
	}
	?>