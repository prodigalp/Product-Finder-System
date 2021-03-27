function rel_chk() {
	var usr = document.getElementById('txtUsr').value;
	var fnm = document.getElementById('txtFnm').value;
	var mnm = document.getElementById('txtMnm').value;
	var lnm = document.getElementById('txtLnm').value;
	var grp = document.getElementById('txtGrp').value;
	var adr = document.getElementById('txtAdr').value;
	var dep = document.getElementById('txtDep').value;
	var gdr = document.getElementById('txtGdr').value;
	var bdy = document.getElementById('txtBdy').value;
	var cel = document.getElementById('txtCel').value;
	var sta = document.getElementById('txtSta').value;
	var hrd = document.getElementById('txtHrd').value;
	var sec = document.getElementById('txtSec').value;
	var pic = document.getElementById('txtPic').value;
	
	if(usr=='' || fnm=='' || mnm=='' || lnm=='' || grp=='' || adr==''||
       dep=='' || gdr=='' || bdy=='' || cel=='' || sta=='' || hrd==''||
	   sec=='' || pic=='') {
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