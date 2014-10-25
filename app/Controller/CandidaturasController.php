<?php
App::uses('AppController', 'Controller');
/**
 * Candidaturas Controller
 *
 * @property Candidatura $Candidatura
 * @property PaginatorComponent $Paginator
 */
class CandidaturasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Candidatura->recursive = 0;
		$this->set('candidaturas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Candidatura->exists($id)) {
			throw new NotFoundException(__('Invalid candidatura'));
		}
		$options = array('conditions' => array('Candidatura.' . $this->Candidatura->primaryKey => $id));
		$this->set('candidatura', $this->Candidatura->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Candidatura->create();
			if ($this->Candidatura->save($this->request->data)) {
				$this->Session->setFlash(__('The candidatura has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The candidatura could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Candidatura->exists($id)) {
			throw new NotFoundException(__('Invalid candidatura'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Candidatura->save($this->request->data)) {
				$this->Session->setFlash(__('The candidatura has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The candidatura could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Candidatura.' . $this->Candidatura->primaryKey => $id));
			$this->request->data = $this->Candidatura->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Candidatura->id = $id;
		if (!$this->Candidatura->exists()) {
			throw new NotFoundException(__('Invalid candidatura'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Candidatura->delete()) {
			$this->Session->setFlash(__('The candidatura has been deleted.'));
		} else {
			$this->Session->setFlash(__('The candidatura could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
