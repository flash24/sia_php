<?php
App::uses('AppModel', 'Model');
/**
 * PermisosTiposEmpleado Model
 *
 * @property Permiso $Permiso
 * @property TiposEmpleado $TiposEmpleado
 */
class PermisosTiposEmpleado extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'permiso_id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Permiso' => array(
			'className' => 'Permiso',
			'foreignKey' => 'permiso_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'TiposEmpleado' => array(
			'className' => 'TiposEmpleado',
			'foreignKey' => 'tipos_empleado_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
