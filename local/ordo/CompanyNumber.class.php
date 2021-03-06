<?php

$loader->requireOnce('ordo/Number.class.php');

class CompanyNumber extends Number {
	var $_relation = "company_number";
	var $_fkey = "company_id";

	function setup($id = 0,$parent=false,$parent_type="company") {
		parent::setup($id,$parent,$parent_type);
		$this->_parent[$parent]['phone_relation_type'] = 1;
	}
	
	function getTypeList() {
		$list = $this->_load_enum('company_number_type',true);
		return array_flip($list);
	}

	function get_company_number_type() {
		return $this->number_type;
	}
	
	function set_company_number_type($type) {
		$this->number_type = $type;
	}
}
?>
