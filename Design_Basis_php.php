<?php

include "scripts/form_data.php";
include "scripts/form_data2.php";
$NewPic1 = filter_input(INPUT_POST, 'NewPic1');
$NewPic2 = filter_input(INPUT_POST, 'NewPic2');
$NewPic3 = filter_input(INPUT_POST, 'NewPic3');
$NewPic4 = filter_input(INPUT_POST, 'NewPic4');
$NewPic5 = filter_input(INPUT_POST, 'NewPic5');
$NewPic6 = filter_input(INPUT_POST, 'NewPic6');
$NewPic7 = filter_input(INPUT_POST, 'NewPic7');

include "header_DBasis.php";
include "scripts/valve_class.php";

$Valve1 = new VALVE($Valve_1_VT,$Valve_1_AC,$Valve_1_Size,$Valve_1_Man,$Valve_1_Model,$Valve_1_Serial,$Valve_1_MDP,$Valve_1_TR,$Valve_1_MWS,$Valve_1_BAM,$Valve_1_PLMAOP,$Valve_1_PLDP,$Valve_1_Pipe_Grade,$Valve_1_TS);
$Valve2 = new VALVE($Valve_2_VT,$Valve_2_AC,$Valve_2_Size,$Valve_2_Man,$Valve_2_Model,$Valve_2_Serial,$Valve_2_MDP,$Valve_2_TR,$Valve_2_MWS,$Valve_2_BAM,$Valve_2_PLMAOP,$Valve_2_PLDP,$Valve_2_Pipe_Grade,$Valve_2_TS);
$Valve3 = new VALVE($Valve_3_VT,$Valve_3_AC,$Valve_3_Size,$Valve_3_Man,$Valve_3_Model,$Valve_3_Serial,$Valve_3_MDP,$Valve_3_TR,$Valve_3_MWS,$Valve_3_BAM,$Valve_3_PLMAOP,$Valve_3_PLDP,$Valve_3_Pipe_Grade,$Valve_3_TS);
$Valve4 = new VALVE($Valve_4_VT,$Valve_4_AC,$Valve_4_Size,$Valve_4_Man,$Valve_4_Model,$Valve_4_Serial,$Valve_4_MDP,$Valve_4_TR,$Valve_4_MWS,$Valve_4_BAM,$Valve_4_PLMAOP,$Valve_4_PLDP,$Valve_4_Pipe_Grade,$Valve_4_TS);
$Valve5 = new VALVE($Valve_5_VT,$Valve_5_AC,$Valve_5_Size,$Valve_5_Man,$Valve_5_Model,$Valve_5_Serial,$Valve_5_MDP,$Valve_5_TR,$Valve_5_MWS,$Valve_5_BAM,$Valve_5_PLMAOP,$Valve_5_PLDP,$Valve_5_Pipe_Grade,$Valve_5_TS);

include "scripts/write_Data1_2.php";

$File_to_DLoad = "uploads/" . $Site_Name . ".txt";
?>

