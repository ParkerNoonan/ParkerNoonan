//Add event listener, get ANSI rating and show max pressure below dropdown menu.
document.getElementById("ansi").addEventListener("change", display_max_ansi);

function display_max_ansi() {	
	var ansi_rating = document.getElementById("ansi").value;
	if (ansi_rating == "A150") {
		document.getElementById("Max_Ansi_message").innerHTML = "A150 components are rated up to 285 psig.";
	}
	else if (ansi_rating == "A300") {
		document.getElementById("Max_Ansi_message").innerHTML = "A300 components are rated up to 740 psig";
	}
	else if (ansi_rating == "A400") {
		document.getElementById("Max_Ansi_message").innerHTML = "A400 components are rated up to 985 psig";
	}
	else if (ansi_rating == "A600") {
		document.getElementById("Max_Ansi_message").innerHTML = "A600 components are rated up to 1480 psig";
	}
}

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
		}
	}

	//Loop through table and update all form values if operating pressure has changed.
	function change_op_press() {
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
		}
	}

	//Loop through table and update all form values if relief pressure has changed.
	function change_rlf_press() {
		// if (document.getElementById("Actuators").value == "") {
		// 	document.getElementById("Start_Outboard_rlf").value = "";
		// 	document.getElementById("Min_Outboard_rlf").value = "";
		// 	document.getElementById("End_Outboard_rlf").value = "";
		// 	document.getElementById("Start_Inboard_rlf").value = "";
		// 	document.getElementById("Min_Inboard_rlf").value = "";
		// 	document.getElementById("End_Inboard_rlf").value = "";
		// }
		// else {
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
				// if (act_value == act_table && act_pres_rlf == act_table_pres) {
				// 	document.getElementById("Start_Outboard_rlf").value = st_outboard;
				// 	document.getElementById("Min_Outboard_rlf").value = m_outboard;
				// 	document.getElementById("End_Outboard_rlf").value = e_outboard;
				// 	document.getElementById("Start_Inboard_rlf").value = st_inboard;
				// 	document.getElementById("Min_Inboard_rlf").value = m_inboard;
				// 	document.getElementById("End_Inboard_rlf").value = e_inboard;
				// 	break;
				// }
				// else {
				// 	continue;
				// }
			}
		}
	//}	

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
	//Add the div with the results at the bottom of the page.
	var add_form2 = document.getElementById("div_no_submit");
	var actuators_dropdown = document.getElementById("Actuators");
	var pressure_dropdown = document.getElementById("Pressure_op");

	if (add_form2 != null && actuators_dropdown == null && pressure_dropdown == null) {

		var form_entry = document.createElement("div");
		form_entry.setAttribute("id", "flex-form");
		document.getElementById("div_no_submit").appendChild(form_entry);

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