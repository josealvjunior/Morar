<?php
App::uses('AppModel', 'Model');
/**
 * FaixaPreco Model
 *
 */
class FaixaPreco extends AppModel {


	public $primaryKey = 'co_faixa_preco';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'co_faixa_preco' => array(
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
