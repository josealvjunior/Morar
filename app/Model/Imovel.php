<?php
App::uses('AppModel', 'Model');
/**
 * Imovel Model
 *
 * @property TipoImovel $TipoImovel
 */
class Imovel extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'co_imovel';

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
		'co_imovel' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'co_usuario' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
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
		'co_bairros' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
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
		'co_perfil_pisicologico' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
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
	);
	

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'TipoImovel' => array(
			'className' => 'TipoImovel',
			'foreignKey' => 'tipo_imovel_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Bairro' => array(
			'className' => 'Bairro',
			'foreignKey' => 'co_bairros',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'FaixaPreco' => array(
			'className' => 'FaixaPreco',
			'foreignKey' => 'co_faixa_preco',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'TiposQuarto' => array(
			'className' => 'TiposQuarto',
			'foreignKey' => 'co_tipos_quartos',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'TipoMoradia' => array(
			'className' => 'TipoMoradia',
			'foreignKey' => 'co_tipo_moradia',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'PerfilPsicologico' => array(
			'className' => 'PerfilPsicologico',
			'foreignKey' => 'co_perfil_psicologico',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
