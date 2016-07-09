<?php
App::uses('AppModel', 'Model');
/**
 * CompetitionsHeat Model
 *
 * @property Profession $Profession
 */
class CompetitionsHeat extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Profession' => array(
			'className' => 'Profession',
			'foreignKey' => 'profession_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}