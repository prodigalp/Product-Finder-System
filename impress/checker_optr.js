function checkOpe() {
	$a = document.getElementById('txtFnm').value;
	$b = document.getElementById('txtMnm').value;
	$c = document.getElementById('txtLnm').value;
	$d = document.getElementById('txtUsr').value;
	$e = document.getElementById('txtPwd').value; 
	$f = document.getElementById('txtAdr').value;
	$g = document.getElementById('txtMob').value;
	$h = document.getElementById('picfile').value;
	$j = document.getElementById('txtNum').value;
	
	// data for comboX
	$k = document.getElementById('txtSta');
	$l = document.getElementById('txtSec');
	$m = document.getElementById('txtGdr');
	
	
	if($a=='' || $b=='' || $c=='' || $d=='' || $e=='' || $f=='' || $g=='' || $h=='' || $j=='' ) {
		alert("Blank entry is not allowed");
		return false;
	}
	else if($k.options.selectedIndex==0 || $l.options.selectedIndex==0 || $m.options.selectedIndex==0) {
		alert("Blank entry is not allowed");
		return false;
	}
	else {
		alert("Press OK for verification");
		return true;
	}
	
}

function wiper() {
	f1.txtFnm.value='';	f1.txtMnm.value='';	f1.txtLnm.value='';
	f1.txtUsr.value='';	f1.txtPwd.value='';	f1.txtAdr.value='';
	f1.txtMob.value='';	f1.picfile.value='';	f1.txtNum.value='';
	f1.txtSta.value='---';	f1.txtSec.value='---';	f1.txtGdr.value='---';
}