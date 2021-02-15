<?php 
//Get valve data from Design_Basis_Form_2.php
  $Valve_1_VT = filter_input(INPUT_POST, 'Valve_1_Valve_Tag');
  $Valve_1_AC = filter_input(INPUT_POST, 'Valve_1_Ansi_Class');
  $Valve_1_Size = filter_input(INPUT_POST, 'Valve_1_Size');
  $Valve_1_Man = filter_input(INPUT_POST, 'Valve_1_Man');
  $Valve_1_Model = filter_input(INPUT_POST, 'Valve_1_Model');
  $Valve_1_Serial = filter_input(INPUT_POST, 'Valve_1_Serial');
  $Valve_1_MDP = filter_input(INPUT_POST, 'Valve_1_MDP');
  $Valve_1_TR = filter_input(INPUT_POST, 'Valve_1_TR');
  $Valve_1_MWS = filter_input(INPUT_POST, 'Valve_1_MWS');
  $Valve_1_BAM = filter_input(INPUT_POST, 'Valve_1_BAM');
  $Valve_1_PLMAOP = filter_input(INPUT_POST, 'Valve_1_PLMAOP');
  $Valve_1_PLDP = filter_input(INPUT_POST, 'Valve_1_PLDP');
  $Valve_1_Pipe_Grade = filter_input(INPUT_POST, 'Valve_1_Pipe_Grade');
  $Valve_1_TS = filter_input(INPUT_POST, 'Valve_1_TS');

  $Valve_2_VT = filter_input(INPUT_POST, 'Valve_2_Valve_Tag');
  $Valve_2_AC = filter_input(INPUT_POST, 'Valve_2_Ansi_Class');
  $Valve_2_Size = filter_input(INPUT_POST, 'Valve_2_Size');
  $Valve_2_Man = filter_input(INPUT_POST, 'Valve_2_Man');
  $Valve_2_Model = filter_input(INPUT_POST, 'Valve_2_Model');
  $Valve_2_Serial = filter_input(INPUT_POST, 'Valve_2_Serial');
  $Valve_2_MDP = filter_input(INPUT_POST, 'Valve_2_MDP');
  $Valve_2_TR = filter_input(INPUT_POST, 'Valve_2_TR');
  $Valve_2_MWS = filter_input(INPUT_POST, 'Valve_2_MWS');
  $Valve_2_BAM = filter_input(INPUT_POST, 'Valve_2_BAM');
  $Valve_2_PLMAOP = filter_input(INPUT_POST, 'Valve_2_PLMAOP');
  $Valve_2_PLDP = filter_input(INPUT_POST, 'Valve_2_PLDP');
  $Valve_2_Pipe_Grade = filter_input(INPUT_POST, 'Valve_2_Pipe_Grade');
  $Valve_2_TS = filter_input(INPUT_POST, 'Valve_2_TS');
 
  $Valve_3_VT = filter_input(INPUT_POST, 'Valve_3_Valve_Tag');
  $Valve_3_AC = filter_input(INPUT_POST, 'Valve_3_Ansi_Class');
  $Valve_3_Size = filter_input(INPUT_POST, 'Valve_3_Size');
  $Valve_3_Man = filter_input(INPUT_POST, 'Valve_3_Man');
  $Valve_3_Model = filter_input(INPUT_POST, 'Valve_3_Model');
  $Valve_3_Serial = filter_input(INPUT_POST, 'Valve_3_Serial');
  $Valve_3_MDP = filter_input(INPUT_POST, 'Valve_3_MDP');
  $Valve_3_TR = filter_input(INPUT_POST, 'Valve_3_TR');
  $Valve_3_MWS = filter_input(INPUT_POST, 'Valve_3_MWS');
  $Valve_3_BAM = filter_input(INPUT_POST, 'Valve_3_BAM');
  $Valve_3_PLMAOP = filter_input(INPUT_POST, 'Valve_3_PLMAOP');
  $Valve_3_PLDP = filter_input(INPUT_POST, 'Valve_3_PLDP');
  $Valve_3_Pipe_Grade = filter_input(INPUT_POST, 'Valve_3_Pipe_Grade');
  $Valve_3_TS = filter_input(INPUT_POST, 'Valve_3_TS');

  $Valve_4_VT = filter_input(INPUT_POST, 'Valve_4_Valve_Tag');
  $Valve_4_AC = filter_input(INPUT_POST, 'Valve_4_Ansi_Class');
  $Valve_4_Size = filter_input(INPUT_POST, 'Valve_4_Size');
  $Valve_4_Man = filter_input(INPUT_POST, 'Valve_4_Man');
  $Valve_4_Model = filter_input(INPUT_POST, 'Valve_4_Model');
  $Valve_4_Serial = filter_input(INPUT_POST, 'Valve_4_Serial');
  $Valve_4_MDP = filter_input(INPUT_POST, 'Valve_4_MDP');
  $Valve_4_TR = filter_input(INPUT_POST, 'Valve_4_TR');
  $Valve_4_MWS = filter_input(INPUT_POST, 'Valve_4_MWS');
  $Valve_4_BAM = filter_input(INPUT_POST, 'Valve_4_BAM');
  $Valve_4_PLMAOP = filter_input(INPUT_POST, 'Valve_4_PLMAOP');
  $Valve_4_PLDP = filter_input(INPUT_POST, 'Valve_4_PLDP');
  $Valve_4_Pipe_Grade = filter_input(INPUT_POST, 'Valve_4_Pipe_Grade');
  $Valve_4_TS = filter_input(INPUT_POST, 'Valve_4_TS');

  $Valve_5_VT = filter_input(INPUT_POST, 'Valve_5_Valve_Tag');
  $Valve_5_AC = filter_input(INPUT_POST, 'Valve_5_Ansi_Class');
  $Valve_5_Size = filter_input(INPUT_POST, 'Valve_5_Size');
  $Valve_5_Man = filter_input(INPUT_POST, 'Valve_5_Man');
  $Valve_5_Model = filter_input(INPUT_POST, 'Valve_5_Model');
  $Valve_5_Serial = filter_input(INPUT_POST, 'Valve_5_Serial');
  $Valve_5_MDP = filter_input(INPUT_POST, 'Valve_5_MDP');
  $Valve_5_TR = filter_input(INPUT_POST, 'Valve_5_TR');
  $Valve_5_MWS = filter_input(INPUT_POST, 'Valve_5_MWS');
  $Valve_5_BAM = filter_input(INPUT_POST, 'Valve_5_BAM');
  $Valve_5_PLMAOP = filter_input(INPUT_POST, 'Valve_5_PLMAOP');
  $Valve_5_PLDP = filter_input(INPUT_POST, 'Valve_5_PLDP');
  $Valve_5_Pipe_Grade = filter_input(INPUT_POST, 'Valve_5_Pipe_Grade');
  $Valve_5_TS = filter_input(INPUT_POST, 'Valve_5_TS');


 ?>