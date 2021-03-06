<?php
$loader->requireOnce('includes/ParticipationProgramAbstract.class.php');
/**
 * Object Relational Persistence Mapping Class for table: participation_program_basic
 *
 * @package	com.clear-health.celini
 * @author	ClearHealth Inc.
 */
class ParticipationProgramBasic extends ParticipationProgramAbstract {

	/**#@+
	 * Fields of table: participation_program_basic mapped to class members
	 */
	var $person_program_id		= '';
	var $federal_poverty_level	= '';
	var $eligibility = '';
	/**#@-*/


	/**
	 * DB Table
	 */
	var $_table = 'participation_program_basic';

	/**
	 * Primary Key
	 */
	var $_key = 'person_program_id';
	
	/**
	 * Internal Name
	 */
	var $_internalName = 'ParticipationProgramBasic';

	/**
	 * Handle instantiation
	 */
	function ParticipationProgramBasic() {
		parent::ORDataObject();
	}

	function actionOptions($display = false) {
		$c = new Controller();
		$c->view->path = APP_ROOT . "/user/participation_templates/";
		$c->view->assign("options",$this);
		$em =& Celini::enumManagerInstance();
                $c->view->assign_by_ref('em',$em);
		$c->view->assign("display",$display);
		return $c->view->render("basic.html");
        }

        function processOptions($data) {
		$this->popularArray($data);
		$this->persist();
        }

	function administrationLink($id) {
		return Celini::link('edit','refprogram',true, $id);
	}

        function _createTables() {
         $sql = "
                CREATE TABLE IF NOT EXISTS `participation_program_basic` (
                `person_program_id` BIGINT NOT NULL ,
                `basic_eligibility` VARCHAR( 3 ) NOT NULL ,
                PRIMARY KEY ( `person_program_id` )
                )";
	 $this->dbHelper->execute($sql);
        }
	function hasEligibility() {
		return true;
	}

	
}
?>
