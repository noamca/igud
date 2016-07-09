<?php
App::uses('AppModel', 'Model');
/**
 * Purchace Model
 *
 */
class Purchase extends AppModel {
    
   public $belongsTo = array(
    
       'Campaign' =>array(
            'ClassName' => 'Campaign',
            'foreignKey' => 'campaign_id',
       ),                          

    );    

}
