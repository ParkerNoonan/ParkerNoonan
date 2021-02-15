<?php

if ($_FILES["fileToUpload"]["size"]!=0) {
	$FileLoc = "uploads/";
  	$FileName = $_FILES["fileToUpload"]["name"];
  	$NewFile = $FileLoc . $FileName;
  	$Extension = pathinfo($NewFile, PATHINFO_EXTENSION);
  	move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $NewFile);
  		if ($Extension == "txt") {
  			include "scripts/readdata_form1.php";
  		}
  		if (strlen($Valve_1_VT) == 0) {
  			$Valve_1_VT = " ";
  			$Valve_1_AC = " ";
			$Valve_1_Size = " ";
			$Valve_1_Man = " ";
			$Valve_1_Model = " ";
			$Valve_1_Serial = " ";
			$Valve_1_MDP = " ";
			$Valve_1_TR = " ";
			$Valve_1_MWS = " ";
			$Valve_1_BAM = " ";
			$Valve_1_PLMAOP = " ";
			$Valve_1_PLDP = " ";
			$Valve_1_Pipe_Grade = " ";
			$Valve_1_TS = " ";
  		}
  		if (strlen($Valve_2_VT) == 0) {
  			$Valve_2_VT = " ";
  			$Valve_2_AC = " ";
			$Valve_2_Size = " ";
			$Valve_2_Man = " ";
			$Valve_2_Model = " ";
			$Valve_2_Serial = " ";
			$Valve_2_MDP = " ";
			$Valve_2_TR = " ";
			$Valve_2_MWS = " ";
			$Valve_2_BAM = " ";
			$Valve_2_PLMAOP = " ";
			$Valve_2_PLDP = " ";
			$Valve_2_Pipe_Grade = " ";
			$Valve_2_TS = " ";
  		}
  		if (strlen($Valve_3_VT) == 0) {
  			$Valve_3_VT = " ";
  			$Valve_3_AC = " ";
			$Valve_3_Size = " ";
			$Valve_3_Man = " ";
			$Valve_3_Model = " ";
			$Valve_3_Serial = " ";
			$Valve_3_MDP = " ";
			$Valve_3_TR = " ";
			$Valve_3_MWS = " ";
			$Valve_3_BAM = " ";
			$Valve_3_PLMAOP = " ";
			$Valve_3_PLDP = " ";
			$Valve_3_Pipe_Grade = " ";
			$Valve_3_TS = " ";
  		}
  		if (strlen($Valve_4_VT) == 0) {
  			$Valve_4_VT = " ";
  			$Valve_4_AC = " ";
			$Valve_4_Size = " ";
			$Valve_4_Man = " ";
			$Valve_4_Model = " ";
			$Valve_4_Serial = " ";
			$Valve_4_MDP = " ";
			$Valve_4_TR = " ";
			$Valve_4_MWS = " ";
			$Valve_4_BAM = " ";
			$Valve_4_PLMAOP = " ";
			$Valve_4_PLDP = " ";
			$Valve_4_Pipe_Grade = " ";
			$Valve_4_TS = " ";
  		}
  		if (strlen($Valve_5_VT) == 0) {
  			$Valve_5_VT = " ";
  			$Valve_5_AC = " ";
			$Valve_5_Size = " ";
			$Valve_5_Man = " ";
			$Valve_5_Model = " ";
			$Valve_5_Serial = " ";
			$Valve_5_MDP = " ";
			$Valve_5_TR = " ";
			$Valve_5_MWS = " ";
			$Valve_5_BAM = " ";
			$Valve_5_PLMAOP = " ";
			$Valve_5_PLDP = " ";
			$Valve_5_Pipe_Grade = " ";
			$Valve_5_TS = " ";
  		}
  		$valves= array(
	  		array($Valve_1_VT, $Valve_1_AC, $Valve_1_Size, $Valve_1_Man, $Valve_1_Model, $Valve_1_Serial, $Valve_1_MDP, $Valve_1_TR, $Valve_1_MWS, $Valve_1_BAM, $Valve_1_PLMAOP, $Valve_1_PLDP, $Valve_1_Pipe_Grade, $Valve_1_TS), 
	  		array($Valve_2_VT, $Valve_2_AC, $Valve_2_Size, $Valve_2_Man, $Valve_2_Model, $Valve_2_Serial, $Valve_2_MDP, $Valve_2_TR, $Valve_2_MWS, $Valve_2_BAM, $Valve_2_PLMAOP, $Valve_2_PLDP, $Valve_2_Pipe_Grade, $Valve_2_TS), 
	  		array($Valve_3_VT, $Valve_3_AC, $Valve_3_Size, $Valve_3_Man, $Valve_3_Model, $Valve_3_Serial, $Valve_3_MDP, $Valve_3_TR, $Valve_3_MWS, $Valve_3_BAM, $Valve_3_PLMAOP, $Valve_3_PLDP,$Valve_3_Pipe_Grade, $Valve_3_TS),
	  		array($Valve_4_VT, $Valve_4_AC, $Valve_4_Size, $Valve_4_Man, $Valve_4_Model, $Valve_4_Serial, $Valve_4_MDP, $Valve_4_TR, $Valve_4_MWS, $Valve_4_BAM, $Valve_4_PLMAOP, $Valve_4_PLDP, $Valve_4_Pipe_Grade, $Valve_4_TS),
	  		array($Valve_5_VT, $Valve_5_AC, $Valve_5_Size, $Valve_5_Man, $Valve_5_Model, $Valve_5_Serial, $Valve_5_MDP, $Valve_5_TR, $Valve_5_MWS, $Valve_5_BAM, $Valve_5_PLMAOP, $Valve_5_PLDP, $Valve_5_Pipe_Grade, $Valve_5_TS)
  		);
}

