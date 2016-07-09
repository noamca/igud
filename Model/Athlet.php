<?php
App::uses('AppModel', 'Model');
/**
 * Athlete Model
 *
 * @property Association $Association
 * @property ChestNumber $ChestNumber
 */
class Athlet extends AppModel {


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
			'fields' => array("id","name"),
			'order' => ''
		) ,
 
        'AgeGroup' => array(
            'className' => 'Tbl',
            'foreignKey' => 'age_group_id',
            'conditions' => 'AgeGroup.tbl = "age_grp"',
            'fields' => '',
            'order' => ''
        ),  
        
   
        
        
                       
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'ChestNumber' => array(
			'className' => 'ChestNumber',
			'foreignKey' => 'athlet_id',
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
        'Remarks' => array(
            'className' => 'Remarks',
            'foreignKey' => 'identity_number',
            'dependent' => false,
            'conditions' => 'Remarks.entity_type=\'Athlet\'',
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
            'conditions' => 'Accounting.entity_type="Athlet"',
        ),   
        
        'Address' => array(
            'ClassName' => 'Address',
            'foreignKey' => 'identity_number',
        ),    
        
       'AthletsMedicalTest'=> array(
            'ClassName' => 'AthletsMedicalTest',
            'foreignKey' => 'athlet_id',
            'conditions' => '',
        ),   
        'SpecialVacations' =>array(
            'ClassName' => 'SpecialVacations',
            'foreignKey' => 'athlet_id',
            'conditions' => '',
        
        ),
      
         
                          
	); 
    
    public $hasOne = array(
    
       'Tbl' =>array(
            'ClassName' => 'Tbl',
            'foreignKey' => 'code',
            'conditions' => 'Tbl.tbl = "health_org"',
       ),                          

    );    
    
    
    public $validate = array(
        'first_name' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'חובה לעדכן שדה זה בתוכן',
                'allowEmpty' => false
            ),
            'between' => array(
                'rule' => array('between', 2, 100),
                'required' => true,
                'message' => 'אורך קצר מידי לשדה זה'
            ),
          
          
        ),
       'last_name' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'חובה לעדכן שדה זה בתוכן',
                'allowEmpty' => false
            ),
            'between' => array(
                'rule' => array('between', 2, 100),
                'required' => true,
                'message' => 'אורך קצר מידי לשדה זה'
            ),
        ),   

        'first_name_eng' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'חובה לעדכן שדה זה בתוכן',
                'allowEmpty' => false
            ),
            'between' => array(
                'rule' => array('between', 2, 100),
                'required' => true,
                'message' => 'אורך קצר מידי לשדה זה'
            ),
          
          
        ),
       'last_name_eng' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'חובה לעדכן שדה זה בתוכן',
                'allowEmpty' => false
            ),
            'between' => array(
                'rule' => array('between', 2, 100),
                'required' => true,
                'message' => 'אורך קצר מידי לשדה זה'
            ),
        ),   

        
      'personal_identity_number' => array(
              'isValid' => array(
                'rule' => array('isValidIdentity'),
                'message' => 'מספר תעודת הזהות אינו תקין',
                'allowEmpty' => false
            ),
            'between' => array(
                'rule' => array('between', 7, 9),
                'required' => true,
                'message' => 'אורך קצר מידי לשדה תעודת זהות '
            ),
        ),                     
        
     );
    
    
    public $virtualFields = array (
        'yearly_chest_number' => "SELECT chest_number from chest_numbers where athlet_id=Athlet.id and year=2016" ,
        'full_name' => "Concat (Athlet.first_name, ' ',Athlet.last_name)" ,
        'full_name_eng' => "Concat (Athlet.first_name_eng, ' ',Athlet.last_name_eng)"
        
    );
    
    
    public function isValidIdentity ($data) {
        
        $identity = $data['personal_identity_number'];
        
        return $this->validID($identity);
        
    }
    
    
    
    
   
    
    
    
    
    
    
  
    
    
  
  

        

    
    
  
         
 }
      
        
        
    
    


