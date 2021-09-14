<?php include '../controllers/msgController.php'; ?>
<?php
$backColor="offwhite";$fontColor="red";$imageWidth="30px";$imageHeight="30px";
?>
<img src="blood.jpg" width=”20px” height=”20px”/>
<img src="blood.jpg" width=”20px” height=”20px” align="right"/>
<h1><center><span style="background-color:<?php echo $backColor ; ?>;color:<?php echo $fontColor ; ?>">
Message to Blood Donor</h1></center></span>


<html>
<head>
<link rel="stylesheet" href="styles/mystyle.css">
</head>
<body>
<form action="" method="post">
<div align="center">
		
	<table>
	  <div>
	  <tr>
		<td><b>User Name : </b></td>
		<td><input type="text" id="uname" name="uname" value="<?php echo $uname;?>" </td>
<td><span id="err_uname"><?php echo $err_uname;?></span></td>
		</div>
		</tr>
		<tr>
		<div>
		<td><b>Message : </b></td>
		<td><input type="text" id="msg" name="msg" value="<?php echo $msg;?>" </td>
<td><span id="err_msg"><?php echo $err_msg;?></span></td>
		</div>
		</tr>
		<tr>
<td align="center" colspan="2"><input type="submit" name="send" class="btn-link" value="send"></td>
</tr>
<div align="right">
				<a href="dashboard.php" class="btn-link">Dash Board</a>
        </div>
</div>
</table>
</form>
</body>
</html>