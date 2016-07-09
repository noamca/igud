<?php
App::uses('AppController', 'Controller');
/**
 * Tbls Controller
 * Generated by Petit Four the online baking tool for CakePHP: http://patisserie.keensoftware.com
 * @property Tbl $Tbl
 */
class TblsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Tbl->recursive = 0;
		$this->set('tbls', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param int id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Tbl->exists($id)) {
			throw new NotFoundException(__('Invalid tbl'));
		}
		$options = array('conditions' => array('Tbl.' . $this->Tbl->primaryKey => $id));
		$this->set('tbl', $this->Tbl->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Tbl->create();
			if ($this->Tbl->save($this->request->data)) {
				$this->Session->setFlash(__('The tbl has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tbl could not be saved. Please, try again.'));
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
		if (!$this->Tbl->exists($id)) {
			throw new NotFoundException(__('Invalid tbl'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Tbl->save($this->request->data)) {
				$this->Session->setFlash(__('The tbl has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tbl could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Tbl.' . $this->Tbl->primaryKey => $id));
			$this->request->data = $this->Tbl->find('first', $options);
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
		$this->Tbl->id = $id;
		if (!$this->Tbl->exists()) {
			throw new NotFoundException(__('Invalid tbl'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Tbl->delete()) {
			$this->Session->setFlash(__('The tbl has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tbl could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
