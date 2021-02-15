<?php

 $myfile = fopen("uploads/" . $Site_Name . ".txt", "w");
  fwrite($myfile, $Site_Name.";");
  fwrite($myfile, $Comm_Work_Ord.";");
  fwrite($myfile, $Const_Work_Ord.";");
  fwrite($myfile, $EN_Proj_Num.";");
  fwrite($myfile, $Rev.";");
  fwrite($myfile, $Prep_By.";");
  fwrite($myfile, $Date1.";");
  fwrite($myfile, $Street_Add.";");
  fwrite($myfile, $City.";");
  fwrite($myfile, $Lat.";");
  fwrite($myfile, $Long.";");
  fwrite($myfile, $Section.";");
  fwrite($myfile, $Township.";");
  fwrite($myfile, $Range.";");
  fwrite($myfile, $Division.";");
  fwrite($myfile, $County.";");
  fwrite($myfile, $Scope.";");
  fwrite($myfile, $ScopeB1.";");
  fwrite($myfile, $ScopeB2.";");
  fwrite($myfile, $ScopeB3.";");
  fwrite($myfile, $ScopeB4.";");
  fwrite($myfile, $ScopeB5.";");
  fclose($myfile);

?>