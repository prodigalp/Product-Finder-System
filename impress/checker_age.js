function checkAge() {
	/* Data came for textbox */
	var a = document.getElementById('txtFnm').value;
	var b = document.getElementById('txtMnm').value;
	var c = document.getElementById('txtLnm').value;
	var d = document.getElementById('txtUsr').value;
	var e = document.getElementById('txtPwd').value;
	var f = document.getElementById('txtAdr').value;
	var g = document.getElementById('txtCel').value;
	var h = document.getElementById('txtFle').value;
	var i = document.getElementById('txtEmp').value;
	
	/* data came from combo box */
	var k = document.getElementById('txtSta');
	var l = document.getElementById('txtSec');
	var m = document.getElementById('txtGdr');
	
	if(a=='' || b=='' || c=='' || d=='' || e=='' || f=='' || g=='' || h=='' || i=='') {
		alert("Blank enty is not allowed!");
		return false;
	}
	else if(k.options.selectedIndex==0 || l.options.selectedIndex==0 || m.options.selectedIndex==0) {
		alert("Blank entry is not allowed!")
		return false;
	}
	else {
		alert("Press OK for verification!");
		return true;
	}
	
}

function wiper() {
	f4.txtFnm.value=""; f4.txtMnm.value="";	f4.txtLnm.value="";
	f4.txtUsr.value="";	f4.txtPwd.value="";	f4.txtAdr.value="";
	f4.txtCel.value="";	f4.txtFle.value="";	f4.txtEmp.value="";
	f4.txtSta.value='---';	f4.txtSec.value='---';	f4.txtGdr.value='---';
}

function cON(x) {
	document.getElementById('txt'+x).style.backgroundColor = "#FFFF00";
}

function cOFF(x) {
	document.getElementById('txt'+x).style.backgroundColor = "#FFF";
}