<?php
App::uses('AppModel', 'Model');
/**
 * StatusEmpleado Model
 *
 * @property DatosPersonalesEmpresa $DatosPersonalesEmpresa
 */
class StatusEmpleado extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre_status';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'nombre_status' => array(
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
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'DatosPersonalesEmpresa' => array(
			'className' => 'DatosPersonalesEmpresa',
			'foreignKey' => 'status_empleado_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
