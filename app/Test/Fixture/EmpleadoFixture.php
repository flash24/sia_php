<?php
/**
 * EmpleadoFixture
 *
 */
class EmpleadoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'usuario' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'key' => 'unique', 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'curp' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'key' => 'unique', 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'password' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'tipos_empleado_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'numero_seguro_social' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'usuario' => array('column' => 'usuario', 'unique' => 1),
			'curp' => array('column' => 'curp', 'unique' => 1),
			'usuario_2' => array('column' => 'usuario', 'unique' => 1),
			'curp_2' => array('column' => 'curp', 'unique' => 1),
			'usuario_3' => array('column' => 'usuario', 'unique' => 1),
			'curp_3' => array('column' => 'curp', 'unique' => 1),
			'usuario_4' => array('column' => 'usuario', 'unique' => 1),
			'curp_4' => array('column' => 'curp', 'unique' => 1),
			'FKempleados945922' => array('column' => 'tipos_empleado_id', 'unique' => 0),
			'FKempleados945923' => array('column' => 'tipos_empleado_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_spanish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'usuario' => 'Lorem ipsum dolor sit amet',
			'curp' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'tipos_empleado_id' => 1,
			'numero_seguro_social' => 'Lorem ipsum dolor sit amet'
		),
	);

}
