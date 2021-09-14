<?php include 'mainheader.php'; 

$imageWidth="10px";$imageHeight="10px";


?>
<?php
session_start();
?>
<img src="blood.jpg" width=”10px” height=”10px” align="center"/>
<img src="blood.jpg" width=”10px” height=”10px” align="right"/>

<html>

    <head>
		<link rel="stylesheet" href="styles/mystyle.css">
	</head>
	<body>
	    <div align="center">
		    <h3>Welcome <?php echo $_SESSION["loggeduser"];?> </h3>
			 <div>
			 <br><br>
		    <a href="home.php" class="btn-link"> Home</a>
			<a href="updateprofile.php" class="btn-link"> Edit Profile</a>
			<a href="requestblood.php" class="btn-link"> Request for Blood</a>
			<a href="viewrequest.php" class="btn-link">View Request</a>
			<a href="donateblood.php" class="btn-link">Donate Blood</a>
			<a href="updatedonation.php" class="btn-link"> Update Donation Status</a>
			<a href="donorlist.php" class="btn-link">Available Donor List</a> 
			<a href="srcdonor.php" class="btn-link">Search Donor</a>
			<a href="rate.php" class="btn-link">Rate Us</a>
			
			
			
			<a href="logout.php" class="btn-link">Log Out</a>
			
		</div>
		
	</body>
	 <?php include 'footer.php'; ?>
</html>