<?php 

if ($Valve1->get_Valve_VT() != "" and $Valve2->get_Valve_VT() != "" and $Valve3->get_Valve_VT() != "" 
	and $Valve4->get_Valve_VT() != "" and $Valve5->get_Valve_VT() != "") {

	echo "<div class='page3_valvetable'>
					<table class='table3'>
					<tr class='xcel_image4'>
						<th colspan='6'>Valve/Actuator</th>
						</tr>
						<tr class='xcel_image5'>
							<td>Valve Tag</td>
							<td>";echo $Valve1->get_Valve_VT(); echo "</td>
							<td>";echo $Valve2->get_Valve_VT(); echo "</td>
							<td>";echo $Valve3->get_Valve_VT(); echo "</td>
							<td>";echo $Valve4->get_Valve_VT(); echo "</td>
							<td>";echo $Valve5->get_Valve_VT(); echo "</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Valve Class</td>
							<td>";echo $Valve1->get_Valve_AC(); echo "</td>
							<td>";echo $Valve2->get_Valve_AC(); echo "</td>
							<td>";echo $Valve3->get_Valve_AC(); echo "</td>
							<td>";echo $Valve4->get_Valve_AC(); echo "</td>
							<td>";echo $Valve5->get_Valve_AC(); echo "</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Valve Size</td>
							<td>";echo $Valve1->get_Valve_1_Size(); echo "</td>
							<td>";echo $Valve2->get_Valve_1_Size(); echo "</td>
							<td>";echo $Valve3->get_Valve_1_Size(); echo "</td>
							<td>";echo $Valve4->get_Valve_1_Size(); echo "</td>
							<td>";echo $Valve5->get_Valve_1_Size(); echo "</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Valve Manufacturer</td>
							<td>";echo $Valve1->get_Valve_Man(); echo "</td>
							<td>";echo $Valve2->get_Valve_Man(); echo "</td>
							<td>";echo $Valve3->get_Valve_Man(); echo "</td>
							<td>";echo $Valve4->get_Valve_Man(); echo "</td>
							<td>";echo $Valve5->get_Valve_Man(); echo "</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Valve Model</td>
							<td>";echo $Valve1->get_Valve_Model(); echo "</td>
							<td>";echo $Valve2->get_Valve_Model(); echo "</td>
							<td>";echo $Valve3->get_Valve_Model(); echo "</td>
							<td>";echo $Valve4->get_Valve_Model(); echo "</td>
							<td>";echo $Valve5->get_Valve_Model(); echo "</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Valve Serial Number</td>
							<td>";echo $Valve1->get_Valve_Serial(); echo "</td>
							<td>";echo $Valve2->get_Valve_Serial(); echo "</td>
							<td>";echo $Valve3->get_Valve_Serial(); echo "</td>
							<td>";echo $Valve4->get_Valve_Serial(); echo "</td>
							<td>";echo $Valve5->get_Valve_Serial(); echo "</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Max Differential Pressure</td>
							<td>";echo $Valve1->get_Valve_MDP(); echo "</td>
							<td>";echo $Valve2->get_Valve_MDP(); echo "</td>
							<td>";echo $Valve3->get_Valve_MDP(); echo "</td>
							<td>";echo $Valve4->get_Valve_MDP(); echo "</td>
							<td>";echo $Valve5->get_Valve_MDP(); echo "</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Temperature Rating</td>
							<td>";echo $Valve1->get_Valve_TR(); echo "</td>
							<td>";echo $Valve2->get_Valve_TR(); echo "</td>
							<td>";echo $Valve3->get_Valve_TR(); echo "</td>
							<td>";echo $Valve4->get_Valve_TR(); echo "</td>
							<td>";echo $Valve5->get_Valve_TR(); echo "</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Max Wind Speed</td>
							<td>";echo $Valve1->get_Valve_MWS(); echo "</td>
							<td>";echo $Valve2->get_Valve_MWS(); echo "</td>
							<td>";echo $Valve3->get_Valve_MWS(); echo "</td>
							<td>";echo $Valve4->get_Valve_MWS(); echo "</td>
							<td>";echo $Valve5->get_Valve_MWS(); echo "</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Bettis Actuator Model</td>
							<td>";echo $Valve1->get_Valve_BAM(); echo "</td>
							<td>";echo $Valve2->get_Valve_BAM(); echo "</td>
							<td>";echo $Valve3->get_Valve_BAM(); echo "</td>
							<td>";echo $Valve4->get_Valve_BAM(); echo "</td>
							<td>";echo $Valve5->get_Valve_BAM(); echo "</td>
						</tr>
						<tr class='xcel_image4'>
							<th colspan='6'>Pipe/Facility</th>
						</tr>
						<tr class='xcel_image5'>
							<td>Pipeline MAOP</td>
							<td>";echo $Valve1->get_Valve_PLMAOP(); echo "</td>
							<td>";echo $Valve2->get_Valve_PLMAOP(); echo "</td>
							<td>";echo $Valve3->get_Valve_PLMAOP(); echo "</td>
							<td>";echo $Valve4->get_Valve_PLMAOP(); echo "</td>
							<td>";echo $Valve5->get_Valve_PLMAOP(); echo "</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Design Pressure</td>
							<td>";echo $Valve1->get_Valve_PLDP(); echo "</td>
							<td>";echo $Valve2->get_Valve_PLDP(); echo "</td>
							<td>";echo $Valve3->get_Valve_PLDP(); echo "</td>
							<td>";echo $Valve4->get_Valve_PLDP(); echo "</td>
							<td>";echo $Valve5->get_Valve_PLDP(); echo "</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Design Factor</td>
							<td>1.5</td>
							<td>1.5</td>
							<td>1.5</td>
							<td>1.5</td>
							<td>1.5</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Pipe Grade</td>
							<td>";echo $Valve1->get_Valve_Pipe_Grade(); echo "</td>
							<td>";echo $Valve2->get_Valve_Pipe_Grade(); echo "</td>
							<td>";echo $Valve3->get_Valve_Pipe_Grade(); echo "</td>
							<td>";echo $Valve4->get_Valve_Pipe_Grade(); echo "</td>
							<td>";echo $Valve5->get_Valve_Pipe_Grade(); echo "</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Tubing Size</td>
							<td>";echo $Valve1->get_Valve_TS(); echo "</td>
							<td>";echo $Valve2->get_Valve_TS(); echo "</td>
							<td>";echo $Valve3->get_Valve_TS(); echo "</td>
							<td>";echo $Valve4->get_Valve_TS(); echo "</td>
							<td>";echo $Valve5->get_Valve_TS(); echo "</td>
						</tr>
					</table>
				</div>";
}

