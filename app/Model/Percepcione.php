<?php
App::uses('AppModel', 'Model');
/**
 * Percepcione Model
 *
 * @property Empleado $Empleado
 */
class Percepcione extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'descripcion';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Empleado' => array(
			'className' => 'Empleado',
			'joinTable' => 'empleados_percepciones',
			'foreignKey' => 'percepcione_id',
			'associationForeignKey' => 'empleado_id',
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
