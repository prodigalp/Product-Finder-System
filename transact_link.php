<?php
if($_SESSION['rol']=='9') {
	echo("
		<li id='shade'>
			<img src='portrait/miner/ICN/transact (1).png'>
			<div id='tag'><a href='add_agency.php'>Agency</a></div>
		</li>");
	echo("
		<li id='shade'>
			<img src='portrait/miner/ICN/transact (2).png'>
			<div id='tag'><a href='add_operator.php'>Operator</a></div>
		</li>");
	echo("
		<li id='shade'>
			<img src='portrait/miner/ICN/transact (5).png'>
			<div id='tag'><a href='add_reliever.php'>Reliever</a></div>
		</li>");
	echo("
		<li id='shade'>
			<img src='portrait/miner/ICN/transact (4).png'>
			<div id='tag'><a href='add_trainor.php'>Trainor</a></div>
		</li>");
	echo("
		<li id='shade'>
			<img src='portrait/miner/ICN/transact (3).png'>
			<div id='tag'><a href='add_supervisor.php'>P.E.</a></div>
		</li>");
	echo("
		<li id='shade'>
			<img src='portrait/miner/ICN/transact (26).png'>
			<div id='tag'><a href='add_product.php'>Product</a></div>
		</li>
		");
}

if($_SESSION['rol']=='5') {
	echo("
		<li id='shade'>
			<img src='portrait/miner/ICN/transact (1).png'>
			<div id='tag'><a href='add_agency.php'>Agency</a></div>
		</li>");
	echo("
		<li id='shade'>
			<img src='portrait/miner/ICN/transact (2).png'>
			<div id='tag'><a href='add_operator.php'>Operator</a></div>
		</li>");
	echo("
		<li id='shade'>
			<img src='portrait/miner/ICN/transact (5).png'>
			<div id='tag'><a href='add_reliever.php'>Reliever</a></div>
		</li>");
	echo("
		<li id='shade'>
			<img src='portrait/miner/ICN/transact (4).png'>
			<div id='tag'><a href='add_trainor.php'>Trainor</a></div>
		</li>");
}

if($_SESSION['rol']=='4') {
	echo("
		<li id='shade'>
			<img src='portrait/miner/ICN/transact (1).png'>
			<div id='tag'><a href='add_agency.php'>Agency</a></div>
		</li>");
	echo("
		<li id='shade'>
			<img src='portrait/miner/ICN/transact (2).png'>
			<div id='tag'><a href='add_operator.php'>Operator</a></div>
		</li>");
	echo("
		<li id='shade'>
			<img src='portrait/miner/ICN/transact (5).png'>
			<div id='tag'><a href='add_reliever.php'>Reliever</a></div>
		</li>");
}

?>