elseif ($Valve1->get_Valve_VT() != "" and $Valve2->get_Valve_VT() != "" and $Valve3->get_Valve_VT() != "" 
	and $Valve4->get_Valve_VT() != "" and $Valve5->get_Valve_VT() == "") {
		echo "<div class='page3_valvetable'>
					<table class='table3'>
					<tr class='xcel_image4'>
						<th colspan='5'>Valve/Actuator</th>
						</tr>
						<tr class='xcel_image5'>
							<td>Valve Tag</td>
							<td>";echo $Valve1->get_Valve_VT(); echo "</td>
							<td>";echo $Valve2->get_Valve_VT(); echo "</td>
							<td>";echo $Valve3->get_Valve_VT(); echo "</td>
							<td>";echo $Valve4->get_Valve_VT(); echo "</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Valve Class</td>
							<td>";echo $Valve1->get_Valve_AC(); echo "</td>
							<td>";echo $Valve2->get_Valve_AC(); echo "</td>
							<td>";echo $Valve3->get_Valve_AC(); echo "</td>
							<td>";echo $Valve4->get_Valve_AC(); echo "</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Valve Size</td>
							<td>";echo $Valve1->get_Valve_1_Size(); echo "</td>
							<td>";echo $Valve2->get_Valve_1_Size(); echo "</td>
							<td>";echo $Valve3->get_Valve_1_Size(); echo "</td>
							<td>";echo $Valve4->get_Valve_1_Size(); echo "</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Valve Manufacturer</td>
							<td>";echo $Valve1->get_Valve_Man(); echo "</td>
							<td>";echo $Valve2->get_Valve_Man(); echo "</td>
							<td>";echo $Valve3->get_Valve_Man(); echo "</td>
							<td>";echo $Valve4->get_Valve_Man(); echo "</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Valve Model</td>
							<td>";echo $Valve1->get_Valve_Model(); echo "</td>
							<td>";echo $Valve2->get_Valve_Model(); echo "</td>
							<td>";echo $Valve3->get_Valve_Model(); echo "</td>
							<td>";echo $Valve4->get_Valve_Model(); echo "</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Valve Serial Number</td>
							<td>";echo $Valve1->get_Valve_Serial(); echo "</td>
							<td>";echo $Valve2->get_Valve_Serial(); echo "</td>
							<td>";echo $Valve3->get_Valve_Serial(); echo "</td>
							<td>";echo $Valve4->get_Valve_Serial(); echo "</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Max Differential Pressure</td>
							<td>";echo $Valve1->get_Valve_MDP(); echo "</td>
							<td>";echo $Valve2->get_Valve_MDP(); echo "</td>
							<td>";echo $Valve3->get_Valve_MDP(); echo "</td>
							<td>";echo $Valve4->get_Valve_MDP(); echo "</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Temperature Rating</td>
							<td>";echo $Valve1->get_Valve_TR(); echo "</td>
							<td>";echo $Valve2->get_Valve_TR(); echo "</td>
							<td>";echo $Valve3->get_Valve_TR(); echo "</td>
							<td>";echo $Valve4->get_Valve_TR(); echo "</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Max Wind Speed</td>
							<td>";echo $Valve1->get_Valve_MWS(); echo "</td>
							<td>";echo $Valve2->get_Valve_MWS(); echo "</td>
							<td>";echo $Valve3->get_Valve_MWS(); echo "</td>
							<td>";echo $Valve4->get_Valve_MWS(); echo "</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Bettis Actuator Model</td>
							<td>";echo $Valve1->get_Valve_BAM(); echo "</td>
							<td>";echo $Valve2->get_Valve_BAM(); echo "</td>
							<td>";echo $Valve3->get_Valve_BAM(); echo "</td>
							<td>";echo $Valve4->get_Valve_BAM(); echo "</td>
						</tr>
						<tr class='xcel_image4'>
							<th colspan='5'>Pipe/Facility</th>
						</tr>
						<tr class='xcel_image5'>
							<td>Pipeline MAOP</td>
							<td>";echo $Valve1->get_Valve_PLMAOP(); echo "</td>
							<td>";echo $Valve2->get_Valve_PLMAOP(); echo "</td>
							<td>";echo $Valve3->get_Valve_PLMAOP(); echo "</td>
							<td>";echo $Valve4->get_Valve_PLMAOP(); echo "</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Design Pressure</td>
							<td>";echo $Valve1->get_Valve_PLDP(); echo "</td>
							<td>";echo $Valve2->get_Valve_PLDP(); echo "</td>
							<td>";echo $Valve3->get_Valve_PLDP(); echo "</td>
							<td>";echo $Valve4->get_Valve_PLDP(); echo "</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Design Factor</td>
							<td>1.5</td>
							<td>1.5</td>
							<td>1.5</td>
							<td>1.5</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Pipe Grade</td>
							<td>";echo $Valve1->get_Valve_Pipe_Grade(); echo "</td>
							<td>";echo $Valve2->get_Valve_Pipe_Grade(); echo "</td>
							<td>";echo $Valve3->get_Valve_Pipe_Grade(); echo "</td>
							<td>";echo $Valve4->get_Valve_Pipe_Grade(); echo "</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Tubing Size</td>
							<td>";echo $Valve1->get_Valve_TS(); echo "</td>
							<td>";echo $Valve2->get_Valve_TS(); echo "</td>
							<td>";echo $Valve3->get_Valve_TS(); echo "</td>
							<td>";echo $Valve4->get_Valve_TS(); echo "</td>
						</tr>
					</table>
				</div>";

}