else {
	$Site_Name = "Test Site name";
	$City = "Test City";
	$Rev = "You guess it";
	$Date1 = "2020";
}

$test_valves = array(
		array($valves[0][0],$valves[0][1], $valves[0][2],$valves[0][10],$valves[0][11]),
		array($valves[1][0],$valves[1][1], $valves[1][2],$valves[1][10],$valves[1][11]),
		array($valves[2][0],$valves[2][1], $valves[2][2],$valves[2][10],$valves[2][11]),
		array($valves[3][0],$valves[3][1], $valves[3][2],$valves[3][10],$valves[3][11]),
		array($valves[4][0],$valves[4][1], $valves[4][2],$valves[4][10],$valves[4][11]),
		);

$length = count($test_valves);
$good_valve = array();
$test1 = null;
$test2 = null;
$test3 = null;
$test4 = null;

for ($start = 0; $start<$length; $start++) {
	if ($test_valves[$start][1]=="A150" || $test_valves[$start][1]=="A300" || $test_valves[$start][1]=="400" ||$test_valves[$start][1]=="A600") {
		$test1 = "good";
		//echo "{$test1} {$test_valves[$start][1]}<br>";
	}
	else {
		$test1 = "bad";
		//echo  "{$test1} {$test_valves[$start][1]}<br>";
	}
	if (intval($test_valves[$start][2]) > 0) {
		$test2 = "good";
		//echo "{$test2} {$test_valves[$start][2]}<br>";
	}
	else {
		$test2 = "bad";
		//echo "{$test2} {$test_valves[$start][2]}<br>";
	}
	if (intval($test_valves[$start][3]) > 0) {
		$test3 = "good";
		$g = intval($test_valves[$start][3]);
		//echo "{$test3} " . $g . "<br>";
	}
	else {
		$test3 = "bad";
		$g = intval($test_valves[$start][3]);
		//echo "{$test3} " . $g . "<br>";
	}
	if (intval($test_valves[$start][4]) > 0) {
		$test4 = "good";
		$g = intval($test_valves[$start][4]);
		//echo "{$test4} " . $g . "<br>";
	}
	else {
		$test4 = "bad";
		$g = intval($test_valves[$start][4]);
		//echo "{$test4} " . $g . "<br>";
	}
	if ($test1=="good" && $test2=="good" && $test3=="good" && $test4=="good") {
		array_push($good_valve, $test_valves[$start][0]);
		//echo "valve {$test_valves[$start][0]} is good.<br>";
		$test1 = null;
		$test2 = null;
		$test3 = null;
		$test4 = null;
	}
	else {
		//echo "valve {$test_valves[$start][0]} is bad.<br>";
		$test1 = null;
		$test2 = null;
		$test3 = null;
		$test4 = null;
	}
}
	//echo $Date1;
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet">
	<style type="text/css">
		body {
			font-family: Arial, Helvetica, sans-serif;
		}
		.flex-container, .flex-container2, .flex-container3, #flex-form {
			display: flex;
			margin-bottom: 10px;
		}
		.flex-container-inner {
			margin-bottom: 10px;
		}
		#flex-form {
			justify-content: center;
			border: 1px solid #ddd;
			margin-top: 10px;
			margin-bottom: 10px;
			padding-top: 10px;
			padding-bottom: 10px;
		}
		.flex-container2 {
			width: 20%;
		}
		.flex-container-inner > p, .flex-container-inner > div {
			flex-direction: column;
			text-align: center;
		}

		.flex-container div {
			font-size: 1em;
			width: 33%;
		}
		.flex-container3 div {
			width: 50%;
			border: 1px solid #ddd;
		}
		#site_specific {
			flex-wrap: wrap;
		}
		#site_specific div {
			width: 175px;
			height: 85px;
			margin-left: auto;
			margin-right: auto;
		}
		table tr td {
			border: 1px solid #ddd;
			width: 5.26%;
			text-align: center;
		}
		table {
			border: 1px solid #ddd;
			display: none;
		}
		#table_title {
			display: none;
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
		.four-tenths {
			width: 40%;
		}
		.two-tenths {
			width: 20%;
		}
		.flex-third {
			flex-direction: row;
		}
		#act_form_column, #pres_op_form_column, #pres_rlf_form_column {
			width: 33%;
		}
		h3 {
			text-align: left;
			margin-left: 10px;
		}
		#sub_button {
			width: 100%;
			margin: 0 auto;
		}
		#sub_button_div {
			width: 90%;
			margin: 0 auto;
		}

	</style>
