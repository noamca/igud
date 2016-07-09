<?php
App::uses('AppModel', 'Model');
/**
 * Campaign Model
 *
 */
class Campaign extends AppModel {
    
    public $hasMany = array(
        'Purchases' => array(
            'className' => 'Purchase',
            'foreignKey' => 'campaign_id',
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
        );
    

}
