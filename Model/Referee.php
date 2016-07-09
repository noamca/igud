<?php
App::uses('AppModel', 'Model');
/**
 * Referee Model
 *
 * @property Association $Association
 */
class Referee extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed
    
    public $primaryKey = "personal_identity_number";

    
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
            'conditions' => 'Remarks.entity_type=\'Referee\'',
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
            'conditions' => 'Accounting.entity_type="Referee"',
        ),   
        
        'Address' => array(
            'ClassName' => 'Address',
            'foreignKey' => 'identity_number',
        ),
        
       'RefereesPayment' => array(
            'ClassName' => 'RefereesPayment',
            'foreignKey' => 'identity_number',
        ), 
      'RefereesStudy' => array(
            'ClassName' => 'RefereesStudy',
            'foreignKey' => 'identity_number',
        ),                   
                                  
    );     
}