elseif ($Valve1->get_Valve_VT() != "" and $Valve2->get_Valve_VT() != "" and $Valve3->get_Valve_VT() != "" 
	and $Valve4->get_Valve_VT() == "" and $Valve5->get_Valve_VT() == "") {
		echo "<div class='page3_valvetable'>
					<table class='table3'>
					<tr class='xcel_image4'>
						<th colspan='4'>Valve/Actuator</th>
						</tr>
						<tr class='xcel_image5'>
							<td>Valve Tag</td>
							<td>";echo $Valve1->get_Valve_VT(); echo "</td>
							<td>";echo $Valve2->get_Valve_VT(); echo "</td>
							<td>";echo $Valve3->get_Valve_VT(); echo "</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Valve Class</td>
							<td>";echo $Valve1->get_Valve_AC(); echo "</td>
							<td>";echo $Valve2->get_Valve_AC(); echo "</td>
							<td>";echo $Valve3->get_Valve_AC(); echo "</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Valve Size</td>
							<td>";echo $Valve1->get_Valve_1_Size(); echo "</td>
							<td>";echo $Valve2->get_Valve_1_Size(); echo "</td>
							<td>";echo $Valve3->get_Valve_1_Size(); echo "</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Valve Manufacturer</td>
							<td>";echo $Valve1->get_Valve_Man(); echo "</td>
							<td>";echo $Valve2->get_Valve_Man(); echo "</td>
							<td>";echo $Valve3->get_Valve_Man(); echo "</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Valve Model</td>
							<td>";echo $Valve1->get_Valve_Model(); echo "</td>
							<td>";echo $Valve2->get_Valve_Model(); echo "</td>
							<td>";echo $Valve3->get_Valve_Model(); echo "</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Valve Serial Number</td>
							<td>";echo $Valve1->get_Valve_Serial(); echo "</td>
							<td>";echo $Valve2->get_Valve_Serial(); echo "</td>
							<td>";echo $Valve3->get_Valve_Serial(); echo "</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Max Differential Pressure</td>
							<td>";echo $Valve1->get_Valve_MDP(); echo "</td>
							<td>";echo $Valve2->get_Valve_MDP(); echo "</td>
							<td>";echo $Valve3->get_Valve_MDP(); echo "</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Temperature Rating</td>
							<td>";echo $Valve1->get_Valve_TR(); echo "</td>
							<td>";echo $Valve2->get_Valve_TR(); echo "</td>
							<td>";echo $Valve3->get_Valve_TR(); echo "</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Max Wind Speed</td>
							<td>";echo $Valve1->get_Valve_MWS(); echo "</td>
							<td>";echo $Valve2->get_Valve_MWS(); echo "</td>
							<td>";echo $Valve3->get_Valve_MWS(); echo "</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Bettis Actuator Model</td>
							<td>";echo $Valve1->get_Valve_BAM(); echo "</td>
							<td>";echo $Valve2->get_Valve_BAM(); echo "</td>
							<td>";echo $Valve3->get_Valve_BAM(); echo "</td>
						</tr>
						<tr class='xcel_image4'>
							<th colspan='4'>Pipe/Facility</th>
						</tr>
						<tr class='xcel_image5'>
							<td>Pipeline MAOP</td>
							<td>";echo $Valve1->get_Valve_PLMAOP(); echo "</td>
							<td>";echo $Valve2->get_Valve_PLMAOP(); echo "</td>
							<td>";echo $Valve3->get_Valve_PLMAOP(); echo "</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Design Pressure</td>
							<td>";echo $Valve1->get_Valve_PLDP(); echo "</td>
							<td>";echo $Valve2->get_Valve_PLDP(); echo "</td>
							<td>";echo $Valve3->get_Valve_PLDP(); echo "</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Design Factor</td>
							<td>1.5</td>
							<td>1.5</td>
							<td>1.5</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Pipe Grade</td>
							<td>";echo $Valve1->get_Valve_Pipe_Grade(); echo "</td>
							<td>";echo $Valve2->get_Valve_Pipe_Grade(); echo "</td>
							<td>";echo $Valve3->get_Valve_Pipe_Grade(); echo "</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Tubing Size</td>
							<td>";echo $Valve1->get_Valve_TS(); echo "</td>
							<td>";echo $Valve2->get_Valve_TS(); echo "</td>
							<td>";echo $Valve3->get_Valve_TS(); echo "</td>
						</tr>
					</table>
				</div>";

}