</head>
<body>
<div class="flex-con bord">
	<div class="head-container1"><img class="logo" src="images/silverback_gorilla.jpg"></div>
	<div class="brand">EASY ENGINEERING!</div>
	<div class="head-container2">Presented By:<br>SilverBack TECH</div>
</div>

<?php 
	$a = "null";
	for ($x = 0; $x <= 4 ; $x++) {
		if ($x == 0) {$a = 1;}
		elseif ($x == 1) {$a = 2;}
		elseif ($x == 2) {$a = 3;}
		elseif ($x == 3) {$a = 4;}
		else {$a = 5;}
		if ($valves[$x][0] != " ") {
			echo "<div style='display: none;' id='valve_tag_{$a}' class='valve_{$a}'>{$valves[$x][0]}</div>";
			echo "<div style='display: none;' id='valve_class_{$a}' class='valve_{$a}'>{$valves[$x][1]}</div>";
			echo "<div style='display: none;' id='valve_dia_{$a}' class='valve_{$a}'>{$valves[$x][2]}</div>";
			echo "<div style='display: none;' id='valve_man_{$a}' class='valve_{$a}'>{$valves[$x][3]}</div>";
			echo "<div style='display: none;' id='valve_mod_{$a}' class='valve_{$a}'>{$valves[$x][4]}</div>";
			echo "<div style='display: none;' id='valve_serial_{$a}' class='valve_{$a}'>{$valves[$x][5]}</div>";
			echo "<div style='display: none;' id='valve_MDP_{$a}' class='valve_{$a}'>{$valves[$x][6]}</div>";
			echo "<div style='display: none;' id='valve_TR_{$a}' class='valve_{$a}'>{$valves[$x][7]}</div>";
			echo "<div style='display: none;' id='valve_MWS_{$a}' class='valve_{$a}'>{$valves[$x][8]}</div>";
			echo "<div style='display: none;' id='valve_act_{$a}' class='valve_{$a}'>{$valves[$x][9]}</div>";
			echo "<div style='display: none;' id='valve_PLMAOP_{$a}' class='valve_{$a}'>{$valves[$x][10]}</div>";
			echo "<div style='display: none;' id='valve_PLD_{$a}' class='valve_{$a}'>{$valves[$x][11]}</div>";
			echo "<div style='display: none;' id='valve_PG_{$a}' class='valve_{$a}'>{$valves[$x][12]}</div>";
			echo "<div style='display: none;' id='valve_TS_{$a}' class='valve_{$a}'>{$valves[$x][13]}</div>";
		}
	}
