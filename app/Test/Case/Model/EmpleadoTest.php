<?php
App::uses('Empleado', 'Model');

/**
 * Empleado Test Case
 *
 */
class EmpleadoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.empleado',
		'app.tipos_empleado',
		'app.menu',
		'app.menus_tipos_empleado',
		'app.modulo',
		'app.modulos_tipos_empleado',
		'app.permiso',
		'app.permisos_tipos_empleado',
		'app.anexo',
		'app.tipo_anexo',
		'app.datos_personales_hijo',
		'app.datos_personale',
		'app.datos_personales_empresa',
		'app.unidades_responsable',
		'app.departamento',
		'app.puesto',
		'app.status_empleado',
		'app.prenomina_calculo',
		'app.deduccione',
		'app.empleados_deduccione',
		'app.obligacione',
		'app.empleados_obligacione',
		'app.percepcione',
		'app.empleados_percepcione'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Empleado = ClassRegistry::init('Empleado');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Empleado);

		parent::tearDown();
	}

}
