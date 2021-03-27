function mesCon() {
	var x = confirm("Do you really want to delete this record?");
	if(x==true) {
		alert("Press OK for verification");
		return false;
	}
	else if(x==false) {
		alert("Operation aborted!");
		return false;
	}
		
}

	