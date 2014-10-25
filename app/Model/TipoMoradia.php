<?php
App::uses('AppModel', 'Model');
/**
 * TipoMoradia Model
 *
 */
class TipoMoradia extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'co_tipo_moradia';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'descricao';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'co_tipo_moradia' => array(
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
