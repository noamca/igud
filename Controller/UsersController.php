<?
App::uses('AuthComponent', 'Controller/Component');
class UsersController extends AppController {
    
    

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('add');
    }

    public function index() {
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
    }

    public function view($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->set('user', $this->User->read(null, $id));
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
        }
    }

    public function edit($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
        } else {
            $this->request->data = $this->User->read(null, $id);
            unset($this->request->data['User']['password']);
        }
    }

    public function delete($id = null) {
        $this->request->onlyAllow('post');

        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->User->delete()) {
            $this->Session->setFlash(__('User deleted'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('User was not deleted'));
        return $this->redirect(array('action' => 'index'));
    }
    
    

    public function login() {
        
        $this->layout = "minimalist";
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {                   
                $this->User->id = $this->Auth->user('id'); // target correct record
                return $this->redirect($this->Auth->redirect());
            }
            $this->Session->setFlash('שם משתמש או סיסמה אינם נכונים - נסה שוב');
        }
       
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }    
    
    public function beforeSave() {
        if (isset($this->request->data['User']['password'])) {
            $this->request->data['User']['password'] = AuthComponent::password($this->request->data['User']['password']);
        }
        return true;
    }
    
    
   public function generatePass() {
            echo AuthComponent::password('yuSe2reC');
        return true;
    }  
    
   public function updateLastActivity() {
     $this->autoRender = false;  
     $this->User->id = $this->Auth->user('id'); 
        if($this->User->id > 0 ) {
            $this->User->saveField('last_activity', date(DATE_ATOM)); 
        } 
   }     
    
  
    
        
    
}

?>