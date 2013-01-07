function validates()  {
		var fname=document.getElementById("fname");
		var email=document.getElementById("email");
		var lname=document.getElementById("lname");
		var user=document.getElementById("user");
		var password=document.getElementById("password");
		var phone=document.getElementById("phone");
		 var college=document.getElementById("college");
		
		if(notEmptyName(fname) && isAlphabetName(fname)){
			un=true;
		}else {
			un=false;
		}	
		if(emailValidator(email) && notEmptyEmail(email)){
			em=true;
		}else{
			em=false;
		}
		if(notEmptylName(lname) && isAlphabetlName(lname)){
			unl=true;
		}else {
			unl=false;
		}
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
		
		
	    if(notEmptyNamephn(phone)){
			phn=true;
		}else {
			phn=false;
		}
		
		if(notEmptyNamecolg(college))
		{
			colg=true;
		}else {
			colg=false;
		}

		return (un && em && unl && usr && pwd && phn);
        }

	function notEmptyName(elem){
		if(elem.value.length < 3){
		document.getElementById("check_fname").style.visibility="visible";
		
			return false;
		}else{
		document.getElementById("check_fname").style.visibility="hidden";
		return true;
		}
	}
	
	function isAlphabetName(elem){
		
		var alphaExp = /^[a-zA-Z\ ]+$/;
		if(elem.value.match(alphaExp)){
			document.getElementById("check_fname").style.visibility="hidden";
			return true;
		}else{
			document.getElementById("check_fname").style.visibility="visible";
			return false;
		}
	}
	function notEmptylName(elem){
		if(elem.value.length < 3){
		document.getElementById("check_lname").style.visibility="visible";
		
			return false;
		}else{
		document.getElementById("check_lname").style.visibility="hidden";
		return true;
		}
	}
	
	function isAlphabetlName(elem){
		
		var alphaExp = /^[a-zA-Z\ ]+$/;
		if(elem.value.match(alphaExp)){
			document.getElementById("check_lname").style.visibility="hidden";
			return true;
		}else{
			document.getElementById("check_lname").style.visibility="visible";
			return false;
		}
	}
		function emailValidator(email){	
		var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
		if(email.value.match(emailExp)){
			document.getElementById("check_mail").style.visibility="hidden";
			return true;
		}else{
			document.getElementById("check_mail").style.visibility="visible";
			return false;
		}		
	}
	
	function notEmptyNameusr(elem){
		if(elem.value.length < 3){
		document.getElementById("check_user").style.visibility="visible";
		
			return false;
		}else{
		document.getElementById("check_user").style.visibility="hidden";
		return true;
		}
	}
	
		
		function notEmptyNamepwd(elem){
		if(elem.value.length < 6){
		document.getElementById("check_password").style.visibility="visible";
		
			return false;
		}else{
		document.getElementById("check_password").style.visibility="hidden";
		return true;
		}
	}
	
	
	function notEmptyNamephn(elem){
	var DigitExp = /^[0-9\ ]+$/;
		if(phone.value.match(DigitExp)){
			document.getElementById("check_phone").style.visibility="hidden";
			return true;
		}else{
			document.getElementById("check_phone").style.visibility="visible";
			return false;
		}
	}
		
	function notEmptyNamecolg(elem){
		if(elem.value.length < 3){
		document.getElementById("check_college").style.visibility="visible";
		
			return false;
		}else{
		document.getElementById("check_college").style.visibility="hidden";
		return true;
		}
	}