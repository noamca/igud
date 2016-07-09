<?php
App::uses('AppModel', 'Model');
/**
 * Association Model
 *
 * @property Athlete $Athlete
 * @property Coacher $Coacher
 * @property Referee $Referee
 */
class Association extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
 
 
    
 
	public $hasMany = array(
    
        'Accounting' => array(
            'ClassName' => 'Accounting',
            'foreignKey' => 'entity_id',
            'conditions' => 'Accounting.entity_type="Association"',
        ),
        
        'AssociationsHistory' => array(
            'ClassName' => 'AssociationHistory',
            'foreignKey' => 'association_id',
            'order' =>'year DESC'
        ),
        
        'Remark' => array(
            'ClassName' => 'Remark',
            'foreignKey' => 'entity_id',
            'conditions' => 'Remark.entity_type="Association"',
        ),
        
        'Address' => array(
            'ClassName' => 'Address',
            'foreignKey' => 'identity_number',
        ),        
        
    
		'Athlet' => array(
			'className' => 'Athlet',
			'foreignKey' => 'association_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Coacher' => array(
			'className' => 'Coacher',
			'foreignKey' => 'association_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Referee' => array(
			'className' => 'Referee',
			'foreignKey' => 'association_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
