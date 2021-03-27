<?php
if($_SESSION['rol']=='9') {
	echo("
	<a href='userlist_view.php?id=$row[id]'>[&nbsp;&nbsp;View</a>&nbsp;&nbsp;/
	<a href='userlist_edit.php?id=$row[id]'>Edit</a>&nbsp;&nbsp;/
	<a href='userlist_delete.php?id=$row[id]&id2=$row[gtype]'>Delete&nbsp;&nbsp;]</a>
	");
}

if($_SESSION['rol']=='5') {
	echo("
	<a href='userlist_view.php?id=$row[id]'>[&nbsp;&nbsp;View</a>&nbsp;&nbsp;/
	<a href='userlist_edit.php?id=$row[id]'>Edit</a>&nbsp;&nbsp;/
	");		
}

?>