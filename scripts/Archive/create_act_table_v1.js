function test() {
	var a = document.getElementById("valve_tag").value;
	var b = document.getElementsByClassName("valve_1");
	var c = document.getElementsByClassName("valve_2");
	var d = document.getElementsByClassName("valve_3");
	var e = document.getElementsByClassName("valve_4");
	var f = document.getElementsByClassName("valve_5");

	for (q = 0; q <= 4; q++) {
		if (q == 0 && b[0] != undefined && b[0].innerHTML == a) {
			document.getElementById("ansi").value = b[1].innerHTML;
			document.getElementById("diameter").innerHTML = b[2].innerHTML;
			document.getElementById("manufacturer").innerHTML = b[3].innerHTML;
			document.getElementById("valve_model").innerHTML = b[4].innerHTML;
			document.getElementById("valve_serial").innerHTML = b[5].innerHTML;
			document.getElementById("op_pressure").innerHTML = b[6].innerHTML;
			document.getElementById("temp_rating").innerHTML = b[7].innerHTML;
			document.getElementById("wind_speed").innerHTML = b[8].innerHTML;
			document.getElementById("act_model").innerHTML = b[9].innerHTML;
			document.getElementById("pipe_maop").innerHTML = b[10].innerHTML;
			document.getElementById("pipe_design").innerHTML = b[11].innerHTML;
			document.getElementById("pipe_grade").innerHTML = b[12].innerHTML;
			document.getElementById("tubing").innerHTML = b[13].innerHTML;
		}
		else if (q == 1 && c[0] != undefined && c[0].innerHTML == a) {
			document.getElementById("ansi").value = c[1].innerHTML;
			document.getElementById("diameter").innerHTML = c[2].innerHTML;
			document.getElementById("manufacturer").innerHTML = c[3].innerHTML;
			document.getElementById("valve_model").innerHTML = c[4].innerHTML;
			document.getElementById("valve_serial").innerHTML = c[5].innerHTML;
			document.getElementById("op_pressure").innerHTML = c[6].innerHTML;
			document.getElementById("temp_rating").innerHTML = c[7].innerHTML;
			document.getElementById("wind_speed").innerHTML = c[8].innerHTML;
			document.getElementById("act_model").innerHTML = c[9].innerHTML;
			document.getElementById("pipe_maop").innerHTML = c[10].innerHTML;
			document.getElementById("pipe_design").innerHTML = c[11].innerHTML;
			document.getElementById("pipe_grade").innerHTML = c[12].innerHTML;
			document.getElementById("tubing").innerHTML = c[13].innerHTML;
		} 
		else if (q == 2 && d[0] != undefined && d[0].innerHTML == a) {
			document.getElementById("ansi").value = d[1].innerHTML;
			document.getElementById("diameter").innerHTML = d[2].innerHTML;
			document.getElementById("manufacturer").innerHTML = d[3].innerHTML;
			document.getElementById("valve_model").innerHTML = d[4].innerHTML;
			document.getElementById("valve_serial").innerHTML = d[5].innerHTML;
			document.getElementById("op_pressure").innerHTML = d[6].innerHTML;
			document.getElementById("temp_rating").innerHTML = d[7].innerHTML;
			document.getElementById("wind_speed").innerHTML = d[8].innerHTML;
			document.getElementById("act_model").innerHTML = d[9].innerHTML;
			document.getElementById("pipe_maop").innerHTML = d[10].innerHTML;
			document.getElementById("pipe_design").innerHTML = d[11].innerHTML;
			document.getElementById("pipe_grade").innerHTML = d[12].innerHTML;
			document.getElementById("tubing").innerHTML = d[13].innerHTML;
		} 
		else if (q == 3 && e[0] != undefined && e[0].innerHTML == a) {
			console.log(e[0].innerHTML);
		} 
		else if (q == 4 && f[0] != undefined && f[0].innerHTML == a) {
			console.log(f[0].innerHTML);
		} 	
	}
}

//Add event listener, if the actuator tag is changed, update the site specific information
document.getElementById("valve_tag").addEventListener("change", test);

