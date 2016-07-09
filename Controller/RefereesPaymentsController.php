<?php
App::uses('AppController', 'Controller');
/**
 * RefereesPayments Controller
 * Generated by Petit Four the online baking tool for CakePHP: http://patisserie.keensoftware.com
 * @property RefereesPayment $RefereesPayment
 */
class RefereesPaymentsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->RefereesPayment->recursive = 0;
		$this->set('refereesPayments', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string id
 * @return void
 */
	public function view($id = null) {
		if (!$this->RefereesPayment->exists($id)) {
			throw new NotFoundException(__('Invalid referees payment'));
		}
		$options = array('conditions' => array('RefereesPayment.' . $this->RefereesPayment->primaryKey => $id));
		$this->set('refereesPayment', $this->RefereesPayment->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->RefereesPayment->create();
			if ($this->RefereesPayment->save($this->request->data)) {
				$this->Session->setFlash(__('The referees payment has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The referees payment could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->RefereesPayment->exists($id)) {
			throw new NotFoundException(__('Invalid referees payment'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->RefereesPayment->save($this->request->data)) {
				$this->Session->setFlash(__('The referees payment has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The referees payment could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('RefereesPayment.' . $this->RefereesPayment->primaryKey => $id));
			$this->request->data = $this->RefereesPayment->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string id
 * @return void
 */
	public function delete($id = null) {
		$this->RefereesPayment->id = $id;
		if (!$this->RefereesPayment->exists()) {
			throw new NotFoundException(__('Invalid referees payment'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->RefereesPayment->delete()) {
			$this->Session->setFlash(__('The referees payment has been deleted.'));
		} else {
			$this->Session->setFlash(__('The referees payment could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}