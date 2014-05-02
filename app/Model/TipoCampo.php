<?php
App::uses('AppModel', 'Model');
/**
 * TipoCampo Model
 *
 * @property PrenominaCampo $PrenominaCampo
 */
class TipoCampo extends AppModel {

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
		'PrenominaCampo' => array(
			'className' => 'PrenominaCampo',
			'foreignKey' => 'tipo_campo_id',
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