?>

<h3>Site Specific Valve Information</h3>
<div class="flex-container bord" id="site_specific" style="padding-top: 10px;">
	<div class="flex-container-inner bord">
		<p>Valve Tags:</p>
		<div style="width: 100%;">
			<select id="valve_tag" form="form_to_submit" name="Valve_1_VT">
				<?php
					for ($x = 0; $x <= 4; $x++) {
						for ($b = 0; $b<count($good_valve); $b++) {
							if ($valves[$x][0] != " " && $valves[$x][0]==$good_valve[$b]) {
								echo"<option>{$valves[$x][0]}</option>";
							}
						}
					}
				?>
			</select>
		</div>
	</div>

	<div class="flex-container-inner bord">
		<p>ANSI Rating</p>
		<input style="text-align: center; border: none;" form="form_to_submit" id="ansi" name="Valve_1_AC" <?php echo "value='{$valves[0][1]}'";?> readonly>
	</div>

	<div class="flex-container-inner bord">
		<p>Valve Diameter</p>
			<div style="display: flex; flex-direction: row;">
				<input style="width: 10%; height: 20px; text-align: right; margin-left: 40%; border: none;" id="diameter" type="text" name="dia" form="form_to_submit" <?php echo "value='{$valves[0][2]}'";?> readonly>
				<div style="width: 52%; text-align: left; margin-left: 10px;">in</div>
			</div>
	</div>

	<div class="flex-container-inner bord">
		<p>Valve Manufacturer</p>
		<input style="text-align: center; border: none;" form="form_to_submit" id="manufacturer" name="manufacturer" <?php echo "value='{$valves[0][3]}'";?> readonly>
	</div>

	<div class="flex-container-inner bord">
		<p>Valve Model</p>
		<input style="width: 100%; text-align: center;" form="form_to_submit" id="valve_model" name="Valve_1_BAM" <?php echo "value='{$valves[0][4]}'";?> readonly>
	</div>

	<div class="flex-container-inner bord">
		<p>Valve Serial Number</p>
		<input style="text-align: center; border: none;" form="form_to_submit" id="valve_serial" name="Valve_1_Serial"<?php echo "value='{$valves[0][5]}'";?> readonly>
	</div>

	<div class="flex-container-inner bord">
		<p>Max Pressure</p>
			<div style="display: flex; flex-direction: row">
				<input style="width: 25%; height: 20px; text-align: right; margin-left: 25%; border: none;" id="op_pressure" type="text" name="diff_pres" form="form_to_submit" <?php echo "value='{$valves[0][6]}'";?> readonly>
				<div style="width: 52%; text-align: left; margin-left: 10px;">psi</div>
			</div>
	</div>

	<div class="flex-container-inner bord">
		<p>Valve Temperature Rating</p>
		<input style="text-align: center; border: none;" form="form_to_submit" id="temp_rating" name="Valve_1_TR" <?php echo "value='{$valves[0][7]} F'";?> readonly>
	</div>

	<div class="flex-container-inner bord">
		<p>Max Wind Speed</p>
		<input style="text-align: center; border: none;" form="form_to_submit" id="wind_speed" name="Valve_1_MWS" <?php echo "value='{$valves[0][8]} MPH'";?> readonly>
	</div>

	<div class="flex-container-inner bord">
		<p>Actuator Model</p>
		<div style="width: 100%;">
			<input style="text-align: center;" id="act_model" form="form_to_submit" type="text" name="Valve_1_Model" <?php echo "value='{$valves[0][9]}'";?>>
		</div>
	</div>

	<div class="flex-container-inner bord">
		<p>Pipeline MAOP</p>
			<div style="width: 100%">
				<input style="text-align: center; border: none;" form="form_to_submit" type="text" id="pipe_maop" name="Valve_1_PLMAOP" <?php echo "value='{$valves[0][10]} psi'";?> readonly>
			</div>
	</div>

	<div class="flex-container-inner bord">
		<p>Pipeline Design Pressure</p>
			<div style="width: 100%">
				<input style="text-align: center; border: none;" form="form_to_submit" type="text" id="pipe_design" name="Valve_1_PLDP" <?php echo "value='{$valves[0][11]} psi'";?> readonly>
			</div>
	</div>

	<div class="flex-container-inner bord">
		<p>Pipe Grade</p>
		<input style="text-align: center; border: none;" form="form_to_submit" type="text" id="pipe_grade" name="Valve_1_Pipe_Grade" <?php echo "value='{$valves[0][12]}'";?> readonly>
	</div>

	<div class="flex-container-inner bord">
		<p>Tube Diameter</p>
			<input style="text-align: center; border: none;" form="form_to_submit" type="text" id="tubing" name="Valve_1_TS" <?php echo "value='{$valves[0][13]}'";?> readonly>
	</div>

	<div class="flex-container-inner bord">
		<p>Safety Factor</p>
		<div>
			<select id="safety_factor" form="form_to_submit">
				<option value="1.25">1.25</option>
				<option value="1.5">1.5</option>
			</select>
		</div>	
	</div>
