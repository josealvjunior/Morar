<?php
App::uses('AppController', 'Controller');
/**
 * RegionaisBairros Controller
 *
 * @property RegionaisBairro $RegionaisBairro
 * @property PaginatorComponent $Paginator
 */
class RegionaisBairrosController extends AppController {

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
		$this->RegionaisBairro->recursive = 0;
		$this->set('regionaisBairros', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->RegionaisBairro->exists($id)) {
			throw new NotFoundException(__('Invalid regionais bairro'));
		}
		$options = array('conditions' => array('RegionaisBairro.' . $this->RegionaisBairro->primaryKey => $id));
		$this->set('regionaisBairro', $this->RegionaisBairro->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->RegionaisBairro->create();
			if ($this->RegionaisBairro->save($this->request->data)) {
				$this->Session->setFlash(__('The regionais bairro has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The regionais bairro could not be saved. Please, try again.'));
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
		if (!$this->RegionaisBairro->exists($id)) {
			throw new NotFoundException(__('Invalid regionais bairro'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->RegionaisBairro->save($this->request->data)) {
				$this->Session->setFlash(__('The regionais bairro has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The regionais bairro could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('RegionaisBairro.' . $this->RegionaisBairro->primaryKey => $id));
			$this->request->data = $this->RegionaisBairro->find('first', $options);
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
		$this->RegionaisBairro->id = $id;
		if (!$this->RegionaisBairro->exists()) {
			throw new NotFoundException(__('Invalid regionais bairro'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->RegionaisBairro->delete()) {
			$this->Session->setFlash(__('The regionais bairro has been deleted.'));
		} else {
			$this->Session->setFlash(__('The regionais bairro could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
