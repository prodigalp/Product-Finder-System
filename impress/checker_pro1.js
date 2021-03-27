function checkPro() {
	/* Data for text box */
	var a = document.getElementById('txtPro').value;
	var b = document.getElementById('txtEqp').value;
	var c = document.getElementById('txtBsh').value;
	var d = document.getElementById('txtWey').value;
	var e = document.getElementById('txtTol').value;
	var f = document.getElementById('txtCyl').value;
	var g = document.getElementById('txtFle').value;
	var h = document.getElementById('txtWrk').value;
	var i = document.getElementById('txtCav').value;
	var j = document.getElementById('txtTar').value;
	
	/* Data for combo box */
	var k = document.getElementById('txtPts');
	
	if(a=='' || b=='' || c=='' || d=='' || e=='' || f=='' || g=='' || h=='' || i=='' || j=='') {
		alert("Blank entry is not allowed!");
		return false;
	}
	else if(k.options.selectedIndex==0) {
		alert("Blank entry is not allowed!");
		return false;
	}
	else {
		alert("Click OK for verification!");
		return true;
	}
}

function wiper() {
	f6.txtPro.value="";	f6.txtEqp.value="";	f6.txtBsh.value="";
	f6.txtWey.value="";	f6.txtTol.value="";	f6.txtCyl.value="";
	f6.txtFle.value="";	f6.txtWrk.value="";	f6.txtCav.value="";
	f6.txtTar.value=""; f6.txtPts.value="---";
}

function cON(x) {
	document.getElementById('txt'+x).style.backgroundColor = "#FFFF00";
}

function cOFF(x) {
	document.getElementById('txt'+x).style.backgroundColor = "#FFF";
}

