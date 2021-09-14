<?php include 'mainheader.php'; ?>
<?php include '../controllers/DBloodController.php'; ?>

<html>
<body>
<head>
<link rel="stylesheet" href="styles/mystyle.css">
<script>
			var hasError=false;
			function get(id){
				return document.getElementById(id);
			}

			function validate(){
				
				refresh();
				if(get("uname").value == ""){
					hasError = true;
					get("err_uname").innerHTML = "*uname Req";
				}
				if(get("name").value == ""){
					hasError = true;
					get("err_name").innerHTML = "*Name Req";
				}
	
				if(get("bloodgrp").value == ""){
					hasError = true;
					get("err_bloodgrp").innerHTML = "*Group Req";
				}
				
				if(get("unit").selectedIndex==0){
					hasError = true;
					get("err_unit").innerHTML = "*Unit Req";
				}
				
				if(get("availability").value == ""){
					hasError = true;
					get("err_availability").innerHTML = "* Req";
				}
				if(get("number").value == ""){
					hasError = true;
					get("err_number").innerHTML = "* Req";
				}
				
				return !hasError;
			}
				function refresh(){
				hasError=false;
				get("err_uname").innerHTML="";
				get("err_name").innerHTML="";
               get("err_bloodgrp").innerHTML="";
				get("err_unit").innerHTML="";
				get("err_availability").innerHTML="";
				get("err_number").innerHTML="";
				}
				
				
</script>
</head>
<div align="center">
<form action="" onsubmit="return validate()" method="post">

<fieldset style="width:600px">
	<table align="center">
	    <div align="center">
		    <h3>Donate Blood </h3>
			<h5><?hp echo $err_db; ?></h5>
		</div>	
	 <tr>
	 <td><b>User Name:</b></td>
	 <td><input type="text" id="uname" name="uname" value="<?php echo $uname;?>" </td>
<td><span id="err_uname"><?php echo $err_uname;?></span></td>

</tr> 
	 <tr>
	 <td><b>Name:</b></td>
	<td><input type="text" id="name" name="name" value="<?php echo $name;?>"</td>
<td><span id = "err_name"><?php echo $err_name;?></span></td>
</tr> 
		<tr>
		 <td><b>Blood group: </b></td>
		<td><input type = "text" id="bloodgrp" name = "bloodgrp" value="<?php echo $bloodgrp; ?>"/></td>
	     <td> <span id="err_bloodgrp"> <?php echo $err_bloodgrp; ?> </span></td>
		</tr>

<tr>
	<td><b>Number of units:  </b></td>
		<td>
			<select id="unit" name="unit">
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
				<td><span id="err_unit"><?php echo $err_unit;?></span></td>
	</tr>	
	
<tr>
	 <td><b>Availability: </b></td>
		<td><input type = "text" id="availability" name = "availability" value="<?php echo $availability; ?>"/></td>
				<td> <span id="err_availability"> <?php echo $err_availability; ?> </span></td>
</tr>	
<tr>
	 <td><b>Contact Number: </b></td>
		<td><input type = "text" id="number" name = "number" value="<?php echo $number; ?>"/></td>
				<td> <span id="err_number"> <?php echo $err_number; ?> </span></td>
</tr>	
	<tr>
<td align="center" colspan="2"><input type="submit" name="donate" class="btn-link" value="Submit"></td>
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
