<?php
include '../models/db_config.php';
    $id="";
	$err_id="";
    $uname="";
	$err_uname="";
	$name="";
	$err_name="";
    $bloodgrp="";
	$err_bloodgrp="";
	$unit="";
	$err_unit="";
	$availability="";
	$err_availability="";
	$number="";
	$err_number="";
	$err_db="";
	
	$hasError = false;
	

$units= array("1 units","2 units","3 units","4 units","5 units");

	
    if(isset($_POST["donate"])){
		
		if(empty($_POST["uname"])){
		    $err_uname = "User Name Requird";
			$hasError = true;
	    }
		else{
		    $uname = $_POST["uname"];
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

		if(empty($_POST["unit"])){
			$err_unit="Number of units required";
			$hasError = true;
		}
       else{
			$unit=$_POST["unit"];
		}
		if(empty($_POST["availability"])){
			$err_availability=" required";
			$hasError = true;
		}
       else{
			$availability=$_POST["availability"];
		}
		if(empty($_POST["number"])){
			$err_number=" required";
			$hasError = true;
		}
       else{
			$number=$_POST["number"];
		}
			
		if(!$hasError){
			
			$rs = insertDBlood($uname,$name,$bloodgrp,$unit,$availability,$number);
			if($rs === true){
				header("Location: donorlist.php");
			}
			$err_db = $rs;
		}	
	}
	else if(isset($_POST["update"])){
		
		if(empty($_POST["id"])){
		    $err_id = "id Requird";
			$hasError = true;
	    }
		else{
		    $id = $_POST["id"];
	    }
		
		if(empty($_POST["uname"])){
		    $err_uname = "User Name Requird";
			$hasError = true;
	    }
		else{
		    $uname = $_POST["uname"];
	    }
		if(empty($_POST["bloodgroup"])){
			$err_bloodgrp="Blood group Required";
			$hasError = true;
		}
       else{
			$bloodgrp=$_POST["bloodgroup"];
		}
		if(empty($_POST["unit"])){
			$err_unit="Number of units required";
			$hasError = true;
		}
       else{
			$unit=$_POST["unit"];
		}
		if(empty($_POST["availability"])){
			$err_availability=" required";
			$hasError = true;
		}
       else{
			$availability=$_POST["availability"];
		}
		if(empty($_POST["number"])){
			$err_number=" required";
			$hasError = true;
		}
       else{
			$number=$_POST["number"];
		}
		
		
		if(!$hasError){
			$rs = updateDBlood($uname,$bloodgrp,$unit,$availability,$number,$id);
			if($rs === true){
				header("Location: donorlist.php");
				
			}
			$err_db = $rs;
		}
	}
	
	

	function insertDBlood($uname,$name,$bloodgrp,$unit,$availability,$number){
		$query = "INSERT INTO `dblood`(`username`,`name`, `bloodgrp`,`units` ,`availability`,`number` ) VALUES ('$uname','$name','$bloodgrp','$unit','$availability','$number')";
		return execute($query);
	}
	function updateDBlood($uname,$bloodgrp,$units,$availability,$number,$id){
		//$query = "update users set name= '$name', age='$age', gender='$gender', bloodgrp='$bloodgrp', country='$country', city='$city', address='$address',username='$uname', email='$email' where user_id= '$id')";
		$query = "UPDATE `dblood` SET `username`='$uname',`bloodgrp`='$bloodgrp',`units`='$unit',`availability`='$availability',`number`='$number' where `id`=$id";
		return execute($query);
	}
	
	
	function getAllDbloods(){
		$query = "select * from dblood";
		$rs = get($query);
		if(count($rs)>0){
			return $rs;
		}
		return false;
	}
	function getDblood($id){
		$query = "select * from dblood where id=$id";
		$rs = get($query);
		if(count($rs)>0){
			return $rs[0];
		}
		return false;
	}
	
?>
	
