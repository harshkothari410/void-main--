function Loginvalidates() {
alert("hi");
	var user=document.getElementById("userame");
	var password=document.getElementById("pass");
	
	if(notEmptyNameusr(user)){
			usr=true;
		}else {
			usr=false;
		}
		
	if(notEmptyNamepwd(password)){
			pwd=true;
		}else {
			pwd=false;
		}
	return(usr && pwd);
}

		function notEmptyNameusr(elem){
		{
		document.getElementById("check_user").style.visibility="visible";
		
			return false;
		}else{
		document.getElementById("check_user").style.visibility="hidden";
		return true;
		}
	}
	
		
		function notEmptyNamepwd(elem){
		{
		document.getElementById("check_password").style.visibility="visible";
		
			return false;
		}else{
		document.getElementById("check_password").style.visibility="hidden";
		return true;
		}
	}