<?php
App::uses('AppController', 'Controller');
/**
 * Accountings Controller
 * Generated by Petit Four the online baking tool for CakePHP: http://patisserie.keensoftware.com
 * @property Accounting $Accounting
 */
class AccountingsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Accounting->recursive = 0;
		$this->set('accountings', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param int id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Accounting->exists($id)) {
			throw new NotFoundException(__('Invalid accounting'));
		}
		$options = array('conditions' => array('Accounting.' . $this->Accounting->primaryKey => $id));
		$this->set('accounting', $this->Accounting->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Accounting->create();
			if ($this->Accounting->save($this->request->data)) {
				$this->Session->setFlash(__('The accounting has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The accounting could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param int id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Accounting->exists($id)) {
			throw new NotFoundException(__('Invalid accounting'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Accounting->save($this->request->data)) {
				$this->Session->setFlash(__('The accounting has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The accounting could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Accounting.' . $this->Accounting->primaryKey => $id));
			$this->request->data = $this->Accounting->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param int id
 * @return void
 */
	public function delete($id = null) {
		$this->Accounting->id = $id;
		if (!$this->Accounting->exists()) {
			throw new NotFoundException(__('Invalid accounting'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Accounting->delete()) {
			$this->Session->setFlash(__('The accounting has been deleted.'));
		} else {
			$this->Session->setFlash(__('The accounting could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}