<div class="span12" style="text-align: left;">
    <h1><?php echo 'Empleados';?></h1> 
</div>		
<div class="span12" style="text-align: right;">
    <div class="btn-group">
        <?php echo $this->Html->link(__('<i class="icon-plus-sign"></i>Nuevo Registro'), array('action' => 'add'),array('class'=>'btn','escape'=>false)) ?>
    </div>
</div>

<div class="span12" style="text-align: right;">
	<div class="btn-group">
		<?php echo $this->Html->link(__('<i class="icon-list-alt"></i>Listado de Tipos Empleados'), array('controller'=>'tipos_empleados','action' => 'index'),array('class'=>'btn','escape'=>false)) ?>
		<?php echo $this->Html->link(__('<i class="icon-plus-sign"></i>Nuevo Tipos Empleado'), array('controller'=>'tipos_empleados','action' => 'add'),array('class'=>'btn','escape'=>false)) ?>
	</div>
</div>

<div class="span12" style="text-align: right;">
	<div class="btn-group">
		<?php echo $this->Html->link(__('<i class="icon-list-alt"></i>Listado de Anexos'), array('controller'=>'anexos','action' => 'index'),array('class'=>'btn','escape'=>false)) ?>
		<?php echo $this->Html->link(__('<i class="icon-plus-sign"></i>Nuevo Anexo'), array('controller'=>'anexos','action' => 'add'),array('class'=>'btn','escape'=>false)) ?>
	</div>
</div>

<div class="span12" style="text-align: right;">
	<div class="btn-group">
		<?php echo $this->Html->link(__('<i class="icon-list-alt"></i>Listado de Datos Personales'), array('controller'=>'datos_personales','action' => 'index'),array('class'=>'btn','escape'=>false)) ?>
		<?php echo $this->Html->link(__('<i class="icon-plus-sign"></i>Nuevo Datos Personale'), array('controller'=>'datos_personales','action' => 'add'),array('class'=>'btn','escape'=>false)) ?>
	</div>
</div>

<div class="span12" style="text-align: right;">
	<div class="btn-group">
		<?php echo $this->Html->link(__('<i class="icon-list-alt"></i>Listado de Datos Personales Empresas'), array('controller'=>'datos_personales_empresas','action' => 'index'),array('class'=>'btn','escape'=>false)) ?>
		<?php echo $this->Html->link(__('<i class="icon-plus-sign"></i>Nuevo Datos Personales Empresa'), array('controller'=>'datos_personales_empresas','action' => 'add'),array('class'=>'btn','escape'=>false)) ?>
	</div>
</div>

<div class="span12" style="text-align: right;">
	<div class="btn-group">
		<?php echo $this->Html->link(__('<i class="icon-list-alt"></i>Listado de Datos Personales Hijos'), array('controller'=>'datos_personales_hijos','action' => 'index'),array('class'=>'btn','escape'=>false)) ?>
		<?php echo $this->Html->link(__('<i class="icon-plus-sign"></i>Nuevo Datos Personales Hijo'), array('controller'=>'datos_personales_hijos','action' => 'add'),array('class'=>'btn','escape'=>false)) ?>
	</div>
</div>

<div class="span12" style="text-align: right;">
	<div class="btn-group">
		<?php echo $this->Html->link(__('<i class="icon-list-alt"></i>Listado de Prenomina Calculos'), array('controller'=>'prenomina_calculos','action' => 'index'),array('class'=>'btn','escape'=>false)) ?>
		<?php echo $this->Html->link(__('<i class="icon-plus-sign"></i>Nuevo Prenomina Calculo'), array('controller'=>'prenomina_calculos','action' => 'add'),array('class'=>'btn','escape'=>false)) ?>
	</div>
</div>

<div class="span12" style="text-align: right;">
	<div class="btn-group">
		<?php echo $this->Html->link(__('<i class="icon-list-alt"></i>Listado de Deducciones'), array('controller'=>'deducciones','action' => 'index'),array('class'=>'btn','escape'=>false)) ?>
		<?php echo $this->Html->link(__('<i class="icon-plus-sign"></i>Nuevo Deduccione'), array('controller'=>'deducciones','action' => 'add'),array('class'=>'btn','escape'=>false)) ?>
	</div>
</div>

