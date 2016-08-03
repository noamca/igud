<?php
App::uses('AppController', 'Controller');
/**
 * CompetitionsProfessions Controller
 * Generated by Petit Four the online baking tool for CakePHP: http://patisserie.keensoftware.com
 * @property CompetitionsProfession $CompetitionsProfession
 */
class CompetitionsProfessionsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CompetitionsProfession->recursive = 0;
		$this->set('competitionsProfessions', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param int id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CompetitionsProfession->exists($id)) {
			throw new NotFoundException(__('Invalid competitions profession'));
		}
		$options = array('conditions' => array('CompetitionsProfession.' . $this->CompetitionsProfession->primaryKey => $id));
		$this->set('competitionsProfession', $this->CompetitionsProfession->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CompetitionsProfession->create();
			if ($this->CompetitionsProfession->save($this->request->data)) {
				$this->Session->setFlash(__('The competitions profession has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The competitions profession could not be saved. Please, try again.'));
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
		if (!$this->CompetitionsProfession->exists($id)) {
			throw new NotFoundException(__('Invalid competitions profession'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CompetitionsProfession->save($this->request->data)) {
				$this->Session->setFlash(__('The competitions profession has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The competitions profession could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CompetitionsProfession.' . $this->CompetitionsProfession->primaryKey => $id));
			$this->request->data = $this->CompetitionsProfession->find('first', $options);
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
		$this->CompetitionsProfession->id = $id;
		if (!$this->CompetitionsProfession->exists()) {
			throw new NotFoundException(__('Invalid competitions profession'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CompetitionsProfession->delete()) {
			$this->Session->setFlash(__('The competitions profession has been deleted.'));
		} else {
			$this->Session->setFlash(__('The competitions profession could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
