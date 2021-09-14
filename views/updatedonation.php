<?php include 'mainheader.php'; ?>
<?php include '../controllers/DBloodController.php'; ?>

<html>
<body>
<head>
<link rel="stylesheet" href="styles/mystyle.css">
</head>
<div align="center">
<form action="" method="post">
<fieldset style="width:600px">
	<table align="center">
	    <div align="center">
		    <h3>Update Donation Status</h3>
	</div>
	<tr>
	 <td><b>ID:</b></td>
	 <td><input type="text" name="id" value="<?php echo $id;?>" ></td>
<td><span><?php echo $err_id;?></span></td>

</tr> 		  
<tr>
	 <td><b>User Name:</b></td>
	 <td><input type="text" name="uname" value="<?php echo $uname;?>" ></td>
<td><span><?php echo $err_uname;?></span></td>

</tr> 
<tr>
	 <td><b>Blood group: </b></td>
	<td><input type = "text"  name = "bloodgroup" value="<?php echo $bloodgrp; ?>"/></td>
	    <td> <span> <?php echo $err_bloodgrp; ?> </span></td>
</tr>
<tr>
	<td><b>Number of units:  </b></td>
		<td>
			<select name="unit">
				<option selected disabled>--Select--</option>
				<?php
				foreach($units as $u){
				if($unit == $u)
					echo "<option selected>$u</option>";
				else
				echo "<option>$u</option>";
						}
					?>
				</select> 
				</td>
				<td><span><?php echo $err_unit;?></span></td>
	</tr>	

<tr>
	 <td><b>Availability: </b></td>
	<td><input type = "text"  name = "availability" value="<?php echo $availability; ?>"/></td>
	    <td><span><?php echo $err_availability; ?></span></td>
</tr>
<tr>
   <td><b>Contact Number </b></td>
	<td><input type = "text"  name = "number" value="<?php echo $number; ?>"/></td>
	  <td> <span> <?php echo $err_number; ?> </span></td>
</tr>
	


<tr>
<td align="center" colspan="2"><input type="submit" name="update" class="btn-link"value="update"></td>
</tr>

</table>


</fieldset>
</form>
</div>
<div align="left">
				<a href="home.php" class="btn-link">Home</a> 
					</div>
				<div align="right">
				<a href="dashboard.php" class="btn-link">Dash Board</a> 
				</div>

</body>
</html>