elseif ($Valve1->get_Valve_VT() != "" and $Valve2->get_Valve_VT() != "" and $Valve3->get_Valve_VT() == "" 
	and $Valve4->get_Valve_VT() == "" and $Valve5->get_Valve_VT() == "") {
		echo "<div class='page3_valvetable'>
					<table class='table3'>
					<tr class='xcel_image4'>
						<th colspan='3'>Valve/Actuator</th>
						</tr>
						<tr class='xcel_image5'>
							<td>Valve Tag</td>
							<td>";echo $Valve1->get_Valve_VT(); echo "</td>
							<td>";echo $Valve2->get_Valve_VT(); echo "</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Valve Class</td>
							<td>";echo $Valve1->get_Valve_AC(); echo "</td>
							<td>";echo $Valve2->get_Valve_AC(); echo "</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Valve Size</td>
							<td>";echo $Valve1->get_Valve_1_Size(); echo "</td>
							<td>";echo $Valve2->get_Valve_1_Size(); echo "</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Valve Manufacturer</td>
							<td>";echo $Valve1->get_Valve_Man(); echo "</td>
							<td>";echo $Valve2->get_Valve_Man(); echo "</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Valve Model</td>
							<td>";echo $Valve1->get_Valve_Model(); echo "</td>
							<td>";echo $Valve2->get_Valve_Model(); echo "</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Valve Serial Number</td>
							<td>";echo $Valve1->get_Valve_Serial(); echo "</td>
							<td>";echo $Valve2->get_Valve_Serial(); echo "</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Max Differential Pressure</td>
							<td>";echo $Valve1->get_Valve_MDP(); echo "</td>
							<td>";echo $Valve2->get_Valve_MDP(); echo "</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Temperature Rating</td>
							<td>";echo $Valve1->get_Valve_TR(); echo "</td>
							<td>";echo $Valve2->get_Valve_TR(); echo "</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Max Wind Speed</td>
							<td>";echo $Valve1->get_Valve_MWS(); echo "</td>
							<td>";echo $Valve2->get_Valve_MWS(); echo "</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Bettis Actuator Model</td>
							<td>";echo $Valve1->get_Valve_BAM(); echo "</td>
							<td>";echo $Valve2->get_Valve_BAM(); echo "</td>
						</tr>
						<tr class='xcel_image4'>
							<th colspan='3'>Pipe/Facility</th>
						</tr>
						<tr class='xcel_image5'>
							<td>Pipeline MAOP</td>
							<td>";echo $Valve1->get_Valve_PLMAOP(); echo "</td>
							<td>";echo $Valve2->get_Valve_PLMAOP(); echo "</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Design Pressure</td>
							<td>";echo $Valve1->get_Valve_PLDP(); echo "</td>
							<td>";echo $Valve2->get_Valve_PLDP(); echo "</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Design Factor</td>
							<td>1.5</td>
							<td>1.5</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Pipe Grade</td>
							<td>";echo $Valve1->get_Valve_Pipe_Grade(); echo "</td>
							<td>";echo $Valve2->get_Valve_Pipe_Grade(); echo "</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Tubing Size</td>
							<td>";echo $Valve1->get_Valve_TS(); echo "</td>
							<td>";echo $Valve2->get_Valve_TS(); echo "</td>
						</tr>
					</table>
				</div>";
}

