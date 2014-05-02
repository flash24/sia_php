<?php
App::uses('AppModel', 'Model');
/**
 * EmpleadosObligacione Model
 *
 * @property Obligacione $Obligacione
 * @property Empleado $Empleado
 * @property Prenomina $Prenomina
 */
class EmpleadosObligacione extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'obligacione_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
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
		'Obligacione' => array(
			'className' => 'Obligacione',
			'foreignKey' => 'obligacione_id',
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
