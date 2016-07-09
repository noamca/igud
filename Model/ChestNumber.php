<?php
App::uses('AppModel', 'Model');
/**
 * ChestNumber Model
 *
 * @property Athlete $Athlete
 */
class ChestNumber extends AppModel {

    public $displayField = 'id,year,chest_number';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Athlet' => array(
			'className' => 'Athlet',
			'foreignKey' => 'athlet_id',
			'conditions' => '',
			'fields' => '',
			'order' => 'ChestNumber.year DESC',
 		)
	);
}
