<?php
App::uses('AppModel', 'Model');
/**
 * Prenomina Model
 *
 * @property Ejercicio $Ejercicio
 * @property EmpleadoDeduccione $EmpleadoDeduccione
 * @property EmpleadosObligacione $EmpleadosObligacione
 * @property EmpleadosPercepcione $EmpleadosPercepcione
 * @property PrenominaCalculo $PrenominaCalculo
 * @property PrenominaCampo $PrenominaCampo
 */
class Prenomina extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre_prenomina';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'ejercicio_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
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
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Ejercicio' => array(
			'className' => 'Ejercicio',
			'foreignKey' => 'ejercicio_id',
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
		'EmpleadosDeduccione' => array(
			'className' => 'EmpleadosDeduccione',
			'foreignKey' => 'prenomina_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'EmpleadosObligacione' => array(
			'className' => 'EmpleadosObligacione',
			'foreignKey' => 'prenomina_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'EmpleadosPercepcione' => array(
			'className' => 'EmpleadosPercepcione',
			'foreignKey' => 'prenomina_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'PrenominaCalculo' => array(
			'className' => 'PrenominaCalculo',
			'foreignKey' => 'prenomina_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'PrenominaCampo' => array(
			'className' => 'PrenominaCampo',
			'foreignKey' => 'prenomina_id',
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
