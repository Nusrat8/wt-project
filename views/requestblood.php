<?php include 'mainheader.php'; ?>
<?php include '../controllers/RBloodController.php'; ?>

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
	
				if(get("bloodgroup").value == ""){
					hasError = true;
					get("err_bloodgrp").innerHTML = "*Group Req";
				}
				
				if(get("city").value == ""){
					hasError = true;
					get("err_city").innerHTML = "*City Req";
				}
				if(get("unit").selectedIndex==0){
					hasError = true;
					get("err_unit").innerHTML = "*Unit Req";
				}
				if(get("date").value == ""){
					hasError = true;
					get("err_date").innerHTML = "*Date Req";
				}
				
				
				return !hasError;
			}
				function refresh(){
				hasError=false;
				get("err_uname").innerHTML="";
				get("err_name").innerHTML="";
				get("err_bloodgrp").innerHTML="";
				get("err_city").innerHTML="";
				get("err_unit").innerHTML="";
				get("err_date").innerHTML="";
				}
				
				
</script>
</head>
<div align="center">
<form action="" onsubmit="return validate()" method="post">

<fieldset style="width:600px">
	<table align="center">
	    <div align="center">
		    <h3>Send Blood Request </h3>
			<h5><?hp echo $err_db; ?></h5>
			
			  <div>
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
		<td><input type = "text" id="bloodgroup" name = "bloodgrp" value="<?php echo $bloodgrp; ?>"/></td>
	     <td> <span id="err_bloodgrp"> <?php echo $err_bloodgrp; ?> </span></td>
		</tr>

<tr>
	 <td><b>City: </b></td>
		<td><input type = "text" id="city" name = "city" value="<?php echo $city; ?>"/></td>
				<td> <span id="err_city"> <?php echo $err_city; ?> </span></td>
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
	 <td><b>Date Of Blood Need: </b></td>
		<td><input type = "text" id="date" name = "date" value="<?php echo $date; ?>"/></td>
				<td> <span id="err_date"> <?php echo $err_date; ?> </span></td>
	</tr>	
	<tr>
<td align="center" colspan="2"><input type="submit" name="request" class="btn-link" value="Submit"></td>
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
