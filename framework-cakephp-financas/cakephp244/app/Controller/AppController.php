<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

	public $components = array('Session', 'Auth');

	protected function _isPrefix($prefix) {
    	return isset($this->params['prefix']) &&
    	$this->params['prefix'] === $prefix;
	}

	public function beforeFilter() {
		if ($this->_isPrefix('financas'))
		$this->layout = 'financas'; // Layout padrão do prefixo

    	$this->Auth->authenticate = array('Form' => array(
        	'userModel' => 'Usuario',
        	'fields' => array('username' => 'email','password' => 'senha')));
        $this->Auth->authError = 'Você realmente acha que você tem permissão para ver isso?';
    	$this->Auth->loginAction = array('controller' => 'usuarios','action' => 'financas_login', 'financas' => true);
        $this->Auth->loginRedirect = array('controller' => 'usuarios','action' => 'financas_add');
    
    	if (!$this->_isPrefix('financas'))
        	$this->Auth->allow();

    	return parent::beforeFilter();
    
    }
}
