<?php
App::uses('AppController', 'Controller');
/**
 * PerfilPsicologicos Controller
 *
 * @property PerfilPsicologico $PerfilPsicologico
 * @property PaginatorComponent $Paginator
 */
class PerfilPsicologicosController extends AppController {

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
		$this->PerfilPsicologico->recursive = 0;
		$this->set('perfilPsicologicos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PerfilPsicologico->exists($id)) {
			throw new NotFoundException(__('Invalid perfil psicologico'));
		}
		$options = array('conditions' => array('PerfilPsicologico.' . $this->PerfilPsicologico->primaryKey => $id));
		$this->set('perfilPsicologico', $this->PerfilPsicologico->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PerfilPsicologico->create();
			if ($this->PerfilPsicologico->save($this->request->data)) {
				$this->Session->setFlash(__('The perfil psicologico has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The perfil psicologico could not be saved. Please, try again.'));
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
		if (!$this->PerfilPsicologico->exists($id)) {
			throw new NotFoundException(__('Invalid perfil psicologico'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PerfilPsicologico->save($this->request->data)) {
				$this->Session->setFlash(__('The perfil psicologico has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The perfil psicologico could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PerfilPsicologico.' . $this->PerfilPsicologico->primaryKey => $id));
			$this->request->data = $this->PerfilPsicologico->find('first', $options);
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
		$this->PerfilPsicologico->id = $id;
		if (!$this->PerfilPsicologico->exists()) {
			throw new NotFoundException(__('Invalid perfil psicologico'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->PerfilPsicologico->delete()) {
			$this->Session->setFlash(__('The perfil psicologico has been deleted.'));
		} else {
			$this->Session->setFlash(__('The perfil psicologico could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->PerfilPsicologico->recursive = 0;
		$this->set('perfilPsicologicos', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->PerfilPsicologico->exists($id)) {
			throw new NotFoundException(__('Invalid perfil psicologico'));
		}
		$options = array('conditions' => array('PerfilPsicologico.' . $this->PerfilPsicologico->primaryKey => $id));
		$this->set('perfilPsicologico', $this->PerfilPsicologico->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->PerfilPsicologico->create();
			if ($this->PerfilPsicologico->save($this->request->data)) {
				$this->Session->setFlash(__('The perfil psicologico has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The perfil psicologico could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->PerfilPsicologico->exists($id)) {
			throw new NotFoundException(__('Invalid perfil psicologico'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PerfilPsicologico->save($this->request->data)) {
				$this->Session->setFlash(__('The perfil psicologico has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The perfil psicologico could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PerfilPsicologico.' . $this->PerfilPsicologico->primaryKey => $id));
			$this->request->data = $this->PerfilPsicologico->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->PerfilPsicologico->id = $id;
		if (!$this->PerfilPsicologico->exists()) {
			throw new NotFoundException(__('Invalid perfil psicologico'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->PerfilPsicologico->delete()) {
			$this->Session->setFlash(__('The perfil psicologico has been deleted.'));
		} else {
			$this->Session->setFlash(__('The perfil psicologico could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
