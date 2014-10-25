<?php
App::uses('AppModel', 'Model');
/**
 * TipoImovel Model
 *
 * @property Imovel $Imovel
 */
class TipoImovel extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'tipo_imovel_id';

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
		'tipo_imovel_id' => array(
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

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $hasMany = array(
		'Imovel' => array(
			'className' => 'Imovel',
			'foreignKey' => 'tipo_imovel_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
