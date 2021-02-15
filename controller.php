<?php

/*if ($_FILES["fileToUpload"]["size"]!=0) {
	$FileLoc = "uploads/";
  	$FileName = $_FILES["fileToUpload"]["name"];
  	$NewFile = $FileLoc . $FileName;
  	$Extension = pathinfo($NewFile, PATHINFO_EXTENSION);
  	move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $NewFile);
  		if ($Extension == "txt") {
  			include "scripts/readdata_form1.php";
  		}

  		if (isset($Valve_1_Size)){

	  		if (is_integer($Valve_1_Size+1)>0 && $Valve_1_Size+1>=2) {
	  			if ($Valve_1_AC=="A150" || $Valve_1_AC=="A300" || $Valve_1_AC=="A400" || $Valve_1_AC=="A600")  {
	  				$test1 = intval($Valve_1_PLMAOP);	
	  				$test2 = intval($Valve_1_PLDP);
	  				if ($test1>0 && $test2>0) {
	  					//include "Valve_sizing.php";

	  				}
	  				else {
	  					echo "Verify you design pressure and MAOP are greater than 0.";
	  				}
	  			}
	  			else {
	  				echo "Verify ANSI rating is either A150, A300, A400, or A600.<br>";
	  			}
	  		}
	  		else {
	  			echo "Verify valve diameter in CSV file is integer and greater 0.<br>";
	  		}
	  	}

	  
 }*/
if ($_FILES["fileToUpload"]["size"]==0 and htmlspecialchars($_POST["Valve_sizing"]) == "Valve_test") {
	include "Valve_sizing_no_submit.php";
}

elseif ($_FILES["fileToUpload"]["size"]!=0 and htmlspecialchars($_POST["Valve_sizing"]) == "Valve_test") {
	include "Valve_sizing.php";
}

elseif (($_FILES["fileToUpload"]["size"]==0 || $_FILES["fileToUpload"]["size"]!=0) and htmlspecialchars($_POST["Design_Basis"]) == "Design_Basis_form") {
	include "Design_Basis_Form.php";
}
?>