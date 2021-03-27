function check_rel() {
	var a = document.getElementById('txtFnm').value;
	var b = document.getElementById('txtMnm').value;
	var c = document.getElementById('txtLnm').value;
	var d = document.getElementById('txtUsr').value;
	var e = document.getElementById('txtPwd').value;
	var f = document.getElementById('txtAdr').value;
	var g = document.getElementById('txtCon').value;
	var h = document.getElementById('txtFile').value;
	var i = document.getElementById('txtEmp').value;
	
	var x1 = document.getElementById('txtSta');
	var y1 = document.getElementById('txtSec');
	var z1 = document.getElementById('txtGdr');
	
	if(a=='' || b=='' || c=='' || d=='' || e=='' || f=='' || g=='' || h=='' || i=='') {
		alert("Blank entry is not allowed!");
		return false;
	}
	else if(x1.options.selectedIndex==0 || y1.options.selectedIndex==0 || z1.options.selectedIndex==0) {
		alert("Blank entry is not allowed!");
		return false;
	}
	else {
		alert("Press OK for verification");
		return true;
	}	
}

function c_ON(x) {
	document.getElementById('txt'+x).style.backgroundColor = "#FFFF00";
}	

function c_OFF(x) {
	document.getElementById('txt'+x).style.backgroundColor = "#FFF";
}

function wiper() {
	f3.txtFnm.value=""; f3.txtMnm.value="";	f3.txtLnm.value="";
	f3.txtUsr.value="";	f3.txtPwd.value="";	f3.txtAdr.value="";
	f3.txtCon.value="";	f3.txtFile.value=""; f3.txtEmp.value="";
	f3.txtSta.value="---";	f3.txtSec.value="---";	f3.txtGdr.value="---";
}
