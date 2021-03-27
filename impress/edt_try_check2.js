function try_chk() {
	var usr = document.getElementById('txtUsr').value;
	var fnm = document.getElementById('txtFnm').value;
	var mnm = document.getElementById('txtMnm').value;
	var lnm = document.getElementById('txtLnm').value;
	var adr = document.getElementById('txtAdr').value;
	var dep = document.getElementById('txtDep').value;
	var gdr = document.getElementById('txtGdr').value;
	var bdy = document.getElementById('txtBdy').value;
	var cel = document.getElementById('txtCel').value;
	var sta = document.getElementById('txtSta').value;
	var dhr = document.getElementById('txtDhr').value;
	var sec = document.getElementById('txtSec').value;
	
	if(usr==''|| fnm=='' || mnm=='' || lnm=='' || adr=='' || dep=='' || 
	   gdr==''|| bdy=='' || cel=='' || sta=='' || dhr=='' || sec=='') {
		alert("Blank entry is not allowed!");
		return false;
	}
	else {
		var x = confirm("Do you really want to update this record?");
		if(x==true) {
			alert("Press OK to continue");
			return true;
			
		}
		else if(x==false) {
			alert("Operation cancelled!");
			return false;
		}
	}
}

function colorOn(x) {
	document.getElementById('txt'+x).style.backgroundColor = "#00FF00";
}	

function colorOf(x) {
	document.getElementById('txt'+x).style.backgroundColor = "#FFF";
}

/* replacement only for edt_try_check.js  */