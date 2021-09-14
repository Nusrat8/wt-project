<?php
include '../models/db_config.php';
 $uname="";
$err_uname="";
$msg="";
$err_msg="";
$err_db="";
	$hasError = false;
	
	
    if(isset($_POST["send"])){
		
		if(empty($_POST["uname"])){
		    $err_uname = "User Name Requird";
			$hasError = true;
	    }
		else{
		    $uname = $_POST["uname"];
	    }
		if(empty($_POST["msg"])){
		    $err_msg = " Requird";
			$hasError = true;
	    }
		else{
		    $msg = $_POST["msg"];
	    }
		if(!$hasError){
			
			$rs = insertMessage($uname,$msg);
			if($rs === true){
				header("Location: dashboard.php");
			}
			$err_db = $rs;
		}	
	}
	
	function insertMessage($uname,$msg){
		$query = "INSERT INTO `message`(`username`,`msg` ) VALUES ('$uname','$msg')";
		return execute($query);
	}
	
	?>
	
	