function check_act() {

	function change_press() {
		//This function changes the pressures based off the newly selected actuator.
		//First loop removes Pressure options for previously selected Actuator
		var press_to_remove = document.getElementById("Pressure_op").options.length;
		for (var x = 0; x < press_to_remove; x++) {
			document.getElementById("Pressure_op").options.remove(0);
		}

		//Second loop populates loops through the table and finds all pressure options for new actuator
		var acts = document.getElementById("result_table").rows.length;
		for (var tab = 1; tab < acts; tab++) {
			var act_selected = document.getElementById("Actuators").value;
			var pres_opt = document.getElementById("result_table").rows[tab].cells[0].innerHTML;
			if (act_selected == pres_opt) {
				var pres_entry = document.createElement("option");
				pres_entry.text = document.getElementById("result_table").rows[tab].cells[1].innerHTML;
				document.getElementById("Pressure_op").add(pres_entry);
				document.getElementById("result_table").rows[tab].style.display = "";
			}
			else {
				document.getElementById("result_table").rows[tab].style.display = "none";
			}
		}

		//This loop removes Pressure relief options for previously selected Actuator
		var press_to_remove = document.getElementById("Pressure_rlf").options.length;
		for (var x = 0; x < press_to_remove; x++) {
			document.getElementById("Pressure_rlf").options.remove(0);
		}

		//Third loop will populate the relief pressure dropdown
		var acts = document.getElementById("result_table").rows.length;
		for (var tab = 1; tab < acts; tab++) {

			var act_selected = document.getElementById("Actuators").value;
			var pres_opt = document.getElementById("result_table").rows[tab].cells[0].innerHTML;
			if (act_selected == pres_opt) {
				var pres_entry = document.createElement("option");
				pres_entry.text = document.getElementById("result_table").rows[tab].cells[1].innerHTML;
				document.getElementById("Pressure_rlf").add(pres_entry);
			}
		}

		//Fourth loop will populate the actuator operating pressure values
		for (var count = 1; count < acts; count++) {
			var act_value = document.getElementById("Actuators").value;
			var act_pres = document.getElementById("Pressure_op").value;
			
			var act_table = document.getElementById("result_table").rows[count].cells[0].innerHTML;
			var act_table_pres = document.getElementById("result_table").rows[count].cells[1].innerHTML;
			var st_outboard = document.getElementById("result_table").rows[count].cells[2].innerHTML;
			var m_outboard = document.getElementById("result_table").rows[count].cells[3].innerHTML;
			var e_outboard = document.getElementById("result_table").rows[count].cells[4].innerHTML;
			var st_inboard = document.getElementById("result_table").rows[count].cells[5].innerHTML;
			var m_inboard = document.getElementById("result_table").rows[count].cells[6].innerHTML;
			var e_inboard = document.getElementById("result_table").rows[count].cells[7].innerHTML;
			if (act_value == act_table && act_pres == act_table_pres) {
				document.getElementById("Start_Outboard_op").value = st_outboard;
				document.getElementById("Min_Outboard_op").value = m_outboard;
				document.getElementById("End_Outboard_op").value = e_outboard;
				document.getElementById("Start_Inboard_op").value = st_inboard;
				document.getElementById("Min_Inboard_op").value = m_inboard;
				document.getElementById("End_Inboard_op").value = e_inboard;
				break;
			}
			else {
				continue;
			}
		}

		//Fifth loop will populate the actuator relief pressure values
		for (var count = 1; count < acts; count++) {
			var act_value = document.getElementById("Actuators").value;
			var act_pres_rlf = document.getElementById("Pressure_rlf").value;
			
			var act_table = document.getElementById("result_table").rows[count].cells[0].innerHTML;
			var act_table_pres = document.getElementById("result_table").rows[count].cells[1].innerHTML;
			var st_outboard = document.getElementById("result_table").rows[count].cells[2].innerHTML;
			var m_outboard = document.getElementById("result_table").rows[count].cells[3].innerHTML;
			var e_outboard = document.getElementById("result_table").rows[count].cells[4].innerHTML;
			var st_inboard = document.getElementById("result_table").rows[count].cells[5].innerHTML;
			var m_inboard = document.getElementById("result_table").rows[count].cells[6].innerHTML;
			var e_inboard = document.getElementById("result_table").rows[count].cells[7].innerHTML;
			if (act_value == act_table && act_pres_rlf == act_table_pres) {
				document.getElementById("Start_Outboard_rlf").value = st_outboard;
				document.getElementById("Min_Outboard_rlf").value = m_outboard;
				document.getElementById("End_Outboard_rlf").value = e_outboard;
				document.getElementById("Start_Inboard_rlf").value = st_inboard;
				document.getElementById("Min_Inboard_rlf").value = m_inboard;
				document.getElementById("End_Inboard_rlf").value = e_inboard;
				break;
			}
			else {
				continue;
			}
		}
	}

	//Loop through table and update all form values if operating pressure has changed.
	function change_op_press() {
		//console.log("test_successful");
		if (document.getElementById("Actuators").value == "") {
			document.getElementById("Start_Outboard_op").value = "";
			document.getElementById("Min_Outboard_op").value = "";
			document.getElementById("End_Outboard_op").value = "";
			document.getElementById("Start_Inboard_op").value = "";
			document.getElementById("Min_Inboard_op").value = "";
			document.getElementById("End_Inboard_op").value = "";
		}
		else {
			for (var count = 1; count < acts; count++) {
				var act_value = document.getElementById("Actuators").value;
				var act_pres = document.getElementById("Pressure_op").value;
				
				var act_table = document.getElementById("result_table").rows[count].cells[0].innerHTML;
				var act_table_pres = document.getElementById("result_table").rows[count].cells[1].innerHTML;
				var st_outboard = document.getElementById("result_table").rows[count].cells[2].innerHTML;
				var m_outboard = document.getElementById("result_table").rows[count].cells[3].innerHTML;
				var e_outboard = document.getElementById("result_table").rows[count].cells[4].innerHTML;
				var st_inboard = document.getElementById("result_table").rows[count].cells[5].innerHTML;
				var m_inboard = document.getElementById("result_table").rows[count].cells[6].innerHTML;
				var e_inboard = document.getElementById("result_table").rows[count].cells[7].innerHTML;
				if (act_value == act_table && act_pres == act_table_pres) {
					document.getElementById("Start_Outboard_op").value = st_outboard;
					document.getElementById("Min_Outboard_op").value = m_outboard;
					document.getElementById("End_Outboard_op").value = e_outboard;
					document.getElementById("Start_Inboard_op").value = st_inboard;
					document.getElementById("Min_Inboard_op").value = m_inboard;
					document.getElementById("End_Inboard_op").value = e_inboard;
					break;
				}
				else {
					continue;
				}
			}
		}
	}

	//Loop through table and update all form values if relief pressure has changed.
	function change_rlf_press() {
		if (document.getElementById("Actuators").value == "") {
			document.getElementById("Start_Outboard_rlf").value = "";
			document.getElementById("Min_Outboard_rlf").value = "";
			document.getElementById("End_Outboard_rlf").value = "";
			document.getElementById("Start_Inboard_rlf").value = "";
			document.getElementById("Min_Inboard_rlf").value = "";
			document.getElementById("End_Inboard_rlf").value = "";
		}
		else {
			for (var count = 1; count < acts; count++) {
				var act_value = document.getElementById("Actuators").value;
				var act_pres_rlf = document.getElementById("Pressure_rlf").value;
				
				var act_table = document.getElementById("result_table").rows[count].cells[0].innerHTML;
				var act_table_pres = document.getElementById("result_table").rows[count].cells[1].innerHTML;
				var st_outboard = document.getElementById("result_table").rows[count].cells[2].innerHTML;
				var m_outboard = document.getElementById("result_table").rows[count].cells[3].innerHTML;
				var e_outboard = document.getElementById("result_table").rows[count].cells[4].innerHTML;
				var st_inboard = document.getElementById("result_table").rows[count].cells[5].innerHTML;
				var m_inboard = document.getElementById("result_table").rows[count].cells[6].innerHTML;
				var e_inboard = document.getElementById("result_table").rows[count].cells[7].innerHTML;
				if (act_value == act_table && act_pres_rlf == act_table_pres) {
					document.getElementById("Start_Outboard_rlf").value = st_outboard;
					document.getElementById("Min_Outboard_rlf").value = m_outboard;
					document.getElementById("End_Outboard_rlf").value = e_outboard;
					document.getElementById("Start_Inboard_rlf").value = st_inboard;
					document.getElementById("Min_Inboard_rlf").value = m_inboard;
					document.getElementById("End_Inboard_rlf").value = e_inboard;
					break;
				}
				else {
					continue;
				}
			}
		}
	}	

	var a = G3016["Pressures"].length;
	var possible_act = [G1008, G1009, G1010, G1012, G1014, G3016];
	var num_of_act = possible_act.length;
	var results = [];

		var table = document.getElementById("result_table").style.display;
		if (table == "") {
			document.getElementById("result_table").style.display = "table";
			document.getElementById("table_title").style.textAlign = "center";
		}

		var table_title = document.getElementById("table_title").style.display;
		if (table_title=="") {
			document.getElementById("table_title").style.display = "block";
			document.getElementById("table_title").style.marginTop = "15px";
			document.getElementById("table_title").style.textAlign = "center";	
		}

		if (document.getElementById("result_table").rows.length > 1) {
			while (document.getElementById("result_table").rows.length>1) {
				var last_row = document.getElementById("result_table").rows.length;
				document.getElementById("result_table").deleteRow(last_row-1);
			}
		}

	for (x = 0; x <= num_of_act-1; x++) {
		for (i = 0; i <= a-1; i++) {
			var B_SF = document.getElementById("B_Torque_result_SF").innerHTML;
			var R_SF = document.getElementById("R-Torque_result_SF").innerHTML;
			var mast = document.getElementById("MAST").innerHTML;

			let b = possible_act[x]["Start_Outboard"][possible_act[x]["Pressures"][i]];
			let c = possible_act[x]["Min_Outboard"][possible_act[x]["Pressures"][i]];
			let d = possible_act[x]["End_Outboard"][possible_act[x]["Pressures"][i]];
			let e = possible_act[x]["Start_Inboard"][possible_act[x]["Pressures"][i]];
			let f = possible_act[x]["Min_Inboard"][possible_act[x]["Pressures"][i]];
			let g = possible_act[x]["End_Inboard"][possible_act[x]["Pressures"][i]];
			let h = possible_act[x]["Pressures"][i];
			let j = possible_act[x]["Act_Num"];

			if (b == "Exceeds MOP") {
				continue;
			}
			else {
				//If statement to check to make sure the actuator values are above all 4 break torque values of the valve,
				//and above the two run torque values, and are below the maximum allowable values.
				if (c >= R_SF && f >= R_SF && b < mast && c < mast && d < mast && e < mast && f < mast && g < mast && b >= B_SF && d >= B_SF && e >= B_SF && g >= B_SF) {
					let table = document.getElementById("result_table");
					let row = table.insertRow(-1);
					let cell0 = row.insertCell(0);
					let cell1 = row.insertCell(1);
					let cell2 = row.insertCell(2);
					let cell3 = row.insertCell(3);
					let cell4 = row.insertCell(4);
					let cell5 = row.insertCell(5);
					let cell6 = row.insertCell(6);
					let cell7 = row.insertCell(7);
					cell0.innerHTML = j;
					cell1.innerHTML = h;
					cell2.innerHTML = b;
					cell3.innerHTML = c;
					cell4.innerHTML = d;
					cell5.innerHTML = e;
					cell6.innerHTML = f;
					cell7.innerHTML = g;
				}
				else {
					continue;
				}
			}
		}
	}

	//Add the form at the bottom of the page (if no form is found) to submit to the act data sheet
	var add_form2 = document.getElementById("form_to_submit");
	var actuators_dropdown = document.getElementById("Actuators");
	var pressure_dropdown = document.getElementById("Pressure_op");

	if (add_form2 != null && actuators_dropdown == null && pressure_dropdown == null) {

		var form_entry = document.createElement("div");
		form_entry.setAttribute("id", "flex-form");
		document.getElementById("form_to_submit").appendChild(form_entry);

		var form_entry = document.createElement("div");
		form_entry.setAttribute("id", "act_form_column");
		document.getElementById("flex-form").appendChild(form_entry);

		var form_entry = document.createElement("div");
		form_entry.setAttribute("id", "pres_op_form_column");
		document.getElementById("flex-form").appendChild(form_entry);

		var form_entry = document.createElement("div");
		form_entry.setAttribute("id", "pres_rlf_form_column");
		document.getElementById("flex-form").appendChild(form_entry);

		//Add the actuator dropdown menu
		var form_entry = document.createElement("div");
		form_entry.innerHTML = "Actuator:<br> <select id='Actuators' name='act'> <br>"; 
		document.getElementById("act_form_column").appendChild(form_entry);

		//Add the pressure dropdown menu
		//var pressure_entry = document.querySelector("FORM");
		var form_entry = document.createElement("div");
		form_entry.innerHTML = "Pressure (operating pressure):<br> <select id='Pressure_op' name='pres_op'> <br>"; 
		document.getElementById("pres_op_form_column").appendChild(form_entry);
		var pres_op_torque = document.createElement("INPUT");

		//Add a relief pressure
		//var pressure_relief = document.querySelector("FORM");
		var form_entry = document.createElement("div");
		form_entry.innerHTML = "Pressure (relief pressure):<br> <select id='Pressure_rlf' name='pres_rlf'> <br>"; 
		document.getElementById("pres_rlf_form_column").appendChild(form_entry);
		var pres_rlf_torque = document.createElement("INPUT");

		//Add ANSI_result input into form
		//var form = document.querySelector("FORM");
		var form = document.getElementById("form_to_submit");
		var form_entry = document.createElement("INPUT");
		form_entry.setAttribute("name", "ANSI_result");
		form_entry.setAttribute("id", "ANSI_form_result");
		form.appendChild(form_entry);
		var ANSI_result = document.getElementById("ansi").value;
		document.getElementById("ANSI_form_result").value = ANSI_result;

		//Add Break Torque result into form
		//var form = document.querySelector("FORM");
		var form = document.getElementById("form_to_submit");
		var form_entry = document.createElement("INPUT");
		form_entry.setAttribute("name", "B_Torque_result");
		form_entry.setAttribute("id", "B_Torque_form_result");
		form.appendChild(form_entry);
		var B_Torque_result = document.getElementById("B_Torque_result").innerHTML;
		document.getElementById("B_Torque_form_result").value = B_Torque_result;

		//Add Break Torque result * SF into form
		//var form = document.querySelector("FORM");
		var form = document.getElementById("form_to_submit");
		var form_entry = document.createElement("INPUT");
		form_entry.setAttribute("name", "B_Torque_result_SF");
		form_entry.setAttribute("id", "B_Torque_form_result_SF");
		form.appendChild(form_entry);
		var B_Torque_result_SF = document.getElementById("B_Torque_result_SF").innerHTML;
		document.getElementById("B_Torque_form_result_SF").value = B_Torque_result_SF;

		//Add Maximum Allowable Torque into Form
		//var form = document.querySelector("FORM");
		var form = document.getElementById("form_to_submit");
		var form_entry = document.createElement("INPUT");
		form_entry.setAttribute("name", "MAST");
		form_entry.setAttribute("id", "MAST_form");
		form.appendChild(form_entry);
		var MAST = document.getElementById("MAST").innerHTML;
		document.getElementById("MAST_form").value = MAST;

		//Add run torque into form
		//var form = document.querySelector("FORM");
		var form = document.getElementById("form_to_submit");
		var form_entry = document.createElement("INPUT");
		form_entry.setAttribute("name", "R_Torque_result");
		form_entry.setAttribute("id", "R_Torque_result_form");
		form.appendChild(form_entry);
		var R_Torque_result = document.getElementById("R_Torque_result").innerHTML;
		document.getElementById("R_Torque_result_form").value = R_Torque_result;

		//Add run torque * SF into form
		//var form = document.querySelector("FORM");
		var form = document.getElementById("form_to_submit");
		var form_entry = document.createElement("INPUT");
		form_entry.setAttribute("name", "R_Torque_result_SF");
		form_entry.setAttribute("id", "R_Torque_result_SF_form");
		form.appendChild(form_entry);
		var R_Torque_result_SF = document.getElementById("R-Torque_result_SF").innerHTML;
		document.getElementById("R_Torque_result_SF_form").value = R_Torque_result_SF;
		
		//Add the dropdown options according to what actuators will work.
		var acts = document.getElementById("result_table").rows.length;
		//Roll thru table, if add actuator options
		for (var count = 1; count < acts; count++) {
			if (count == 1) {
				var opt = document.getElementById("result_table").rows[count].cells[0].innerHTML;
				var dropdown_entry = document.createElement("option");
				dropdown_entry.text = opt;
				document.getElementById("Actuators").add(dropdown_entry);
			}
			else {
				var opt1 = document.getElementById("result_table").rows[count].cells[0].innerHTML;
				var opt_length = document.getElementById("Actuators").options.length;
				var opt2 = document.getElementById("Actuators").options.item(opt_length-1).text;
				if (opt1 != document.getElementById("Actuators").options.item(opt_length-1).text) {
					var dropdown_entry = document.createElement("option");
					dropdown_entry.text = opt1;
					document.getElementById("Actuators").add(dropdown_entry);
				}
			}
		}

		//Roll thru table, if add pressure options to the first actuator from Actuator dropdown	
		var count = document.getElementById("result_table").rows.length;
		for (var tab = 1; tab < count; tab++) {
			var act_selected = document.getElementById("Actuators").value;
			var pres_opt = document.getElementById("result_table").rows[tab].cells[0].innerHTML;
			if (act_selected == pres_opt) {
				var pres_entry = document.createElement("option");
				pres_entry.text = document.getElementById("result_table").rows[tab].cells[1].innerHTML;
				document.getElementById("Pressure_op").add(pres_entry);
			}
		}
		
		//Roll thru table, if add pressure relief options to the first actuator from Actuator dropdown	
		for (var tab = 1; tab < count; tab++) {
			var act_selected = document.getElementById("Actuators").value;
			var pres_opt = document.getElementById("result_table").rows[tab].cells[0].innerHTML;
			if (act_selected == pres_opt) {
				var pres_entry = document.createElement("option");
				pres_entry.text = document.getElementById("result_table").rows[tab].cells[1].innerHTML;
				document.getElementById("Pressure_rlf").add(pres_entry);
			}
		}

		for (var tab = 1; tab < count; tab++) {
			var act_selected = document.getElementById("Actuators").value;
			var pres_opt = document.getElementById("result_table").rows[tab].cells[0].innerHTML;
			if (act_selected != pres_opt) {
				document.getElementById("result_table").rows[tab].style.display = "none";
			}
		}

		//Add event listener, if actuator changed, activate function to change pressures
		document.getElementById("Actuators").addEventListener("change", change_press);

		//Add event listener, if actuator op pressure changed, activate function to change pressures
		document.getElementById("Pressure_op").addEventListener("change", change_op_press);

		//Add event listener, if actuator relief pressure changed, activate function to change pressures
		document.getElementById("Pressure_rlf").addEventListener("change", change_rlf_press);

		//Add start outboard op torque to form
		//var form = document.querySelector("FORM");
		var form = document.getElementById("form_to_submit");
		var form_entry = document.createElement("INPUT");
		form_entry.setAttribute("name", "Start_Outboard_op");
		form_entry.setAttribute("id", "Start_Outboard_op");
		form.appendChild(form_entry);

		//Add min outboard op torque to form
		//var form = document.querySelector("FORM");
		var form = document.getElementById("form_to_submit");
		var form_entry = document.createElement("INPUT");
		form_entry.setAttribute("name", "Min_Outboard_op");
		form_entry.setAttribute("id", "Min_Outboard_op");
		form.appendChild(form_entry);

		//Add end outboard op torque to form
		//var form = document.querySelector("FORM");
		var form = document.getElementById("form_to_submit");
		var form_entry = document.createElement("INPUT");
		form_entry.setAttribute("name", "End_Outboard_op");
		form_entry.setAttribute("id", "End_Outboard_op");
		form.appendChild(form_entry);

		//Add start inboard op torque to form
		//var form = document.querySelector("FORM");
		var form = document.getElementById("form_to_submit");
		var form_entry = document.createElement("INPUT");
		form_entry.setAttribute("name", "Start_Inboard_op");
		form_entry.setAttribute("id", "Start_Inboard_op");
		form.appendChild(form_entry);

		//Add min inboard op to form
		//var form = document.querySelector("FORM");
		var form = document.getElementById("form_to_submit");
		var form_entry = document.createElement("INPUT");
		form_entry.setAttribute("name", "Min_Inboard_op");
		form_entry.setAttribute("id", "Min_Inboard_op");
		form.appendChild(form_entry);

		//Add end inboard op torque to form
		//var form = document.querySelector("FORM");
		var form = document.getElementById("form_to_submit");
		var form_entry = document.createElement("INPUT");
		form_entry.setAttribute("name", "End_Inboard_op");
		form_entry.setAttribute("id", "End_Inboard_op");
		form.appendChild(form_entry);

		//Add start outboard rlf torque to form
		//var form = document.querySelector("FORM");
		var form = document.getElementById("form_to_submit");
		var form_entry = document.createElement("INPUT");
		form_entry.setAttribute("name", "Start_Outboard_rlf");
		form_entry.setAttribute("id", "Start_Outboard_rlf");
		form.appendChild(form_entry);

		//Add min outboard rlf to form
		//var form = document.querySelector("FORM");
		var form = document.getElementById("form_to_submit");
		var form_entry = document.createElement("INPUT");
		form_entry.setAttribute("name", "Min_Outboard_rlf");
		form_entry.setAttribute("id", "Min_Outboard_rlf");
		form.appendChild(form_entry);

		//Add end outboard rlf torque to form
		//var form = document.querySelector("FORM");
		var form = document.getElementById("form_to_submit");
		var form_entry = document.createElement("INPUT");
		form_entry.setAttribute("name", "End_Outboard_rlf");
		form_entry.setAttribute("id", "End_Outboard_rlf");
		form.appendChild(form_entry);

		//Add start inboard rlf torque to form
		//var form = document.querySelector("FORM");
		var form = document.getElementById("form_to_submit");
		var form_entry = document.createElement("INPUT");
		form_entry.setAttribute("name", "Start_Inboard_rlf");
		form_entry.setAttribute("id", "Start_Inboard_rlf");
		form.appendChild(form_entry);

		//Add min inboard rlf to form
		//var form = document.querySelector("FORM");
		var form = document.getElementById("form_to_submit");
		var form_entry = document.createElement("INPUT");
		form_entry.setAttribute("name", "Min_Inboard_rlf");
		form_entry.setAttribute("id", "Min_Inboard_rlf");
		form.appendChild(form_entry);

		//Add end inboard rlf torque to form
		//var form = document.querySelector("FORM");
		var form = document.getElementById("form_to_submit");
		var form_entry = document.createElement("INPUT");
		form_entry.setAttribute("name", "End_Inboard_rlf");
		form_entry.setAttribute("id", "End_Inboard_rlf");
		form.appendChild(form_entry);

		//Add an action to the form - call the Act_Data_Sheet.php file
		var action = document.createAttribute("action");
		action.value = "Act_Data_Sheet.php";
		form.setAttributeNode(action);
		var break_line = document.createElement("BR");
		//document.querySelector("FORM").appendChild(break_line);
		document.getElementById("form_to_submit").appendChild(break_line);

		//Add get method
		var method = document.createAttribute("method");
		method.value = "post";
		form.setAttributeNode(method);

		//Add a submit button
		var sub_button = document.createElement("button");
		sub_button.innerHTML = "Submit"
		//document.querySelector("FORM").appendChild(sub_button);
		document.getElementById("form_to_submit").appendChild(sub_button);

		//Get all actuator operating pressure form values
		change_op_press();

		//Get all actuator relief pressure form values
		change_rlf_press();
	}

	//If the form exists, actuator & pressure dropdowns etc., change everything instead of adding it.
	else if (add_form2 != null && actuators_dropdown != null && pressure_dropdown != null) {
		//Remove existing actuators dropdown options
		var acts_to_remove = document.getElementById("Actuators").options.length;
		for (var x = 0; x < acts_to_remove; x++) {
			document.getElementById("Actuators").options.remove(0);
		}

		//Remove existing pressure_op dropdown options
		var press_to_remove = document.getElementById("Pressure_op").options.length;
		for (var x = 0; x < press_to_remove; x++) {
			document.getElementById("Pressure_op").options.remove(0);
		}

		//Remove existing pressure_rlf dropdown options
		var press_to_remove = document.getElementById("Pressure_rlf").options.length;
		for (var x = 0; x < press_to_remove; x++) {
			document.getElementById("Pressure_rlf").options.remove(0);
		}		

		//Loop through table and add new options if actuator tables
		var acts = document.getElementById("result_table").rows.length;
		for (var count = 1; count < acts; count++) {
			if (count == 1) {
				var opt = document.getElementById("result_table").rows[count].cells[0].innerHTML;
				var dropdown_entry = document.createElement("option");
				dropdown_entry.text = opt;
				document.getElementById("Actuators").add(dropdown_entry);
			}
			else {
				var opt1 = document.getElementById("result_table").rows[count].cells[0].innerHTML;
				var opt_length = document.getElementById("Actuators").options.length;
				var opt2 = document.getElementById("Actuators").options.item(opt_length-1).text;
				if (opt1 != document.getElementById("Actuators").options.item(opt_length-1).text) {
					var dropdown_entry = document.createElement("option");
					dropdown_entry.text = opt1;
					document.getElementById("Actuators").add(dropdown_entry);
				}
			}
		}

		//Loop through table and add new pressure options from actuator tables if they match the actuator
		var count = document.getElementById("result_table").rows.length;
		for (var tab = 1; tab < count; tab++) {
			var act_selected = document.getElementById("Actuators").value;
			var pres_opt = document.getElementById("result_table").rows[tab].cells[0].innerHTML;
			if (act_selected == pres_opt) {
				var pres_entry = document.createElement("option");
				pres_entry.text = document.getElementById("result_table").rows[tab].cells[1].innerHTML;
				document.getElementById("Pressure_op").add(pres_entry);
			}
		}

		//Loop through table and add new pressure options from actuator tables if they match the actuator
		for (var tab = 1; tab < count; tab++) {
			var act_selected = document.getElementById("Actuators").value;
			var pres_opt = document.getElementById("result_table").rows[tab].cells[0].innerHTML;
			if (act_selected == pres_opt) {
				var pres_entry = document.createElement("option");
				pres_entry.text = document.getElementById("result_table").rows[tab].cells[1].innerHTML;
				document.getElementById("Pressure_rlf").add(pres_entry);
			}
		}

		for (var tab = 1; tab < count; tab++) {
			var act_selected = document.getElementById("Actuators").value;
			var pres_opt = document.getElementById("result_table").rows[tab].cells[0].innerHTML;
			if (act_selected == pres_opt) {
				document.getElementById("result_table").rows[tab].style.display = "";
			}
			else {
				document.getElementById("result_table").rows[tab].style.display = "none";
			}
		}

		//Add ANSI_result value into form if form already exists
		var ANSI_result = document.getElementById("ANSI_result").innerHTML;
		document.getElementById("ANSI_form_result").value = ANSI_result;

		//Add break torque value into form if form already exists
		var B_Torque_result = document.getElementById("B_Torque_result").innerHTML;
		document.getElementById("B_Torque_form_result").value = B_Torque_result;

		//Add break torque value * SF into form if form already exists
		var B_Torque_result_SF = document.getElementById("B_Torque_result_SF").innerHTML;
		document.getElementById("B_Torque_form_result_SF").value = B_Torque_result_SF;

		//Add Maximum Allowable Stem Torque value into form if form already exists
		var MAST = document.getElementById("MAST").innerHTML;
		document.getElementById("MAST_form").value = MAST;

		//Add Run Torque value into form if form already exists
		var R_Torque_result = document.getElementById("R_Torque_result").innerHTML;
		document.getElementById("R_Torque_result_form").value = R_Torque_result;

		//Add Run Torque * SF value into form if form already exists
		var R_Torque_result_SF = document.getElementById("R-Torque_result_SF").innerHTML;
		document.getElementById("R_Torque_result_SF_form").value = R_Torque_result_SF;

		//Get all actuator operating pressure form values
		change_op_press();

		//Get all actuator relief pressure form values
		change_rlf_press();
	}
}