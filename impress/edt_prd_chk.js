function prd_chk() {
	var sid = document.getElementById('txtIds').value;
	var cod = document.getElementById('txtCod').value;
	var eqp = document.getElementById('txtEqp').value;
	var bus = document.getElementById('txtBus').value;
	var wet = document.getElementById('txtWet').value;
	var tol = document.getElementById('txtTol').value;
	var cyc = document.getElementById('txtCyc').value;
	var wrk = document.getElementById('txtWrk').value;
	var cav = document.getElementById('txtCav').value;
	var tar = document.getElementById('txtTar').value;
	var typ = document.getElementById('txtTyp').value;
	var fle = document.getElementById('txtFle').value;
	var pic = document.getElementById('txtPic').value;
	
	
	if(sid=='' || cod=='' || eqp=='' || bus=='' || wet=='' || tol==''||
       cyc=='' || wrk=='' || cav=='' || tar=='' || typ=='' || fle==''|| pic=='') {
		alert("Blank entry is not allowed!");
		return false;
	}
	else {
		var x = confirm("Do you really want to update this record?");
		if(x==true) {
			alert("Press OK for verification");
			return true;
		}
		else if(x==false) {
			alert("Operation cancelled!");
			return false;
		}
	}
}

function onC(x) {
	document.getElementById('txt'+x).style.backgroundColor = "00FF00";
}

function ofC(x) {
	document.getElementById('txt'+x).style.backgroundColor = "#FFF";
}