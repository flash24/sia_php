<?php
App::uses('AppModel', 'Model');
/**
 * UnidadesResponsable Model
 *
 * @property Departamento $Departamento
 */
class UnidadesResponsable extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre_dependencia';

/**
 * Validation rules
 *
 * @var array
 */
//	public $validate = array(
//		'clave_dependencia_ia' => array(
//			'notempty' => array(
//				'rule' => array('notempty'),
//				//'message' => 'Your custom message here',
//				//'allowEmpty' => false,
//				//'required' => false,
//				//'last' => false, // Stop validation after this rule
//				//'on' => 'create', // Limit validation to 'create' or 'update' operations
//			),
//		),
//		'nombre_dependencia' => array(
//			'notempty' => array(
//				'rule' => array('notempty'),
//				//'message' => 'Your custom message here',
//				//'allowEmpty' => false,
//				//'required' => false,
//				//'last' => false, // Stop validation after this rule
//				//'on' => 'create', // Limit validation to 'create' or 'update' operations
//			),
//		),
//	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Departamento' => array(
			'className' => 'Departamento',
			'foreignKey' => 'unidades_responsable_id',
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
