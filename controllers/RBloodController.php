<?php
include '../models/db_config.php';
    $uname="";
	$err_uname="";
	$name="";
	$err_name="";
    $bloodgrp="";
	$err_bloodgrp="";
	$city="";
	$err_city="";
	$unit="";
	$err_unit="";
	$date="";
	$err_date="";
	$err_db="";
	

$hasError=false;

$units= array("1 units","2 units","3 units","4 units","5 units");

	if(isset($_POST["request"])){
		if(empty($_POST["uname"])){
			$err_uname="User name Required";
			$hasError = true;
		}
		
		else{
			$uname=$_POST["uname"];
		}

		if(empty($_POST["name"])){
			$err_name="Name Required";
         $hasError=true;
		}
		else{
			$name=$_POST["name"];
		}
		
		if(empty($_POST["bloodgrp"])){
			$err_bloodgrp="Blood group Required";
			$hasError = true;
		}
       else{
			$bloodgrp=$_POST["bloodgrp"];
		}
		if(empty($_POST["city"])){
			$err_city="City name Required";
			$hasError = true;
		}
       else{
			$city=$_POST["city"];
		}
		
		if(empty($_POST["unit"])){
			$err_unit="Number of units required";
			$hasError = true;
		}
       else{
			$unit=$_POST["unit"];
		}
			if(empty($_POST["date"])){
			$err_date="Date required";
			$hasError = true;
		}
       else{
			$date=$_POST["date"];
		}	
		if(!$hasError){
			
			$rs = insertRBlood($uname,$name,$bloodgrp,$city,$unit,$date);
			if($rs === true){
				header("Location: viewrequest.php");
			}
			$err_db = $rs;
		}	
	}
	
	function insertRBlood($uname,$name,$bloodgrp,$city,$unit,$date){
		$query = "INSERT INTO `rblood`(`username`,`name`, `bloodgrp`,`city`,`units` ,`date` ) VALUES ('$uname','$name','$bloodgrp','$city','$unit','$date')";
		return execute($query);
	}
	function getAllRbloods(){
		$query = "select * from rblood";
		$rs = get($query);
		if(count($rs)>0){
			return $rs;
		}
		return false;
	}
	function getRblood($id){
		$query = "select * from rblood where id=$id";
		$rs = get($query);
		if(count($rs)>0){
			return $rs[0];
		}
		return false;
	}
	
	
?>