<div class="span12" style="text-align: right;">
	<div class="btn-group">
		<?php echo $this->Html->link(__('<i class="icon-list-alt"></i>Listado de Obligaciones'), array('controller'=>'obligaciones','action' => 'index'),array('class'=>'btn','escape'=>false)) ?>
		<?php echo $this->Html->link(__('<i class="icon-plus-sign"></i>Nuevo Obligacione'), array('controller'=>'obligaciones','action' => 'add'),array('class'=>'btn','escape'=>false)) ?>
	</div>
</div>

<div class="span12" style="text-align: right;">
	<div class="btn-group">
		<?php echo $this->Html->link(__('<i class="icon-list-alt"></i>Listado de Percepciones'), array('controller'=>'percepciones','action' => 'index'),array('class'=>'btn','escape'=>false)) ?>
		<?php echo $this->Html->link(__('<i class="icon-plus-sign"></i>Nuevo Percepcione'), array('controller'=>'percepciones','action' => 'add'),array('class'=>'btn','escape'=>false)) ?>
	</div>
</div>

<div class="span12" style="margin-top: 10px;">
	<table cellpadding="0" cellspacing="0" class="table table-bordered">
        <thead>
            <tr>
                <th><?php echo $this->Paginator->sort('id'); ?></th>
				<th><?php echo $this->Paginator->sort('usuario'); ?></th>
				<th><?php echo $this->Paginator->sort('curp'); ?></th>
				<th><?php echo $this->Paginator->sort('password'); ?></th>
				<th><?php echo $this->Paginator->sort('tipos_empleado_id'); ?></th>
				<th><?php echo $this->Paginator->sort('numero_seguro_social'); ?></th>
				<th class="actions">Acciones</th>             
            </tr>
        </thead>
        <?php
	    $i = 0;
	    foreach ($empleados as $empleado)
        {
	        ?>
			<tr>
				<td><?php echo $empleado['Empleado']['id']; ?>&nbsp;</td>
				<td><?php echo $empleado['Empleado']['usuario']; ?>&nbsp;</td>
				<td><?php echo $empleado['Empleado']['curp']; ?>&nbsp;</td>
				<td><?php echo $empleado['Empleado']['password']; ?>&nbsp;</td>
				<td><?php echo $this->Html->link($empleado['TiposEmpleado']['nombre_tipo'], array('controller' => 'tipos_empleados', 'action' => 'view', $empleado['TiposEmpleado']['id'])); ?></td>
				<td><?php echo $empleado['Empleado']['numero_seguro_social']; ?>&nbsp;</td>
				<td class="actions">
					<div class="btn-group">
						<?php 
						echo $this->Html->link('<i class="icon-eye-open"></i>Ver', array('action' => 'view', $empleado['Empleado']['id']),array('class'=>'btn','escape'=>false));
						echo $this->Html->link('<i class="icon-pencil"></i>Editar', array('action' => 'edit', $empleado['Empleado']['id']),array('class'=>'btn','escape'=>false));
						echo $this->Form->postLink('<i class="icon-remove"></i>Eliminar', array('action' => 'delete', $empleado['Empleado']['id']), array('escape'=>false,'class'=>'btn btn-danger'), __('Realmente desea borrar el registro con Id %s?', $empleado['Empleado']['id'])); 
						?>
					</div>
				</td>
			</tr><?php
		} ?>
    </table>
    
          
	<p>
	    <?php
	    echo $this->Paginator->counter
                                    (
                                        array
                                            (
	                                            'format' =>'P&aacute;gina %page% de %pages%, mostrando %current% registros de un total de %count%'
	                                        )
                                    );
	    ?>
	</p>

	<div class="pagination">
        <ul>
        	<?php echo $this->Paginator->prev('<span><<</span>', array('tag'=>'li','escape'=>false), null, array('tag'=>'li','class' => 'disabled','escape'=>false));?>
        	<?php echo $this->Paginator->numbers(array('separator' => '','escape'=>false,'tag'=>'li'));?> 
        	<?php echo $this->Paginator->next('<span>>></span>', array('tag'=>'li','escape'=>false), null, array('tag'=>'li','class' => 'disabled','escape'=>false));?>
        </ul>
	</div>
		
</div>
<div class="clear"></div>