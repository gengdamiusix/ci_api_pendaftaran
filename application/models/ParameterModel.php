<?php


class ParameterModel extends CI_Model{
	
	
	
	public function getParameter($grp,$kdp){
		
		
		$this->db->where(array('GRP_PARAMETER'=>$grp,'KD_PARAMETER'=>$kdp));
		return $this->db->get('MPARAMETER');
		
	}
	
}

?>