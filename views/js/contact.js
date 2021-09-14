function get(id){
		return	 document.getElementById(id);
	}
	
	function contact(){
		var xhr = new XMLHttpRequest();
		xhr.open("GET","contactus.php",true);
		xhr.onreadystatechange = function(){
			if(this.readyState == 4 && this.status == 200){
				get("demo").innerHTML = this.responseText;
			}
		};
		xhr.send();
		
	}