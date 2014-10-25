<?php
App::uses('AppController', 'Controller');
/**
 * TipoImovels Controller
 *
 * @property TipoImovel $TipoImovel
 * @property PaginatorComponent $Paginator
 */
class TipoImovelsController extends AppController {

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
		$this->TipoImovel->recursive = 0;
		$this->set('tipoImovels', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TipoImovel->exists($id)) {
			throw new NotFoundException(__('Invalid tipo imovel'));
		}
		$options = array('conditions' => array('TipoImovel.' . $this->TipoImovel->primaryKey => $id));
		$this->set('tipoImovel', $this->TipoImovel->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {

			$this->TipoImovel->create();
			if ($this->TipoImovel->save($this->request->data)) {
				$this->Session->setFlash(__('The tipo imovel has been saved.'), 'default', array('class' => 'success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipo imovel could not be saved. Please, try again.'));
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
		if (!$this->TipoImovel->exists($id)) {
			throw new NotFoundException(__('Invalid tipo imovel'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TipoImovel->save($this->request->data)) {
				$this->Session->setFlash(__('The tipo imovel has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipo imovel could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TipoImovel.' . $this->TipoImovel->primaryKey => $id));
			$this->request->data = $this->TipoImovel->find('first', $options);
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
		$this->TipoImovel->id = $id;
		if (!$this->TipoImovel->exists()) {
			throw new NotFoundException(__('Invalid tipo imovel'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TipoImovel->delete()) {
			$this->Session->setFlash(__('The tipo imovel has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tipo imovel could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
