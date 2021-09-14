<?php include '../controllers/rateController.php'; ?>
<?php
$backColor="offwhite";$fontColor="red";$imageWidth="30px";$imageHeight="30px";
?>
<img src="blood.jpg" width=”20px” height=”20px”/>
<img src="blood.jpg" width=”20px” height=”20px” align="right"/>
<h1><center><span style="background-color:<?php echo $backColor ; ?>;color:<?php echo $fontColor ; ?>">
Rating Us</h1></center></span>


<html>
<head>
<link rel="stylesheet" href="styles/mystyle.css">
</head>
<body>
<form action="" method="post">
<div align="center">
		
	<table>
	  <div align ="center">
<div align="center">
<tr>
	<td><b>Rate Us:  </b></td>
		<td>
			<select id="rate" name="rate">
				<option selected disabled>--Select--</option>
				<?php
				foreach($rates as $r){
				if($rate == $r)
					echo "<option selected>$r</option>";
				else
				echo "<option>$r</option>";
						}
					?>
				</select> 
				</td>
				<td><span id="err_rate"><?php echo $err_rate;?></span></td>
	</tr>	
	</div>
	<div>
    <tr>
		<td align="center" colspan="2"><input type="submit" name="select" class="btn-link" value="submit"></td>
		
	</tr>
	</div>
	</div>
</table>
</div>
</form>
</body>
</html>