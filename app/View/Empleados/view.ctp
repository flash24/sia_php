<div class="span3 well" style="text-align: left;">
    <ul class="nav nav-list">
	    <li class="nav-header">Empleados</li>
		<li><?php echo $this->Html->link('<i class="icon-pencil"></i>Editar Empleado', array('action' => 'edit', $empleado['Empleado']['id']),array('escape'=>false)); ?> </li>
		<li><?php echo $this->Form->postLink('<i class="icon-remove"></i>Eliminar Empleado', array('action' => 'delete', $empleado['Empleado']['id']), array('escape'=>false), __('Realmente desea eliminar el registro con Id %s?', $empleado['Empleado']['id'])); ?> </li>
		<li><?php echo $this->Html->link('<i class="icon-list-alt"></i>Lista de Empleados', array('action' => 'index'),array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link('<i class="icon-plus-sign"></i>Nuevo Empleado', array('action' => 'add'),array('escape'=>false)); ?> </li>

		<li class="nav-header">Tipos Empleados</li>
		<li><?php echo $this->Html->link('<li class="icon-list-alt"></li>Lista de Tipos Empleados', array('controller' => 'tipos_empleados', 'action' => 'index'),array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link('<i class="icon-plus-sign"></i>Nuevo Tipos Empleado', array('controller' => 'tipos_empleados', 'action' => 'add'),array('escape'=>false)); ?> </li>

		<li class="nav-header">Anexos</li>
		<li><?php echo $this->Html->link('<li class="icon-list-alt"></li>Lista de Anexos', array('controller' => 'anexos', 'action' => 'index'),array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link('<i class="icon-plus-sign"></i>Nuevo Anexo', array('controller' => 'anexos', 'action' => 'add'),array('escape'=>false)); ?> </li>

		<li class="nav-header">Datos Personales</li>
		<li><?php echo $this->Html->link('<li class="icon-list-alt"></li>Lista de Datos Personales', array('controller' => 'datos_personales', 'action' => 'index'),array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link('<i class="icon-plus-sign"></i>Nuevo Datos Personale', array('controller' => 'datos_personales', 'action' => 'add'),array('escape'=>false)); ?> </li>

		<li class="nav-header">Datos Personales Empresas</li>
		<li><?php echo $this->Html->link('<li class="icon-list-alt"></li>Lista de Datos Personales Empresas', array('controller' => 'datos_personales_empresas', 'action' => 'index'),array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link('<i class="icon-plus-sign"></i>Nuevo Datos Personales Empresa', array('controller' => 'datos_personales_empresas', 'action' => 'add'),array('escape'=>false)); ?> </li>

		<li class="nav-header">Datos Personales Hijos</li>
		<li><?php echo $this->Html->link('<li class="icon-list-alt"></li>Lista de Datos Personales Hijos', array('controller' => 'datos_personales_hijos', 'action' => 'index'),array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link('<i class="icon-plus-sign"></i>Nuevo Datos Personales Hijo', array('controller' => 'datos_personales_hijos', 'action' => 'add'),array('escape'=>false)); ?> </li>

		<li class="nav-header">Prenomina Calculos</li>
		<li><?php echo $this->Html->link('<li class="icon-list-alt"></li>Lista de Prenomina Calculos', array('controller' => 'prenomina_calculos', 'action' => 'index'),array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link('<i class="icon-plus-sign"></i>Nuevo Prenomina Calculo', array('controller' => 'prenomina_calculos', 'action' => 'add'),array('escape'=>false)); ?> </li>

		<li class="nav-header">Deducciones</li>
		<li><?php echo $this->Html->link('<li class="icon-list-alt"></li>Lista de Deducciones', array('controller' => 'deducciones', 'action' => 'index'),array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link('<i class="icon-plus-sign"></i>Nuevo Deduccione', array('controller' => 'deducciones', 'action' => 'add'),array('escape'=>false)); ?> </li>

		<li class="nav-header">Obligaciones</li>
		<li><?php echo $this->Html->link('<li class="icon-list-alt"></li>Lista de Obligaciones', array('controller' => 'obligaciones', 'action' => 'index'),array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link('<i class="icon-plus-sign"></i>Nuevo Obligacione', array('controller' => 'obligaciones', 'action' => 'add'),array('escape'=>false)); ?> </li>

		<li class="nav-header">Percepciones</li>
		<li><?php echo $this->Html->link('<li class="icon-list-alt"></li>Lista de Percepciones', array('controller' => 'percepciones', 'action' => 'index'),array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link('<i class="icon-plus-sign"></i>Nuevo Percepcione', array('controller' => 'percepciones', 'action' => 'add'),array('escape'=>false)); ?> </li>
    </ul>
</div>

<div class="span8" style="text-align: left;">
	<h2><?php  echo 'Empleado';?></h2>
	<dl class="dl-horizontal">
			<dt><?php echo 'Id'; ?></dt>
		<dd>
			<?php echo $empleado['Empleado']['id']; ?>
			&nbsp;
		</dd>
		<dt><?php echo 'Usuario'; ?></dt>
		<dd>
			<?php echo $empleado['Empleado']['usuario']; ?>
			&nbsp;
		</dd>
		<dt><?php echo 'Curp'; ?></dt>
		<dd>
			<?php echo $empleado['Empleado']['curp']; ?>
			&nbsp;
		</dd>
		<dt><?php echo 'Password'; ?></dt>
		<dd>
			<?php echo $empleado['Empleado']['password']; ?>
			&nbsp;
		</dd>
		<dt><?php echo 'Tipos Empleado'; ?></dt>
		<dd>
			<?php echo $this->Html->link($empleado['TiposEmpleado']['nombre_tipo'], array('controller' => 'tipos_empleados', 'action' => 'view', $empleado['TiposEmpleado']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo 'Numero Seguro Social'; ?></dt>
		<dd>
			<?php echo $empleado['Empleado']['numero_seguro_social']; ?>
			&nbsp;
		</dd>
	</dl>

    <div class="accordion" id="accordionrelations">
		<div class="accordion-group">
            <div class="accordion-heading">
		        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionrelations" href="#collapseAnexo">
                	<?php printf('Relaciones con %s','Anexos');?>
                </a>
            </div>
            <div id="collapseAnexo" class="accordion-body collapse">
                <div class="accordion-inner">
					<?php
					if (!empty($empleado['Anexo'])):?>
                        <table cellpadding = "0" cellspacing = "0" class="table table-bordered">
				            <thead>
					            <tr>
						            <th><?php echo 'Id'; ?></th>
									<th><?php echo 'Dir'; ?></th>
									<th><?php echo 'Name'; ?></th>
									<th><?php echo 'Mimetype'; ?></th>
									<th><?php echo 'Filesize'; ?></th>
									<th><?php echo 'Tipo Anexo Id'; ?></th>
									<th><?php echo 'Empleado Id'; ?></th>
									<th><?php echo 'Datos Personales Hijo Id'; ?></th>
						            <th class="actions"><?php echo 'Acciones';?></th>
					            </tr>
				            </thead>
		        			<?php
				        	foreach ($empleado['Anexo'] as $anexo):
				        		?>
								<tr>
									<td><?php echo $anexo['id'];?></td>
									<td><?php echo $anexo['dir'];?></td>
									<td><?php echo $anexo['name'];?></td>
									<td><?php echo $anexo['mimetype'];?></td>
									<td><?php echo $anexo['filesize'];?></td>
									<td><?php echo $anexo['tipo_anexo_id'];?></td>
									<td><?php echo $anexo['empleado_id'];?></td>
									<td><?php echo $anexo['datos_personales_hijo_id'];?></td>
									<td class="actions">
										<?php echo $this->Html->link('Ver', array('controller' => 'anexos', 'action' => 'view', $anexo['id'])); ?>
										<?php echo ' | '. $this->Html->link('Editar', array('controller' => 'anexos', 'action' => 'edit', $anexo['id'])); ?>
										<?php echo ' | '. $this->Form->postLink('Eliminar', array('controller' => 'anexos', 'action' => 'delete', $anexo['id']), null, __('Realmente desea borrar el Id %s?', $anexo['id'])); ?>
									</td>
								</tr><?php
							endforeach; ?>
		                </table><?php
					endif; 
					?>

			        <div style="text-align: right;">
					    <?php echo $this->Html->link('<i class="icon-plus-sign"></i>Nuevo Anexo', array('controller' => 'anexos', 'action' => 'add'),array('escape'=>false,'class'=>'btn'));?>
			        </div>
                    
                </div>
            </div>
		</div>
<div class="accordion-group">
            <div class="accordion-heading">
		        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionrelations" href="#collapseDatosPersonale">
                	<?php printf('Relaciones con %s','Datos Personales');?>
                </a>
            </div>
            <div id="collapseDatosPersonale" class="accordion-body collapse">
                <div class="accordion-inner">
					<?php
					if (!empty($empleado['DatosPersonale'])):?>
                        <table cellpadding = "0" cellspacing = "0" class="table table-bordered">
				            <thead>
					            <tr>
						            <th><?php echo 'Id'; ?></th>
									<th><?php echo 'Empleado Id'; ?></th>
									<th><?php echo 'Nombre'; ?></th>
									<th><?php echo 'Primer Apellido'; ?></th>
									<th><?php echo 'Segundo Apellido'; ?></th>
									<th><?php echo 'Genero'; ?></th>
									<th><?php echo 'Talla'; ?></th>
									<th><?php echo 'Fecha Nacimiento'; ?></th>
									<th><?php echo 'Progenitor'; ?></th>
						            <th class="actions"><?php echo 'Acciones';?></th>
					            </tr>
				            </thead>
		        			<?php
				        	foreach ($empleado['DatosPersonale'] as $datosPersonale):
				        		?>
								<tr>
									<td><?php echo $datosPersonale['id'];?></td>
									<td><?php echo $datosPersonale['empleado_id'];?></td>
									<td><?php echo $datosPersonale['nombre'];?></td>
									<td><?php echo $datosPersonale['primer_apellido'];?></td>
									<td><?php echo $datosPersonale['segundo_apellido'];?></td>
									<td><?php echo $datosPersonale['genero'];?></td>
									<td><?php echo $datosPersonale['talla'];?></td>
									<td><?php echo $datosPersonale['fecha_nacimiento'];?></td>
									<td><?php echo $datosPersonale['progenitor'];?></td>
									<td class="actions">
										<?php echo $this->Html->link('Ver', array('controller' => 'datos_personales', 'action' => 'view', $datosPersonale['id'])); ?>
										<?php echo ' | '. $this->Html->link('Editar', array('controller' => 'datos_personales', 'action' => 'edit', $datosPersonale['id'])); ?>
										<?php echo ' | '. $this->Form->postLink('Eliminar', array('controller' => 'datos_personales', 'action' => 'delete', $datosPersonale['id']), null, __('Realmente desea borrar el Id %s?', $datosPersonale['id'])); ?>
									</td>
								</tr><?php
							endforeach; ?>
		                </table><?php
					endif; 
					?>

			        <div style="text-align: right;">
					    <?php echo $this->Html->link('<i class="icon-plus-sign"></i>Nuevo Datos Personale', array('controller' => 'datos_personales', 'action' => 'add'),array('escape'=>false,'class'=>'btn'));?>
			        </div>
                    
                </div>
            </div>
		</div>
<div class="accordion-group">
            <div class="accordion-heading">
		        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionrelations" href="#collapseDatosPersonalesEmpresa">
                	<?php printf('Relaciones con %s','Datos Personales Empresas');?>
                </a>
            </div>
            <div id="collapseDatosPersonalesEmpresa" class="accordion-body collapse">
                <div class="accordion-inner">
					<?php
					if (!empty($empleado['DatosPersonalesEmpresa'])):?>
                        <table cellpadding = "0" cellspacing = "0" class="table table-bordered">
				            <thead>
					            <tr>
						            <th><?php echo 'Id'; ?></th>
									<th><?php echo 'Empleado Id'; ?></th>
									<th><?php echo 'Puesto Id'; ?></th>
									<th><?php echo 'Fecha Alta Ur'; ?></th>
									<th><?php echo 'Fecha Baja Ur'; ?></th>
									<th><?php echo 'Nivel'; ?></th>
									<th><?php echo 'Sueldo'; ?></th>
									<th><?php echo 'Tipos Nomina Id'; ?></th>
									<th><?php echo 'Jornada Hr'; ?></th>
									<th><?php echo 'Numero Empleado'; ?></th>
									<th><?php echo 'Fecha Ingreso Gobierno'; ?></th>
						            <th class="actions"><?php echo 'Acciones';?></th>
					            </tr>
				            </thead>
		        			<?php
				        	foreach ($empleado['DatosPersonalesEmpresa'] as $datosPersonalesEmpresa):
				        		?>
								<tr>
									<td><?php echo $datosPersonalesEmpresa['id'];?></td>
									<td><?php echo $datosPersonalesEmpresa['empleado_id'];?></td>
									<td><?php echo $datosPersonalesEmpresa['puesto_id'];?></td>
									<td><?php echo $datosPersonalesEmpresa['fecha_alta_ur'];?></td>
									<td><?php echo $datosPersonalesEmpresa['fecha_baja_ur'];?></td>
									<td><?php echo $datosPersonalesEmpresa['nivel'];?></td>
									<td><?php echo $datosPersonalesEmpresa['sueldo'];?></td>
									<td><?php echo $datosPersonalesEmpresa['tipos_nomina_id'];?></td>
									<td><?php echo $datosPersonalesEmpresa['jornada_hr'];?></td>
									<td><?php echo $datosPersonalesEmpresa['numero_empleado'];?></td>
									<td><?php echo $datosPersonalesEmpresa['fecha_ingreso_gobierno'];?></td>
									<td class="actions">
										<?php echo $this->Html->link('Ver', array('controller' => 'datos_personales_empresas', 'action' => 'view', $datosPersonalesEmpresa['id'])); ?>
										<?php echo ' | '. $this->Html->link('Editar', array('controller' => 'datos_personales_empresas', 'action' => 'edit', $datosPersonalesEmpresa['id'])); ?>
										<?php echo ' | '. $this->Form->postLink('Eliminar', array('controller' => 'datos_personales_empresas', 'action' => 'delete', $datosPersonalesEmpresa['id']), null, __('Realmente desea borrar el Id %s?', $datosPersonalesEmpresa['id'])); ?>
									</td>
								</tr><?php
							endforeach; ?>
		                </table><?php
					endif; 
					?>

			        <div style="text-align: right;">
					    <?php echo $this->Html->link('<i class="icon-plus-sign"></i>Nuevo Datos Personales Empresa', array('controller' => 'datos_personales_empresas', 'action' => 'add'),array('escape'=>false,'class'=>'btn'));?>
			        </div>
                    
                </div>
            </div>
		</div>
<div class="accordion-group">
            <div class="accordion-heading">
		        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionrelations" href="#collapseDatosPersonalesHijo">
                	<?php printf('Relaciones con %s','Datos Personales Hijos');?>
                </a>
            </div>
            <div id="collapseDatosPersonalesHijo" class="accordion-body collapse">
                <div class="accordion-inner">
					<?php
					if (!empty($empleado['DatosPersonalesHijo'])):?>
                        <table cellpadding = "0" cellspacing = "0" class="table table-bordered">
				            <thead>
					            <tr>
						            <th><?php echo 'Id'; ?></th>
									<th><?php echo 'Nombre Hijo'; ?></th>
									<th><?php echo 'Primer Apellido Hijo'; ?></th>
									<th><?php echo 'Segundo Apellido Hijo'; ?></th>
									<th><?php echo 'Nivel Academico'; ?></th>
									<th><?php echo 'Empleado Id'; ?></th>
						            <th class="actions"><?php echo 'Acciones';?></th>
					            </tr>
				            </thead>
		        			<?php
				        	foreach ($empleado['DatosPersonalesHijo'] as $datosPersonalesHijo):
				        		?>
								<tr>
									<td><?php echo $datosPersonalesHijo['id'];?></td>
									<td><?php echo $datosPersonalesHijo['nombre_hijo'];?></td>
									<td><?php echo $datosPersonalesHijo['primer_apellido_hijo'];?></td>
									<td><?php echo $datosPersonalesHijo['segundo_apellido_hijo'];?></td>
									<td><?php echo $datosPersonalesHijo['nivel_academico'];?></td>
									<td><?php echo $datosPersonalesHijo['empleado_id'];?></td>
									<td class="actions">
										<?php echo $this->Html->link('Ver', array('controller' => 'datos_personales_hijos', 'action' => 'view', $datosPersonalesHijo['id'])); ?>
										<?php echo ' | '. $this->Html->link('Editar', array('controller' => 'datos_personales_hijos', 'action' => 'edit', $datosPersonalesHijo['id'])); ?>
										<?php echo ' | '. $this->Form->postLink('Eliminar', array('controller' => 'datos_personales_hijos', 'action' => 'delete', $datosPersonalesHijo['id']), null, __('Realmente desea borrar el Id %s?', $datosPersonalesHijo['id'])); ?>
									</td>
								</tr><?php
							endforeach; ?>
		                </table><?php
					endif; 
					?>

			        <div style="text-align: right;">
					    <?php echo $this->Html->link('<i class="icon-plus-sign"></i>Nuevo Datos Personales Hijo', array('controller' => 'datos_personales_hijos', 'action' => 'add'),array('escape'=>false,'class'=>'btn'));?>
			        </div>
                    
                </div>
            </div>
		</div>
<div class="accordion-group">
            <div class="accordion-heading">
		        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionrelations" href="#collapsePrenominaCalculo">
                	<?php printf('Relaciones con %s','Prenomina Calculos');?>
                </a>
            </div>
            <div id="collapsePrenominaCalculo" class="accordion-body collapse">
                <div class="accordion-inner">
					<?php
					if (!empty($empleado['PrenominaCalculo'])):?>
                        <table cellpadding = "0" cellspacing = "0" class="table table-bordered">
				            <thead>
					            <tr>
						            <th><?php echo 'Id'; ?></th>
									<th><?php echo 'Empleado Id'; ?></th>
									<th><?php echo 'Prenomina Id'; ?></th>
									<th><?php echo 'Sueldo Neto'; ?></th>
									<th><?php echo 'Deducciones'; ?></th>
									<th><?php echo 'Percepciones'; ?></th>
									<th><?php echo 'Otros'; ?></th>
									<th><?php echo 'Total'; ?></th>
						            <th class="actions"><?php echo 'Acciones';?></th>
					            </tr>
				            </thead>
		        			<?php
				        	foreach ($empleado['PrenominaCalculo'] as $prenominaCalculo):
				        		?>
								<tr>
									<td><?php echo $prenominaCalculo['id'];?></td>
									<td><?php echo $prenominaCalculo['empleado_id'];?></td>
									<td><?php echo $prenominaCalculo['prenomina_id'];?></td>
									<td><?php echo $prenominaCalculo['sueldo_neto'];?></td>
									<td><?php echo $prenominaCalculo['deducciones'];?></td>
									<td><?php echo $prenominaCalculo['percepciones'];?></td>
									<td><?php echo $prenominaCalculo['otros'];?></td>
									<td><?php echo $prenominaCalculo['total'];?></td>
									<td class="actions">
										<?php echo $this->Html->link('Ver', array('controller' => 'prenomina_calculos', 'action' => 'view', $prenominaCalculo['id'])); ?>
										<?php echo ' | '. $this->Html->link('Editar', array('controller' => 'prenomina_calculos', 'action' => 'edit', $prenominaCalculo['id'])); ?>
										<?php echo ' | '. $this->Form->postLink('Eliminar', array('controller' => 'prenomina_calculos', 'action' => 'delete', $prenominaCalculo['id']), null, __('Realmente desea borrar el Id %s?', $prenominaCalculo['id'])); ?>
									</td>
								</tr><?php
							endforeach; ?>
		                </table><?php
					endif; 
					?>

			        <div style="text-align: right;">
					    <?php echo $this->Html->link('<i class="icon-plus-sign"></i>Nuevo Prenomina Calculo', array('controller' => 'prenomina_calculos', 'action' => 'add'),array('escape'=>false,'class'=>'btn'));?>
			        </div>
                    
                </div>
            </div>
		</div>
<div class="accordion-group">
            <div class="accordion-heading">
		        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionrelations" href="#collapseDeduccione">
                	<?php printf('Relaciones con %s','Deducciones');?>
                </a>
            </div>
            <div id="collapseDeduccione" class="accordion-body collapse">
                <div class="accordion-inner">
					<?php
					if (!empty($empleado['Deduccione'])):?>
                        <table cellpadding = "0" cellspacing = "0" class="table table-bordered">
				            <thead>
					            <tr>
						            <th><?php echo 'Id'; ?></th>
									<th><?php echo 'Descripcion'; ?></th>
									<th><?php echo 'Formula'; ?></th>
						            <th class="actions"><?php echo 'Acciones';?></th>
					            </tr>
				            </thead>
		        			<?php
				        	foreach ($empleado['Deduccione'] as $deduccione):
				        		?>
								<tr>
									<td><?php echo $deduccione['id'];?></td>
									<td><?php echo $deduccione['descripcion'];?></td>
									<td><?php echo $deduccione['formula'];?></td>
									<td class="actions">
										<?php echo $this->Html->link('Ver', array('controller' => 'deducciones', 'action' => 'view', $deduccione['id'])); ?>
										<?php echo ' | '. $this->Html->link('Editar', array('controller' => 'deducciones', 'action' => 'edit', $deduccione['id'])); ?>
										<?php echo ' | '. $this->Form->postLink('Eliminar', array('controller' => 'deducciones', 'action' => 'delete', $deduccione['id']), null, __('Realmente desea borrar el Id %s?', $deduccione['id'])); ?>
									</td>
								</tr><?php
							endforeach; ?>
		                </table><?php
					endif; 
					?>

			        <div style="text-align: right;">
					    <?php echo $this->Html->link('<i class="icon-plus-sign"></i>Nuevo Deduccione', array('controller' => 'deducciones', 'action' => 'add'),array('escape'=>false,'class'=>'btn'));?>
			        </div>
                    
                </div>
            </div>
		</div>
<div class="accordion-group">
            <div class="accordion-heading">
		        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionrelations" href="#collapseObligacione">
                	<?php printf('Relaciones con %s','Obligaciones');?>
                </a>
            </div>
            <div id="collapseObligacione" class="accordion-body collapse">
                <div class="accordion-inner">
					<?php
					if (!empty($empleado['Obligacione'])):?>
                        <table cellpadding = "0" cellspacing = "0" class="table table-bordered">
				            <thead>
					            <tr>
						            <th><?php echo 'Id'; ?></th>
									<th><?php echo 'Descripcion'; ?></th>
									<th><?php echo 'Formula'; ?></th>
						            <th class="actions"><?php echo 'Acciones';?></th>
					            </tr>
				            </thead>
		        			<?php
				        	foreach ($empleado['Obligacione'] as $obligacione):
				        		?>
								<tr>
									<td><?php echo $obligacione['id'];?></td>
									<td><?php echo $obligacione['descripcion'];?></td>
									<td><?php echo $obligacione['formula'];?></td>
									<td class="actions">
										<?php echo $this->Html->link('Ver', array('controller' => 'obligaciones', 'action' => 'view', $obligacione['id'])); ?>
										<?php echo ' | '. $this->Html->link('Editar', array('controller' => 'obligaciones', 'action' => 'edit', $obligacione['id'])); ?>
										<?php echo ' | '. $this->Form->postLink('Eliminar', array('controller' => 'obligaciones', 'action' => 'delete', $obligacione['id']), null, __('Realmente desea borrar el Id %s?', $obligacione['id'])); ?>
									</td>
								</tr><?php
							endforeach; ?>
		                </table><?php
					endif; 
					?>

			        <div style="text-align: right;">
					    <?php echo $this->Html->link('<i class="icon-plus-sign"></i>Nuevo Obligacione', array('controller' => 'obligaciones', 'action' => 'add'),array('escape'=>false,'class'=>'btn'));?>
			        </div>
                    
                </div>
            </div>
		</div>
<div class="accordion-group">
            <div class="accordion-heading">
		        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionrelations" href="#collapsePercepcione">
                	<?php printf('Relaciones con %s','Percepciones');?>
                </a>
            </div>
            <div id="collapsePercepcione" class="accordion-body collapse">
                <div class="accordion-inner">
					<?php
					if (!empty($empleado['Percepcione'])):?>
                        <table cellpadding = "0" cellspacing = "0" class="table table-bordered">
				            <thead>
					            <tr>
						            <th><?php echo 'Id'; ?></th>
									<th><?php echo 'Descripcion'; ?></th>
									<th><?php echo 'Formula'; ?></th>
						            <th class="actions"><?php echo 'Acciones';?></th>
					            </tr>
				            </thead>
		        			<?php
				        	foreach ($empleado['Percepcione'] as $percepcione):
				        		?>
								<tr>
									<td><?php echo $percepcione['id'];?></td>
									<td><?php echo $percepcione['descripcion'];?></td>
									<td><?php echo $percepcione['formula'];?></td>
									<td class="actions">
										<?php echo $this->Html->link('Ver', array('controller' => 'percepciones', 'action' => 'view', $percepcione['id'])); ?>
										<?php echo ' | '. $this->Html->link('Editar', array('controller' => 'percepciones', 'action' => 'edit', $percepcione['id'])); ?>
										<?php echo ' | '. $this->Form->postLink('Eliminar', array('controller' => 'percepciones', 'action' => 'delete', $percepcione['id']), null, __('Realmente desea borrar el Id %s?', $percepcione['id'])); ?>
									</td>
								</tr><?php
							endforeach; ?>
		                </table><?php
					endif; 
					?>

			        <div style="text-align: right;">
					    <?php echo $this->Html->link('<i class="icon-plus-sign"></i>Nuevo Percepcione', array('controller' => 'percepciones', 'action' => 'add'),array('escape'=>false,'class'=>'btn'));?>
			        </div>
                    
                </div>
            </div>
		</div>
    </div>
</div>
<div class="clear"></div>