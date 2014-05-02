<?php
App::uses('AppModel', 'Model');
/**
 * Anexo Model
 *
 * @property TipoAnexo $TipoAnexo
 * @property Empleado $Empleado
 * @property DatosPersonalesHijo $DatosPersonalesHijo
 */
class Anexo extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'datos_personales_hijo_id' => array(
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
		'TipoAnexo' => array(
			'className' => 'TipoAnexo',
			'foreignKey' => 'tipo_anexo_id',
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
		'DatosPersonalesHijo' => array(
			'className' => 'DatosPersonalesHijo',
			'foreignKey' => 'datos_personales_hijo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
