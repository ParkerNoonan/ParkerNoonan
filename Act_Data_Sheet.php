<?php

	//Read in variables from get request
	$Actuator = htmlspecialchars($_POST["act"]);
	$Operating_Pressure = htmlspecialchars($_POST["pres_op"]);
	$Relief_Pressure = htmlspecialchars($_POST["pres_rlf"]);
	$ANSI_rating = htmlspecialchars($_POST["ANSI_result"]);
	$Break_Torque = htmlspecialchars($_POST["B_Torque_result"]);
	$Break_Torque_SF = htmlspecialchars($_POST["B_Torque_result_SF"]);
	$Max_All_Stem_Torque = htmlspecialchars($_POST["MAST"]);
	$Run_Torque = htmlspecialchars($_POST["R_Torque_result"]);
	$Run_Torque_SF = htmlspecialchars($_POST["R_Torque_result_SF"]);
	$Start_Outbrd_Trq_op = htmlspecialchars($_POST["Start_Outboard_op"]);
	$Min_Outbrd_Torque_op = htmlspecialchars($_POST["Min_Outboard_op"]);
	$End_Outbrd_Torque_op = htmlspecialchars($_POST["End_Outboard_op"]);
	$Start_Inbrd_Torque_op = htmlspecialchars($_POST["Start_Inboard_op"]);
	$Min_Inbrd_Torque_op = htmlspecialchars($_POST["Min_Inboard_op"]);
	$End_Inbrd_Torque_op = htmlspecialchars($_POST["End_Inboard_op"]);
	$Start_Outbrd_Torque_rlf = htmlspecialchars($_POST["Start_Outboard_rlf"]);
	$Min_Outbrd_Torque_rlf = htmlspecialchars($_POST["Min_Outboard_rlf"]);
	$End_Outbrd_Torque_rlf = htmlspecialchars($_POST["End_Outboard_rlf"]);
	$Start_Inbrd_Torque_rlf = htmlspecialchars($_POST["Start_Inboard_rlf"]);
	$Min_Inbrd_Torque_rlf = htmlspecialchars($_POST["Min_Inboard_rlf"]);
	$End_Inbrd_Torque_rlf = htmlspecialchars($_POST["End_Inboard_rlf"]);
	$Diameter = htmlspecialchars($_POST["dia"]);
	$Diff_Pressure = htmlspecialchars($_POST["diff_pres"]);
	$Site_Name = htmlspecialchars($_POST["Site_Name"]);
	$City = htmlspecialchars($_POST["City"]);
	$Submittal = htmlspecialchars($_POST["Rev"]);
	$Date = htmlspecialchars($_POST["Date"]);

	$Max_Torque_op = max(array($Start_Outbrd_Trq_op, $End_Outbrd_Torque_op, $Start_Inbrd_Torque_op, $End_Inbrd_Torque_op));
	$Min_Run_Torque = min(array($Min_Outbrd_Torque_op, $Min_Inbrd_Torque_op));
	$Min_Relief_Torque = min(array($Min_Outbrd_Torque_rlf, $Min_Inbrd_Torque_rlf));

	if ($Submittal == "IFR") {
		$Rev = "A";
		$Issued_For = "Review";
	}
	elseif ($Submittal == "IFB") {
		$Rev = "B";
		$Issued_For = "Bid";
	}
	elseif ($Submittal == "IFC") {
		$Rev = "0";
		$Issued_For = "Construction";
	}

	$Valves = array(htmlspecialchars($_POST["Valve_1_VT"]));
	//Get valve tag
	$Valve_classes = array(htmlspecialchars($_POST["Valve_1_AC"]));
	//Get valve size
	//$Valve_Sizes = array(htmlspecialchars($_GET["Valve_1_Size"]));
	//Get valve manufacturers
	$Valve_Man = array(htmlspecialchars($_POST["manufacturer"]));
	//Get valve models
	$Valve_Model = array(htmlspecialchars($_POST["Valve_1_Model"]));
	//Get valve serial numbers
	$Valve_Serial = array(htmlspecialchars($_POST["Valve_1_Serial"]));
	//Get valve max pressure differential
	//$Valve_MaxPDiff = array(htmlspecialchars($_POST["Valve_1_MDP"]));
	//Get valve temperature rating
	$Valve_TempRtg = array(htmlspecialchars($_POST["Valve_1_TR"]));
	//Get Max Wind Speed
	$Valve_MWSpeed = array(htmlspecialchars($_POST["Valve_1_MWS"]));
	//Get Actuator
	$Valve_Act = array(htmlspecialchars($_POST["Valve_1_BAM"]));
	//Get pipeline MAOP
	$Valve_MAOP = array(htmlspecialchars($_POST["Valve_1_PLMAOP"]));
	//Get pipeline design pressure
	$Valve_PLDP = array(htmlspecialchars($_POST["Valve_1_PLDP"]));
	//Get pipe grade
	$Valve_PLDP = array(htmlspecialchars($_POST["Valve_1_Pipe_Grade"]));
	//Get pipe tubing size
	$Valve_TubeSize = array(htmlspecialchars($_POST["Valve_1_TS"]));
