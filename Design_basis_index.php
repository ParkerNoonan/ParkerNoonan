<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet">
	<style type="text/css">
		body {
			font-family: Arial, Helvetica, sans-serif;
		}
		.flex-con {
			display: flex;
			margin-top: 10px;
			margin-bottom: 10px;
		}
		.flex-con2 {
			display: flex;
			flex-flow: column;
		}
		.logo {
			width: 50px;
		}
		.head-container1 {
			width: 20%;
			text-align: left;
			margin-left: 15px;
		}
		.head-container2 {
			width: 20%;
			text-align: right;
			margin-right: 15px;
			padding-top: 10px;
		}
		.brand {
			padding-top: 25px;
			text-align: center;
			width: 60%;
			font-family: 'Press Start 2P', cursive;
			font-size: 20px;
		}
		.bord {
			border: 1px solid #ddd;
		}
		.halfway {
			width: 50%;
			margin-top: 20px;
			margin-bottom: 20px;
			margin-left: 10px;
			margin-right: 10px;
			padding: 10px 10px 10px 10px;
		}
		.quarter {
			width: 25%;
			margin-top: 10px;
			margin-bottom: 10px;
			text-align: center;
		}
		.top_marg {
			margin-top: 15px;
		}
		
	</style>
</head>
<body>
	<div class="flex-con bord">
		<div class="head-container1"><img class="logo" src="images/silverback_gorilla.jpg"></div>
		<div class="brand">EASY ENGINEERING!</div>
		<div class="head-container2">Presented By:<br>SilverBack TECH</div>
	</div>
	<div class="flex-con bord">
		<p class="quarter"></p>
		<p class="quarter">Purpose of this site:</p>
		<p class="quarter">Aid the RCV design engineer with the necessary tools to automate his work.</p>
		<p class="quarter"></p>
	</div>

	<div class="flex-con bord">
		<div class="flex-con2 halfway bord">
			<h3>Design Basis Manual</h3>
			<div>Do you need to create a Design Basis Manual? If so, you hit submit to build it from scratch. Or you can choose a csv file from a previous submitted sheet to auto fill much of the form.</div>
			<form class="top_marg" action="controller.php" method="post" enctype="multipart/form-data">
				<input type="file" name="fileToUpload" id="fileToUpload1">
				<input type="hidden" name="Design_Basis" value="Design_Basis_form">
				<input type="hidden" name="Valve_sizing" value="0">
				<input class="bord" type="submit" value="Submit">
			</form>
		</div>
		<div class="flex-con2 halfway bord">
			<h3>Data Actuator Sheet</h3>
			<div>Do you need to size a valve and actuator? Choose the submit button below.</div>
			<form id="willchange" class="top_marg" action="controller.php" method="post" enctype="multipart/form-data">
				<input type="file" name="fileToUpload" id="fileToUpload2">
				<input type="hidden" name="Valve_sizing" value="Valve_test">
				<input type="hidden" name="Design_Basis" value="0">
				<input class="bord" type="submit" value="Submit">
			</form>
		</div>
	</div>

<!-- <script type="text/javascript">
	
	document.getElementById("fileToUpload2").addEventListener("change", change_path);

	function change_path() {
		if (document.getElementById("fileToUpload2").value == "") {
			document.getElementById("willchange").action = "Valve_sizing_no_submit.php";
			console.log("change has occurred");
		}
		else {
			document.getElementById("willchange").action = "Valve_sizing.php";
			console.log("change has occurred again");
		}
	}

</script> -->

</body>
</html>