function checkSup() {
	/* function for checking blank entry */
	var a = document.getElementById('txtFnm').value;
	var b = document.getElementById('txtMnm').value;
	var c = document.getElementById('txtLnm').value;
	var d = document.getElementById('txtUsr').value;
	var e = document.getElementById('txtPwd').value;
	var f = document.getElementById('txtEml').value;
	var g = document.getElementById('txtEmp').value;
	var h = document.getElementById('txtFle').value;
	
	var x = document.getElementById('txtSta');
	/* textbox options */
	if(a=='' || b=='' || c=='' || d=='' || e=='' || f=='' || g=='' || h=='') {
		alert("WARNING: Blank entry is not Allowed!");
		return false;
	}
	else if(x.options.selectedIndex==0) {
		alert("WARNING: Blank status");
		return false;
	}
	else {
		alert("Press OK for verification");
		return true;
	}
}


function wiper() {
	f2.txtFnm.value="";	f2.txtMnm.value="";	f2.txtLnm.value="";
	f2.txtUsr.value="";	f2.txtPwd.value="";	f2.txtEml.value="";
	f2.txtFle.value=""; f2.txtEmp.value="";	f2.txtSta.value="---";
}

function colorON(x) {
	document.getElementById('txt'+x).style.backgroundColor = "#FFFF00";
}

function colorOFF(x) {
	document.getElementById('txt'+x).style.backgroundColor = "#FFF";
}