?>

<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet">
	<title></title>
	<link rel="stylesheet" type="text/css" href="styles/Act_Data_Sheet.css">
	<style type="text/css">
		.flex-con {
			display: flex;
			margin-top: 10px;
			margin-bottom: 10px;
			min-width: 1042px;
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
			font-family: Arial, Helvetica, sans-serif;
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
		.head-container2 {
			width: 20%;
			text-align: right;
			margin-right: 15px;
			padding-top: 10px;
		}
		.act_design_container {
			display: flex;
			width: 1042px;
			font-family: Arial, Helvetica, sans-serif;
		}
		.act_design_container #inputs {
			display: block;
			width: 200px;
			margin-right: 20px;
			margin-left: 10px;
		}
		.act_design_container #form_sheet {
			display: block;
		}
		#overall_container {
  			display: flex;
  			justify-content: center;
  			align-items: center;
  			border: 1px solid #ddd;
  			min-width: 1042px;
		}
		#inputs div {
			padding-bottom: 8px;
		}
		#inputs {
			width: 3in;
			margin-top: 20px;
		}
		.hidden_divs {
			display: none;
		}
	</style>
	
</head>
<body>
	<!--Put the Gorilla header on page-->
	<div class="flex-con bord">
		<div class="head-container1"><img class="logo" src="images/silverback_gorilla.jpg"></div>
		<div class="brand">EASY ENGINEERING!</div>
		<div class="head-container2">Presented By:<br>SilverBack TECH</div>
	</div>
	<!--End of Gorilla Header-->
	<!--Start of Container for page content-->
	<div id="overall_container">
		<div class="act_design_container">
			<!--Add inputs container and divs-->
			<div id="inputs">
				<fieldset>
				<legend>Form Data:</legend>
				<div>
					Ambient Temp (Low):<br>
					<input type="text" name="Ambient_low" id="amb_temp_low_input" value="">
				</div>
				<div>
					Ambient Temp (High):<br>
					<input type="text" name="Ambient_high" id="amb_temp_high_input" value="">
				</div>
				<div>
					Service:<br>
					<input type="text" name="service" value="Transmission">
				</div>
				<!--<div>
					Valve Tag #:<br>
					<input type="text" name="Approved" <?php //echo "value='{$Valves[0]}'";?>>
				</div>-->
				<div>
					Valve Type:<br>
					<select id="valve_type_input">
						<option value="Ball">Ball</option>
						<option value="Plug">Plug</option>
					</select>
				</div>
				<div>
					New or Existing (valve):<br>
					<select id="new_existing_input">
						<option value="New">New</option>
						<option value="Existing">Existing</option>
					</select>
				</div>
				<!--<div>
					Valve Model #:<br>
					<input type="text" name="Approved" value="XXX">
				</div>-->
				<div>
					End Connections:<br>
					<select id="end_connection_input">
						<option value="FxF">Flange by Flange</option>
						<option value="WxW">Weld by Weld</option>
						<option value="WxF">Weld by Flange</option>
					</select>
				</div>
				<div>
					Valve Mount:<br>
					<select id="valve_mount_input">
						<option value="horizontal">Horizontal</option>
						<option value="vertical">Vertical</option>
					</select>
				</div>
				<div>
					Stem Mount:<br>
					<select id="stem_mount_input">
						<option value="Horizontal">Horizontal</option>
						<option value="Vertical">Vertical</option>
					</select>
				</div>
				<div>
					Actuator Orientation to Pipe (Parallel/Perp):<br>
					<select id="Act_Orientation_input">
						<option value="parallel">Parallel</option>
						<option value="perpendicular">Perpendicular</option>
					</select>
				</div>
				<div>
					Mounting Projection:<br>
					<select id="mounting_proj_input">
						<option value="Horizontal">Horizontal</option>
						<option value="Vertical">Vertical</option>
					</select>
				</div>
				<div>
					Power:<br>
					<select id="power_input">
						<option value="Pneumatic">Pneumatic</option>
						<option value="Electric">Electric</option>
						<option value="Hydraulic">Hydraulic</option>
						<option value="Gas-Hydraulic">Gas-Hydraulic</option>
					</select>
				</div>
				<div>
					Spring Return or Double Acting?<br>
					<select id="return_type_input">
						<option value="Double_Acting">Double Acting</option>
						<option value="Spring_Return">Spring Return</option>
					</select>
				</div>
				<div>
					Operating Time:<br>
					<input id="op_time_input" type="text" name="Approved" value="XXX">
				</div>
				<div>
					Other:<br>
					<select id="Other_input">
						<option value="Hydraulic Override">Hydraulic Override (if G series)</option>
						<option value="Declutchable Gear">Declutchable Gear</option>
					</select>
				</div>

				<div>
					<br>
					<br>
					<button onclick="window.print()">Print</button>
				</div>
				</fieldset>
				<!-- Add in divs for php get variables -->
				<div class="hidden_divs" id="Valve_1_VT"><?php echo $Valves[0];?></div>
				<div class="hidden_divs" id="Valve_1_AC"><?php echo $Valve_classes[0];?></div>
				<div class="hidden_divs" id="Valve_1_Size"><?php echo $Valve_Sizes[0];?></div>
				
			</div>
			<!--End of inputs divs and container-->

		<div id="form_sheet" class="container">
			<div class="grid-container1">
				<div class="EN_logo"><img src="images/EN-image-3.png"></div>
				<div class="Client">Client: <input style="font-size: 1.5em;" type="text" name="client" form="final_sub" value="Xcel"></div>
				<div class="Doc_Num">Document Number: <input style="font-size: 1.5em; width: 80px;" type="text" name="doc_num" form="final_sub" <?php echo "value='{$Valves[0]}'";?>></div>
				<div class="Proj_Name">Project Name: <input style="font-size: 1.5em; width: 80px;" type="text" name="proj_name" form="final_sub" <?php echo "value='". $Site_Name . "'";?>></div>
				<div class="Location">Location: <input style="font-size: 1.5em; height: 10px;" type="text" name="location" form="final_sub" <?php echo "value='". $City . "'";?>></div>
				<div class="Service">Service: <input style="font-size: 1.5em; height: 10px;" type="text" name="service" form="final_sub" value="Transmission"></div>
				<div class="Auto-valve" style="font-size: 20px;">Automated Valve</div>
				<div class="Rev">Rev <input style="width: 15px; font-size: 10px;" type="text" name="rev" form="final_sub" <?php echo "value='". $Rev . "'";?>></div>
				<div class="Date">Date <input style="width: 55px; font-size: 10px;" type="text" name="date" form="final_sub" <?php echo "value='". $Date . "'";?>></div>
				<div class="Issued_For">Issued For <input style="width: 80px; font-size: 10px;" type="text" name="service" form="final_sub" <?php echo "value='". $Issued_For . "'";?>></div>
				<div class="By">By <input style="width: 40px; font-size: 10px;" type="text" name="by" form="final_sub" value="(initials)"></div>
				<div class="Checked">Checked <input style="width: 40px; font-size: 10px;" type="text" name="checked_by" form="final_sub" value="DS"></div>
				<div class="Approved">Approved <input style="width: 40px; font-size: 10px;" type="text" name="approved_by" form="final_sub" value="CRM"></div>
			</div>
			<div class="grid-container2">
			</div>
			<div class="grid-container3">
				<div class="header3">GENERAL / SERVICE CONDITIONS</div>
				<div class="header4">Power Requirements</div>
				<div class="column1">1.</div>
				<div class="column2">Number Required:</div>
				<div class="column3">One (1)</div>
				<div class="column4">39.</div>
				<div class="column5">Voltage / Phase / Hertz</div>
				<div class="column6">N/A</div>
				<div class="column7">N/A</div>
				<div class="column8">N/A</div>
				<div class="column1">2.</div>
				<div class="column2">P&ID No. / Section:</div>
				<div class="column3">N/A</div>
				<div class="column4">40.</div>
				<div class="column5">Horsepower / Speed / Full Load Amps</div>
				<div class="column6">N/A</div>
				<div class="column7">N/A</div>
				<div class="column8">N/A</div>
				<div class="column1">3.</div>
				<div class="column2">Line No. (Upstream)</div>
				<div class="column3">N/A</div>
				<div class="column4">41.</div>
				<div class="column5">Power Gas / Power Air Supply Pressure, psig</div>
				<div class="column9">Power Gas, <?php echo $Operating_Pressure ?></div>
				<div class="column1">4.</div>
				<div class="column2">Process Fluid Type</div>
				<div class="column3">Natural Gas</div>
				<div class="column4">42.</div>
				<div class="column5">Hydraulic Fluid Specification</div>
				<div class="column9">N/A</div>
				<div class="column1">5.</div>
				<div class="column2">Process Fluid Temp, F</div>
				<div class="column3">50 to 100</div>
				<div class="column4">43.</div>
				<div class="column5">Gas Displacement per Stroke (Cu.In)</div>
				<div class="column9">1631</div>
				<div class="column1">6.</div>
				<div class="column2">Ambient Temp Range, F</div>
				<div class="column3" id="amb_temp_view">-43 to 95</div>
				<div class="column4">44.</div>
				<div class="column5">Other</div>
				<div class="column9"></div>
				<div class="column1">7.</div>
				<div class="column2">Electrical Area Classification, Class/Division/Group</div>
				<div class="column10">|</div>
				<div class="column11">1</div>
				<div class="column12">D</div>
				<div class="column4">45.</div>
				<div class="column5">Other</div>
				<div class="column9"></div>
				<div class="column1">8.</div>
				<div class="column2">Location, Indoor/Outdoor</div>
				<div class="column3">Outdoor</div>
				<div class="header4">ACCESSORIES</div>
				<div class="header3">VALVE SPECIFICATION</div>
				<div class="column4">46.</div>
				<div class="column5">Pilot (Electrical, Pneumatic or Hydraulic)</div>
				<div class="column9">Electric</div>
				<div class="column1">9.</div>
				<div class="column2">Bare Valve Tag No. (SN)</div>
				<div class="column3" style="padding-top: 0px;"><input style="font-size: 7px; height: 5px; text-align: center;" type="text" name="valve_tag" <?php echo "value='{$Valves[0]}'";?>></div>
				<div class="column4">47.</div>
				<div class="column5" >Pilot Voltage or Pressure</div>
				<div class="column9">24 VDC</div>
				<div class="column1">10.</div>
				<div class="column2">Valve Type</div>
				<div class="column3" id="valve_type_view">xxx</div>
				<div class="column4">48.</div>
				<div class="column5" >Pilot Manufacturer</div>
				<div class="column9">Versa</div>
				<div class="column1">11.</div>
				<div class="column2">New or Existing?</div>
				<div class="column3" id="new_existing_view">xxx</div>
				<div class="column4">49.</div>
				<div class="column5" >Pilot Model</div>
				<div class="column9">Versa</div>
				<div class="column1">12.</div>
				<div class="column2">Valve Manufacturer</div>
				<div class="column3" style="padding-top: 0px;"><input style="font-size: 7px; height: 5px; text-align: center;" type="text" name="valve_man" <?php echo "value='{$Valve_Man[0]}'";?>></div>
				<div class="column4">50.</div>
				<div class="column5" >Local Reset Required?</div>
				<div class="column9">Yes</div>
				<div class="column1">13.</div>
				<div class="column2">Valve Model No.</div>
				<div class="column3" style="padding-top: 0px;"><input style="font-size: 7px; height: 5px; text-align: center;" type="text" name="valve_man" <?php echo "value='{$Valve_Model[0]}'";?>></div>
				<div class="column4">51.</div>
				<div class="column5">Open Solenoid Operation (ETO, DTO, ETC, DTC)</div>
				<div class="column9">ETO</div>
				<div class="column1">14.</div>
				<div class="column2">Size (in)</div>
				<div class="column3"><?php echo $Diameter ?></div>
				<div class="column4">52.</div>
				<div class="column5">Close Solenoid Operation (ETO, DTO, ETC, DTC)</div>
				<div class="column9">ETC</div>
				<div class="column1">15.</div>
				<div class="column2">ANSI Rating</div>
				<div class="column3"><?php echo $ANSI_rating ?></div>
				<div class="column4">53.</div>
				<div class="column5">Control Schematic No.</div>
				<div class="column9">ETC</div>
				<div class="column1">16.</div>
				<div class="column2">End Connections</div>
				<div class="column3" id="end_connection_view">xxx</div>
				<div class="column4">54.</div>
				<div class="column5">Local Position Indicator</div>
				<div class="column9">Yes</div>
				<div class="column1">17.</div>
				<div class="column2">Maximum Allowable Stem Torque (MAST), in-lbf</div>
				<div class="column3"><?php echo $Max_All_Stem_Torque ?></div>
				<div class="column4">55.</div>
				<div class="column5">Fail Position (Open, Closed or Last)</div>
				<div class="column9">Last</div>
				<div class="column1">18.</div>
				<div class="column2">Stem Design (2-pin / 4-pin)</div>
				<div class="column3">2-pin</div>
				<div class="column4">56.</div>
				<div class="column5">Limit Switch, Contact Type / No. Open / No. Closed</div>
				<div class="column6">N/A</div>
				<div class="column7">N/A</div>
				<div class="column8">N/A</div>
				<div class="column1">19.</div>
				<div class="column2">Maximum Differential Across Valve, psig</div>
				<div class="column3"><?php echo $Diff_Pressure ?></div>
				<div class="column4">57.</div>
				<div class="column5">Limit Switches Manufacturer</div>
				<div class="column9">Westlock</div>
				<div class="column1">20.</div>
				<div class="column2">Valve Break Torque without Safety Factor, in-lbf</div>
				<div class="column3"><?php echo $Break_Torque ?></div>
				<div class="column4">58.</div>
				<div class="column5">Limit Switches Model Number</div>
				<div class="column9">AccuTrak</div>
				<div class="column1">21.</div>
				<div class="column2">Valve Run Torque without Safety Factor, in-lbf</div>
				<div class="column3"><?php echo $Run_Torque ?></div>
				<div class="column4">59.</div>
				<div class="column5">Auxiliary Switch</div>
				<div class="column9">AccuTrak</div>
				<div class="column1">22.</div>
				<div class="column2">Safety Factor (low temp factor included if required)</div>
				<div class="column3">1.5</div>
				<div class="column4">60.</div>
				<div class="column5">Speed Control</div>
				<div class="column9">Versa BC-3 (2)</div>
				<div class="column1">23.</div>
				<div class="column2">Design Break Torque with Safety Factor, in-lbf</div>
				<div class="column3"><?php echo ceil($Break_Torque_SF) ?></div>
				<div class="column4">61.</div>
				<div class="column5">Surge Suppression Diode Across Solenoid Coil</div>
				<div class="column9">Yes</div>
				<div class="column1">24.</div>
				<div class="column2">Design Run Torque with Safety Factor, in-lbf</div>
				<div class="column3"><?php echo $Run_Torque_SF ?></div>
				<div class="column4">62.</div>
				<div class="column5">Hydraulic Override</div>
				<div class="column9">No</div>
				<div class="column1">25.</div>
				<div class="column2">Valve Mount (Horizontal / Vertical)</div>
				<div class="column3" id="valve_mount_view">xxx</div>
				<div class="column4">63.</div>
				<div class="column5">Jackscrew Override</div>
				<div class="column9">No</div>
				<div class="column1">26.</div>
				<div class="column2">Stem Mount (Horizontal / Vertical)</div>
				<div class="column3" id="stem_mount_view">xxx</div>
				<div class="column4">64.</div>
				<div class="column5">Stainless Steel Tag Bearing Valve Tag Number</div>
				<div class="column9">Yes</div>
				<div class="column1">27.</div>
				<div class="column2">Actuator Orientation to Pipe</div>
				<div class="column3" id="Act_Orientation_view">xxx</div>
				<div class="column4">65.</div>
				<div class="column5">Control Tubing Size / WT / Material</div>
				<div class="column9">3/8" x 0.049", 316 SS</div>
				<div class="column1">28.</div>
				<div class="column2">Extension Length, in</div>
				<div class="column3">N/A</div>
				<div class="column4">66.</div>
				<div class="column5">Control Tubing Fittings</div>
				<div class="column9">316 SS Swagelok</div>
				<div class="column1">29.</div>
				<div class="column2">Mounting Projection (Horizontal / Vertical)</div>
				<div class="column3" id="mounting_proj_view">xxx</div>
				<div class="column4">67.</div>
				<div class="column5">Volume Tank</div>
				<div class="column9">No</div>
				<div class="header3">ACTUATOR SPECIFICATION</div>
				<div class="column4">68.</div>
				<div class="column5">Supply Valve</div>
				<div class="column9">Fisher 1301F-3</div>
				<div class="column1">30.</div>
				<div class="column2">Actuator Manufacturer</div>
				<div class="column3">xxx</div>
				<div class="column4">69.</div>
				<div class="column5">Supply Check Valve</div>
				<div class="column9">No</div>
				<div class="column1">31.</div>
				<div class="column2">Actuator Model No.</div>
				<div class="column3"><?php echo $Actuator ?></div>
				<div class="column4">70.</div>
				<div class="column5">Supply Filters</div>
				<div class="column9">Welker F8</div>
				<div class="column1">32.</div>
				<div class="column2">Power (Pneumatic/Electric/Hydraulic/Gas-Hydraulic)</div>
				<div class="column3" id="power_view">xxx</div>
				<div class="column4">71.</div>
				<div class="column5">Supply Regulators</div>
				<div class="column9">Fisher 67CFR-226/SB</div>
				<div class="column1">33.</div>
				<div class="column2">Spring Return or Double Acting</div>
				<div class="column3" id="return_type_view">xxx</div>
				<div class="column4">72.</div>
				<div class="column5">Supply Relief Valves</div>
				<div class="column9">UCI-CV4 - 225psig</div>
				<div class="column1">34.</div>
				<div class="column2">Break Torque, in-lbf</div>
				<div class="column3"><?php echo $Max_Torque_op ?></div>
				<div class="column4">73.</div>
				<div class="column5">Supply Relief Valves</div>
				<div class="column9">UCI-CV4 - <?php echo $Relief_Pressure ?>psig</div>
				<div class="column1">35.</div>
				<div class="column2">Run Torque, in-lbf</div>
				<div class="column3"><?php echo $Min_Run_Torque ?></div>
				<div class="column4">74.</div>
				<div class="column5">Supply Pressure Gauge</div>
				<div class="column9">Blue Ribbon BR302L-254I</div>
				<div class="column1">36.</div>
				<div class="column2">Relief Break Torque, in-lb-f</div>
				<div class="column3"><?php echo $Min_Relief_Torque ?></div>
				<div class="column4">75.</div>
				<div class="column5">Supply Pressure Gauge</div>
				<div class="column9">Blue Ribbon BR302L-254F</div>
				<div class="column1">37.</div>
				<div class="column2">Operating Time, sec</div>
				<div class="column3" id="op_time_view">xxx</div>
				<div class="column4">76.</div>
				<div class="column5">3-Way Ball Valve</div>
				<div class="column9">Swagelok SS-43GXF4-LL</div>
				<div class="column1">38.</div>
				<div class="column2" id="Other_view">Other</div>
				<div class="column3">xxx</div>
				<div class="column4">77.</div>
				<div class="column5">Palm Buttons (lockable)</div>
				<div class="column9">Versa VSI-3301-LOVE-NGST</div>
				<div class="header5">COMMENTS</div>
			</div>	
			<div class="grid-container4">
				<div class="column41">78.</div>
				<div class="column42"></div>
				<div class="column41">79.</div>
				<div class="column42"></div>
				<div class="column41">80.</div>
				<div class="column42"></div>
				<div class="column41">81.</div>
				<div class="column42"></div>
				<div class="column41">82.</div>
				<div class="column42"></div>
				<div class="column41">83.</div>
				<div class="column42"></div>
				<div class="column41">84.</div>
				<div class="column42"></div>
				<div class="column41">85.</div>
				<div class="column42"></div>
				<div class="column41">86.</div>
				<div class="column42"></div>
				<div class="column41">87.</div>
				<div class="column42"></div>
				<div class="column41">88.</div>
				<div class="column42"></div>
				<div class="column41">89.</div>
				<div class="column42"></div>
				<div class="column41">90.</div>
				<div class="column42"></div>
				<div class="column41">91.</div>
				<div class="column42"></div>
				<div class="column41">92.</div>
				<div class="column42"></div>
				<div class="column41">93.</div>
				<div class="column42"></div>
				<div class="column41">94.</div>
				<div class="column42"></div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="scripts/Act_Data_Sheet_js.js"></script>
</body>
</html>