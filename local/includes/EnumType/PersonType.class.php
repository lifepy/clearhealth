<?php
/**
 * Class the defines the default enumeration type
 */
class EnumType_PersonType extends EnumType_Default {

	/**
	 * Field info map, array of field names and types to use when editing
	 */
	var $definition = array(
				'enumeration_value_id' => array('type'=>'hidden'),
				'key' 	=> array('label'=>'Key','size'=>5), 
				'value' => array('label'=>'Value','size'=>15),
				'extra1' => array('label'=>'Provider','type'=>'boolean'),
				'extra2' => false,
				'sort' => array('label'=>'Order&nbsp;','type'=>'order'),
				'status' => array('label'=>'Enabled','type'=>'boolean')
			);
}
?>
