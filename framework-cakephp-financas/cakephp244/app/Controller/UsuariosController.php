<?php
App::uses('AppController', 'Controller');
/**
 * Usuarios Controller
 *
 * @property Usuario $Usuario
 * @property PaginatorComponent $Paginator
 */
class UsuariosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');



	public function financas_login() { if ($this->Auth->login()) {
		$this->redirect($this->Auth->redirect()); } else {
		$this->Session->setFlash(__('Dados incorretos!'), 'default', array('class' => 'success')); }
	}

	public function financas_logout() { 
		$this->redirect($this->Auth->logout());
	}

/**
 * index method
 *
 * @return void
 */
	public function financas_index() {
		$this->Usuario->recursive = 0;
		$this->set('usuarios', $this->Paginator->paginate());
	}

// /**
//  * view method
//  *
//  * @throws NotFoundException
//  * @param string $id
//  * @return void
//  */
// 	public function financas_view($id = null) {
// 		if (!$this->Usuario->exists($id)) {
// 			throw new NotFoundException(__('Invalid usuario'));
// 		}
// 		$options = array('conditions' => array('Usuario.' . $this->Usuario->primaryKey => $id));
// 		$this->set('usuario', $this->Usuario->find('first', $options));
// 	}


public function financas_pesquisa() {
	if ($this->request->is('post')) {
	$searchtype = $_POST['searchtype'];
	$value = $_POST['searchuser'];
	$results = $this->Usuario->find('all', array('fields' => array(
																'Usuario.id',
																'Usuario.nome',
																'Usuario.email',
																'Usuario.created',
																'Usuario.modified'
																),
												'order' => 'Usuario.id ASC',
												'conditions' => array($searchtype . ' ' . 'LIKE' => '%'.$value.'%')
											));
	$this->set('results', $results);
	}

}

/**
 * add method
 *
 * @return void
 */
	public function financas_add() {
		if ($this->request->is('post')) {
			$this->Usuario->create();
			if ($this->Usuario->save($this->request->data)) {
				$this->Session->setFlash(__('The usuario has been saved.'), 'default', array('class' => 'success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The usuario could not be saved. Please, try again.'), 'default', array('class' => 'success'));
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
	public function financas_edit($id = null) {
		if (!$this->Usuario->exists($id)) {
			throw new NotFoundException(__('Invalid usuario'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Usuario->save($this->request->data)) {
				$this->Session->setFlash(__('The usuario has been saved.'), 'default', array('class' => 'success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The usuario could not be saved. Please, try again.'), 'default', array('class' => 'success'));
			}
		} else {
			$options = array('conditions' => array('Usuario.' . $this->Usuario->primaryKey => $id));
			$this->request->data = $this->Usuario->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function financas_delete($id = null) {
		$this->Usuario->id = $id;
		if (!$this->Usuario->exists()) {
			throw new NotFoundException(__('Invalid usuario'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Usuario->delete()) {
			$this->Session->setFlash(__('The usuario has been deleted.'), 'default', array('class' => 'success'));
		} else {
			$this->Session->setFlash(__('The usuario could not be deleted. Please, try again.'), 'default', array('class' => 'success'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
