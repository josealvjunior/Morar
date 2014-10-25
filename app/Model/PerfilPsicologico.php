<?php
App::uses('AppModel', 'Model');
/**
 * PerfilPsicologico Model
 *
 */
class PerfilPsicologico extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'co_perfil_psicologico';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'Descricao';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'co_perfil_psicologico' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'Descricao' => array(
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
