<?php
App::uses('AppController', 'Controller');
/**
 * PessoaPerfils Controller
 *
 * @property PessoaPerfil $PessoaPerfil
 * @property PaginatorComponent $Paginator
 */
class PessoaPerfilsController extends AppController {

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
		$this->PessoaPerfil->recursive = 0;
		$this->set('pessoaPerfils', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PessoaPerfil->exists($id)) {
			throw new NotFoundException(__('Invalid pessoa perfil'));
		}
		$options = array('conditions' => array('PessoaPerfil.' . $this->PessoaPerfil->primaryKey => $id));
		$this->set('pessoaPerfil', $this->PessoaPerfil->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PessoaPerfil->create();
			if ($this->PessoaPerfil->save($this->request->data)) {
				$this->Session->setFlash(__('The pessoa perfil has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pessoa perfil could not be saved. Please, try again.'));
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
		if (!$this->PessoaPerfil->exists($id)) {
			throw new NotFoundException(__('Invalid pessoa perfil'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PessoaPerfil->save($this->request->data)) {
				$this->Session->setFlash(__('The pessoa perfil has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pessoa perfil could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PessoaPerfil.' . $this->PessoaPerfil->primaryKey => $id));
			$this->request->data = $this->PessoaPerfil->find('first', $options);
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
		$this->PessoaPerfil->id = $id;
		if (!$this->PessoaPerfil->exists()) {
			throw new NotFoundException(__('Invalid pessoa perfil'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->PessoaPerfil->delete()) {
			$this->Session->setFlash(__('The pessoa perfil has been deleted.'));
		} else {
			$this->Session->setFlash(__('The pessoa perfil could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
