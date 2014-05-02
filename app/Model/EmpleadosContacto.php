<?php
App::uses('AppModel', 'Model');
/**
 * EmpleadosContacto Model
 *
 * @property Empleado $Empleado
 */
class EmpleadosContacto extends AppModel {

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
		'Empleado' => array(
			'className' => 'Empleado',
			'foreignKey' => 'empleado_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
