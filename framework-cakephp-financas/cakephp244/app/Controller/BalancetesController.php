<?php
App::uses('AppController', 'Controller');
/**
 * Balancetes Controller
 *
 * @property Balancete $Balancete
 * @property PaginatorComponent $Paginator
 */
class BalancetesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

    public function financas_upload() {
    	if ($this->request->is('post')) {
     	$allowedExts = array("txt", "csv");        	
        $extension = end(explode(".", $_FILES["arquivo"]["name"]));
        			 
        if ((($_FILES["arquivo"]["type"] == "text/plain") 
        	|| ($_FILES["arquivo"]["type"] == "text/csv")) 
        	&& ($_FILES["arquivo"]["size"] < 20000) 
        	&& in_array($extension, $allowedExts))
        	{
            	$uploaddir = WWW_ROOT. 'files' . DS;
				if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $uploaddir . $_FILES['arquivo']['name'])) {
					$this->Session->setFlash(__('Upload feito com sucesso.'), 'default', array('class' => 'success'));
				} else {
					$this->Session->setFlash(__('Erro no processo de Upload'), 'default', array('class' => 'success'));
				}
    		}
    	} 
    }

/**
 * index method
 *
 * @return void
 */
	public function financas_index() {
		$this->Balancete->recursive = 0;
		$this->set('balancetes', $this->Paginator->paginate());
	}

// /**
//  * view method
//  *
//  * @throws NotFoundException
//  * @param string $id
//  * @return void
//  */
// 	public function view($id = null) {
// 		if (!$this->Balancete->exists($id)) {
// 			throw new NotFoundException(__('Invalid balancete'));
// 		}
// 		$options = array('conditions' => array('Balancete.' . $this->Balancete->primaryKey => $id));
// 		$this->set('balancete', $this->Balancete->find('first', $options));
// 	}

/**
 * add method
 *
 * @return void
 */
	public function financas_add() {
		if ($this->request->is('post')) {
			$this->Balancete->create();
			if ($this->Balancete->save($this->request->data)) {
				$this->Session->setFlash(__('The balancete has been saved.'), 'default', array('class' => 'success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The balancete could not be saved. Please, try again.'), 'default', array('class' => 'success'));
			}
		}
		$situacoes = $this->Balancete->Situacao->find('list');
		$this->set(compact('situacoes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function financas_edit($id = null) {
		if (!$this->Balancete->exists($id)) {
			throw new NotFoundException(__('Invalid balancete'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Balancete->save($this->request->data)) {
				$this->Session->setFlash(__('The balancete has been saved.'), 'default', array('class' => 'success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The balancete could not be saved. Please, try again.'), 'default', array('class' => 'success'));
			}
		} else {
			$options = array('conditions' => array('Balancete.' . $this->Balancete->primaryKey => $id));
			$this->request->data = $this->Balancete->find('first', $options);
		}
		$situacoes = $this->Balancete->Situacao->find('list');
		$this->set(compact('situacoes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function financas_delete($id = null) {
		$this->Balancete->id = $id;
		if (!$this->Balancete->exists()) {
			throw new NotFoundException(__('Invalid balancete'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Balancete->delete()) {
			$this->Session->setFlash(__('The balancete has been deleted.'), 'default', array('class' => 'success'));
			
		} else {
			$this->Session->setFlash(__('The balancete could not be deleted. Please, try again.'), 'default', array('class' => 'success'));
			}
		
		return $this->redirect(array('action' => 'index'));
	}
}
