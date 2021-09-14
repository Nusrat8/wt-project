  <html>
<script>
	function get(id){
		return	 document.getElementById(id);
	}
	function donorlist(){
		var xhr = new XMLHttpRequest();
		xhr.open("GET","donorlist.php",true);
		xhr.onreadystatechange = function(){
			if(this.readyState == 4 && this.status == 200){
				get("demo").innerHTML = this.responseText;
			}
		};
		xhr.send();
		
	}
</script>

	<body>
		<button onclick="donorlist()">Blood Donor List</button>
		<div id="demo"></div>
	</body>
</html>