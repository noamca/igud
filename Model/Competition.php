<?php
App::uses('AppModel', 'Model');
/**
 * Competition Model
 *
 * @property Profession $Profession
 */
class Competition extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Profession' => array(
			'className' => 'Profession',
			'joinTable' => 'competitions_professions',
			'foreignKey' => 'competition_id',
			'associationForeignKey' => 'profession_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
