<?php

include "scripts/form_data.php";
include "scripts/form_data2.php";

  $PictureLoc1 = "uploads/";
  $Picture1 = $_FILES["fileToUploadPW"]["name"];
  $NewPic1 = $PictureLoc1 . $Picture1;
  move_uploaded_file($_FILES["fileToUploadPW"]["tmp_name"], $NewPic1);

  $PictureLoc2 = "uploads/";
  $Picture2 = $_FILES["fileToUploadID"]["name"];
  $NewPic2 = $PictureLoc2 . $Picture2;
  move_uploaded_file($_FILES["fileToUploadID"]["tmp_name"], $NewPic2);

  $PictureLoc3 = "uploads/";
  $Picture3 = $_FILES["fileToUploadV1"]["name"];
  $NewPic3 = $PictureLoc3 . $Picture3;
  move_uploaded_file($_FILES["fileToUploadV1"]["tmp_name"], $NewPic3);

  $PictureLoc4 = "uploads/";
  $Picture4 = $_FILES["fileToUploadV2"]["name"];
  $NewPic4 = $PictureLoc4 . $Picture4;
  move_uploaded_file($_FILES["fileToUploadV2"]["tmp_name"], $NewPic4);

  $PictureLoc5 = "uploads/";
  $Picture5 = $_FILES["fileToUploadV3"]["name"];
  $NewPic5 = $PictureLoc5 . $Picture5;
  move_uploaded_file($_FILES["fileToUploadV3"]["tmp_name"], $NewPic5);

  $PictureLoc6 = "uploads/";
  $Picture6 = $_FILES["fileToUploadV4"]["name"];
  $NewPic6 = $PictureLoc6 . $Picture6;
  move_uploaded_file($_FILES["fileToUploadV4"]["tmp_name"], $NewPic6);

  $PictureLoc7 = "uploads/";
  $Picture7 = $_FILES["fileToUploadV5"]["name"];
  $NewPic7 = $PictureLoc7 . $Picture7;
  move_uploaded_file($_FILES["fileToUploadV5"]["tmp_name"], $NewPic7);

?>

