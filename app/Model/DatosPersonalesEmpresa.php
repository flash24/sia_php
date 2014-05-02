<?php
App::uses('AppModel', 'Model');
/**
 * DatosPersonalesEmpresa Model
 *
 * @property UnidadesResponsable $UnidadesResponsable
 * @property Puesto $Puesto
 * @property StatusEmpleado $StatusEmpleado
 * @property Empleado $Empleado
 */
class DatosPersonalesEmpresa extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'empleado_id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'puesto_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'status_empleado_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'fecha_alta_ur' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'empleado_id' => array(
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
		'UnidadesResponsable' => array(
			'className' => 'UnidadesResponsable',
			'foreignKey' => 'unidades_responsable_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Puesto' => array(
			'className' => 'Puesto',
			'foreignKey' => 'puesto_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'StatusEmpleado' => array(
			'className' => 'StatusEmpleado',
			'foreignKey' => 'status_empleado_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Empleado' => array(
			'className' => 'Empleado',
			'foreignKey' => 'empleado_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
