	function validate()  {
		var name=document.getElementById("name");
		var email=document.getElementById("email");
		var comment=document.getElementById("comment");
		if(notEmptyName(name) && isAlphabetName(name)){
			un=true;
		}else {
			un=false;
		}			
		if(emailValidator(email) && notEmptyEmail(email)){
			em=true;
		}else{
			em=false;
		}
		if(commentValidator(comment)){
			cmnt=true;
		}else{
			cmnt=false;
		}
	
		return (un && em && cmnt);
	}			
/*	function notEmptyName(name){
		if((name.value.length <3) || (name.value.length >18)){
			document.getElementById("check_userid").style.visibility="visible";
			return false;
		}
		var DigitExp = /^[0-9\ ]+$/;
		if(name.value.match(DigitExp)){
			document.getElementById("check_userid").style.visibility="visible";
			return false;
		}
		if(name.value.match('lol')){
			document.getElementById("check_userid").style.visibility="visible";
			return false;
		}
		if(name.value.length >= 3){
			document.getElementById("short").style.visibility="hidden";
			return true;
		}
	}*/
	
	function notEmptyName(elem){
		if(elem.value.length < 3){
		document.getElementById("check_userid").style.visibility="visible";
			return false;
		}else{
		document.getElementById("check_userid").style.visibility="hidden";
		return true;
		}
	}
	
	function isAlphabetName(elem){
		
		var alphaExp = /^[a-zA-Z\ ]+$/;
		if(elem.value.match(alphaExp)){
			document.getElementById("check_userid").style.visibility="hidden";
			return true;
		}else{
			document.getElementById("check_userid").style.visibility="visible";
			return false;
		}
	}
	function notEmptyEmail(email){
		if(email.value.length == 0){
		document.getElementById("check_mail").style.visibility="visible";
			return false;
		}else{
		document.getElementById("check_mail").style.visibility="hidden";
		return true;
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
	var alphaExp = /^[a-zA-Z\ ]+$/;
	function commentValidator(comment){	
		if(comment.value.length > 8){
			document.getElementById("check_cmnt").style.visibility="hidden";
			return true;
		}else{
			document.getElementById("check_cmnt").style.visibility="visible";
			return false;
		}		
	}