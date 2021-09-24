document.addEventListener("keyup",function(e){
	var key = e.which||e.keyCode;
	switch(key){
		case 37:
			document.getElementById("previous").click();
			break;
		case 39:
			document.getElementById("next").click();
			break;
	}												
});