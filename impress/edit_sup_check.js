function supchk() {
	var a = document.getElementById('txtLnm').value;
	var b = document.getElementById('txtMnm').value;
	var c = document.getElementById('txtFnm').value;
	var d = document.getElementById('txtEml').value;
	var e = document.getElementById('txtSta').value;
	var f = document.getElementById('txtUsr').value;
	
	if(a=='' || b=='' || c=='' || d=='' || e=='' || f=='') {
		alert("Blank entry is not allowed!");
		return false;
	}
	else  {
		var x = confirm("Do you really want to update this record?");
		if(x==true) {
			alert("Press OK for verification.");
			return true;
		}
		else if(x==false) {
			alert("Operation aborted!");
			return false;
		}
	}
}

function onClr(x) {
	document.getElementById('txt'+x).style.backgroundColor = "#FFFF00";
}

function ofClr(x) {
	document.getElementById('txt'+x).style.backgroundColor = "#FFF";
}

