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

	</style>
</head>
<body>
<div class="flex-con bord">
	<div class="head-container1"><img class="logo" src="images/silverback_gorilla.jpg"></div>
	<div class="brand">EASY ENGINEERING!</div>
	<div class="head-container2">Presented By:<br>SilverBack TECH</div>
</div>
<div class="flex-container bord">
	<h3>Valve Information</h3>
	<div class="flex-container-inner" style="margin-right: 10px;">
		<p>Choose a valve diameter in inches.</p>
		<div style="width: 100%; border: none;">
			<select class="two-tenths" id="diameter" name="dia">
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="6">6</option>
				<option value="8">8</option>
				<option value="10">10</option>
				<!--<option value="12">12</option>
				<option value="14">14</option>
				<option value="16">16</option>
				<option value="18">18</option>
				<option value="20">20</option>
				<option value="22">22</option>
				<option value="24">24</option>
				<option value="26">26</option>
				<option value="28">28</option>
				<option value="30">30</option>
				<option value="32">32</option>
				<option value="34">34</option>
				<option value="36">36</option>
				<option value="40">40</option>
				<option value="42">42</option>
				<option value="44">44</option>
				<option value="48">48</option>
				<option value="56">56</option>-->
			</select>
		</div>
	</div>
	<div class="flex-container-inner" style="margin-right: 10px;">
		<p style="margin-bottom: 5px;">Chooose an ANSI rating.</p>
		<div style="width: 100%; margin-bottom: 5px; border: none;">
			<select id="ansi">
				<option value="A150">ANSI 150</option>
				<option value="A300">ANSI 300</option>
				<option value="A400">ANSI 400</option>
				<option value="A600">ANSI 600</option>
			</select>
		</div>
		<div style="width: 100%; border: none; text-align: center;" id="Max_Ansi_message">A150 components are rated up to 285 psig.</div>
	</div>
	<div class="flex-container-inner">
		<p style="margin-bottom: 5px;">Chooose an operating pressure (the pressure across the valve, 0 on one side, max pressure on the the other).</p>
		<div style="width: 100%; margin-bottom: 5px; border: none;">
		    <input type="number" id="op_pressure" min="1" max="3748" name="diff_pres">
		</div>
	</div>
</div>

<div class="flex-container bord">
	<h3>Safety Factor & Manufacturer</h3>
	<div class="flex-container-inner" style="margin-right: 10px;">
		<p style="margin-bottom: 5px;">Safety Factor</p>
		<div style="width: 100%; margin-bottom: 10px; border: none;">
			<select id="safety_factor">
				<option value="1.25">1.25 (min)</option>
				<option value="1.50">1.5</option>
			</select>
		</div>
	</div>

	<div class="flex-container-inner">
		<p style="margin-bottom: 5px;">Choose a valve manufacturer.</p>
		<div style="width: 100%; margin-bottom: 10px; border: none;">
			<select id="manufacturer">
				<option value="Cameron">Cameron</option>
				<option value="Nordstrom">Nordstrom</option>
				<option value="other">Other</option>
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
	  <div style="margin-left: 30px; margin-bottom: 15px; width: 80%;" id="ANSI_result">Calculations have not been run</div>
	</div>
	<div class="flex-container-inner">
	  <div style="margin-top: 15px; width: 80%;">Break Torque (in-lb)</div>
	  <div style="margin-top: 15px; margin-bottom: 15px; width: 80%;" id="B_Torque_result"></div>
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

<div id="div_no_submit">
		
</div>

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

<script src="scripts/valve_sizing_script.js" type="text/javascript"></script>
<script src="scripts/Actuator_Table.js" type="text/javascript"></script>
<script src="scripts/create_act_table_no_submit.js" type="text/javascript"></script>
<script type="text/javascript">
	document.getElementById("calc_button").addEventListener("click", check_act);
</script>
</html>