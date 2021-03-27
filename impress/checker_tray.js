function checkTray() {
	/* Data came from textbox */
	var a = document.getElementById('txtFnm').value;
	var b = document.getElementById('txtMnm').value;
	var c = document.getElementById('txtLnm').value;
	var d = document.getElementById('txtUsr').value;
	var e = document.getElementById('txtPwd').value;
	var f = document.getElementById('txtAdr').value;
	var g = document.getElementById('txtCel').value;
	var h = document.getElementById('txtFle').value;
	var i = document.getElementById('txtEmp').value;
	
	/* Data came from combo box */
	var j = document.getElementById('txtSta');
	var k = document.getElementById('txtSec');
	var l = document.getElementById('txtGdr');
	
	
	if(a=='' || b=='' || c=='' || d=='' || e=='' || f=='' || g=='' || h=='' || i=='') {
		alert("Blank entry is not allowed!");
		return false;
	}
	else if(j.options.selectedIndex==0 || k.options.selectedIndex==0 || l.options.selectedIndex==0) {
		alert("Blank entry is not allowed!");
		return false;
	}
	else {
		alert("Click OK for verification!");
		return true;	
	}
}

function wiper() {
	f5.txtFnm.value="";	f5.txtMnm.value="";	f5.txtLnm.value="";
	f5.txtUsr.value="";	f5.txtPwd.value="";	f5.txtAdr.value="";
	f5.txtCel.value="";	f5.txtFle.value="";	f5.txtEmp.value="";
	f5.txtSta.value="---";	f5.txtSec.value="---";	ft.txtEmp.value="---";
}

function cON(x) {
	document.getElementById('txt'+x).style.backgroundColor = "#FFFF00";
}

function cOFF(x) {
	document.getElementById('txt'+x).style.backgroundColor = "#FFF";
}	