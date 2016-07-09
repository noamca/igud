<?php
App::uses('AppModel', 'Model');
/**
 * Coacher Model
 *
 * @property Association $Association
 */
class Coacher extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Association' => array(
			'className' => 'Association',
			'foreignKey' => 'association_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
    
public $hasMany = array(
        'Remarks' => array(
            'className' => 'Remarks',
            'foreignKey' => 'identity_number',
            'dependent' => false,
            'conditions' => 'Remarks.entity_type=\'Coacher\'',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        
        ),
        'Accounting' => array(
            'ClassName' => 'Accounting',
            'foreignKey' => 'entity_id',
            'conditions' => 'Accounting.entity_type="Coacher"',
        ),   
        
        'Address' => array(
            'ClassName' => 'Address',
            'foreignKey' => 'identity_number',
        ),
        
       'RefereesPayment' => array(
            'ClassName' => 'CoacherPayment',
            'foreignKey' => 'identity_number',
        ), 
      'RefereesStudy' => array(
            'ClassName' => 'CoacherStudy',
            'foreignKey' => 'identity_number',
        ), 
        
       'Athlet' => array(
            'ClassName'=>'Athlet',
            'foreignKey' => 'coacher_identity_number',
            ), 
        );                  
                                      
}