elseif ($Valve1->get_Valve_VT() != "" and $Valve2->get_Valve_VT() == "" and $Valve3->get_Valve_VT() == "" 
	and $Valve4->get_Valve_VT() == "" and $Valve5->get_Valve_VT() == "") {
		echo "<div class='page3_valvetable'>
					<table class='table3'>
					<tr class='xcel_image4'>
						<th colspan='2'>Valve/Actuator</th>
						</tr>
						<tr class='xcel_image5'>
							<td>Valve Tag</td>
							<td>";echo $Valve1->get_Valve_VT(); echo "</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Valve Class</td>
							<td>";echo $Valve1->get_Valve_AC(); echo "</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Valve Size</td>
							<td>";echo $Valve1->get_Valve_1_Size(); echo "</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Valve Manufacturer</td>
							<td>";echo $Valve1->get_Valve_Man(); echo "</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Valve Model</td>
							<td>";echo $Valve1->get_Valve_Model(); echo "</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Valve Serial Number</td>
							<td>";echo $Valve1->get_Valve_Serial(); echo "</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Max Differential Pressure</td>
							<td>";echo $Valve1->get_Valve_MDP(); echo "</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Temperature Rating</td>
							<td>";echo $Valve1->get_Valve_TR(); echo "</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Max Wind Speed</td>
							<td>";echo $Valve1->get_Valve_MWS(); echo "</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Bettis Actuator Model</td>
							<td>";echo $Valve1->get_Valve_BAM(); echo "</td>
						</tr>
						<tr class='xcel_image4'>
							<th colspan='2'>Pipe/Facility</th>
						</tr>
						<tr class='xcel_image5'>
							<td>Pipeline MAOP</td>
							<td>";echo $Valve1->get_Valve_PLMAOP(); echo "</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Design Pressure</td>
							<td>";echo $Valve1->get_Valve_PLDP(); echo "</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Design Factor</td>
							<td>1.5</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Pipe Grade</td>
							<td>";echo $Valve1->get_Valve_Pipe_Grade(); echo "</td>
						</tr>
						<tr class='xcel_image5'>
							<td>Tubing Size</td>
							<td>";echo $Valve1->get_Valve_TS(); echo "</td>
						</tr>
					</table>
				</div>";
}

