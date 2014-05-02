<?php
App::uses('AppModel', 'Model');
/**
 * SalariosMinimo Model
 *
 * @property Ejercicio $Ejercicio
 */
class SalariosMinimo extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Ejercicio' => array(
			'className' => 'Ejercicio',
			'foreignKey' => 'salarios_minimo_id',
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
