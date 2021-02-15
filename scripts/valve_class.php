<?php 

class VALVE {
	//Valve Properties
	public $Valve_VT;
	public $Valve_AC;
	public $Valve_Size;
	public $Valve_Man;
	public $Valve_Model;
	public $Valve_Serial;
	public $Valve_MDP;
	public $Valve_TR;
	public $Valve_MWS;
	public $Valve_BAM;
	public $Valve_PLMAOP;
	public $Valve_PLDP;
	public $Valve_Pipe_Grade;
	public $Valve_TS;

	//Valve Methods
	function __construct($Valve_VT, $Valve_AC, $Valve_Size, $Valve_Man, $Valve_Model, $Valve_Serial, $Valve_MDP, $Valve_TR, $Valve_MWS, $Valve_BAM, $Valve_PLMAOP, $Valve_PLDP, $Valve_Pipe_Grade, $Valve_TS) {

		$this->Valve_VT = $Valve_VT;
		$this->Valve_AC = $Valve_AC;
		$this->Valve_Size = $Valve_Size;
		$this->Valve_Man = $Valve_Man;
		$this->Valve_Model = $Valve_Model;
		$this->Valve_Serial = $Valve_Serial;
		$this->Valve_MDP = $Valve_MDP;
		$this->Valve_TR = $Valve_TR;
		$this->Valve_MWS = $Valve_MWS;
		$this->Valve_BAM = $Valve_BAM;
		$this->Valve_PLMAOP = $Valve_PLMAOP;
		$this->Valve_PLDP = $Valve_PLDP;
		$this->Valve_Pipe_Grade = $Valve_Pipe_Grade;
		$this->Valve_TS = $Valve_TS;
	}
	
	function get_Valve_VT() {
		return $this->Valve_VT;
	}
	function get_Valve_AC() {
		return $this->Valve_AC;
	}
	function get_Valve_1_Size() {
		return $this->Valve_Size;
	}
	function get_Valve_Man() {
		return $this->Valve_Man;
	}
	function get_Valve_Model() {
		return $this->Valve_Model;
	}
	function get_Valve_Serial() {
		return $this->Valve_Serial;
	}
	function get_Valve_MDP() {
		return $this->Valve_MDP;
	}
	function get_Valve_TR() {
		return $this->Valve_TR;
	}
	function get_Valve_MWS() {
		return $this->Valve_MWS;
	}
	function get_Valve_BAM() {
		return $this->Valve_BAM;
	}
	function get_Valve_PLMAOP() {
		return $this->Valve_PLMAOP;
	}
	function get_Valve_PLDP() {
		return $this->Valve_PLDP;
	}
	function get_Valve_Pipe_Grade() {
		return $this->Valve_Pipe_Grade;
	}
	function get_Valve_TS() {
		return $this->Valve_TS;
	}
}

?>