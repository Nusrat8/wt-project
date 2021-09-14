<?php include '../controllers/UserController.php'; ?>
<?php
	
	$uname = $_GET["uname"];
	$user = checkUsername($uname);
	if($user){
		echo "invalid";
	}
	else echo "valid";
?>