<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet">
	<title>Design Basis Form</title>
	<style type="text/css">
		.grid-con {
			display: grid;
			grid-template-columns: auto auto auto;
		}
		.grid-it {
			margin: 5px;
		}
		.grid-it2 {
			margin-top: 25px;
		}
						.flex-con {
			display: flex;
			margin-top: 10px;
			margin-bottom: 10px;
		}
		.bord {
			border: 1px solid #ddd;
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
		.logo {
			width: 50px;
		}

	</style>
</head>
<body>
	<div class="flex-con bord">
		<div class="head-container1"><img class="logo" src="images/silverback_gorilla.jpg"></div>
		<div class="brand">EASY ENGINEERING!<?php echo ("test"); ?></div>
		<div class="head-container2">Presented By:<br>SilverBack TECH</div>
	</div>

	<form action="Design_Basis_php.php" method="post" enctype="multipart/form-data">
		<div class="grid-con">
			<div class="grid-it2">
				Valve 1 Valve Tag: <br>
				<input type="text" name="Valve_1_Valve_Tag" <?php echo "value='". $Valve_1_VT . "'"?>><br>
				<?php 
					if ($Valve_1_AC == "A150") {
						echo "Valve Class: <br>";
						echo "<select name='Valve_1_Ansi_Class'>";
						echo   "<option value='A150' selected>Ansi 150</option>";
						echo   "<option value='A300'>Ansi 300</option>";
						echo   "<option value='A400'>Ansi 400</option>";
						echo   "<option value='A600'>Ansi 600</option>";
						echo "</select><br>";
					}
					elseif ($Valve_1_AC == "A300") {
						echo "Valve Class: <br>";
						echo "<select name='Valve_1_Ansi_Class'>";
						echo   "<option value='A150'>Ansi 150</option>";
						echo   "<option value='A300' selected>Ansi 300</option>";
						echo   "<option value='A400'>Ansi 400</option>";
						echo   "<option value='A600'>Ansi 600</option>";
						echo "</select><br>";
					}
					elseif ($Valve_1_AC == "A400") {
						echo "Valve Class: <br>";
						echo "<select name='Valve_1_Ansi_Class'>";
						echo   "<option value='A150'>Ansi 150</option>";
						echo   "<option value='A300'>Ansi 300</option>";
						echo   "<option value='A400' selected>Ansi 400</option>";
						echo   "<option value='A600'>Ansi 600</option>";
						echo "</select><br>";
					}
					elseif ($Valve_1_AC == "A600") {
						echo "Valve Class: <br>";
						echo "<select name='Valve_1_Ansi_Class'>";
						echo   "<option value='A150'>Ansi 150</option>";
						echo   "<option value='A300'>Ansi 300</option>";
						echo   "<option value='A400'>Ansi 400</option>";
						echo   "<option value='A600' selected>Ansi 600</option>";
						echo "</select><br>";
					}
					else {
						echo "Valve Class: <br>";
						echo "<select name='Valve_1_Ansi_Class'>";
						echo   "<option value='A150'>Ansi 150</option>";
						echo   "<option value='A300'>Ansi 300</option>";
						echo   "<option value='A400'>Ansi 400</option>";
						echo   "<option value='A600'>Ansi 600</option>";
						echo "</select><br>";
					}
				?>
				Valve 1 Size: <br>
				<input type="text" name="Valve_1_Size" <?php echo "value='". $Valve_1_Size . "'";?>><br>
				Valve 1 Manufacturer: <br>
				<input type="text" name="Valve_1_Man" <?php echo "value='". $Valve_1_Man . "'";?>><br>
				Valve 1 Model: <br>
				<input type="text" name="Valve_1_Model" <?php echo "value='". $Valve_1_Model . "'";?>><br>
				Valve 1 Serial #: <br>
				<input type="text" name="Valve_1_Serial" <?php echo "value='". $Valve_1_Serial . "'";?>><br>
				Valve 1 Max Diff Pressure: <br>
				<input type="text" name="Valve_1_MDP" <?php echo "value='". $Valve_1_MDP . "'";?>><br>
				Valve 1 Temperature Rating: <br>
				<input type="text" name="Valve_1_TR" <?php echo "value='". $Valve_1_TR . "'";?>><br>
				Valve 1 Max Wind Speed: <br>
				<input type="text" name="Valve_1_MWS" <?php echo "value='". $Valve_1_MWS . "'";?>><br>
				Valve 1 Bettis Actuator Model: <br>
				<input type="text" name="Valve_1_BAM" <?php echo "value='". $Valve_1_BAM . "'"?>><br>
				Valve 1 Pipeline MAOP: <br>
				<input type="text" name="Valve_1_PLMAOP" <?php echo "value='". $Valve_1_PLMAOP . "'";?>><br>
				Valve 1 Pipeline Design Pressure: <br>
				<input type="text" name="Valve_1_PLDP" <?php echo "value='". $Valve_1_PLDP . "'";?>><br>
				Valve 1 Pipe Grade: <br>
					<select name="Valve_1_Pipe_Grade">
						<option value="Gr B">Gr B</option>
						<option value="X52">X52</option>
						<option value="X60">X60</option>
					</select><br>
				Valve 1 Tubing Size: <br>
				<input type="text" name="Valve_1_TS" value='3/8"'><br>
		</div>
		<div class="grid-it2">
				Valve 2 Valve Tag: <br>
				<input type="text" name="Valve_2_Valve_Tag" <?php echo "value='". $Valve_2_VT . "'"?>><br>
				Valve Class: <br>
				<?php 
					if ($Valve_2_AC == "A150") {
						echo "Valve Class: <br>";
						echo "<select name='Valve_2_Ansi_Class'>";
						echo   "<option value='A150' selected>Ansi 150</option>";
						echo   "<option value='A300'>Ansi 300</option>";
						echo   "<option value='A400'>Ansi 400</option>";
						echo   "<option value='A600'>Ansi 600</option>";
						echo "</select><br>";
					}
					elseif ($Valve_2_AC == "A300") {
						echo "Valve Class: <br>";
						echo "<select name='Valve_2_Ansi_Class'>";
						echo   "<option value='A150'>Ansi 150</option>";
						echo   "<option value='A300' selected>Ansi 300</option>";
						echo   "<option value='A400'>Ansi 400</option>";
						echo   "<option value='A600'>Ansi 600</option>";
						echo "</select><br>";
					}
					elseif ($Valve_2_AC == "A400") {
						echo "Valve Class: <br>";
						echo "<select name='Valve_2_Ansi_Class'>";
						echo   "<option value='A150'>Ansi 150</option>";
						echo   "<option value='A300'>Ansi 300</option>";
						echo   "<option value='A400' selected>Ansi 400</option>";
						echo   "<option value='A600'>Ansi 600</option>";
						echo "</select><br>";
					}
					elseif ($Valve_2_AC == "A600") {
						echo "Valve Class: <br>";
						echo "<select name='Valve_2_Ansi_Class'>";
						echo   "<option value='A150'>Ansi 150</option>";
						echo   "<option value='A300'>Ansi 300</option>";
						echo   "<option value='A400'>Ansi 400</option>";
						echo   "<option value='A600' selected>Ansi 600</option>";
						echo "</select><br>";
					}
					else {
						echo "Valve Class: <br>";
						echo "<select name='Valve_2_Ansi_Class'>";
						echo   "<option value='A150'>Ansi 150</option>";
						echo   "<option value='A300'>Ansi 300</option>";
						echo   "<option value='A400'>Ansi 400</option>";
						echo   "<option value='A600'>Ansi 600</option>";
						echo "</select><br>";
					}
				?>
				Valve 2 Size: <br>
				<input type="text" name="Valve_2_Size" <?php echo "value='". $Valve_2_Size . "'";?>><br>
				Valve 2 Manufacturer: <br>
				<input type="text" name="Valve_2_Man" <?php echo "value='". $Valve_2_Man . "'";?>><br>
				Valve 2 Model: <br>
				<input type="text" name="Valve_2_Model" <?php echo "value='". $Valve_2_Model . "'";?>><br>
				Valve 2 Serial #: <br>
				<input type="text" name="Valve_2_Serial" <?php echo "value='". $Valve_2_Serial . "'";?>><br>
				Valve 2 Max Diff Pressure: <br>
				<input type="text" name="Valve_2_MDP" <?php echo "value='". $Valve_2_MDP . "'";?>><br>
				Valve 2 Temperature Rating: <br>
				<input type="text" name="Valve_2_TR" <?php echo "value='". $Valve_2_TR . "'"?>><br>
				Valve 2 Max Wind Speed: <br>
				<input type="text" name="Valve_2_MWS" <?php echo "value='". $Valve_2_MWS . "'";?>><br>
				Valve 2 Bettis Actuator Model: <br>
				<input type="text" name="Valve_2_BAM" <?php echo "value='". $Valve_2_BAM . "'"?>><br>
				Valve 2 Pipeline MAOP: <br>
				<input type="text" name="Valve_2_PLMAOP" <?php echo "value='". $Valve_2_PLMAOP . "'";?>><br>
				Valve 2 Pipeline Design Pressure: <br>
				<input type="text" name="Valve_2_PLDP" <?php echo "value='". $Valve_2_PLDP . "'";?>><br>
				Valve 2 Pipe Grade: <br>
					<select name="Valve_2_Pipe_Grade">
						<option value="Gr B">Gr B</option>
						<option value="X52">X52</option>
						<option value="X60">X60</option>
					</select><br>
				Valve 2 Tubing Size: <br>
				<input type="text" name="Valve_2_TS" value='3/8"'><br>
		</div>
		<div class="grid-it2">
				Valve 3 Valve Tag: <br>
				<input type="text" name="Valve_3_Valve_Tag" <?php echo "value='". $Valve_3_VT . "'"?>><br>
				Valve Class: <br>
				<?php 
					if ($Valve_3_AC == "A150") {
						echo "Valve Class: <br>";
						echo "<select name='Valve_3_Ansi_Class'>";
						echo   "<option value='A150' selected>Ansi 150</option>";
						echo   "<option value='A300'>Ansi 300</option>";
						echo   "<option value='A400'>Ansi 400</option>";
						echo   "<option value='A600'>Ansi 600</option>";
						echo "</select><br>";
					}
					elseif ($Valve_3_AC == "A300") {
						echo "Valve Class: <br>";
						echo "<select name='Valve_3_Ansi_Class'>";
						echo   "<option value='A150'>Ansi 150</option>";
						echo   "<option value='A300' selected>Ansi 300</option>";
						echo   "<option value='A400'>Ansi 400</option>";
						echo   "<option value='A600'>Ansi 600</option>";
						echo "</select><br>";
					}
					elseif ($Valve_3_AC == "A400") {
						echo "Valve Class: <br>";
						echo "<select name='Valve_3_Ansi_Class'>";
						echo   "<option value='A150'>Ansi 150</option>";
						echo   "<option value='A300'>Ansi 300</option>";
						echo   "<option value='A400' selected>Ansi 400</option>";
						echo   "<option value='A600'>Ansi 600</option>";
						echo "</select><br>";
					}
					elseif ($Valve_3_AC == "A600") {
						echo "Valve Class: <br>";
						echo "<select name='Valve_3_Ansi_Class'>";
						echo   "<option value='A150'>Ansi 150</option>";
						echo   "<option value='A300'>Ansi 300</option>";
						echo   "<option value='A400'>Ansi 400</option>";
						echo   "<option value='A600' selected>Ansi 600</option>";
						echo "</select><br>";
					}
					else {
						echo "Valve Class: <br>";
						echo "<select name='Valve_3_Ansi_Class'>";
						echo   "<option value='A150'>Ansi 150</option>";
						echo   "<option value='A300'>Ansi 300</option>";
						echo   "<option value='A400'>Ansi 400</option>";
						echo   "<option value='A600'>Ansi 600</option>";
						echo "</select><br>";
					}
				?>
				Valve 3 Size: <br>
				<input type="text" name="Valve_3_Size" <?php echo "value='". $Valve_3_Size . "'";?>><br>
				Valve 3 Manufacturer: <br>
				<input type="text" name="Valve_3_Man" <?php echo "value='". $Valve_3_Man . "'";?>><br>
				Valve 3 Model: <br>
				<input type="text" name="Valve_3_Model" <?php echo "value='". $Valve_3_Model . "'";?>><br>
				Valve 3 Serial #: <br>
				<input type="text" name="Valve_3_Serial" <?php echo "value='". $Valve_3_Serial . "'";?>><br>
				Valve 3 Max Diff Pressure: <br>
				<input type="text" name="Valve_3_MDP" <?php echo "value='". $Valve_3_MDP . "'";?>><br>
				Valve 3 Temperature Rating: <br>
				<input type="text" name="Valve_3_TR" <?php echo "value='". $Valve_3_TR . "'"?>><br>
				Valve 3 Max Wind Speed: <br>
				<input type="text" name="Valve_3_MWS" <?php echo "value='". $Valve_3_MWS . "'";?>><br>
				Valve 3 Bettis Actuator Model: <br>
				<input type="text" name="Valve_3_BAM" <?php echo "value='". $Valve_3_BAM . "'"?>><br>
				Valve 3 Pipeline MAOP: <br>
				<input type="text" name="Valve_3_PLMAOP" <?php echo "value='". $Valve_3_PLMAOP . "'";?>><br>
				Valve 3 Pipeline Design Pressure: <br>
				<input type="text" name="Valve_3_PLDP" <?php echo "value='". $Valve_3_PLDP . "'";?>><br>
				Valve 3 Pipe Grade: <br>
					<select name="Valve 3 Pipe Grade">
						<option value="Gr B">Gr B</option>
						<option value="X52">X52</option>
						<option value="X60">X60</option>
					</select><br>
				Valve 3 Tubing Size: <br>
				<input type="text" name="Valve_3_TS" value='3/8"'><br>
		</div>
		<div class="grid-it2">
				Valve 4 Valve Tag: <br>
				<input type="text" name="Valve_4_Valve_Tag" <?php echo "value='". $Valve_4_VT . "'"?>><br>
				Valve Class: <br>
				<?php 
					if ($Valve_4_AC == "A150") {
						echo "Valve Class: <br>";
						echo "<select name='Valve_4_Ansi_Class'>";
						echo   "<option value='A150' selected>Ansi 150</option>";
						echo   "<option value='A300'>Ansi 300</option>";
						echo   "<option value='A400'>Ansi 400</option>";
						echo   "<option value='A600'>Ansi 600</option>";
						echo "</select><br>";
					}
					elseif ($Valve_4_AC == "A300") {
						echo "Valve Class: <br>";
						echo "<select name='Valve_4_Ansi_Class'>";
						echo   "<option value='A150'>Ansi 150</option>";
						echo   "<option value='A300' selected>Ansi 300</option>";
						echo   "<option value='A400'>Ansi 400</option>";
						echo   "<option value='A600'>Ansi 600</option>";
						echo "</select><br>";
					}
					elseif ($Valve_4_AC == "A400") {
						echo "Valve Class: <br>";
						echo "<select name='Valve_4_Ansi_Class'>";
						echo   "<option value='A150'>Ansi 150</option>";
						echo   "<option value='A300'>Ansi 300</option>";
						echo   "<option value='A400' selected>Ansi 400</option>";
						echo   "<option value='A600'>Ansi 600</option>";
						echo "</select><br>";
					}
					elseif ($Valve_4_AC == "A600") {
						echo "Valve Class: <br>";
						echo "<select name='Valve_4_Ansi_Class'>";
						echo   "<option value='A150'>Ansi 150</option>";
						echo   "<option value='A300'>Ansi 300</option>";
						echo   "<option value='A400'>Ansi 400</option>";
						echo   "<option value='A600' selected>Ansi 600</option>";
						echo "</select><br>";
					}
					else {
						echo "Valve Class: <br>";
						echo "<select name='Valve_4_Ansi_Class'>";
						echo   "<option value='A150'>Ansi 150</option>";
						echo   "<option value='A300'>Ansi 300</option>";
						echo   "<option value='A400'>Ansi 400</option>";
						echo   "<option value='A600'>Ansi 600</option>";
						echo "</select><br>";
					}
				?>
				Valve 4 Size: <br>
				<input type="text" name="Valve_4_Size" <?php echo "value='". $Valve_4_Size . "'";?>><br>
				Valve 4 Manufacturer: <br>
				<input type="text" name="Valve_4_Man" <?php echo "value='". $Valve_4_Man . "'";?>><br>
				Valve 4 Model: <br>
				<input type="text" name="Valve_4_Model" <?php echo "value='". $Valve_4_Model . "'";?>><br>
				Valve 4 Serial #: <br>
				<input type="text" name="Valve_4_Serial" <?php echo "value='". $Valve_4_Serial . "'";?>><br>
				Valve 4 Max Diff Pressure: <br>
				<input type="text" name="Valve_4_MDP" <?php echo "value='". $Valve_4_MDP . "'";?>><br>
				Valve 4 Temperature Rating: <br>
				<input type="text" name="Valve_4_TR" <?php echo "value='". $Valve_4_TR . "'"?>><br>
				Valve 4 Max Wind Speed: <br>
				<input type="text" name="Valve_4_MWS" <?php echo "value='". $Valve_4_MWS . "'";?>><br>
				Valve 4 Bettis Actuator Model: <br>
				<input type="text" name="Valve_4_BAM" <?php echo "value='". $Valve_4_BAM . "'"?>><br>
				Valve 4 Pipeline MAOP: <br>
				<input type="text" name="Valve_4_PLMAOP" <?php echo "value='". $Valve_4_PLMAOP . "'";?>><br>
				Valve 4 Pipeline Design Pressure: <br>
				<input type="text" name="Valve_4_PLDP" <?php echo "value='". $Valve_4_PLDP . "'";?>><br>
				Valve 4 Pipe Grade: <br>
					<select name="Valve_4_Pipe_Grade">
						<option value="Gr B">Gr B</option>
						<option value="X52">X52</option>
						<option value="X60">X60</option>
					</select><br>
				Valve 4 Tubing Size: <br>
				<input type="text" name="Valve_4_TS" value='3/8"'><br>
		</div>
		<div class="grid-it2">
				Valve 5 Valve Tag: <br>
				<input type="text" name="Valve_5_Valve Tag" <?php echo "value='". $Valve_5_VT . "'"?>><br>
				Valve Class: <br>
				<?php 
					if ($Valve_5_AC == "A150") {
						echo "Valve Class: <br>";
						echo "<select name='Valve_5_Ansi_Class'>";
						echo   "<option value='A150' selected>Ansi 150</option>";
						echo   "<option value='A300'>Ansi 300</option>";
						echo   "<option value='A400'>Ansi 400</option>";
						echo   "<option value='A600'>Ansi 600</option>";
						echo "</select><br>";
					}
					elseif ($Valve_5_AC == "A300") {
						echo "Valve Class: <br>";
						echo "<select name='Valve_5_Ansi_Class'>";
						echo   "<option value='A150'>Ansi 150</option>";
						echo   "<option value='A300' selected>Ansi 300</option>";
						echo   "<option value='A400'>Ansi 400</option>";
						echo   "<option value='A600'>Ansi 600</option>";
						echo "</select><br>";
					}
					elseif ($Valve_5_AC == "A400") {
						echo "Valve Class: <br>";
						echo "<select name='Valve_5_Ansi_Class'>";
						echo   "<option value='A150'>Ansi 150</option>";
						echo   "<option value='A300'>Ansi 300</option>";
						echo   "<option value='A400' selected>Ansi 400</option>";
						echo   "<option value='A600'>Ansi 600</option>";
						echo "</select><br>";
					}
					elseif ($Valve_5_AC == "A600") {
						echo "Valve Class: <br>";
						echo "<select name='Valve_5_Ansi_Class'>";
						echo   "<option value='A150'>Ansi 150</option>";
						echo   "<option value='A300'>Ansi 300</option>";
						echo   "<option value='A400'>Ansi 400</option>";
						echo   "<option value='A600' selected>Ansi 600</option>";
						echo "</select><br>";
					}
					else {
						echo "Valve Class: <br>";
						echo "<select name='Valve_5_Ansi_Class'>";
						echo   "<option value='A150'>Ansi 150</option>";
						echo   "<option value='A300'>Ansi 300</option>";
						echo   "<option value='A400'>Ansi 400</option>";
						echo   "<option value='A600'>Ansi 600</option>";
						echo "</select><br>";
					}
				?>
				Valve 5 Size: <br>
				<input type="text" name="Valve_5_Size" <?php echo "value='". $Valve_5_Size . "'";?>><br>
				Valve 5 Manufacturer: <br>
				<input type="text" name="Valve_5_Man" <?php echo "value='". $Valve_5_Man . "'";?>><br>
				Valve 5 Model: <br>
				<input type="text" name="Valve_5_Model" <?php echo "value='". $Valve_5_Model . "'";?>><br>
				Valve 5 Serial #: <br>
				<input type="text" name="Valve_5_Serial" <?php echo "value='". $Valve_5_Serial . "'";?>><br>
				Valve 5 Max Diff Pressure: <br>
				<input type="text" name="Valve_5_MDP" <?php echo "value='". $Valve_5_MDP . "'";?>><br>
				Valve 5 Temperature Rating: <br>
				<input type="text" name="Valve_5_TR" <?php echo "value='". $Valve_5_TR . "'"?>><br>
				Valve 5 Max Wind Speed: <br>
				<input type="text" name="Valve_5_MWS" <?php echo "value='". $Valve_5_MWS . "'";?>><br>
				Valve 5 Bettis Actuator Model: <br>
				<input type="text" name="Valve_5_BAM" <?php echo "value='". $Valve_5_BAM . "'"?>><br>
				Valve 5 Pipeline MAOP: <br>
				<input type="text" name="Valve_5_PLMAOP" <?php echo "value='". $Valve_5_PLMAOP . "'";?>><br>
				Valve 5 Pipeline Design Pressure: <br>
				<input type="text" name="Valve_5_PLDP" <?php echo "value='". $Valve_5_PLDP . "'";?>><br>
				Valve 5 Pipe Grade: <br>
					<select name="Valve_5_Pipe_Grade">
						<option value="Gr B">Gr B</option>
						<option value="X52">X52</option>
						<option value="X60">X60</option>
					</select><br>
				Valve 5 Tubing Size: <br>
				<input type="text" name="Valve_5_TS" value='3/8"'><br>
		</div>
		<div>
			<input type="hidden" name="SiteName" <?php echo "value='". $Site_Name . "'"?>>
			<input type="hidden" name="CommWorkOrd" value=<?php echo($Comm_Work_Ord);?>>
			<input type="hidden" name="ConstWorkOrd" value=<?php echo($Const_Work_Ord);?>>
			<input type="hidden" name="ENProjNum" value=<?php echo($EN_Proj_Num);?>>
			<input type="hidden" name="Rev" value=<?php echo($Rev);?>>
			<input type="hidden" name="Prepared_by" value=<?php echo($Prep_By);?>>
			<input type="hidden" name="SubDate" value=<?php echo($Date1);?>>
			<input type="hidden" name="Street_Add" <?php echo "value='". $Street_Add . "'"?>>
			<input type="hidden" name="City" <?php echo "value='". $City . "'"?>>
			<input type="hidden" name="Lat" value=<?php echo($Lat);?>>
			<input type="hidden" name="Long" value=<?php echo($Long);?>>
			<input type="hidden" name="Section" value=<?php echo($Section);?>>
			<input type="hidden" name="Township" value=<?php echo($Township);?>>
			<input type="hidden" name="Range" value=<?php echo($Range);?>>
			<input type="hidden" name="Division" value=<?php echo($Division);?>>
			<input type="hidden" name="County" value=<?php echo($County);?>>
			<input type="hidden" name="Scope" value=<?php echo($Scope);?>>
			<input type="hidden" name="ScopeB1" <?php echo "value='". $ScopeB1 . "'"?>>
			<input type="hidden" name="ScopeB2" <?php echo "value='". $ScopeB2 . "'"?>>
			<input type="hidden" name="ScopeB3" <?php echo "value='". $ScopeB3 . "'"?>>
			<input type="hidden" name="ScopeB4" <?php echo "value='". $ScopeB4 . "'"?>>
			<input type="hidden" name="ScopeB5" <?php echo "value='". $ScopeB5 . "'"?>>

			<input type="hidden" name="NewPic1" <?php echo "value='". $NewPic1 . "'"?>>
			<input type="hidden" name="NewPic2" <?php echo "value='". $NewPic2 . "'"?>>
			<input type="hidden" name="NewPic3" <?php echo "value='". $NewPic3 . "'"?>>
			<input type="hidden" name="NewPic4" <?php echo "value='". $NewPic4 . "'"?>>
			<input type="hidden" name="NewPic5" <?php echo "value='". $NewPic5 . "'"?>>
			<input type="hidden" name="NewPic6" <?php echo "value='". $NewPic6 . "'"?>>
			<input type="hidden" name="NewPic7" <?php echo "value='". $NewPic7 . "'"?>>

		</div>
		<div class="grid-it2">
        		<input type="submit" value="Submit">
       	</div>
       </div>
    </form>
</body>
</html>