?>
				<!--<div class="page3_valvetable">
					<table class="table3">
						<tr class="xcel_image4">
							<th colspan="6">Valve/Actuator</th>
						</tr>
						<tr class="xcel_image5">
							<td>Valve Tag</td>
							<td><?php //echo htmlspecialchars($Valve_1_VT); ?></td>
							<td><?php //echo htmlspecialchars($Valve_2_VT); ?></td>
							<td><?php //echo htmlspecialchars($Valve_3_VT); ?></td>
							<td><?php //echo htmlspecialchars($Valve_4_VT); ?></td>
							<td><?php //echo htmlspecialchars($Valve_5_VT); ?></td>
						</tr>
						<tr class="xcel_image5">
							<td>Valve Class</td>
							<td><?php //echo htmlspecialchars($Valve_1_AC); ?></td>
							<td><?php //echo htmlspecialchars($Valve_2_AC); ?></td>
							<td><?php //echo htmlspecialchars($Valve_3_AC); ?></td>
							<td><?php //echo htmlspecialchars($Valve_4_AC); ?></td>
							<td><?php //echo htmlspecialchars($Valve_5_AC); ?></td>
						</tr>
						<tr class="xcel_image5">
							<td>Valve Size</td>
							<td><?php //echo htmlspecialchars($Valve_1_Size); ?></td>
							<td><?php //echo htmlspecialchars($Valve_2_Size); ?></td>
							<td><?php //echo htmlspecialchars($Valve_3_Size); ?></td>
							<td><?php //echo htmlspecialchars($Valve_4_Size); ?></td>
							<td><?php //echo htmlspecialchars($Valve_5_Size); ?></td>
						</tr>
						<tr class="xcel_image5">
							<td>Valve Manufacturer</td>
							<td><?php //echo htmlspecialchars($Valve_1_Man); ?></td>
							<td><?php //echo htmlspecialchars($Valve_2_Man); ?></td>
							<td><?php //echo htmlspecialchars($Valve_3_Man); ?></td>
							<td><?php //echo htmlspecialchars($Valve_4_Man); ?></td>
							<td><?php //echo htmlspecialchars($Valve_5_Man); ?></td>
						</tr>
						<tr class="xcel_image5">
							<td>Valve Model</td>
							<td><?php //echo htmlspecialchars($Valve_1_Model); ?></td>
							<td><?php //echo htmlspecialchars($Valve_2_Model); ?></td>
							<td><?php //echo htmlspecialchars($Valve_3_Model); ?></td>
							<td><?php //echo htmlspecialchars($Valve_4_Model); ?></td>
							<td><?php //echo htmlspecialchars($Valve_5_Model); ?></td>
						</tr>
						<tr class="xcel_image5">
							<td>Valve Serial Number</td>
							<td><?php //echo htmlspecialchars($Valve_1_Serial); ?></td>
							<td><?php //echo htmlspecialchars($Valve_2_Serial); ?></td>
							<td><?php //echo htmlspecialchars($Valve_3_Serial); ?></td>
							<td><?php //echo htmlspecialchars($Valve_4_Serial); ?></td>
							<td><?php //echo htmlspecialchars($Valve_5_Serial); ?></td>
						</tr>
						<tr class="xcel_image5">
							<td>Max Differential Pressure</td>
							<td><?php //echo htmlspecialchars($Valve_1_MDP); ?></td>
							<td><?php //echo htmlspecialchars($Valve_2_MDP); ?></td>
							<td><?php //echo htmlspecialchars($Valve_3_MDP); ?></td>
							<td><?php //echo htmlspecialchars($Valve_4_MDP); ?></td>
							<td><?php //echo htmlspecialchars($Valve_5_MDP); ?></td>
						</tr>
						<tr class="xcel_image5">
							<td>Temperature Rating</td>
							<td><?php //echo htmlspecialchars($Valve_1_TR); ?></td>
							<td><?php //echo htmlspecialchars($Valve_2_TR); ?></td>
							<td><?php //echo htmlspecialchars($Valve_3_TR); ?></td>
							<td><?php //echo htmlspecialchars($Valve_4_TR); ?></td>
							<td><?php //echo htmlspecialchars($Valve_5_TR); ?></td>
						</tr>
						<tr class="xcel_image5">
							<td>Max Wind Speed</td>
							<td><?php //echo htmlspecialchars($Valve_1_MWS); ?></td>
							<td><?php //echo htmlspecialchars($Valve_2_MWS); ?></td>
							<td><?php //echo htmlspecialchars($Valve_3_MWS); ?></td>
							<td><?php //echo htmlspecialchars($Valve_4_MWS); ?></td>
							<td><?php //echo htmlspecialchars($Valve_5_MWS); ?></td>
						</tr>
						<tr class="xcel_image5">
							<td>Bettis Actuator Model</td>
							<td><?php //echo htmlspecialchars($Valve_1_BAM); ?></td>
							<td><?php //echo htmlspecialchars($Valve_2_BAM); ?></td>
							<td><?php //echo htmlspecialchars($Valve_3_BAM); ?></td>
							<td><?php //echo htmlspecialchars($Valve_4_BAM); ?></td>
							<td><?php //echo htmlspecialchars($Valve_5_BAM); ?></td>
						</tr>
						<tr class="xcel_image4">
							<th colspan="6">Pipe/Facility</th>
						</tr>
						<tr class="xcel_image5">
							<td>Pipeline MAOP</td>
							<td><?php //echo htmlspecialchars($Valve_1_PLMAOP); ?></td>
							<td><?php //echo htmlspecialchars($Valve_2_PLMAOP); ?></td>
							<td><?php //echo htmlspecialchars($Valve_3_PLMAOP); ?></td>
							<td><?php //echo htmlspecialchars($Valve_4_PLMAOP); ?></td>
							<td><?php //echo htmlspecialchars($Valve_5_PLMAOP); ?></td>
						</tr>
						<tr class="xcel_image5">
							<td>Design Pressure</td>
							<td><?php //echo htmlspecialchars($Valve_1_PLDP); ?></td>
							<td><?php //echo htmlspecialchars($Valve_2_PLDP); ?></td>
							<td><?php //echo htmlspecialchars($Valve_3_PLDP); ?></td>
							<td><?php //echo htmlspecialchars($Valve_4_PLDP); ?></td>
							<td><?php //echo htmlspecialchars($Valve_5_PLDP); ?></td>
						</tr>
						<tr class="xcel_image5">
							<td>Design Factor</td>
							<td>1.5</td>
							<td>1.5</td>
							<td>1.5</td>
							<td>1.5</td>
							<td>1.5</td>
						</tr>
						<tr class="xcel_image5">
							<td>Pipe Grade</td>
							<td><?php //echo htmlspecialchars($Valve_1_Pipe_Grade); ?></td>
							<td><?php //echo htmlspecialchars($Valve_2_Pipe_Grade); ?></td>
							<td><?php //echo htmlspecialchars($Valve_3_Pipe_Grade); ?></td>
							<td><?php //echo htmlspecialchars($Valve_4_Pipe_Grade); ?></td>
							<td><?php //echo htmlspecialchars($Valve_5_Pipe_Grade); ?></td>
						</tr>
						<tr class="xcel_image5">
							<td>Tubing Size</td>
							<td><?php //echo htmlspecialchars($Valve_1_TS); ?></td>
							<td><?php //echo htmlspecialchars($Valve_2_TS); ?></td>
							<td><?php //echo htmlspecialchars($Valve_3_TS); ?></td>
							<td><?php //echo htmlspecialchars($Valve_4_TS); ?></td>
							<td><?php //echo htmlspecialchars($Valve_5_TS); ?></td>
						</tr>
					</table>
				</div>-->