</div>

<div style="text-align: center;">
	<button style="width: 90%; margin-bottom: 10px;" id="calc_button" onclick="display_results()">Calculate</button>
</div>

<div class="flex-container bord">
	<h3>Valve Torque Results</h3>
	<div class="flex-container-inner">
	  <div style="margin-top: 15px; margin-left: 30px; margin-bottom: 15px; width: 80%;">ANSI Rating</div>
	  <div id="ANSI_result" style="margin-left: 30px; margin-bottom: 15px; width: 80%;">Calculations have not been run</div>
	</div>
	<div class="flex-container-inner">
	  <div style="margin-top: 15px; width: 80%;">Break Torque (in-lb)</div>
	  <div id="B_Torque_result" style="margin-top: 15px; margin-bottom: 15px; width: 80%;"></div>
	</div>
	<div class="flex-container-inner">
	  <div style="margin-top: 15px; width: 80%;">Break Torque*SF (in-lb)</div>
	  <div id="B_Torque_result_SF" style="margin-top: 15px; margin-bottom: 15px; width: 80%;"></div>
	</div>
	<div class="flex-container-inner">
	  <div style="margin-top: 15px; width: 80%;">Max Stem Torque (MAST) (in-lb)</div>
	  <div id="MAST" style="margin-top: 15px; margin-bottom: 15px; width: 80%;"></div>
	</div>
	<div class="flex-container-inner">
	  <div style="margin-top: 15px; width: 80%;">Run Torque (in-lb)</div>
	  <div id="R_Torque_result" style="margin-top: 15px; margin-bottom: 15px; width: 80%;"></div>
	</div>
	<div class="flex-container-inner">
	  <div style="margin-top: 15px; width: 80%;">Run Torque*SF (in-lb)</div>
	  <div id="R-Torque_result_SF" style="margin-top: 15px; margin-bottom: 15px; width: 80%;"></div>
	</div>
