<?php
App::uses('AppModel', 'Model');
/**
 * Empleado Model
 *
 * @property TiposEmpleado $TiposEmpleado
 */
class Empleado extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'password';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'TiposEmpleado' => array(
			'className' => 'TiposEmpleado',
			'foreignKey' => 'tipos_empleado_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	public function beforeSave($options = array()) {

        // ////////////////Bluefihs//////////////////////
        if (isset($this->data[$this->alias]['password'])) {
            $this->data[$this->alias]['password'] = Security::hash($this->data[$this->alias]['password'], 'blowfish');
            unset($this->data['Empleado']['password']);
        }
        return true;
    }
}
