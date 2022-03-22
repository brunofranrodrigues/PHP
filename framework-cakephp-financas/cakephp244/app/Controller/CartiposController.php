<?php
App::uses('AppController', 'Controller');
/**
 * Cartipos Controller
 *
 * @property Cartipo $Cartipo
 * @property PaginatorComponent $Paginator
 */
class CartiposController extends AppController {

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
		$this->Cartipo->recursive = 0;
		$this->set('cartipos', $this->Paginator->paginate());
	}

// /**
//  * view method
//  *
//  * @throws NotFoundException
//  * @param string $id
//  * @return void
//  */
// 	public function financas_view($id = null) {
// 		if (!$this->Cartipo->exists($id)) {
// 			throw new NotFoundException(__('Invalid cartipo'));
// 		}
// 		$options = array('conditions' => array('Cartipo.' . $this->Cartipo->primaryKey => $id));
// 		$this->set('cartipo', $this->Cartipo->find('first', $options));
// 	}

/**
 * add method
 *
 * @return void
 */
	public function financas_add() {
		if ($this->request->is('post')) {
			$this->Cartipo->create();
			if ($this->Cartipo->save($this->request->data)) {
				$this->Session->setFlash(__('The cartipo has been saved.'), 'default', array('class' => 'success'));
			}
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cartipo could not be saved. Please, try again.'), 'default', array('class' => 'success'));
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
		if (!$this->Cartipo->exists($id)) {
			throw new NotFoundException(__('Invalid cartipo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Cartipo->save($this->request->data)) {
				$this->Session->setFlash(__('The cartipo has been saved.'), 'default', array('class' => 'success'));
			}
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cartipo could not be saved. Please, try again.'), 'default', array('class' => 'success'));
			}
			}
		} else {
			$options = array('conditions' => array('Cartipo.' . $this->Cartipo->primaryKey => $id));
			$this->request->data = $this->Cartipo->find('first', $options);
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
		$this->Cartipo->id = $id;
		if (!$this->Cartipo->exists()) {
			throw new NotFoundException(__('Invalid cartipo'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Cartipo->delete()) {
			$this->Session->setFlash(__('The cartipo has been deleted.'), 'default', array('class' => 'success'));
			}
		} else {
			$this->Session->setFlash(__('The cartipo could not be deleted. Please, try again.'), 'default', array('class' => 'success'));
			}
		return $this->redirect(array('action' => 'index'));
	}}
