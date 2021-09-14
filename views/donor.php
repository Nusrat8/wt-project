
<?php include '../controllers/DBloodController.php'; ?>

<html>
<body>
<head>
<link rel="stylesheet" href="styles/mystyle.css">
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
a{
  color:black;
  text-decoration: none;
}
a:hover{
  color:blue;
}
</style>
</head>
<?php
$q = $_GET["q"];

$con = mysqli_connect('localhost','root','','blood_bank');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

$sql="SELECT * FROM dblood WHERE bloodgrp like '$q%' or id like '$q%'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>ID</th>
<th>User Name</th>
<th> Name</th>
<th>Blood Group</th>
<th>Number of Units</th>
<th>Availability</th>
<th>Contact Number</th>
<th>Message</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['username'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['bloodgrp'] . "</td>";
  echo "<td>" . $row['units'] . "</td>";
  echo "<td>" . $row['availability'] . "</td>";
  echo "<td>" . $row['number'] . "</td>";
  ?>
	<td><a href="msg.php">send message</a></td>
  <?php
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>

</body>
</html>