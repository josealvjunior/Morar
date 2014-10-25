<?php
App::uses('AppModel', 'Model');
/**
 * TiposQuarto Model
 *
 */
class TiposQuarto extends AppModel {




	public $primaryKey = 'co_tipos_quartos';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'co_tipos_quartos' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'descricao' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
