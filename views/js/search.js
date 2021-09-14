function get(id){
		return	 document.getElementById(id);
	}
	
	function search(){
		var xhr = new XMLHttpRequest();
		xhr.open("GET","searchdonar.php",true);
		xhr.onreadystatechange = function(){
			if(this.readyState == 4 && this.status == 200){
				get("demo").innerHTML = this.responseText;
			}
		};
		xhr.send();
		
	}
	
	
	/*
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
} */