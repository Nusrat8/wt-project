<?php include 'mainheader.php'; ?>
<?php include '../controllers/RBloodController.php'; ?>
<?php $rblood = getAllRbloods(); ?>
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
</head>
<div align="center">
		    <h3>All Blood Seekers Details</h3>
			<h5><?php echo $err_db; ?></h5>
			<table style="width:70%">
			<tr>
			    <thead>
				    <th>ID</th>
					<th>User Name</th>
					<th>Name</th>
					<th>Blood Group</th>
			        <th>City</th>
					<th>Number Of Units</th>
					<th>Date</th>
					</tr>
				</thead>
				
				<tbody>
				
				    <?php
                        $i = 1;
						foreach($rblood as $rb){
							echo "<tr>";
							    echo "<td>$i</td>";
								 echo "<td>".$rb["username"]."</td>";
								 echo "<td>".$rb["name"]."</td>";
								 echo "<td>".$rb["bloodgrp"]."</td>";
								 echo "<td>".$rb["city"]."</td>";
								 echo "<td>".$rb["units"]."</td>";
								 echo "<td>".$rb["date"]."</td>";
								 
								
							echo "</tr>";
							$i++;
						}
					?>
					
				</tbody>
			<div align="left">
				<a href="home.php" class="btn-link">Home</a> 
				</div>
				<div align="right">
					<a href="dashboard.php" class="btn-link">Dash Board</a> 
				</div>
			</table>
			
		</div>
	</body>

</html>