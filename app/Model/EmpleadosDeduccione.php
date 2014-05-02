<?php
App::uses('AppModel', 'Model');
/**
 * EmpleadosDeduccione Model
 *
 * @property Prenomina $Prenomina
 * @property Empleado $Empleado
 * @property Deduccione $Deduccione
 */
class EmpleadosDeduccione extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Prenomina' => array(
			'className' => 'Prenomina',
			'foreignKey' => 'prenomina_id',
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
		'Deduccione' => array(
			'className' => 'Deduccione',
			'foreignKey' => 'deduccione_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
