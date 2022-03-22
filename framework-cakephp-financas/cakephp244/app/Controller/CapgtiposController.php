<?php
App::uses('AppController', 'Controller');
/**
 * Capgtipos Controller
 *
 * @property Capgtipo $Capgtipo
 * @property PaginatorComponent $Paginator
 */
class CapgtiposController extends AppController {

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
		$this->Capgtipo->recursive = 0;
		$this->set('capgtipos', $this->Paginator->paginate());
	}

// /**
//  * view method
//  *
//  * @throws NotFoundException
//  * @param string $id
//  * @return void
//  */
// 	public function financas_view($id = null) {
// 		if (!$this->Capgtipo->exists($id)) {
// 			throw new NotFoundException(__('Invalid capgtipo'));
// 		}
// 		$options = array('conditions' => array('Capgtipo.' . $this->Capgtipo->primaryKey => $id));
// 		$this->set('capgtipo', $this->Capgtipo->find('first', $options));
// 	}

/**
 * add method
 *
 * @return void
 */
	public function financas_add() {
		if ($this->request->is('post')) {
			$this->Capgtipo->create();
			if ($this->Capgtipo->save($this->request->data)) {
				$this->Session->setFlash(__('The capgtipo has been saved.'), 'default', array('class' => 'success'));
			}
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The capgtipo could not be saved. Please, try again.'), 'default', array('class' => 'success'));
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
		if (!$this->Capgtipo->exists($id)) {
			throw new NotFoundException(__('Invalid capgtipo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Capgtipo->save($this->request->data)) {
				$this->Session->setFlash(__('The capgtipo has been saved.'), 'default', array('class' => 'success'));
			}
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The capgtipo could not be saved. Please, try again.'), 'default', array('class' => 'success'));
			}
			}
		} else {
			$options = array('conditions' => array('Capgtipo.' . $this->Capgtipo->primaryKey => $id));
			$this->request->data = $this->Capgtipo->find('first', $options);
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
		$this->Capgtipo->id = $id;
		if (!$this->Capgtipo->exists()) {
			throw new NotFoundException(__('Invalid capgtipo'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Capgtipo->delete()) {
			$this->Session->setFlash(__('The capgtipo has been deleted.'), 'default', array('class' => 'success'));
			}
		} else {
			$this->Session->setFlash(__('The capgtipo could not be deleted. Please, try again.'), 'default', array('class' => 'success'));
			}
		}
		return $this->redirect(array('action' => 'index'));
	}}
