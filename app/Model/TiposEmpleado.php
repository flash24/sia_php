<?php
App::uses('AppModel', 'Model');
/**
 * TiposEmpleado Model
 *
 * @property Empleado $Empleado
 * @property Menu $Menu
 * @property Modulo $Modulo
 * @property Permiso $Permiso
 */
class TiposEmpleado extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre_tipo';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'nombre_tipo' => array(
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
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Empleado' => array(
			'className' => 'Empleado',
			'foreignKey' => 'tipos_empleado_id',
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


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Menu' => array(
			'className' => 'Menu',
			'joinTable' => 'menus_tipos_empleados',
			'foreignKey' => 'tipos_empleado_id',
			'associationForeignKey' => 'menu_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Modulo' => array(
			'className' => 'Modulo',
			'joinTable' => 'modulos_tipos_empleados',
			'foreignKey' => 'tipos_empleado_id',
			'associationForeignKey' => 'modulo_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Permiso' => array(
			'className' => 'Permiso',
			'joinTable' => 'permisos_tipos_empleados',
			'foreignKey' => 'tipos_empleado_id',
			'associationForeignKey' => 'permiso_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