</div>

<form id="form_to_submit">
	<input style="border: none; display: none;" type="text" name="Date" <?php echo "value='{$Date1}'";?> readonly>
	<input style="border: none; display: none;" type="text" name="Site_Name" <?php echo "value='{$Site_Name}'";?> readonly>
	<input style="border: none; display: none;" type="text" name="City" <?php echo "value='{$City}'";?> readonly>
	<input style="border: none; display: none;" type="text" name="Rev" <?php echo "value='{$Rev}'";?> readonly>
	<!--<?php //if ($Site_Name != //"Test Site name") {
		//echo "<input type='hidden' name='Site_Name' value='{$Site_Name}'>";
		//echo "<input type='hidden' name='City' value='{$City}'>";
		//echo "<input type='hidden' name='Rev' value='{$Rev}'>";
		//echo "<input type='hidden' name='Date' value='test'>";

			// for ($x = 0; $x < 5; $x++) {
			// 	$arr_numb = $x+1;
			// 	if ($valves[$x][0] != " ") {
				// 	echo "<input type='hidden' style='display: none;' name='Valve_{$arr_numb}_VT' value='{$valves[$x][0]}'>";
				// 	echo "<input type='hidden' style='display: none;' name='Valve_{$arr_numb}_AC' value='{$valves[$x][1]}'>";
				// 	echo "<input type='hidden' style='display: none;' name='Valve_{$arr_numb}_Size' value='{$valves[$x][2]}'>";
				// 	echo "<input type='hidden' style='display: none;' name='Valve_{$arr_numb}_Man' value='{$valves[$x][3]}'>";
				// 	echo "<input type='hidden' style='display: none;' name='Valve_{$arr_numb}_Model' value='{$valves[$x][4]}'>";
				// 	echo "<input type='hidden' style='display: none;' name='Valve_{$arr_numb}_Serial' value='{$valves[$x][5]}'>";
				// 	echo "<input type='hidden' style='display: none;' name='Valve_{$arr_numb}_MDP' value='{$valves[$x][6]}'>";
				// 	echo "<input type='hidden' style='display: none;' name='Valve_{$arr_numb}_TR' value='{$valves[$x][7]}'>";
				// 	echo "<input type='hidden' style='display: none;' name='Valve_{$arr_numb}_MWS' value='{$valves[$x][8]}'>";
				// 	echo "<input type='hidden' style='display: none;' name='Valve_{$arr_numb}_BAM' value='{$valves[$x][9]}'>";
				// 	echo "<input type='hidden' style='display: none;' name='Valve_{$arr_numb}_PLMAOP' value='{$valves[$x][10]}'>";
				// 	echo "<input type='hidden' style='display: none;' name='Valve_{$arr_numb}_PLDP' value='{$valves[$x][11]}'>";
				// 	echo "<input type='hidden' style='display: none;' name='Valve_{$arr_numb}_Pipe_Grade' value='{$valves[$x][12]}'>";
				// 	echo "<input type='hidden' style='display: none;' name='Valve_{$arr_numb}_TS' value='{$valves[$x][13]}'>";
				// //}
				// else {
	//}
	?>-->
</form>

<div id="table_title">RESULTS TABLE</div>
<div>
	<table id="result_table">
		<tr>
			<th>Actuator Number</th>
			<th>Pressure</th>
			<th>Start Outboard</th>
			<th>Min Outboard</th>
			<th>End Outboard</th>
			<th>Start Inboard</th>
			<th>Min Inboard</th>
			<th>End Inboard</th>
		</tr>
	</table>
</div>

<script src="scripts/valve_sizing_script_ns.js" type="text/javascript"></script>
<script src="scripts/Actuator_Table.js" type="text/javascript"></script>
<script src="scripts/create_act_table.js" type="text/javascript"></script>
<script type="text/javascript">
	document.getElementById("calc_button").addEventListener("click", check_act);
</script>
</html>