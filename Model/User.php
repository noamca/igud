<?
// app/Model/User.php
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');
class User extends AppModel {
    
    
    
    
    public $validate = array(
        'username' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A username is required'
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A password is required'
            )
        ),
        'role' => array(
            'valid' => array(
                'rule' => array('inList', array('Admin', 'Customers Manager')),
                'message' => 'Please enter a valid role',
                'allowEmpty' => false
            )
        )
    );
    
    
    public function initialize(array $config){
        $this->displayField('full_name');
    }
    
    
    public function beforeSave($options = array()) {
    if (isset($this->data[$this->alias]['password'])) {
      //  $passwordHasher = new BlowfishPasswordHasher();
      //  $this->data[$this->alias]['password'] = $passwordHasher->hash(
       //     $this->data[$this->alias]['password']
       // );
       
      $this->data['User']['password'] = AuthComponent::password($this->data['User']['password']); 
    }
    return true;
}


    
    
    
}

?>