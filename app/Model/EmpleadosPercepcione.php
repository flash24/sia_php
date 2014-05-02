<?php
App::uses('AppModel', 'Model');
/**
 * EmpleadosPercepcione Model
 *
 * @property Percepcione $Percepcione
 * @property Prenomina $Prenomina
 * @property Empleado $Empleado
 */
class EmpleadosPercepcione extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Percepcione' => array(
			'className' => 'Percepcione',
			'foreignKey' => 'percepcione_id',
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
