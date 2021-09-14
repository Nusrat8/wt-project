<?php include 'mainheader.php'; ?>
<?php include '../controllers/UserController.php';
$backColor="offwhite";$fontColor="red";$imageWidth="30px";$imageHeight="30px";?>
<img src="blood.jpg" width=”10px” height=”10px” align="right"/>
<img src="blood.jpg" width=”10px” height=”10px” align="left"/>
 <html>
    <head>
	<link rel="stylesheet" href="styles/mystyle.css">
	</head>
	
	<body>
	<fieldset  center >
	    <div align="center">
		    <h1><center><span style="background-color:<?php echo $backColor ; ?>;color:<?php echo $fontColor ; ?>">Login</h1></center></span>
			<h5><?php echo $err_db; ?></h5>
			<form action="" method="post">
			    <div>
				    <h4><span style="background-color:<?php echo $backColor ; ?>;color:<?php echo $fontColor ; ?>">User Name</h4></span>
					<input type = "text" name = "uname" value="<?php echo $uname; ?>"/>
					<span> <?php echo $err_uname; ?> </span>
				</div>
				<div>
				   <h4><span style="background-color:<?php echo $backColor ; ?>;color:<?php echo $fontColor ; ?>">Password</h4></span>
					<input type = "password"  name = "pass"/>
					<span> <?php echo $err_pass; ?> </span>
				</div>
				<br> <br>
				<div>
					<input type = "submit" name="login" class="btn-link" value = "Login"/>
				</div>
				<br> <br>
				<div>
					<a href = "signup.php" >Not Registered Yet? Sign Up</a>
				</div>
			</form>
		</div>
		</fieldset>
	</body>
	 <?php include 'footer.php'; ?>
</html>