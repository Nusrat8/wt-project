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
<div align="center">
		
	<table align="center">
	
	   <div align="center">
		<td><b>Message : </b></td>
		<td><input type = "text"  name = "message"/></td>
		</div>
		<div>
        <td><button onclick="myFunction()" name="msg">Send</button></td>
</div>
<script>
function myFunction() {
  alert("Successfully Send message!");
}
</script>
		<div align="right">
				<a href="dashboard.php" class="btn-link">Dash Board</a>
        </div>
		</div>
		</table>
	
</div>	
 </body>
 </html>
 