<body>
	<div id="hidden_file"; style="display: none;"><?php echo $File_to_DLoad;?></div>
	<a id="File_to_downL"; style="position: absolute; left: 50px; top: 50px;" href="" download>Download Your CSV File</a>
	<script type="text/javascript">
		var fname = document.getElementById("hidden_file").innerHTML;
		document.getElementById("File_to_downL").href = fname;
	</script>
	<a href="Design_basis_index.php">
		<button style="position: absolute; left: 50px; top: 100px;" type="button">Home</button>
	</a>
	<form style="position: absolute; left: 50px; top: 150px;" method="post" action="Design_Basis_Form.php">
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
		<input type="hidden" name="Scope" <?php echo "value='". $Scope . "'"?>>
		<input type="hidden" name="ScopeB1" <?php echo "value='". $ScopeB1 . "'"?>>
		<input type="hidden" name="ScopeB2" <?php echo "value='". $ScopeB2 . "'"?>>
		<input type="hidden" name="ScopeB3" <?php echo "value='". $ScopeB3 . "'"?>>
		<input type="hidden" name="ScopeB4" <?php echo "value='". $ScopeB4 . "'"?>>
		<input type="hidden" name="ScopeB5" <?php echo "value='". $ScopeB5 . "'"?>>

		<input type="hidden" name="Valve_1_Valve_Tag" <?php echo "value='". $Valve_1_VT . "'";?>>
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

		<input type="submit" value="Return to Form">
	</form>
	<div class="page_1">
		<div class="top_section">
			<div id="xcel_image"><img src="images/EN-image.svg"></div>
			<div class="xcel_image5 DB">Design Basis - Automation</div>
			<hr class="top_break">
			<div class="xcel_image1"><span><?php echo htmlspecialchars($Site_Name); ?></span> - Valve Automation</div>
			<div class="xcel_image2">Xcel CNST COMM Work Order No. <span><?php echo htmlspecialchars($Comm_Work_Ord); ?></span></div>	
			<div class="xcel_image2">Xcel CNST MECH Work Order No. <span><?php echo htmlspecialchars($Const_Work_Ord); ?></span></div>
			<div class="xcel_image2">ENE Project No. <?php echo htmlspecialchars($EN_Proj_Num); ?></div>
			<div class="xcel_image4">Prepared by</div>
			<div><img src="images/EN-image-2.svg" class="image2"></div>
			<div class="xcel_image4 APPROVAL">APPROVALS</div>
			<div>
				<table class="table1 xcel_image5 table1_width">
					<tr>
						<th colspan="6" class="table1_bc">Required Approval</th>
					</tr>
					<tr>
						<th>Rev</th>
						<th class="table1_th"></th>
						<th>Prepared By</th>
						<th>Date</th>
						<th>Approved By</th>
						<th>Date</th>
					</tr>
					<tr>
						<td><?php
							if ($Rev == 'IFR') {
								echo '<span>Issued For Review</span>';
							}
							else if ($Rev == 'IFB'){
								echo '<span>Issued For Bid</span>';
							}
							else if ($Rev == 'Pre-IFC') {
								echo '<span>Issued For Construction</span>';
							}
							else if ($Rev == 'IFC') {
								echo '<span>Issued For Construction</span>';
							}
							?>
						</td>
						<td></td>
						<td><?php 
							if (strlen($Prep_By) < 4) {
								echo htmlspecialchars($Prep_By);
							}
							else {
								echo htmlspecialchars(substr($Prep_By, 0, 3));
							}
							?>
						</td>
						<td><?php echo ($Date1); ?></td>
						<td><?php
							if (isset($Prep_By)) {
								echo '<span>CRM</span>';
							}
							?>
						</td>
						<td><?php echo ($Date1); ?></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				</table>
			</div>
		</div>
			<hr class="break_1 top_break">
			<div class="xcel_image5 bottom_section">
				<div>Document No. <?php echo htmlspecialchars($EN_Proj_Num); ?> - Design Basis 0</div>
				<div>Project: <span><?php echo htmlspecialchars($Site_Name); ?></span> - Valve Automation</div>
				<div class="page-break">ENE Project #: <?php echo htmlspecialchars($EN_Proj_Num); ?></div>
			</div>
	</div>
	<div class="page_2">
		<div class="top_section">
			<div id="xcel_image"><img src="images/EN-image.svg"></div>
			<div class="xcel_image5 DB">Design Basis - Automation</div>
			<hr class="top_break">
			<table class="table2 xcel_image5 table2_width">
				<tr>
					<td class="table2_tr_td1">1.</td>
					<td class="table2_td2">LOCATION DETAILS</td>
					<td class="table2_td3">3</td>
				</tr>
				<tr>
					<td class="table2_td1">2.</td>
					<td class="table2_td2">PROJECT SCOPE</td>
					<td class="table2_td3">3</td>
				</tr>
				<tr>
					<td class="table2_td1">3.</td>
					<td class="table2_td2">DESIGN INPUTS</td>
					<td class="table2_td3">3</td>
				</tr>
				<tr>
					<td class="table2_td1">4.</td>
					<td class="table2_td2">PROGRAMMING</td>
					<td class="table2_td3">4</td>
				</tr>
				<tr>
					<td class="table2_td1">5.</td>
					<td class="table2_td2">ATTACHMENTS</td>
					<td class="table2_td3">4</td>
				</tr>
				<tr>
					<td class="table2_td11">5.1</td>
					<td class="table2_td2">Diagrams, Sketches, and Other Documents</td>
					<td class="table2_td3">4</td>
				</tr>
				<tr>
					<td class="table2_td11">5.2</td>
					<td class="table2_td2">Diagram of Proposed Work</td>
					<td class="table2_td3">4</td>
				</tr>
				<tr>
					<td class="table2_td11">5.3</td>
					<td class="table2_td2">Site Photos</td>
					<?php if ($NewPic6 != "uploads/") { 
						echo "<td class='table2_td3'>5-6</td>";
					}
					else {
						echo "<td class='table2_td3'>5</td>";
					}
					?>
				</tr>
			</table>
		</div>
			<hr class="break_2 top_break">
			<div class="xcel_image5 bottom_section">
				<div>Document No. <?php echo htmlspecialchars($EN_Proj_Num); ?> - Design Basis 0</div>
				<div>Project: <span><?php echo htmlspecialchars($Site_Name); ?></span> - Valve Automation</div>
				<div class="page-break">ENE Project #: <?php echo htmlspecialchars($EN_Proj_Num); ?></div>
			</div>
	</div>
	<div class="page_3">
		<div class="top_section">
			<div id="xcel_image"><img src="images/EN-image.svg"></div>
			<div class="xcel_image5 DB">Design Basis - Automation</div>
			<hr class="top_break">
			<div class="xcel_image6 page3_locationline">1 LOCATION</div>
			<table class="table3">
				<tr class="xcel_image4">
					<th class="page3_item">Item</th>
					<th class="page3_description">Description</th>
				</tr>
				<tr class="xcel_image5">
					<td>Site Location</td>
					<td><?php echo htmlspecialchars($Site_Name); ?>, <?php echo htmlspecialchars($Street_Add); ?>, <?php echo htmlspecialchars($City); ?> CO;</td>
				</tr>
				<tr class="xcel_image5">
					<td></td>
					<td><?php echo htmlspecialchars($Lat); ?>°N, <?php echo htmlspecialchars($Long); ?>°W</td>
				</tr>
				<tr class="xcel_image5">
					<td></td>
					<td>Sec <?php echo htmlspecialchars($Section); ?>, <?php echo htmlspecialchars($Township); ?>, <?php echo htmlspecialchars($Range); ?>; <?php echo htmlspecialchars($Division); ?> Division; <?php echo htmlspecialchars($County); ?> County</td>
				</tr>
			</table>
			<div class="xcel_image6 page3_2line">2</div>
			<div class="xcel_image6 page3_scopeline1">PROJECT SCOPE</div>
			<div class="xcel_image5"><?php echo htmlspecialchars($Scope); ?> The proposed project scope includes:
			</div>
			<?php
			echo "<div class='xcel_image5' style='height: 125px; margin: 0 7.5%;'>";
					if (!(empty($ScopeB1)) and !(empty($ScopeB2)) and !(empty($ScopeB3)) and !(empty($ScopeB4)) and !(empty($ScopeB5))) {
						echo "<ul>
							<li style='padding-top: 3px;'>";
						echo $ScopeB1;
						echo "</li>
							<li style='padding-top: 3px;'>";
						echo $ScopeB2;
						echo "</li>
							  <li style='padding-top: 3px;'>";
						echo $ScopeB3;
						echo "</li>
							  <li style='padding-top: 3px;'>";
						echo $ScopeB4;
						echo "</li>
							  <li style='padding-top: 3px;'>";
						echo $ScopeB5;
						echo "</li>						
						</ul>";
					}
					elseif (!(empty($ScopeB1)) and !(empty($ScopeB2)) and !(empty($ScopeB3)) and !(empty($ScopeB4)) and (empty($ScopeB5))) {
						echo "<ul>
							<li style='padding-top: 7px;'>";
						echo $ScopeB1;
						echo "</li>
							<li style='padding-top: 7px;'>";
						echo $ScopeB2;
						echo "</li>
							  <li style='padding-top: 7px;'>";
						echo $ScopeB3;
						echo "</li>
							  <li style='padding-top: 7px;'>";
						echo $ScopeB4;
						echo "</li>
						</ul>";
					}
					elseif (!(empty($ScopeB1)) and !(empty($ScopeB2)) and !(empty($ScopeB3)) and (empty($ScopeB4)) and (empty($ScopeB5))) {
						echo "<ul>
							<li style='padding-top: 12px;'>";
						echo $ScopeB1;
						echo "</li>
							<li style='padding-top: 12px;'>";
						echo $ScopeB2;
						echo "</li>
							  <li style='padding-top: 12px;'>";
						echo $ScopeB3;
						echo "</li>
						</ul>";
					}
					elseif (!(empty($ScopeB1)) and !(empty($ScopeB2)) and (empty($ScopeB3)) and (empty($ScopeB4)) and (empty($ScopeB5))) {
						echo "<ul>
							<li style='padding-top: 15px;'>";
						echo $ScopeB1;
						echo "</li>
							<li style='padding-top: 15px;'>";
						echo $ScopeB2;
						echo "</li>
						</ul>";
					}
					else {
						echo "<ul>
							<li style='padding-top: 30px;'>";
						echo $ScopeB1;
						echo "</li>
						</ul>";
					}
			echo "</div>";
			?>
			<div class="xcel_image6 page3_3line">3</div>
			<div class="xcel_image6 page3_designinputs">DESIGN INPUTS</div>

				<?php
					//Put the valve tabe in the html document. Valve table is 
					include "scripts/ValveTable.php";
				?>

			</div>
			<hr class="top_break">
			<div class="xcel_image5 bottom_section">
				<div>Document No. <?php echo htmlspecialchars($EN_Proj_Num); ?> - Design Basis 0</div>
				<div>Project: <span><?php echo htmlspecialchars($Site_Name); ?></span> - Valve Automation</div>
				<div class="page-break">ENE Project #: <?php echo htmlspecialchars($EN_Proj_Num); ?></div>
			</div>
	</div>
	<div class="page_4">
		<div class="top_section">
			<div id="xcel_image"><img src="images/EN-image.svg"></div>
			<div class="xcel_image3 DB">Design Basis - Automation</div>
			<hr class="top_break">
			<div class="xcel_image6 page4_4line">4</div>
			<div class="xcel_image6 page4_4Programming">PROGRAMMING</div>
			<div class="xcel_image5 page4_Prog_Desc1">The program for <?php echo $Site_Name ?> VS will be modified to include one (1) newly automated valves.  A copy of the standard RCV program will be used and updated with site-specific values.</div>
			<div class="xcel_image5 page4_Prog_Desc2">Programming will begin upon completion of the IFC drawing package.</div>
			<div class="xcel_image5 page4_Prog_Desc3">SCADA 210 LISTUS</div>
			<div class="xcel_image5 page4_Prog_Desc4">(210 list to be updated here and sent to Xcel for review once programming has begun)</div>
			<div class="xcel_image6 page4_5line">5</div>
			<div class="xcel_image6 page4_5Attachments">ATTACHMENTS</div>
			<div class="xcel_image6 page4_Pictureline">5.1 Diagrams, Sketches and other Documents</div>
			<div class="xcel_image5 page4_511line">5.1.1 Diagrams of Proposed Work</div>
			<div class="page5_IsoDwg">
				<?php echo "<img src='" . $NewPic1 . "'>"; ?>
			</div>
		</div>
		<hr class="top_break">
		<div class="xcel_image5 bottom_section">
			<div>Document No. <?php echo htmlspecialchars($EN_Proj_Num); ?> - Design Basis 0</div>
			<div>Project: <span><?php echo htmlspecialchars($Site_Name); ?></span> - Valve Automation</div>
			<div class="page-break">ENE Project #: <?php echo htmlspecialchars($EN_Proj_Num); ?></div>
		</div>
	</div>
	<div class="page_5">
		<div class="top_section">
			<div id="xcel_image"><img src="images/EN-image.svg"></div>
			<div class="xcel_image3 DB">Design Basis - Automation</div>
			<hr class="top_break">
			<div class="xcel_image5 page5_IsoDwgTitle">Isometric Drawing</div>
			<div class="page5_IsoDwg">
			<?php echo "<img src='" . $NewPic2 . "'>"; ?>
			</div>
		</div>
		<hr class="top_break">
		<div class="xcel_image5 bottom_section">
			<div>Document No. <?php echo htmlspecialchars($EN_Proj_Num); ?> - Design Basis 0</div>
			<div>Project: <span><?php echo htmlspecialchars($Site_Name); ?></span> - Valve Automation</div>
			<div class="page-break">ENE Project #: <?php echo htmlspecialchars($EN_Proj_Num); ?></div>
		</div>
	<div class="page_5">
		<div class="top_section">
			<div id="xcel_image"><img src="images/EN-image.svg"></div>
			<div class="xcel_image3 DB">Design Basis - Automation</div>
			<hr class="top_break">
			<div class="xcel_image5 page5_IsoDwgTitle">Isometric Drawing</div>
			<div class="page5_IsoDwg1">
			<?php echo "<img class='image_5' src='" . $NewPic3 . "'>"; ?>
			</div>
			<div class="page5_IsoDwg2">
			<?php echo "<img class='image_6' src='" . $NewPic4 . "'>"; ?>
			</div>
		</div>
		<hr class="top_break">
		<div class="xcel_image5 bottom_section">
			<div>Document No. <?php echo htmlspecialchars($EN_Proj_Num); ?> - Design Basis 0</div>
			<div>Project: <span><?php echo htmlspecialchars($Site_Name); ?></span> - Valve Automation</div>
			<div class="page-break">ENE Project #: <?php echo htmlspecialchars($EN_Proj_Num); ?></div>
		</div>		
	</div>

	<?php if ($NewPic5 != "uploads/")  {
	echo "<div class='page_6'>";
	echo	"<div class='top_section'>";
	echo		"<div id='xcel_image'><img src='images/EN-image.svg'></div>";
	echo		"<div class='xcel_image3 DB'>Design Basis - Automation</div>";
	echo		"<hr class='top_break'>";
	echo		"<div class='xcel_image5 page5_IsoDwgTitle'>Isometric Drawing</div>";
	echo		"<div class='page5_IsoDwg1'>";
	echo 		"<img class='image_5' src='" . $NewPic5 . "'>";
	echo		"</div>";
			if ($NewPic6 != "uploads/") {
	echo		"<div class='page5_IsoDwg2'>";
	echo 		"<img class='image_6' src='" . $NewPic6 . "'>";
	echo		"</div>";
			}
	echo	"</div>";
	echo	"<hr class='top_break'>";
	echo	"<div class='xcel_image5 bottom_section'>";
	echo	"<div>Document No." . htmlspecialchars($EN_Proj_Num) . "- Design Basis 0</div>";
	echo	"<div>Project:";
	echo 	"<span>" . htmlspecialchars($Site_Name) . "</span> - Valve Automation</div>";
	echo "<div class='page-break'>ENE Project #: " . htmlspecialchars($EN_Proj_Num) . "</div>";
	echo "</div>";		
	echo "</div>";
		
	}
	?>

</body>
</html>