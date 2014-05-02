<?php
App::uses('AppModel', 'Model');
/**
 * PrenominaCampo Model
 *
 * @property TipoCampo $TipoCampo
 * @property Prenomina $Prenomina
 */
class PrenominaCampo extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre_campo';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'nombre_campo' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'activo' => array(
			'boolean' => array(
				'rule' => array('boolean'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tipo_campo_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'prenomina_id' => array(
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
		'TipoCampo' => array(
			'className' => 'TipoCampo',
			'foreignKey' => 'tipo_campo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Prenomina' => array(
			'className' => 'Prenomina',
			'foreignKey' => 'prenomina_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
