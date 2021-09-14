<?php include 'mainheader.php'; ?>
<?php include '../controllers/DBloodController.php'; ?>
<?php $dblood = getAllDbloods(); ?>
<html>
<body>
<head>
<link rel="stylesheet" href="styles/mystyle.css">
<style>
table, th, td {
  border: 2px solid red;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
}
</style>
<script src="js/search.js"></script>
</head>
<div align="center">
		    <h3>All Donors Lists</h3>
			<h5><?php echo $err_db; ?></h5>
		<table style="width:70%">
			    <thead>
				    <th>ID</th>
					<th>Name</th>
					
					<th>User Name</th>
					
					<th>Blood Group</th>
					
					<th>Number Of Units</th>
					
					<th>Availability</th>
					
					<th>Contact Number</th>
					
                     <th>Message</th>
					
				</thead>
				<tbody>
				    <?php
                        $i = 1;
						foreach($dblood as $db){
							echo "<tr>";
							    echo "<td>$i</td>";
								 echo "<td>".$db["name"]."</td>";
								 echo "<td>".$db["username"]."</td>";
								 echo "<td>".$db["bloodgrp"]."</td>";
								 echo "<td>".$db["units"]."</td>";
								 echo "<td>".$db["availability"]."</td>";
								  echo "<td>".$db["number"]."</td>";
								  echo '<td><a href = "msg.php?id='.$db["id"].'">send message</td>';
								 
							
								
							echo "</tr>";
							$i++;
						}
					?>
				</tbody>
				<div align="right">
				<a href="dashboard.php" class="btn-link">Dash Board</a>
				</div>
				<div align="left">
				 	<a href="home.php" class="btn-link">Home</a> 
				</div>
			</table>
		</div>
	</body>

</html>