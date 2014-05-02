<?php
App::uses('AppModel', 'Model');
/**
 * Departamento Model
 *
 * @property UnidadesResponsable $UnidadesResponsable
 * @property Puesto $Puesto
 */
class Departamento extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre_departamento';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'unidades_responsable_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'nombre_departamento' => array(
			'notempty' => array(
				'rule' => array('notempty'),
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
		'UnidadesResponsable' => array(
			'className' => 'UnidadesResponsable',
			'foreignKey' => 'unidades_responsable_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Puesto' => array(
			'className' => 'Puesto',
			'foreignKey' => 'departamento_id',
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
