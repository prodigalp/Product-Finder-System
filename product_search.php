<?php
	session_start();
	if($_SESSION['rol']=='9' || $_SESSION['rol']=='5' || $_SESSION['rol']=='4' ||
	   $_SESSION['rol']=='3' || $_SESSION['rol']=='2' || $_SESSION['rol']=='1') {

?>

<html>
<head>
<title>Product Search</title>
<link rel="stylesheet" type="text/css" media="screen" href="ornament/ornament_product_search.css" />
<script language="javascript">
	// For result box
	function cON(x) {
		document.getElementById('r'+x).style.backgroundColor = "#FFFF00";
	}
	
	function cOFF(x) {
		document.getElementById('r'+x).style.backgroundColor = "#FFF";
	}
	
	
	///////////////////////////////////////////////
	function showResult(str) {
	if (str=="")  {
	  document.getElementById("display").innerHTML="";
	  return;
	}

	// code for IE7+, Firefox, Chrome, Opera, Safari
	if (window.XMLHttpRequest)  { 
	  xmlhttp=new XMLHttpRequest();
	}

	// code for IE6, IE5
	 else  {  
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	  
	xmlhttp.onreadystatechange=function()  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)    {
		document.getElementById("display").innerHTML=xmlhttp.responseText;
		}
	}

	// Go to the specified location and bring the data came from variables "q" 
	xmlhttp.open("GET","dictionary_search.php?q=" + str,true);
	xmlhttp.send();
	}
	//////////////////////////////////////////////
	
</script>
</head>
<body>
	<form method="POST" name="search" id="search">
	<div id="wraper">
	<div id="header">Product Search</div>
		<div id="content">
		<div id="hed"><img src="portrait/miner/logo.png"></div>
		<table>
			<tr>
				<td><input type="text" name="txtPro" id="txtPro" size="40" placeholder="Enter product code" 
					 autocomplete="off" onkeyup="showResult(this.value)" />
				</td>
			</tr>
		</table>
		<div id="display"></div>
		<div id="lower">
		<a href="sindex.php"><input type="button" value="&laquo;&nbsp;Back"></a>
		</div>	
		
		</div>
	</div>
	</form>
</body>
</html>

<?php
	}
else {
	header("location: login.php");
}
?>