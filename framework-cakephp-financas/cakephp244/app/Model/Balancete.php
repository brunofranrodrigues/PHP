<?php
App::uses('AppModel', 'Model');
/**
 * Balancete Model
 *
 */
class Balancete extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
        public $validate = array(
                'data' => array(
                        'notEmpty' => array(
                                'rule' => array('notEmpty'),
                                //'message' => 'Your custom message here',
                                //'allowEmpty' => false,
                                //'required' => false,
                                //'last' => false, // Stop validation after this rule
                                //'on' => 'create', // Limit validation to 'create' or 'update' operations
                        ),
                ),
                'historico' => array(
                        'notEmpty' => array(
                                'rule' => array('notEmpty'),
                                //'message' => 'Your custom message here',
                                //'allowEmpty' => false,
                                //'required' => false,
                                //'last' => false, // Stop validation after this rule
                                //'on' => 'create', // Limit validation to 'create' or 'update' operations
                        ),
                ),
                // 'valor' => array(
                //         'money' => array(
                //                 'rule' => array('money'),
                //                 //'message' => 'Your custom message here',
                //                 //'allowEmpty' => false,
                //                 //'required' => false,
                //                 //'last' => false, // Stop validation after this rule
                //                 //'on' => 'create', // Limit validation to 'create' or 'update' operations
                //         ),
                // ),
        );

public $belongsTo = array(
                'Situacao' => array(
                        'className' => 'Situacao',
                        'foreignKey' => 'situacao_id',
                        'conditions' => '',
                        'fields' => '',
                        'order' => ''
                )
        );
}