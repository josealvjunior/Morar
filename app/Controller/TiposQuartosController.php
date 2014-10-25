<?php
App::uses('AppController', 'Controller');
/**
 * TiposQuartos Controller
 *
 * @property TiposQuarto $TiposQuarto
 * @property PaginatorComponent $Paginator
 */
class TiposQuartosController extends AppController {

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
		$this->TiposQuarto->recursive = 0;
		$this->set('tiposQuartos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TiposQuarto->exists($id)) {
			throw new NotFoundException(__('Invalid tipos quarto'));
		}
		$options = array('conditions' => array('TiposQuarto.' . $this->TiposQuarto->primaryKey => $id));
		$this->set('tiposQuarto', $this->TiposQuarto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TiposQuarto->create();
			if ($this->TiposQuarto->save($this->request->data)) {
				$this->Session->setFlash(__('The tipos quarto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipos quarto could not be saved. Please, try again.'));
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
		if (!$this->TiposQuarto->exists($id)) {
			throw new NotFoundException(__('Invalid tipos quarto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TiposQuarto->save($this->request->data)) {
				$this->Session->setFlash(__('The tipos quarto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipos quarto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TiposQuarto.' . $this->TiposQuarto->primaryKey => $id));
			$this->request->data = $this->TiposQuarto->find('first', $options);
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
		$this->TiposQuarto->id = $id;
		if (!$this->TiposQuarto->exists()) {
			throw new NotFoundException(__('Invalid tipos quarto'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TiposQuarto->delete()) {
			$this->Session->setFlash(__('The tipos quarto has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tipos quarto could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
