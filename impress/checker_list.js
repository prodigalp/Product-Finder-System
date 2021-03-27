function inspect() {
	var emp = document.getElementById('txtUname').value;
	var usr = document.getElementById('pckUsr');
	
	if(emp=='') {
		alert("Please provide username!");
		usrCon.txtUname.focus();
		return false;
	}
	else if(usr.options.selectedIndex==0) {
		alert("No user group specified!");
		return false;
	}
	else {
		return true;
	}
}

function wiper() {
	usrCon.txtUname.value='';
	usrCon.pckUsr.value='---';
}