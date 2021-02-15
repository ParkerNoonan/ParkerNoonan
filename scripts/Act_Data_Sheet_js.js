//Add event listener for changing valve type
document.getElementById('valve_type_input').addEventListener("change", valve_type);
//Add event listener for new or old valve 
document.getElementById("new_existing_input").addEventListener("change", new_or_existing);
//Add event listener end connection
document.getElementById("end_connection_input").addEventListener("change", end_connection);
//Add event listener for valve mount
document.getElementById("valve_mount_input").addEventListener("change", valve_mount);
//Add event listener for valve stem
document.getElementById("stem_mount_input").addEventListener("change", stem_mount);
//Add event listener for actuator orientaiton
document.getElementById("Act_Orientation_input").addEventListener("change", Act_Orient);
//Add event listener for mounting projection
document.getElementById("mounting_proj_input").addEventListener("change", Mount_Proj);
//Add event listener for power
document.getElementById("power_input").addEventListener("change", Power);
//Add event listener for return type
document.getElementById("return_type_input").addEventListener("change", Return_type);
//Add event listener for time
document.getElementById("op_time_input").addEventListener("keyup", Op_Time);
//Add event listeners to temp pickups.
document.getElementById("amb_temp_low_input").addEventListener("keyup",Amb_Temp);
document.getElementById("amb_temp_high_input").addEventListener("keyup",Amb_Temp);

//Set initial values
document.getElementById('valve_type_view').innerHTML = document.getElementById('valve_type_input').value;
document.getElementById("new_existing_view").innerHTML = document.getElementById("new_existing_input").value;
document.getElementById("end_connection_view").innerHTML = document.getElementById("end_connection_input").value;

window.addEventListener('beforeprint', (event) => {
  before_print();
});
window.addEventListener('afterprint', (event) => {
  after_print();
});

function valve_type() {
	var type = document.getElementById('valve_type_input').value;
	document.getElementById('valve_type_view').innerHTML = type;
}

function new_or_existing() {
	var old_new = document.getElementById("new_existing_input").value;
	document.getElementById('new_existing_view').innerHTML = old_new;
}

function end_connection() {
	var end_connect = document.getElementById("end_connection_input").value;
	document.getElementById("end_connection_view").innerHTML = end_connect;
}

function valve_mount() {
	var valve_mount = document.getElementById("valve_mount_input").value;
	document.getElementById("valve_mount_view").innerHTML = valve_mount;
}

function stem_mount() {
	var stem_mount = document.getElementById("stem_mount_input").value;
	document.getElementById("stem_mount_view").innerHTML = stem_mount;
}

function Act_Orient() {
	var act_orient = document.getElementById("Act_Orientation_input").value;
	document.getElementById("Act_Orientation_view").innerHTML = act_orient;
}

function Mount_Proj() {
	var act_orient = document.getElementById("mounting_proj_input").value;
	document.getElementById("mounting_proj_view").innerHTML = act_orient;
}

function Power() {
	var power = document.getElementById("power_input").value;
	document.getElementById("power_view").innerHTML = power;
}

function Return_type() {
	var return_type = document.getElementById("return_type_input").value;
	document.getElementById("return_type_view").innerHTML = return_type;
}

function Op_Time() {
	var op_time = document.getElementById("op_time_input").value;
	document.getElementById("op_time_view").innerHTML = op_time;
}

function Amb_Temp() {
	var amb_temp_low = document.getElementById('amb_temp_low_input').value;
	var amb_temp_high = document.getElementById('amb_temp_high_input').value;
	var amb_temp = amb_temp_low.concat(" to ",amb_temp_high, " F");
	document.getElementById('amb_temp_view').innerHTML = amb_temp;
}

function before_print() {
	var a = document.getElementsByClassName('head-container1');
	a[0].style.display = "none";
	var b = document.getElementsByClassName('head-container2');
	b[0].style.display = "none";
	var c = document.getElementsByClassName('brand');
	c[0].style.display = "none";
	var d = document.getElementsByClassName('flex-con bord');
	d[0].style.display = "none";

	document.getElementById("inputs").style.display = "none";
	var e = document.querySelectorAll("#inputs fieldset div");

	for (var count = 0; count<e.length; count++) {
		e[count].style.display = "none";
	}

	document.getElementById('overall_container').style.border = "none";
}

function after_print() {
	var a = document.getElementsByClassName('head-container1');
	a[0].style.display = "";
	var b = document.getElementsByClassName('head-container2');
	b[0].style.display = "";
	var c = document.getElementsByClassName('brand');
	c[0].style.display = "";
	var d = document.getElementsByClassName('flex-con bord');
	d[0].style.display = "";

	document.getElementById("inputs").style.display = "";

	var e = document.querySelectorAll("#inputs fieldset div");

	for (var count = 0; count<e.length; count++) {
		e[count].style.display = "";
	}

	document.getElementById('overall_container').style.border = "";
}