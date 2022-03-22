<?php
App::uses('AppController', 'Controller');
/**
 * Despesas Controller
 *
 * @property Despesa $Despesa
 * @property PaginatorComponent $Paginator
 */
class DespesasController extends AppController {

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
                $this->Despesa->recursive = 0;
                $this->set('despesas', $this->Paginator->paginate());
        }

// /**
//  * view method
//  *
//  * @throws NotFoundException
//  * @param string $id
//  * @return void
//  */
//         public function financas_view($id = null) {
//                 if (!$this->Despesa->exists($id)) {
//                         throw new NotFoundException(__('Invalid despesa'));
//                 }
//                 $options = array('conditions' => array('Despesa.' . $this->Despesa->primaryKey => $id));
//                 $this->set('despesa', $this->Despesa->find('first', $options));
//         }

        public function financas_relatorio() {
                
                $params='';

                if ($this->request->is('post')) {

                        $usuario = $_POST['DespesaUsuarioId'];
                        $categoria = $_POST['DespesaCapgtipoId'];
                        $periodo = $_POST['DespesaPeriodo'];

                        if ((!is_null($usuario)) and (!is_null($categoria)) and (!is_null($periodo))) {
                                $params = array(
                                'conditions' => array(
                                'Despesa.usuario_id' => $usuario,
                                'Despesa.capgtipo_id' => $categoria,
                                'Despesa.data_pg LIKE' => '%'.$periodo.'%'
                                 ),
                        );

                } else {
                        $this->redirect(array('controller' => 'pages', 'action' => 'display', 'home'));        
                }
                        $this->set('despesas', $this->Despesa->find('all', $params));
                }
                $capgtipos = $this->Despesa->Capgtipo->find('list');
                $usuarios = $this->Despesa->Usuario->find('list');
                $situacoes = $this->Despesa->Situacao->find('list');
                $this->set(compact('capgtipos', 'usuarios', 'situacoes'));
        }

/**
 * add method
 *
 * @return void
 */
        public function financas_add() {
                if ($this->request->is('post')) {
                        $this->Despesa->create();
                        if ($this->Despesa->save($this->request->data)) {
                                $this->Session->setFlash(__('The despesa has been saved.'));
                                return $this->redirect(array('action' => 'index'));
                        } else {
                                $this->Session->setFlash(__('The despesa could not be saved. Please, try again.'));
                        }
                }
                $capgtipos = $this->Despesa->Capgtipo->find('list');
                $usuarios = $this->Despesa->Usuario->find('list');
                $situacoes = $this->Despesa->Situacao->find('list');
                $this->set(compact('capgtipos', 'usuarios', 'situacoes'));
        }

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
        public function financas_edit($id = null) {
                if (!$this->Despesa->exists($id)) {
                        throw new NotFoundException(__('Invalid despesa'));
                }
                if ($this->request->is(array('post', 'put'))) {
                        if ($this->Despesa->save($this->request->data)) {
                                $this->Session->setFlash(__('The despesa has been saved.'));
                                return $this->redirect(array('action' => 'index'));
                        } else {
                                $this->Session->setFlash(__('The despesa could not be saved. Please, try again.'));
                        }
                } else {
                        $options = array('conditions' => array('Despesa.' . $this->Despesa->primaryKey => $id));
                        $this->request->data = $this->Despesa->find('first', $options);
                }
                $capgtipos = $this->Despesa->Capgtipo->find('list');
                $usuarios = $this->Despesa->Usuario->find('list');
                $situacoes = $this->Despesa->Situacao->find('list');
                $this->set(compact('capgtipos', 'usuarios', 'situacoes'));
        }

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
        public function financas_delete($id = null) {
                $this->Despesa->id = $id;
                if (!$this->Despesa->exists()) {
                        throw new NotFoundException(__('Invalid despesa'));
                }
                $this->request->onlyAllow('post', 'delete');
                if ($this->Despesa->delete()) {
                        $this->Session->setFlash(__('The despesa has been deleted.'));
                } else {
                        $this->Session->setFlash(__('The despesa could not be deleted. Please, try again.'));
                }
                return $this->redirect(array('action' => 'index'));
        }}