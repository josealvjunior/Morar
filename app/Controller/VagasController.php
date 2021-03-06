<?php
App::uses('AppController', 'Controller');
/**
 * Vagas Controller
 *
 * @property Vaga $Vaga
 * @property PaginatorComponent $Paginator
 */
class VagasController extends AppController {

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
		$this->Vaga->recursive = 0;
		$this->set('vagas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Vaga->exists($id)) {
			throw new NotFoundException(__('Invalid vaga'));
		}
		$options = array('conditions' => array('Vaga.' . $this->Vaga->primaryKey => $id));
		$this->set('vaga', $this->Vaga->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Vaga->create();
			if ($this->Vaga->save($this->request->data)) {
				$this->Session->setFlash(__('The vaga has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vaga could not be saved. Please, try again.'));
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
		if (!$this->Vaga->exists($id)) {
			throw new NotFoundException(__('Invalid vaga'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Vaga->save($this->request->data)) {
				$this->Session->setFlash(__('The vaga has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vaga could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Vaga.' . $this->Vaga->primaryKey => $id));
			$this->request->data = $this->Vaga->find('first', $options);
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
		$this->Vaga->id = $id;
		if (!$this->Vaga->exists()) {
			throw new NotFoundException(__('Invalid vaga'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Vaga->delete()) {
			$this->Session->setFlash(__('The vaga has been deleted.'));
		} else {
			$this->Session->setFlash(__('The vaga could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
