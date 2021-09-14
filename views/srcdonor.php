<?php include '../controllers/DBloodController.php'; ?>
<?php $dblood = getAllDbloods(); ?>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles/mystyle.css">
</head>
<body>
<html>
<head>
<script>
function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","donor.php?q="+str,true);
  xmlhttp.send();
}
</script>
</head>
<body>
<div align="center">
				<a href="dashboard.php" class="btn-link">Dash Board</a>
        </div>

<div align ="center">
<br><br><br><br>
<div class="add">
<form>
<input type="text" name="dblood" id="dblood" placeholder="Search blood group" oninput="showUser(this.value)">
</form>
<br>
<div id="txtHint"></div>
</div>

</div>
</body>
</html>


	