<?php include 'mainheader.php'; ?>
<?php include '../controllers/UserController.php'; 
?>
 <html>
    <head>
	<link rel="stylesheet" href="styles/mystyle.css">
	<script>
			var hasError=false;
			function get(id){
				return document.getElementById(id);
			}

			function validate(){
				
				refresh();
				if(get("name").value == ""){
					hasError = true;
					get("err_name").innerHTML = "*Name Req";
				}
				if(get("id").value == ""){
					hasError = true;
					get("err_id").innerHTML = "* Req";
				}
				if(get("age").value == ""){
					hasError = true;
					get("err_age").innerHTML = "*Age Req";
				}
				if(!get("male").checked && !get("female").checked){
					hasError = true;
					get("err_gender").innerHTML = "*Gender Req";
					
				}
				if(get("bloodgroup").value == ""){
					hasError = true;
					get("err_bloodgrp").innerHTML = "*Group Req";
				}
				if(get("country").value == ""){
					hasError = true;
					get("err_country").innerHTML = "*Country Req";
				}
				if(get("city").value == ""){
					hasError = true;
					get("err_city").innerHTML = "*City Req";
				}
				if(get("address").value == ""){
					hasError = true;
					get("err_address").innerHTML = "*address Req";
				}
				if(get("uname").value == ""){
					hasError = true;
					get("err_uname").innerHTML = "*uname Req";
				}
				if(get("email").value == ""){
					hasError = true;
					get("err_email").innerHTML = "*email Req";
				}
				if(get("pass").value == ""){
					hasError = true;
					get("err_pass").innerHTML = "* Req";
				}
				
				return !hasError;
			}
				function refresh(){
				hasError=false;
				get("err_name").innerHTML="";
				get("err_age").innerHTML="";
				get("err_gender").innerHTML="";
				get("err_bloodgrp").innerHTML="";
				get("err_country").innerHTML="";
				get("err_city").innerHTML="";
				get("err_address").innerHTML="";
				get("err_uname").innerHTML="";
				get("err_email").innerHTML="";
				get("err_pass").innerHTML="";
				}
				
				
</script>
</head>

<body>
<div align ="center">
<form action="" onsubmit="return validate()" method="post">
<fieldset style="width:400px">
	<table align="center">
	    <div align="center">
		    <h3>Edit Profile</h3>
			<h5><?hp echo $err_db; ?></h5>
<div>
			  <tr>
				   <td> <b>Name</b></td>
					<td><input type = "text" id = "name" name = "name" value="<?php echo $name; ?>"/></td>
				   <td><span id="err_name"> <?php echo $err_name; ?> </span></td>
					</tr>
					</div>
					<div>
			  <tr>
				   <td> <b>ID</b></td>
					<td><input type = "text" id="id" name = "id" value="<?php echo $id; ?>"/></td>
				   <td><span id="err_id"> <?php echo $err_id; ?></span></td>
				  
					</tr>
					</div>
	            <div>
				<tr>
				    <td><b>Age</b></td>
					<td><input type = "text" id= "age" name = "age" value="<?php echo $age; ?>"/></td>
				  <td> <span id="err_age"> <?php echo $err_age; ?> </span></td>
					</tr>
				</div>
             <div>
				    <tr>
	<td><b>Gender:</b></td>
 <td><input type="radio" id="male" value="Male" <?php if($gender == "Male") echo "checked";?> name="gender"> Male <input <?php if($gender == "Female") echo "checked";?> name="gender" id="female" value="Female" type="radio"> Female</td>
<td><span id="err_gender"><?php echo $err_gender;?></span></td>
</tr>
	</div>
	<div>
				<tr>
				    <td><b>Blood group</b></td>
					<td><input type = "text" id= "bloodgroup" name = "bloodgroup" value="<?php echo $bloodgrp; ?>"/></td>
				  <td> <span id="err_bloodgrp"> <?php echo $err_bloodgrp; ?> </span></td>
					</tr>
				</div>
	<div>
				<tr>
				    <td><b>Country</b></td>
					<td><input type = "text" id= "country" name = "country" value="<?php echo $country; ?>"/></td>
				  <td> <span id="err_country"> <?php echo $err_country; ?> </span></td>
					</tr>
				</div>
	<div>
				<tr>
				    <td><b>City</b></td>
					<td><input type = "text" id= "city" name = "city" value="<?php echo $city; ?>"/></td>
				  <td> <span id="err_city"> <?php echo $err_city; ?> </span></td>
					</tr>
				</div>
<div><tr>
<td><b>Address  </b></td>
<td><textarea id="address" name="address"></textarea></td>
<td><span id="err_address"><?php echo $err_address;?></span></td>
</tr></div>
<div>
 <tr>
	<td><b>User Name</b></td>
 <td><input type="text" id="uname" name="uname" value="<?php echo $uname;?>" </td>
 <td><span id= "err_uname"><?php echo $err_uname;?></span></td>
</tr></div>
<div>
<tr>
	<td><b>Email</b></td>
 <td><input type="text" id="email" name="email" value="<?php echo $email;?>" </td>
 <td><span id= "err_email"><?php echo $err_email;?></span></td>
</tr></div>
<div>
	<td><b>Password</b></td>
 <td><input type="password" id="pass" name="pass" value="<?php echo $pass;?>" </td>
 <td><span id= "err_pass"><?php echo $err_pass;?></td>
</tr>	
</div>	

<tr>
<td align="center" colspan="2"><input type="submit" name ="Update" class="btn-link" value="Update"></td>
</tr>

			</table>
	</fieldset>
		
			</form>
			<div align="left">
	<a href="home.php" class="btn-link">Home</a>
</div>
<div align="right">	
		<a href="dashboard.php" class="btn-link">Dashboard</a>
</div>
			</div>


			</body>

			</html>