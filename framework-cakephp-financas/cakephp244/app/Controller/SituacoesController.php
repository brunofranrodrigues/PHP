<?php
App::uses('AppController', 'Controller');
/**
 * Situacoes Controller
 *
 * @property Situacao $Situacao
 * @property PaginatorComponent $Paginator
 */
class SituacoesController extends AppController {

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
	public function financas_index() {
		$this->Situacao->recursive = 0;
		$this->set('situacoes', $this->Paginator->paginate());
	}

// /**
//  * view method
//  *
//  * @throws NotFoundException
//  * @param string $id
//  * @return void
//  */
// 	public function financas_view($id = null) {
// 		if (!$this->Situacao->exists($id)) {
// 			throw new NotFoundException(__('Invalid situacao'));
// 		}
// 		$options = array('conditions' => array('Situacao.' . $this->Situacao->primaryKey => $id));
// 		$this->set('situacao', $this->Situacao->find('first', $options));
// 	}

/**
 * add method
 *
 * @return void
 */
	public function financas_add() {
		if ($this->request->is('post')) {
			$this->Situacao->create();
			if ($this->Situacao->save($this->request->data)) {
				$this->Session->setFlash(__('The situacao has been saved.'), 'default', array('class' => 'success'));
			}
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The situacao could not be saved. Please, try again.'), 'default', array('class' => 'success'));
			}
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
		if (!$this->Situacao->exists($id)) {
			throw new NotFoundException(__('Invalid situacao'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Situacao->save($this->request->data)) {
				$this->Session->setFlash(__('The situacao has been saved.'), 'default', array('class' => 'success'));
			}
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The situacao could not be saved. Please, try again.'), 'default', array('class' => 'success'));
			}
			}
		} else {
			$options = array('conditions' => array('Situacao.' . $this->Situacao->primaryKey => $id));
			$this->request->data = $this->Situacao->find('first', $options);
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
		$this->Situacao->id = $id;
		if (!$this->Situacao->exists()) {
			throw new NotFoundException(__('Invalid situacao'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Situacao->delete()) {
			$this->Session->setFlash(__('The situacao has been deleted.'), 'default', array('class' => 'success'));
			}
		} else {
			$this->Session->setFlash(__('The situacao could not be deleted. Please, try again.'), 'default', array('class' => 'success'));
			}
		}
		return $this->redirect(array('action' => 'index'));
	}}
