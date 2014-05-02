<?php
App::uses('AppModel', 'Model');
/**
 * Permiso Model
 *
 * @property TiposEmpleado $TiposEmpleado
 */
class Permiso extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'TiposEmpleado' => array(
			'className' => 'TiposEmpleado',
			'joinTable' => 'permisos_tipos_empleados',
			'foreignKey' => 'permiso_id',
			'associationForeignKey' => 'tipos_empleado_id',
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
