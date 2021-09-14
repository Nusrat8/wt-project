<?php
   include '../models/db_config.php';
   session_start();
    $name="";
    $err_name="";
	$id= "";
	$err_id="";
	$age="";
	$err_age="";
	$gender="";
	$err_gender="";
	$bloodgrp="";
	$err_bloodgrp="";
	$country="";
	$err_country="";
	$city="";
	$err_city="";
	$address="";
	$err_address="";
    $uname="";
    $err_uname="";
	$email="";
    $err_email="";
    $pass="";
    $err_pass="";
	$err_db="";
	$hasError = false;

    if(isset($_POST["signUp"])){
		if(empty($_POST["name"])){
		    $err_name = "Name Requird";
			$hasError = true;
	    }
		else{
		    $name = $_POST["name"];
	    }
		if(empty($_POST["age"])){
		    $err_age = "Age Requird";
			$hasError = true;
	    }
		else{
		    $age = $_POST["age"];
	    }
		if(!isset($_POST["gender"])){
			$err_gender="Gender Required";
			$hasError = true;
		}
		else{
			$gender = $_POST["gender"];
		}
		if(empty($_POST["bloodgroup"])){
		    $err_bloodgrp = "Blood group Requird";
			$hasError = true;
	    }
		else{
		    $bloodgrp = $_POST["bloodgroup"];
	    }
		
		
		if(empty($_POST["country"])){
		    $err_country = "Country name Requird";
			$hasError = true;
	    }
		else{
		    $country = $_POST["country"];
	    }
		
		if(empty($_POST["city"])){
		    $err_city = "City Name Requird";
			$hasError = true;
	    }
		else{
		    $city = $_POST["city"];
	    }
		
		if(empty($_POST["address"])){
		    $err_address = "address Requird";
			$hasError = true;
	    }
		else{
		    $address = $_POST["address"];
	    }
		
		if(empty($_POST["uname"])){
		    $err_uname = "Username Requird";
			$hasError = true;
	    }
		else{
		    $uname = $_POST["uname"];
	    }
		if(empty($_POST["email"])){
		    $err_email = "Email Requird";
			$hasError = true;
	    }
		else{
		    $email = $_POST["email"];
	    }
		if(empty($_POST["pass"])){
		    $err_pass = "Password Requird";
			$hasError = true;
	    }
		else{
		    $pass = $_POST["pass"];
	    }
		if(!$hasError){
			$rs = insertUser($name,$age,$gender,$bloodgrp,$country,$city,$address,$uname,$email,$pass);
			if($rs === true){
				header("Location: login.php");
			}
			$err_db = $rs;
		}
		
		
	 }
	
	else if(isset($_POST["login"])){
		
		if(empty($_POST["uname"])){
		    $err_uname = "Username Requird";
			$hasError = true;
	    }
		else{
		    $uname = $_POST["uname"];
	    }
		if(empty($_POST["pass"])){
		    $err_pass = "Password Requird";
			$hasError = true;
	    }
		else{
		    $pass = $_POST["pass"];
	    }
		if(!$hasError){
			if(authenticateUser($uname,$pass)){
				$_SESSION["loggeduser"] = $uname;
				header("Location: dashboard.php");
			}
			$err_db = "User Invalid";
		}
	}
	else if(isset($_POST["Update"])){
		if(empty($_POST["name"])){
		    $err_name = "Name Requird";
			$hasError = true;
	    }
		else{
		    $name = $_POST["name"];
	    }
		if(empty($_POST["id"])){
		    $err_id = "id Requird";
			$hasError = true;
	    }
		else{
		    $id = $_POST["id"];
	    }
		if(empty($_POST["age"])){
		    $err_age = "Age Requird";
			$hasError = true;
	    }
		else{
		    $age = $_POST["age"];
	    }
		if(!isset($_POST["gender"])){
			$err_gender="Gender Required";
			$hasError = true;
		}
		else{
			$gender = $_POST["gender"];
		}
		if(empty($_POST["bloodgroup"])){
		    $err_bloodgrp = "Blood group Requird";
			$hasError = true;
	    }
		else{
		    $bloodgrp = $_POST["bloodgroup"];
	    }
		
		
		if(empty($_POST["country"])){
		    $err_country = "Country name Requird";
			$hasError = true;
	    }
		else{
		    $country = $_POST["country"];
	    }
		
		if(empty($_POST["city"])){
		    $err_city = "City Name Requird";
			$hasError = true;
	    }
		else{
		    $city = $_POST["city"];
	    }
		
		if(empty($_POST["address"])){
		    $err_address = "address Requird";
			$hasError = true;
	    }
		else{
		    $address = $_POST["address"];
	    }
		
		if(empty($_POST["uname"])){
		    $err_uname = "Username Requird";
			$hasError = true;
	    }
		else{
		    $uname = $_POST["uname"];
	    }
		if(empty($_POST["email"])){
		    $err_email = "Email Requird";
			$hasError = true;
	    }
		else{
		    $email = $_POST["email"];
	    }
		if(empty($_POST["pass"])){
		    $err_pass = "Password Requird";
			$hasError = true;
	    }
		else{
		    $pass = $_POST["pass"];
	    }
		
		
		
	if(!$hasError){
			$rs = updateUser($name,$age,$gender,$bloodgrp,$country,$city,$address,$uname,$email,$pass,$id);
			if($rs === true){
				header("Location: login.php");
				
			}
			$err_db = $rs;
		}
	}

	function insertUser($name,$age,$gender,$bloodgrp,$country,$city,$address,$uname,$email,$pass){
		//$query = "insert into users values (NULL,'$name','$age','$gender','$bloodgroup','$country','$city','$address','$uname','$email','$pass')";
		$query = "INSERT INTO `users`(`name`, `age`, `gender`, `bloodgrp`, `country`, `city`, `address`, `username`, `email`, `password`) VALUES ('$name','$age','$gender','$bloodgrp','$country','$city','$address','$uname','$email','$pass')";
		return execute($query);
	}
	function updateUser($name,$age,$gender,$bloodgrp,$country,$city,$address,$uname,$email,$pass,$id){
		//$query = "update users set name= '$name', age='$age', gender='$gender', bloodgrp='$bloodgrp', country='$country', city='$city', address='$address',username='$uname', email='$email' where user_id= '$id')";
		$query = "UPDATE `users` SET `name`='$name',`age`='$age',`gender`='$gender',`bloodgrp`='$bloodgrp',`country`='$country',`city`='$city',`address`='$address',`username`='$uname',`email`='$email',`password`='$pass' where `id`=$id";
		return execute($query);
	}

	function authenticateUser($uname,$pass){
		$query = "select * from users where username='$uname' and password='$pass'";
		$rs = get($query);
		if(count($rs)>0){
			return true;
		}
		return false;
	}
	function checkUsername($uname){
		$query = "select * from users where username='$uname'";
		$rs = get($query);
		if(count($rs)> 0){
			return true;
		}
		else return false;
	}
	

	
	
?>