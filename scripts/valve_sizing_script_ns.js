	function display_results() {

		var dia1 = document.getElementById("diameter").value;
		var dia2 = dia1.trim();
		var dia = parseInt(dia2);

		var ansi = document.getElementById("ansi").value;
		
		var op_pres1 = document.getElementById("op_pressure").value;
		var op_pres2 = op_pres1.trim();
		var op_pres = parseInt(op_pres2);

		var safety_factor = document.getElementById("safety_factor").value;
		
		var manufacturer1 = document.getElementById("manufacturer").value;
		var manufacturer = manufacturer1.trim();

		//ANSI 150 Run Torque object
		var ANSI_150_RT = {2:"1054", 3:"1566", 4:"2702", 6:"5423", 8:"7216", 10:"11440", 12:"13300",
							14:"15700", 16:"18000", 18:"22000", 20:"25000", 22:"29000", 24:"35000",
							26:"41000"};
		//ANSI 300 Run Torque object
		var ANSI_300_RT = {2:"1054", 3:"1566", 4:"2702", 6:"5423", 8:"7216", 10:"11440", 12:"13300",
							14:"15700", 16:"18000", 18:"22000", 20:"25000", 22:"29000", 24:"35000",
							26:"41000"};
		//ANSI 400 Run Torque object
		var ANSI_400_RT = {2:"1054", 3:"1566", 4:"2702", 6:"5423", 8:"7216", 10:"11440", 12:"13300",
							14:"15700", 16:"18000", 18:"22000", 20:"25000", 22:"29000", 24:"35000",
							26:"41000"};
		//ANSI 600 Run Torque object
		var ANSI_600_RT = {2:"1054", 3:"1566", 4:"2702", 6:"5423", 8:"7216", 10:"11440", 12:"13300",
							14:"15700", 16:"18000", 18:"22000", 20:"25000", 22:"29000", 24:"35000",
							26:"41000"};
		//ANSI 150 Max Allow Torque object
		var ANSI_150_MAST = {2:"6000", 3:"6000", 4:"21868", 6:"21868", 8:"51840", 10:"51840", 12:"103750",
							14:"103750", 16:"169750", 18:"169750", 20:"457300", 22:"457300", 24:"457300",
							26:"457300"};
		//ANSI 300 Max Allow Torque object
		var ANSI_300_MAST = {2:"6000", 3:"6000", 4:"21868", 6:"21868", 8:"51840", 10:"51840", 12:"103750",
							14:"103750", 16:"169750", 18:"169750", 20:"457300", 22:"457300", 24:"457300",
							26:"457300"};
		//ANSI 400 Max Allow Torque object
		var ANSI_400_MAST = {2:"6000", 3:"6000", 4:"21868", 6:"21868", 8:"51840", 10:"51840", 12:"103750",
							14:"103750", 16:"169750", 18:"169750", 20:"457300", 22:"457300", 24:"457300",
							26:"457300"};
		//ANSI 600 Max Allow Torque object
		var ANSI_600_MAST = {2:"6000", 3:"6000", 4:"21868", 6:"21868", 8:"51840", 10:"51840", 12:"103750",
							14:"103750", 16:"169750", 18:"169750", 20:"457300", 22:"457300", 24:"457300",
							26:"457300"};

		//Sizing equations for 2" valves A150
		if (dia == 2 && ansi == "A150" && (op_pres <= 285 && op_pres > 0) && manufacturer == "Cameron" ) {
			var Break_Torque = 540 + 0.4 * op_pres;
			var Break_Torque_Min = 1054;
			console.log(Break_Torque);
			console.log(Break_Torque_Min);
			if (Break_Torque < Break_Torque_Min) {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque_Min;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque_Min * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_150_RT["2"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_150_RT["2"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_150_MAST["2"];	
			}
			else {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_150_RT["2"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_150_RT["2"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_150_MAST["2"];
			}
		}

		//Sizing equations for 3" valves A150
		else if (dia == 3 && ansi == "A150" && (op_pres <= 285 && op_pres > 0) && manufacturer == "Cameron") {
			var Break_Torque = 1188 + 0.71 * op_pres;
			var Break_Torque_Min = 1566;
			console.log(Break_Torque);
			console.log(Break_Torque_Min);
			if (Break_Torque < Break_Torque_Min) {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque_Min;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque_Min * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_150_RT["3"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_150_RT["3"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_150_MAST["3"];	
			}
			else {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_150_RT["3"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_150_RT["3"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_150_MAST["3"];
			}
		}

		//Sizing equations for 4" valves A150
		else if (dia == 4 && ansi == "A150" && (op_pres <= 285 && op_pres > 0) && manufacturer == "Cameron") {
			var Break_Torque = 1328 + 1.09 * op_pres;
			var Break_Torque_Min = 2702;
			console.log(Break_Torque);
			console.log(Break_Torque_Min);
			if (Break_Torque < Break_Torque_Min) {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque_Min;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque_Min * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_150_RT["4"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_150_RT["4"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_150_MAST["4"];	
			}
			else {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_150_RT["4"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_150_RT["4"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_150_MAST["4"];
			}	
		}

		//Sizing equations for 6" valves A150
		else if (dia == 6 && ansi == "A150" && (op_pres <= 285 && op_pres > 0) && manufacturer == "Cameron") {
			var Break_Torque = 4823 + 1.47 * op_pres;
			var Break_Torque_Min = 5423;
			console.log(Break_Torque);
			console.log(Break_Torque_Min);
			if (Break_Torque < Break_Torque_Min) {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque_Min;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque_Min * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_150_RT["6"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_150_RT["6"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_150_MAST["6"];	
			}
			else {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_150_RT["6"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_150_RT["6"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_150_MAST["6"];
			}
		}

		//Sizing equation for 8" valves A150
		else if (dia == 8 && ansi == "A150" && (op_pres <= 285 && op_pres > 0) && manufacturer == "Cameron") {
			var Break_Torque = 6010 + 6.86 * op_pres;
			var Break_Torque_Min = 7216;
			console.log(Break_Torque);
			console.log(Break_Torque_Min);
			if (Break_Torque < Break_Torque_Min) {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque_Min;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque_Min * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_150_RT["8"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_150_RT["8"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_150_MAST["8"];
			}
			else {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_150_RT["8"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_150_RT["8"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_150_MAST["8"];
			}
		}

		//Sizing equation for 10" valves A150
		else if (dia == 10 && ansi == "A150" && (op_pres <= 285 && op_pres > 0) && manufacturer == "Cameron") {
			var Break_Torque = 7581 + 10.12 * op_pres;
			var Break_Torque_Min = 11440;
			console.log(Break_Torque);
			console.log(Break_Torque_Min);
			if (Break_Torque < Break_Torque_Min) {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque_Min;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque_Min * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_150_RT["10"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_150_RT["10"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_150_MAST["10"];
			}
			else {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_150_RT["10"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_150_RT["10"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_150_MAST["10"];
			}
		}

		//Sizing equation for 12" valves A150
		else if (dia == 12 && ansi == "A150" && (op_pres <= 285 && op_pres > 0) && manufacturer == "Cameron") {
			var Break_Torque = 13300 + 12.3 * op_pres;
			var Break_Torque_Min = 13300;
			console.log(Break_Torque);
			console.log(Break_Torque_Min);
			if (Break_Torque < Break_Torque_Min) {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque_Min;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque_Min * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_150_RT["12"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_150_RT["12"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_150_MAST["12"];
			}
			else {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_150_RT["12"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_150_RT["12"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_150_MAST["12"];
			}
		}

		//Sizing equation for 14" valves A150
		else if (dia == 14 && ansi == "A150" && (op_pres <= 285 && op_pres > 0) && manufacturer == "Cameron") {
			var Break_Torque = 15700 + 17.5 * op_pres;
			var Break_Torque_Min = 15700;
			console.log(Break_Torque);
			console.log(Break_Torque_Min);
			if (Break_Torque < Break_Torque_Min) {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque_Min;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque_Min * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_150_RT["14"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_150_RT["14"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_150_MAST["14"];
			}
			else {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_150_RT["14"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_150_RT["14"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_150_MAST["14"];
			}
		}

		//Sizing equation for 16" valves A150
		else if (dia == 16 && ansi == "A150" && (op_pres <= 285 && op_pres > 0) && manufacturer == "Cameron") {
			var Break_Torque = 18000 + 24.2 * op_pres;
			var Break_Torque_Min = 18000;
			console.log(Break_Torque);
			console.log(Break_Torque_Min);
			if (Break_Torque < Break_Torque_Min) {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque_Min;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque_Min * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_150_RT["16"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_150_RT["16"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_150_MAST["16"];
			}
			else {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_150_RT["16"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_150_RT["16"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_150_MAST["16"];
			}
		}

		//Sizing equation for 18" valves A150
		else if (dia == 18 && ansi == "A150" && (op_pres <= 285 && op_pres > 0) && manufacturer == "Cameron") {
			var Break_Torque = 22000 + 34.7 * op_pres;
			var Break_Torque_Min = 22000;
			console.log(Break_Torque);
			console.log(Break_Torque_Min);
			if (Break_Torque < Break_Torque_Min) {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque_Min;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque_Min * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_150_RT["18"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_150_RT["18"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_150_MAST["18"];
			}
			else {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_150_RT["18"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_150_RT["18"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_150_MAST["18"];
			}
		}

		//Sizing equation for 20" valves A150
		else if (dia == 20 && ansi == "A150" && (op_pres <= 285 && op_pres > 0) && manufacturer == "Cameron") {
			var Break_Torque = 25000 + 48.0 * op_pres;
			var Break_Torque_Min = 25000;
			console.log(Break_Torque);
			console.log(Break_Torque_Min);
			if (Break_Torque < Break_Torque_Min) {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque_Min;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque_Min * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_150_RT["20"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_150_RT["20"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_150_MAST["20"];
			}
			else {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_150_RT["20"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_150_RT["20"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_150_MAST["20"];
			}
		}

		//Sizing equation for 22" valves A150
		else if (dia == 22 && ansi == "A150" && (op_pres <= 285 && op_pres > 0) && manufacturer == "Cameron") {
			var Break_Torque = 29000 + 60.0 * op_pres;
			var Break_Torque_Min = 29000;
			console.log(Break_Torque);
			console.log(Break_Torque_Min);
			if (Break_Torque < Break_Torque_Min) {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque_Min;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque_Min * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_150_RT["22"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_150_RT["22"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_150_MAST["22"];

			}
			else {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_150_RT["22"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_150_RT["22"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_150_MAST["22"];
			}
		}

		//Sizing equation for 24" valves A150
		else if (dia == 24 && ansi == "A150" && (op_pres <= 285 && op_pres > 0) && manufacturer == "Cameron") {
			var Break_Torque = 35000 + 74.0 * op_pres;
			var Break_Torque_Min = 35000;
			console.log(Break_Torque);
			console.log(Break_Torque_Min);
			if (Break_Torque < Break_Torque_Min) {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque_Min;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque_Min * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_150_RT["24"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_150_RT["24"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_150_MAST["24"];
			}
			else {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_150_RT["24"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_150_RT["24"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_150_MAST["24"];
			}
		}

		//Sizing equation for 26" valves, A150
		else if (dia == 26 && ansi == "A150" && (op_pres <= 285 && op_pres > 0) && manufacturer == "Cameron") {
			var Break_Torque = 41000 + 90.0 * op_pres;
			var Break_Torque_Min = 41000;
			console.log(Break_Torque);
			console.log(Break_Torque_Min);
			if (Break_Torque < Break_Torque_Min) {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque_Min;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque_Min * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_150_RT["26"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_150_RT["26"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_150_MAST["26"];
			}
			else {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_150_RT["26"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_150_RT["26"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_150_MAST["26"];
			}
		}

		//Sizing equations for 2" valves, A300
		else if (dia == 2 && ansi == "A300" && (op_pres <= 740 && op_pres > 0) && manufacturer == "Cameron" ) {
			var Break_Torque = 540 + 0.4 * op_pres;
			var Break_Torque_Min = 1054;
			console.log(Break_Torque);
			console.log(Break_Torque_Min);
			console.log(ANSI_300_RT["2"]);
			if (Break_Torque < Break_Torque_Min) {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque_Min;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque_Min * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_300_RT["2"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_300_RT["2"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_300_MAST["2"];
			}
			else {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_300_RT["2"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_300_RT["2"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_300_MAST["2"];
			}
		}

		//Sizing equations for 3" valves, A300
		else if (dia == 3 && ansi == "A300" && (op_pres <= 740 && op_pres > 0) && manufacturer == "Cameron") {
			var Break_Torque = 1188 + 0.71 * op_pres;
			var Break_Torque_Min = 1566;
			console.log(Break_Torque);
			console.log(Break_Torque_Min);
			if (Break_Torque < Break_Torque_Min) {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque_Min;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque_Min * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_300_RT["3"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_300_RT["3"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_300_MAST["3"];
			}
			else {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_300_RT["3"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_300_RT["3"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_300_MAST["3"];
			}
		}

		//Sizing equations for 4" valves, A300
		else if (dia == 4 && ansi == "A300" && (op_pres <= 740 && op_pres > 0) && manufacturer == "Cameron") {
			var Break_Torque = 1328 + 1.09 * op_pres;
			var Break_Torque_Min = 2702;
			console.log(Break_Torque);
			console.log(Break_Torque_Min);
			if (Break_Torque < Break_Torque_Min) {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque_Min;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque_Min * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_300_RT["4"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_300_RT["4"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_300_MAST["4"];
			}
			else {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_300_RT["4"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_300_RT["4"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_300_MAST["4"];
			}	
		}

		//Sizing equations for 6" valves, A300
		else if (dia == 6 && ansi == "A300" && (op_pres <= 740 && op_pres > 0) && manufacturer == "Cameron") {
			var Break_Torque = 4823 + 1.47 * op_pres;
			var Break_Torque_Min = 5423;
			console.log(Break_Torque);
			console.log(Break_Torque_Min);
			if (Break_Torque < Break_Torque_Min) {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque_Min;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque_Min * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_300_RT["6"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_300_RT["6"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_300_MAST["6"];
			}
			else {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_300_RT["6"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_300_RT["6"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_300_MAST["6"];
			}
		}

		//Sizing equation for 8" valves, A300
		else if (dia == 8 && ansi == "A300" && (op_pres <= 740 && op_pres > 0) && manufacturer == "Cameron") {
			var Break_Torque = 6010 + 6.86 * op_pres;
			var Break_Torque_Min = 7216;
			console.log(Break_Torque);
			console.log(Break_Torque_Min);
			if (Break_Torque < Break_Torque_Min) {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque_Min;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque_Min * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_300_RT["8"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_300_RT["8"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_300_MAST["8"];
			}
			else {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_300_RT["8"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_300_RT["8"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_300_MAST["8"];
			}
		}

		//Sizing equation for 10" valves, A300
		else if (dia == 10 && ansi == "A300" && (op_pres <= 740 && op_pres > 0) && manufacturer == "Cameron") {
			var Break_Torque = 7581 + 10.12 * op_pres;
			var Break_Torque_Min = 11440;
			console.log(Break_Torque);
			console.log(Break_Torque_Min);
			if (Break_Torque < Break_Torque_Min) {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque_Min;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque_Min * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_300_RT["10"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_300_RT["10"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_300_MAST["10"];
			}
			else {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_300_RT["10"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_300_RT["10"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_300_MAST["10"];
			}
		}

		//Sizing equation for 12" valves, A300
		else if (dia == 12 && ansi == "A300" && (op_pres <= 740 && op_pres > 0) && manufacturer == "Cameron") {
			var Break_Torque = 13300 + 12.3 * op_pres;
			var Break_Torque_Min = 13300;
			console.log(Break_Torque);
			console.log(Break_Torque_Min);
			if (Break_Torque < Break_Torque_Min) {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque_Min;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque_Min * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_300_RT["12"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_300_RT["12"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_300_MAST["12"];
			}
			else {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_300_RT["12"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_300_RT["12"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_300_MAST["12"];
			}
		}

		//Sizing equation for 14" valves, A300
		else if (dia == 14 && ansi == "A300" && (op_pres <= 740 && op_pres > 0) && manufacturer == "Cameron") {
			var Break_Torque = 15700 + 17.5 * op_pres;
			var Break_Torque_Min = 15700;
			console.log(Break_Torque);
			console.log(Break_Torque_Min);
			if (Break_Torque < Break_Torque_Min) {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque_Min;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque_Min * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_300_RT["14"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_300_RT["14"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_300_MAST["14"];
			}
			else {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_300_RT["14"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_300_RT["14"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_300_MAST["14"];
			}
		}

		//Sizing equation for 16" valves, A300
		else if (dia == 16 && ansi == "A300" && (op_pres <= 740 && op_pres > 0) && manufacturer == "Cameron") {
			var Break_Torque = 18000 + 24.2 * op_pres;
			var Break_Torque_Min = 18000;
			console.log(Break_Torque);
			console.log(Break_Torque_Min);
			if (Break_Torque < Break_Torque_Min) {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque_Min;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque_Min * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_300_RT["16"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_300_RT["16"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_300_MAST["16"];
			}
			else {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_300_RT["16"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_300_RT["16"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_300_MAST["16"];
			}
		}

		//Sizing equation for 18" valves, A300
		else if (dia == 18 && ansi == "A300" && (op_pres <= 740 && op_pres > 0) && manufacturer == "Cameron") {
			var Break_Torque = 22000 + 34.7 * op_pres;
			var Break_Torque_Min = 22000;
			console.log(Break_Torque);
			console.log(Break_Torque_Min);
			if (Break_Torque < Break_Torque_Min) {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque_Min;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque_Min * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_300_RT["18"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_300_RT["18"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_300_MAST["18"];
			}
			else {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_300_RT["18"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_300_RT["18"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_300_MAST["18"];
			}
		}

		//Sizing equation for 20" valves, A300
		else if (dia == 20 && ansi == "A300" && (op_pres <= 740 && op_pres > 0) && manufacturer == "Cameron") {
			var Break_Torque = 25000 + 48.0 * op_pres;
			var Break_Torque_Min = 25000;
			console.log(Break_Torque);
			console.log(Break_Torque_Min);
			if (Break_Torque < Break_Torque_Min) {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque_Min;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque_Min * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_300_RT["20"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_300_RT["20"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_300_MAST["20"];
			}
			else {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_300_RT["20"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_300_RT["20"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_300_MAST["20"];
			}
		}

		//Sizing equation for 22" valves, A300
		else if (dia == 22 && ansi == "A300" && (op_pres <= 740 && op_pres > 0) && manufacturer == "Cameron") {
			var Break_Torque = 29000 + 60.0 * op_pres;
			var Break_Torque_Min = 29000;
			console.log(Break_Torque);
			console.log(Break_Torque_Min);
			if (Break_Torque < Break_Torque_Min) {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque_Min;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque_Min * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_300_RT["22"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_300_RT["22"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_300_MAST["22"];
			}
			else {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_300_RT["22"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_300_RT["22"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_300_MAST["22"];
			}
		}


		//Sizing equation for 24" valves, A300
		else if (dia == 24 && ansi == "A300" && (op_pres <= 740 && op_pres > 0) && manufacturer == "Cameron") {
			var Break_Torque = 35000 + 74.0 * op_pres;
			var Break_Torque_Min = 35000;
			console.log(Break_Torque);
			console.log(Break_Torque_Min);
			if (Break_Torque < Break_Torque_Min) {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque_Min;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque_Min * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_300_RT["24"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_300_RT["24"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_300_MAST["24"];
			}
			else {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_300_RT["24"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_300_RT["24"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_300_MAST["24"];
			}
		}

		//Sizing equation for 26" valves, A300
		else if (dia == 26 && ansi == "A300" && (op_pres <= 740 && op_pres > 0) && manufacturer == "Cameron") {
			var Break_Torque = 41000 + 90.0 * op_pres;
			var Break_Torque_Min = 41000;
			console.log(Break_Torque);
			console.log(Break_Torque_Min);
			if (Break_Torque < Break_Torque_Min) {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque_Min;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque_Min * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_300_RT["26"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_300_RT["26"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_300_MAST["26"];
			}
			else {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_300_RT["26"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_300_RT["26"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_300_MAST["26"];
			}
		}

		//Sizing equations for 2" valves, A400
		else if (dia == 2 && ansi == "A400" && (op_pres <= 990 && op_pres > 0) && manufacturer == "Cameron" ) {
			var Break_Torque = 540 + 0.4 * op_pres;
			var Break_Torque_Min = 1054;
			console.log(Break_Torque);
			console.log(Break_Torque_Min);
			if (Break_Torque < Break_Torque_Min) {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque_Min;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque_Min * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_400_RT["2"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_400_RT["2"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_400_MAST["2"];
			}
			else {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_400_RT["2"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_400_RT["2"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_400_MAST["2"];
			}
		}

		//Sizing equations for 3" valves, A400
		else if (dia == 3 && ansi == "A400" && (op_pres <= 990 && op_pres > 0) && manufacturer == "Cameron") {
			var Break_Torque = 1188 + 0.71 * op_pres;
			var Break_Torque_Min = 1566;
			console.log(Break_Torque);
			console.log(Break_Torque_Min);
			if (Break_Torque < Break_Torque_Min) {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque_Min;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque_Min * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_400_RT["3"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_400_RT["3"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_400_MAST["3"];
			}
			else {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_400_RT["3"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_400_RT["3"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_400_MAST["3"];
			}
		}

		//Sizing equations for 4" valves, A400
		else if (dia == 4 && ansi == "A400" && (op_pres <= 990 && op_pres > 0) && manufacturer == "Cameron") {
			var Break_Torque = 1328 + 1.09 * op_pres;
			var Break_Torque_Min = 2702;
			console.log(Break_Torque);
			console.log(Break_Torque_Min);
			if (Break_Torque < Break_Torque_Min) {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque_Min;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque_Min * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_400_RT["4"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_400_RT["4"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_400_MAST["4"];
			}
			else {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_400_RT["4"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_400_RT["4"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_400_MAST["4"];
			}	
		}

		//Sizing equations for 6" valves, A400
		else if (dia == 6 && ansi == "A400" && (op_pres <= 990 && op_pres > 0) && manufacturer == "Cameron") {
			var Break_Torque = 4823 + 1.47 * op_pres;
			var Break_Torque_Min = 5423;
			console.log(Break_Torque);
			console.log(Break_Torque_Min);
			if (Break_Torque < Break_Torque_Min) {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque_Min;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque_Min * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_400_RT["6"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_400_RT["6"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_400_MAST["6"];
			}
			else {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_400_RT["6"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_400_RT["6"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_400_MAST["6"];
			}
		}

		//Sizing equation for 8" valves, A400
		else if (dia == 8 && ansi == "A400" && (op_pres <= 990 && op_pres > 0) && manufacturer == "Cameron") {
			var Break_Torque = 6010 + 6.86 * op_pres;
			var Break_Torque_Min = 7216;
			console.log(Break_Torque);
			console.log(Break_Torque_Min);
			if (Break_Torque < Break_Torque_Min) {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque_Min;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque_Min * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_400_RT["8"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_400_RT["8"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_400_MAST["8"];
			}
			else {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_400_RT["8"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_400_RT["8"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_400_MAST["8"];
			}
		}

		//Sizing equation for 10" valves, A400
		else if (dia == 10 && ansi == "A400" && (op_pres <= 990 && op_pres > 0) && manufacturer == "Cameron") {
			var Break_Torque = 7581 + 10.12 * op_pres;
			var Break_Torque_Min = 11440;
			console.log(Break_Torque);
			console.log(Break_Torque_Min);
			if (Break_Torque < Break_Torque_Min) {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque_Min;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque_Min * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_400_RT["10"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_400_RT["10"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_400_MAST["10"];
			}
			else {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_400_RT["10"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_400_RT["10"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_400_MAST["10"];
			}
		}

		//Sizing equation for 12" valves, A400
		else if (dia == 12 && ansi == "A400" && (op_pres <= 990 && op_pres > 0) && manufacturer == "Cameron") {
			var Break_Torque = 13300 + 12.3 * op_pres;
			var Break_Torque_Min = 13300;
			console.log(Break_Torque);
			console.log(Break_Torque_Min);
			if (Break_Torque < Break_Torque_Min) {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque_Min;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque_Min * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_400_RT["12"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_400_RT["12"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_400_MAST["12"];
			}
			else {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_400_RT["12"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_400_RT["12"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_400_MAST["12"];
			}
		}

		//Sizing equation for 14" valves, A400
		else if (dia == 14 && ansi == "A400" && (op_pres <= 990 && op_pres > 0) && manufacturer == "Cameron") {
			var Break_Torque = 15700 + 17.5 * op_pres;
			var Break_Torque_Min = 15700;
			console.log(Break_Torque);
			console.log(Break_Torque_Min);
			if (Break_Torque < Break_Torque_Min) {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque_Min;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque_Min * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_400_RT["14"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_400_RT["14"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_400_MAST["14"];
			}
			else {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_400_RT["14"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_400_RT["14"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_400_MAST["14"];
			}
		}

		//Sizing equation for 16" valves, A400
		else if (dia == 16 && ansi == "A400" && (op_pres <= 990 && op_pres > 0) && manufacturer == "Cameron") {
			var Break_Torque = 18000 + 24.2 * op_pres;
			var Break_Torque_Min = 18000;
			console.log(Break_Torque);
			console.log(Break_Torque_Min);
			if (Break_Torque < Break_Torque_Min) {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque_Min;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque_Min * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_400_RT["16"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_400_RT["16"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_400_MAST["16"];
			}
			else {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_400_RT["16"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_400_RT["16"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_400_MAST["16"];
			}
		}

		//Sizing equation for 18" valves, A400
		else if (dia == 18 && ansi == "A400" && (op_pres <= 990 && op_pres > 0) && manufacturer == "Cameron") {
			var Break_Torque = 22000 + 34.7 * op_pres;
			var Break_Torque_Min = 22000;
			console.log(Break_Torque);
			console.log(Break_Torque_Min);
			if (Break_Torque < Break_Torque_Min) {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque_Min;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque_Min * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_400_RT["18"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_400_RT["18"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_400_MAST["18"];
			}
			else {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_400_RT["18"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_400_RT["18"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_400_MAST["18"];
			}
		}

		//Sizing equation for 20" valves, A400
		else if (dia == 20 && ansi == "A400" && (op_pres <= 990 && op_pres > 0) && manufacturer == "Cameron") {
			var Break_Torque = 25000 + 48.0 * op_pres;
			var Break_Torque_Min = 25000;
			console.log(Break_Torque);
			console.log(Break_Torque_Min);
			if (Break_Torque < Break_Torque_Min) {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque_Min;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque_Min * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_400_RT["20"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_400_RT["20"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_400_MAST["20"];
			}
			else {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_400_RT["20"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_400_RT["20"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_400_MAST["20"];
			}
		}

		//Sizing equation for 22" valves, A400
		else if (dia == 22 && ansi == "A400" && (op_pres <= 990 && op_pres > 0) && manufacturer == "Cameron") {
			var Break_Torque = 29000 + 60.0 * op_pres;
			var Break_Torque_Min = 29000;
			console.log(Break_Torque);
			console.log(Break_Torque_Min);
			if (Break_Torque < Break_Torque_Min) {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque_Min;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque_Min * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_400_RT["22"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_400_RT["22"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_400_MAST["22"];
			}
			else {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_400_RT["22"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_400_RT["22"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_400_MAST["22"];
			}
		}


		//Sizing equation for 24" valves, A400
		else if (dia == 24 && ansi == "A400" && (op_pres <= 990 && op_pres > 0) && manufacturer == "Cameron") {
			var Break_Torque = 35000 + 74.0 * op_pres;
			var Break_Torque_Min = 35000;
			console.log(Break_Torque);
			console.log(Break_Torque_Min);
			if (Break_Torque < Break_Torque_Min) {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque_Min;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque_Min * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_400_RT["24"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_400_RT["24"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_400_MAST["24"];
			}
			else {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_400_RT["24"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_400_RT["24"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_400_MAST["24"];
			}
		}

		//Sizing equation for 26" valves, A400
		else if (dia == 26 && ansi == "A400" && (op_pres <= 990 && op_pres > 0) && manufacturer == "Cameron") {
			var Break_Torque = 41000 + 90.0 * op_pres;
			var Break_Torque_Min = 41000;
			console.log(Break_Torque);
			console.log(Break_Torque_Min);
			if (Break_Torque < Break_Torque_Min) {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque_Min;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque_Min * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_400_RT["26"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_400_RT["26"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_400_MAST["26"];
			}
			else {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_400_RT["26"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_400_RT["26"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_400_MAST["26"];
			}
		}

		//Sizing equations for 2" valves, A600
		else if (dia == 2 && ansi == "A600" && (op_pres <= 1480 && op_pres > 0) && manufacturer == "Cameron" ) {
			var Break_Torque = 540 + 0.4 * op_pres;
			var Break_Torque_Min = 1054;
			console.log(Break_Torque);
			console.log(Break_Torque_Min);
			if (Break_Torque < Break_Torque_Min) {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque_Min;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque_Min * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_600_RT["2"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_600_RT["2"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_600_MAST["2"];
			}
			else {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_600_RT["2"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_600_RT["2"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_600_MAST["2"];
			}
		}

		//Sizing equations for 3" valves, A600
		else if (dia == 3 && ansi == "A600" && (op_pres <= 1480 && op_pres > 0) && manufacturer == "Cameron") {
			var Break_Torque = 1188 + 0.71 * op_pres;
			var Break_Torque_Min = 1566;
			console.log(Break_Torque);
			console.log(Break_Torque_Min);
			if (Break_Torque < Break_Torque_Min) {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque_Min;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque_Min * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_600_RT["3"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_600_RT["3"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_600_MAST["3"];
			}
			else {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_600_RT["3"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_600_RT["3"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_600_MAST["3"];
			}
		}

		//Sizing equations for 4" valves, A600
		else if (dia == 4 && ansi == "A600" && (op_pres <= 1480 && op_pres > 0) && manufacturer == "Cameron") {
			var Break_Torque = 1328 + 1.09 * op_pres;
			var Break_Torque_Min = 2702;
			console.log(Break_Torque);
			console.log(Break_Torque_Min);
			if (Break_Torque < Break_Torque_Min) {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque_Min;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque_Min * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_600_RT["4"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_600_RT["4"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_600_MAST["4"];
			}
			else {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_600_RT["4"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_600_RT["4"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_600_MAST["4"];
			}	
		}

		//Sizing equations for 6" valves, A600
		else if (dia == 6 && ansi == "A600" && (op_pres <= 1480 && op_pres > 0) && manufacturer == "Cameron") {
			var Break_Torque = 4823 + 1.47 * op_pres;
			var Break_Torque_Min = 5423;
			console.log(Break_Torque);
			console.log(Break_Torque_Min);
			if (Break_Torque < Break_Torque_Min) {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque_Min;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque_Min * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_600_RT["6"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_600_RT["6"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_600_MAST["6"];
			}
			else {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_600_RT["6"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_600_RT["6"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_600_MAST["6"];
			}
		}

		//Sizing equation for 8" valves, A600
		else if (dia == 8 && ansi == "A600" && (op_pres <= 1480 && op_pres > 0) && manufacturer == "Cameron") {
			var Break_Torque = 6010 + 6.86 * op_pres;
			var Break_Torque_Min = 7216;
			console.log(Break_Torque);
			console.log(Break_Torque_Min);
			if (Break_Torque < Break_Torque_Min) {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque_Min;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque_Min * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_600_RT["8"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_600_RT["8"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_600_MAST["8"];
			}
			else {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_600_RT["8"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_600_RT["8"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_600_MAST["8"];
			}
		}

		//Sizing equation for 10" valves, A600
		else if (dia == 10 && ansi == "A600" && (op_pres <= 1480 && op_pres > 0) && manufacturer == "Cameron") {
			var Break_Torque = 7581 + 10.12 * op_pres;
			var Break_Torque_Min = 11440;
			console.log(Break_Torque);
			console.log(Break_Torque_Min);
			if (Break_Torque < Break_Torque_Min) {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque_Min;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque_Min * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_600_RT["10"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_600_RT["10"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_600_MAST["10"];
			}
			else {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_600_RT["10"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_600_RT["10"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_600_MAST["10"];
			}
		}

		//Sizing equation for 12" valves, A600
		else if (dia == 12 && ansi == "A600" && (op_pres <= 1480 && op_pres > 0) && manufacturer == "Cameron") {
			var Break_Torque = 13300 + 12.3 * op_pres;
			var Break_Torque_Min = 13300;
			console.log(Break_Torque);
			console.log(Break_Torque_Min);
			if (Break_Torque < Break_Torque_Min) {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque_Min;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque_Min * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_600_RT["12"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_600_RT["12"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_600_MAST["12"];
			}
			else {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_600_RT["12"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_600_RT["12"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_600_MAST["12"];
			}
		}

		//Sizing equation for 14" valves, A600
		else if (dia == 14 && ansi == "A600" && (op_pres <= 1480 && op_pres > 0) && manufacturer == "Cameron") {
			var Break_Torque = 15700 + 17.5 * op_pres;
			var Break_Torque_Min = 15700;
			console.log(Break_Torque);
			console.log(Break_Torque_Min);
			if (Break_Torque < Break_Torque_Min) {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque_Min;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque_Min * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_600_RT["14"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_600_RT["14"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_600_MAST["14"];
			}
			else {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_600_RT["14"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_600_RT["14"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_600_MAST["14"];
			}
		}

		//Sizing equation for 16" valves, A600
		else if (dia == 16 && ansi == "A600" && (op_pres <= 1480 && op_pres > 0) && manufacturer == "Cameron") {
			var Break_Torque = 18000 + 24.2 * op_pres;
			var Break_Torque_Min = 18000;
			console.log(Break_Torque);
			console.log(Break_Torque_Min);
			if (Break_Torque < Break_Torque_Min) {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque_Min;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque_Min * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_600_RT["16"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_600_RT["16"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_600_MAST["16"];
			}
			else {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_600_RT["16"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_600_RT["16"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_600_MAST["16"];
			}
		}

		//Sizing equation for 18" valves, A600
		else if (dia == 18 && ansi == "A600" && (op_pres <= 1480 && op_pres > 0) && manufacturer == "Cameron") {
			var Break_Torque = 22000 + 34.7 * op_pres;
			var Break_Torque_Min = 22000;
			console.log(Break_Torque);
			console.log(Break_Torque_Min);
			if (Break_Torque < Break_Torque_Min) {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque_Min;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque_Min * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_600_RT["18"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_600_RT["18"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_600_MAST["18"];
			}
			else {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_600_RT["18"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_600_RT["18"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_600_MAST["18"];
			}
		}

		//Sizing equation for 20" valves, A600
		else if (dia == 20 && ansi == "A600" && (op_pres <= 1480 && op_pres > 0) && manufacturer == "Cameron") {
			var Break_Torque = 25000 + 48.0 * op_pres;
			var Break_Torque_Min = 25000;
			console.log(Break_Torque);
			console.log(Break_Torque_Min);
			if (Break_Torque < Break_Torque_Min) {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque_Min;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque_Min * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_600_RT["20"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_600_RT["20"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_600_MAST["20"];
			}
			else {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_600_RT["20"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_600_RT["20"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_600_MAST["20"];
			}
		}

		//Sizing equation for 22" valves, A600
		else if (dia == 22 && ansi == "A600" && (op_pres <= 1480 && op_pres > 0) && manufacturer == "Cameron") {
			var Break_Torque = 29000 + 60.0 * op_pres;
			var Break_Torque_Min = 29000;
			console.log(Break_Torque);
			console.log(Break_Torque_Min);
			if (Break_Torque < Break_Torque_Min) {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque_Min;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque_Min * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_600_RT["22"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_600_RT["22"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_600_MAST["22"];
			}
			else {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_600_RT["22"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_600_RT["22"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_600_MAST["22"];
			}
		}


		//Sizing equation for 24" valves, A600
		else if (dia == 24 && ansi == "A600" && (op_pres <= 1480 && op_pres > 0) && manufacturer == "Cameron") {
			var Break_Torque = 35000 + 74.0 * op_pres;
			var Break_Torque_Min = 35000;
			console.log(Break_Torque);
			console.log(Break_Torque_Min);
			if (Break_Torque < Break_Torque_Min) {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque_Min;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque_Min * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_600_RT["24"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_600_RT["24"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_600_MAST["24"];
			}
			else {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_600_RT["24"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_600_RT["24"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_600_MAST["24"];
			}
		}

		//Sizing equation for 26" valves, A600
		else if (dia == 26 && ansi == "A600" && (op_pres <= 1480 && op_pres > 0) && manufacturer == "Cameron") {
			var Break_Torque = 41000 + 90.0 * op_pres;
			var Break_Torque_Min = 41000;
			console.log(Break_Torque);
			console.log(Break_Torque_Min);
			if (Break_Torque < Break_Torque_Min) {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque_Min;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque_Min * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_600_RT["26"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_600_RT["26"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_600_MAST["26"];
			}
			else {
				document.getElementById("B_Torque_result").innerHTML = Break_Torque;
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = Break_Torque * safety_factor;
				document.getElementById("R_Torque_result").innerHTML = ANSI_600_RT["26"];
				document.getElementById("R-Torque_result_SF").innerHTML = ANSI_600_RT["26"] * safety_factor;
				document.getElementById("MAST").innerHTML = ANSI_600_MAST["26"];
			}
		}

		else if (manufacturer == "Nordstrom") {
				document.getElementById("B_Torque_result").innerHTML = "Please visit Nordstrom website for valve sizing";
				document.getElementById("ANSI_result").innerHTML = ansi;
				document.getElementById("B_Torque_result_SF").innerHTML = "----";
				document.getElementById("R_Torque_result").innerHTML = "Please visit Nordstrom website for valve sizing";
				document.getElementById("R-Torque_result_SF").innerHTML = "----";
				document.getElementById("MAST").innerHTML = "----";
		}

		else {
			document.getElementById("ANSI_result").innerHTML = ansi;
			document.getElementById("B_Torque_result").innerHTML = "Item entered in error";
			document.getElementById("B_Torque_result_SF").innerHTML = "----";
			document.getElementById("R_Torque_result").innerHTML = "Item entered in error";
			document.getElementById("R-Torque_result_SF").innerHTML = "----";
			document.getElementById("MAST").innerHTML = "----";
		}
	}



