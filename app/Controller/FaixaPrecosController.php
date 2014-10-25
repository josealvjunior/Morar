<?php
App::uses('AppController', 'Controller');
/**
 * FaixaPrecos Controller
 *
 * @property FaixaPreco $FaixaPreco
 * @property PaginatorComponent $Paginator
 */
class FaixaPrecosController extends AppController {

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
		$this->FaixaPreco->recursive = 0;
		$this->set('faixaPrecos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->FaixaPreco->exists($id)) {
			throw new NotFoundException(__('Invalid faixa preco'));
		}
		$options = array('conditions' => array('FaixaPreco.' . $this->FaixaPreco->primaryKey => $id));
		$this->set('faixaPreco', $this->FaixaPreco->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FaixaPreco->create();
			if ($this->FaixaPreco->save($this->request->data)) {
				$this->Session->setFlash(__('The faixa preco has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The faixa preco could not be saved. Please, try again.'));
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
		if (!$this->FaixaPreco->exists($id)) {
			throw new NotFoundException(__('Invalid faixa preco'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->FaixaPreco->save($this->request->data)) {
				$this->Session->setFlash(__('The faixa preco has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The faixa preco could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('FaixaPreco.' . $this->FaixaPreco->primaryKey => $id));
			$this->request->data = $this->FaixaPreco->find('first', $options);
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
		$this->FaixaPreco->id = $id;
		if (!$this->FaixaPreco->exists()) {
			throw new NotFoundException(__('Invalid faixa preco'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->FaixaPreco->delete()) {
			$this->Session->setFlash(__('The faixa preco has been deleted.'));
		} else {
			$this->Session->setFlash(__('The faixa preco could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
