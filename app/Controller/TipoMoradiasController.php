<?php
App::uses('AppController', 'Controller');
/**
 * TipoMoradias Controller
 *
 * @property TipoMoradia $TipoMoradia
 * @property PaginatorComponent $Paginator
 */
class TipoMoradiasController extends AppController {

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
		$this->TipoMoradia->recursive = 0;
		$this->set('tipoMoradias', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TipoMoradia->exists($id)) {
			throw new NotFoundException(__('Invalid tipo moradia'));
		}
		$options = array('conditions' => array('TipoMoradia.' . $this->TipoMoradia->primaryKey => $id));
		$this->set('tipoMoradia', $this->TipoMoradia->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TipoMoradia->create();
			if ($this->TipoMoradia->save($this->request->data)) {
				$this->Session->setFlash(__('The tipo moradia has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipo moradia could not be saved. Please, try again.'));
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
		if (!$this->TipoMoradia->exists($id)) {
			throw new NotFoundException(__('Invalid tipo moradia'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TipoMoradia->save($this->request->data)) {
				$this->Session->setFlash(__('The tipo moradia has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipo moradia could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TipoMoradia.' . $this->TipoMoradia->primaryKey => $id));
			$this->request->data = $this->TipoMoradia->find('first', $options);
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
		$this->TipoMoradia->id = $id;
		if (!$this->TipoMoradia->exists()) {
			throw new NotFoundException(__('Invalid tipo moradia'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TipoMoradia->delete()) {
			$this->Session->setFlash(__('The tipo moradia has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tipo moradia could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
