<?php
App::uses('AppModel', 'Model');
App::uses('AuthComponent', 'Controller/Component');
/**
 * Usuario Model
 *
 * @property Despesa $Despesa
 * @property Receita $Receita
 */
class Usuario extends AppModel {

	public $displayField = 'nome';


	public function beforeSave($options = array()) {
		if (isset($this->data['Usuario']['senha'])) {
			$password = &$this->data['Usuario']['senha'];
			$password = AuthComponent::password($password);
	}
		return parent::beforeSave($options);
	}

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'nome' => array(
			'alphaNumeric' => array(
				'rule' => array('alphaNumeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'email' => array(
			'email' => array(
				'rule' => array('email'),
				// 'message' => 'Email com formato invalido',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations

			),array(
				'rule' => 'isUnique', // Unico
				'message' => 'Este Email ja esta em uso',
			),
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Este campo nao pode ficar em branco',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'senha' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Este campo nao pode ficar em branco',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),array(
				'rule' => array('minLength', 8),
				'message' => 'Digite no minimo 8 caracteres',
			), 
		),
		'perfil' => array(
			'inList' => array(
				'rule' => array('inList', array('admin', 'viewer')),
				'message' => 'Escolha um perfil valido',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Despesa' => array(
			'className' => 'Despesa',
			'foreignKey' => 'usuario_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Receita' => array(
			'className' => 'Receita',
			'foreignKey' => 'usuario_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
