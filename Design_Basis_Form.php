<?php
//This statement is triggered when you the back button from the 
//the Design_Basis_Form2 page, or coming back from the Design Basis Manual  page.
if (!empty($_POST['SiteName'])) {
	include "scripts/form_data.php";
	include "scripts/form_data2.php";
}

//This statement is triggered when you add a form from the index page.
elseif ($_FILES["fileToUpload"]["size"]!=0) {
	$FileLoc = "uploads/";
  	$FileName = $_FILES["fileToUpload"]["name"];
  	$NewFile = $FileLoc . $FileName;
  	move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $NewFile);

  	include "scripts/readdata_form1.php";
}

//This statement is triggered if you are starting a brand new form.
else {
	include "scripts/set_defaults.php";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Design Basis Form</title>
	<link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet">
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
		.grid-it3 {
			margin-bottom: 10px;
		}
		.grid-it4 {
			margin: 10px;
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
		h3 {
			margin: 10px auto 10px 10px;
		}
	</style>
</head>
<body>
	<div class="flex-con bord">
		<div class="head-container1"><img class="logo" src="images/silverback_gorilla.jpg"></div>
		<div class="brand">EASY ENGINEERING!</div>
		<div class="head-container2">Presented By:<br>SilverBack TECH</div>
	</div>
	<form action="Design_Basis_Form_2.php" method="post" enctype="multipart/form-data">
	<div class="grid-con bord grid-it3">
		<h3 style="grid-column: 1 / span 3;"><u>Workorder & Eng. Company Information</u></h3>
		<div class="grid-it">
				Site Name: <br>
				<input type="text" name="SiteName" <?php echo "value='". $Site_Name . "'";?>>
		</div>
		<div class="grid-it">
				Communications Work Order Number: <br>
				<input type="text" name="CommWorkOrd" value=<?php echo($Comm_Work_Ord);?>>
		</div>
		<div class="grid-it">
				Construct Mech Work Order Number: <br>
				<input type="text" name="ConstWorkOrd" value=<?php echo($Const_Work_Ord);?>>
		</div>
		<div class="grid-it">
				EN Project Number: <br>
				<input type="text" name="ENProjNum" value=<?php echo($EN_Proj_Num);?>>
		</div>
		<div class="grid-it">
				Revision: <br>
					<select name="Rev">
						<option value="IFR">Issued For Review</option>
						<option value="IFB">Issued For Bid</option>
						<option value="Pre-IFC">Pre-IFC</option>
						<option value="IFC">Issued For Construction (IFC)</option>
					</select>
		</div>
		<div class="grid-it">
				Prepared By: <br>
				<input type="text" name="Prepared_by" value=<?php echo($Prep_By);?>>
		</div>
		<div class="grid-it">
				Submittal Date: <br>
				<input type="date" name="SubDate" value=<?php echo($Date1);?>>
		</div>
	</div>

	<div class="grid-con bord grid-it3">
		<h3 style="grid-column: 1 / span 3;"><u>Site Location Information</u></h3>
		<div class="grid-it">
				Street Address: <br>
				<input type="text" name="Street_Add" <?php echo "value='". $Street_Add . "'"?>>
		</div>
		<div class="grid-it">
				City: <br>
				<input type="text" name="City" <?php echo "value='". $City . "'"?>>
		</div>
		<div class="grid-it">
				Latitude & Longitude: <br>
				<input type="text" name="Lat" value=<?php echo($Lat);?>>
				<input type="text" name="Long" value=<?php echo($Long);?>>
		</div>
		<div class="grid-it">
				Section: <br>
				<input type="text" name="Section" value=<?php echo($Section);?>>
		</div>
		<div class="grid-it">
				Township: <br>
				<input type="text" name="Township" value=<?php echo($Township);?>>
		</div>
		<div class="grid-it">
				Range: <br>
				<input type="text" name="Range" value=<?php echo($Range);?>>
		</div>
		<div class="grid-it">
				Division: <br>
				<input type="text" name="Division" value=<?php echo($Division);?>>
		</div>
		<div class="grid-it">
				County: <br>
			<input type="text" name="County" value=<?php echo($County);?>>
		</div>
	</div>

	<div class="grid-con bord grid-it3">
		<h3 style="grid-column: 1 / span 3;"><u>Scope Information</u></h3>
		<div class="grid-it">
				Scope: <br>
				<textarea rows="4" cols="50" name="Scope"><?php echo($Scope);?></textarea>
		</div>
		<div class="grid-it">
				Scope Bullet 1: <br>
				<textarea rows="4" cols="50" name="ScopeB1"><?php echo($ScopeB1);?></textarea>
		</div>
		<div class="grid-it">
				Scope Bullet 2: <br>
				<textarea rows="4" cols="50" name="ScopeB2"><?php echo($ScopeB2);?></textarea>
		</div>
		<div class="grid-it">
				Scope Bullet 3: <br>
				<textarea rows="4" cols="50" name="ScopeB3"><?php echo($ScopeB3);?></textarea>
		</div>
		<div class="grid-it">
				Scope Bullet 4: <br>
				<textarea rows="4" cols="50" name="ScopeB4"><?php echo($ScopeB4);?></textarea>
		</div>
		<div class="grid-it">
				Scope Bullet 5: <br>
				<textarea rows="4" cols="50" name="ScopeB5"><?php echo($ScopeB5);?></textarea>
		</div>
	</div>

	<div class="grid-con bord grid-it3">
		<h3 style="grid-column: 1 / span 3;"><u>Project Specific Pictures</u></h3>
		<div class="grid-it4">
				Picture - Diagram of Proposed Work: <br>
				<input type="file" name="fileToUploadPW" id="fileToUploadPW">
		</div>
		<div class="grid-it4">
				Picture - Isometric Drawing: <br>
				<input type="file" name="fileToUploadID" id="fileToUploadID">
		</div>
		<div class="grid-it4">
				Valve 1 Picture (Nameplate & Picture): <br>
				<input type="file" name="fileToUploadV1" id="fileToUploadV1">
		</div>
		<div class="grid-it4">
				Valve 2 Picture (Nameplate & Picture): <br>
				<input type="file" name="fileToUploadV2" id="fileToUploadV2">
		</div>
		<div class="grid-it4">
				Valve 3 Picture (Nameplate & Picture): <br>
				<input type="file" name="fileToUploadV3" id="fileToUploadV3">
		</div>
		<div class="grid-it4">
				Valve 4 Picture (Nameplate & Picture): <br>
				<input type="file" name="fileToUploadV4" id="fileToUploadV4">
		</div>
		<div class="grid-it4">
				Valve 5 Picture (Nameplate & Picture): <br>
				<input type="file" name="fileToUploadV5" id="fileToUploadV5">
		</div>
	</div>

		<div style="display: none;">

			<input type="hidden" name="Valve_1_Valve_Tag" <?php echo "value='". $Valve_1_VT . "'";?>>
			<input type="hidden" name="Valve_1_Ansi_Class" <?php echo "value='". $Valve_1_AC . "'";?>>
			<input type="hidden" name="Valve_1_Size" <?php echo "value='". $Valve_1_Size . "'";?>>
			<input type="hidden" name="Valve_1_Man" <?php echo "value='". $Valve_1_Man . "'";?>>
			<input type="hidden" name="Valve_1_Model" <?php echo "value='". $Valve_1_Model . "'";?>>
			<input type="hidden" name="Valve_1_Serial" <?php echo "value='". $Valve_1_Serial . "'";?>>
			<input type="hidden" name="Valve_1_MDP" <?php echo "value='". $Valve_1_MDP . "'";?>>
			<input type="hidden" name="Valve_1_TR" <?php echo "value='". $Valve_1_TR . "'";?>>
			<input type="hidden" name="Valve_1_MWS" <?php echo "value='". $Valve_1_MWS . "'";?>>
			<input type="hidden" name="Valve_1_BAM" <?php echo "value='". $Valve_1_BAM . "'"?>>
			<input type="hidden" name="Valve_1_PLMAOP" <?php echo "value='". $Valve_1_PLMAOP . "'";?>>
			<input type="hidden" name="Valve_1_PLDP" <?php echo "value='". $Valve_1_PLDP . "'";?>>
			<input type="hidden" name="Valve_1_Pipe_Grade" <?php echo "value='". $Valve_1_Pipe_Grade . "'";?>>
			<input type="hidden" name="Valve_1_TS" value='3/8"'>

			<input type="hidden" name="Valve_2_Valve_Tag" <?php echo "value='". $Valve_2_VT . "'"?>>
			<input type="hidden" name="Valve_2_Ansi_Class" <?php echo "value='". $Valve_2_AC . "'";?>>
			<input type="hidden" name="Valve_2_Size" <?php echo "value='". $Valve_2_Size . "'";?>>
			<input type="hidden" name="Valve_2_Man" <?php echo "value='". $Valve_2_Man . "'";?>>
			<input type="hidden" name="Valve_2_Model" <?php echo "value='". $Valve_2_Model . "'";?>>
			<input type="hidden" name="Valve_2_Serial" <?php echo "value='". $Valve_2_Serial . "'";?>>
			<input type="hidden" name="Valve_2_MDP" <?php echo "value='". $Valve_2_MDP . "'";?>>
			<input type="hidden" name="Valve_2_TR" <?php echo "value='". $Valve_2_TR . "'";?>>
			<input type="hidden" name="Valve_2_MWS" <?php echo "value='". $Valve_2_MWS . "'";?>>
			<input type="hidden" name="Valve_2_BAM" <?php echo "value='". $Valve_2_BAM . "'"?>>
			<input type="hidden" name="Valve_2_PLMAOP" <?php echo "value='". $Valve_2_PLMAOP . "'";?>>
			<input type="hidden" name="Valve_2_PLDP" <?php echo "value='". $Valve_2_PLDP . "'";?>>
			<input type="hidden" name="Valve_2_Pipe_Grade" <?php echo "value='". $Valve_2_Pipe_Grade . "'";?>>
			<input type="hidden" name="Valve_2_TS" value='3/8"'>

			<input type="hidden" name="Valve_3_Valve_Tag" <?php echo "value='". $Valve_3_VT . "'"?>>
			<input type="hidden" name="Valve_3_Ansi_Class" <?php echo "value='". $Valve_3_AC . "'";?>>
			<input type="hidden" name="Valve_3_Size" <?php echo "value='". $Valve_3_Size . "'";?>>
			<input type="hidden" name="Valve_3_Man" <?php echo "value='". $Valve_3_Man . "'";?>>
			<input type="hidden" name="Valve_3_Model" <?php echo "value='". $Valve_3_Model . "'";?>>
			<input type="hidden" name="Valve_3_Serial" <?php echo "value='". $Valve_3_Serial . "'";?>>
			<input type="hidden" name="Valve_3_MDP" <?php echo "value='". $Valve_3_MDP . "'";?>>
			<input type="hidden" name="Valve_3_TR" <?php echo "value='". $Valve_3_TR . "'";?>>
			<input type="hidden" name="Valve_3_MWS" <?php echo "value='". $Valve_3_MWS . "'";?>>
			<input type="hidden" name="Valve_3_BAM" <?php echo "value='". $Valve_3_BAM . "'"?>>
			<input type="hidden" name="Valve_3_PLMAOP" <?php echo "value='". $Valve_3_PLMAOP . "'";?>>
			<input type="hidden" name="Valve_3_PLDP" <?php echo "value='". $Valve_3_PLDP . "'";?>>
			<input type="hidden" name="Valve_3_Pipe_Grade" <?php echo "value='". $Valve_3_Pipe_Grade . "'";?>>
			<input type="hidden" name="Valve_3_TS" value='3/8"'>

			<input type="hidden" name="Valve_4_Valve_Tag" <?php echo "value='". $Valve_4_VT . "'"?>>
			<input type="hidden" name="Valve_4_Ansi_Class" <?php echo "value='". $Valve_4_AC . "'";?>>
			<input type="hidden" name="Valve_4_Size" <?php echo "value='". $Valve_4_Size . "'";?>>
			<input type="hidden" name="Valve_4_Man" <?php echo "value='". $Valve_4_Man . "'";?>>
			<input type="hidden" name="Valve_4_Model" <?php echo "value='". $Valve_4_Model . "'";?>>
			<input type="hidden" name="Valve_4_Serial" <?php echo "value='". $Valve_4_Serial . "'";?>>
			<input type="hidden" name="Valve_4_MDP" <?php echo "value='". $Valve_4_MDP . "'";?>>
			<input type="hidden" name="Valve_4_TR" <?php echo "value='". $Valve_4_TR . "'";?>>
			<input type="hidden" name="Valve_4_MWS" <?php echo "value='". $Valve_4_MWS . "'";?>>
			<input type="hidden" name="Valve_4_BAM" <?php echo "value='". $Valve_4_BAM . "'"?>>
			<input type="hidden" name="Valve_4_PLMAOP" <?php echo "value='". $Valve_4_PLMAOP . "'";?>>
			<input type="hidden" name="Valve_4_PLDP" <?php echo "value='". $Valve_4_PLDP . "'";?>>
			<input type="hidden" name="Valve_4_Pipe_Grade" <?php echo "value='". $Valve_4_Pipe_Grade . "'";?>>
			<input type="hidden" name="Valve_4_TS" value='3/8"'>

			<input type="hidden" name="Valve_5_Valve_Tag" <?php echo "value='". $Valve_5_VT . "'"?>>
			<input type="hidden" name="Valve_5_Ansi_Class" <?php echo "value='". $Valve_5_AC . "'";?>>
			<input type="hidden" name="Valve_5_Size" <?php echo "value='". $Valve_5_Size . "'";?>>
			<input type="hidden" name="Valve_5_Man" <?php echo "value='". $Valve_5_Man . "'";?>>
			<input type="hidden" name="Valve_5_Model" <?php echo "value='". $Valve_5_Model . "'";?>>
			<input type="hidden" name="Valve_5_Serial" <?php echo "value='". $Valve_5_Serial . "'";?>>
			<input type="hidden" name="Valve_5_MDP" <?php echo "value='". $Valve_5_MDP . "'";?>>
			<input type="hidden" name="Valve_5_TR" <?php echo "value='". $Valve_5_TR . "'";?>>
			<input type="hidden" name="Valve_5_MWS" <?php echo "value='". $Valve_5_MWS . "'";?>>
			<input type="hidden" name="Valve_5_BAM" <?php echo "value='". $Valve_5_BAM . "'"?>>
			<input type="hidden" name="Valve_5_PLMAOP" <?php echo "value='". $Valve_5_PLMAOP . "'";?>>
			<input type="hidden" name="Valve_5_PLDP" <?php echo "value='". $Valve_5_PLDP . "'";?>>
			<input type="hidden" name="Valve_5_Pipe_Grade" <?php echo "value='". $Valve_5_Pipe_Grade . "'";?>>
			<input type="hidden" name="Valve_5_TS" value='3/8"'>
		</div>
		<div class="grid-it2">
        		<input type="submit" value="Submit">
       	</div>
    </div>
</form>
</body>
</html>