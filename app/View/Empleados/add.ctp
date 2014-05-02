<script type="text/javascript">
var statSend = false;
function checkSubmit() 
{   
    if (!statSend) 
    {
        statSend = true;
        document.getElementById('btnGuardar').disabled = true;
        return true;
    } 
    else 
    {
        alert("El formulario ya se esta enviando...");
        return false;
    }
}
</script>
<div class="span3 well" style="text-align: left;">
    <ul class="nav nav-list">			
	    <li class="nav-header">Empleados</li>
		<li><?php echo $this->Html->link('<i class="icon-list-alt"></i>Listado de Empleados', array('action' => 'index'),array('escape'=>false));?></li>
			
		<li class="nav-header">Tipos Empleados</li>
		<li><?php echo $this->Html->link('<i class="icon-list-alt"></i>Listado de Tipos Empleados', array('controller' => 'tipos_empleados', 'action' => 'index'),array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link('<i class="icon-plus-sign"></i>Nuevo Tipos Empleado', array('controller' => 'tipos_empleados', 'action' => 'add'),array('escape'=>false)); ?> </li>

		<li class="nav-header">Anexos</li>
		<li><?php echo $this->Html->link('<i class="icon-list-alt"></i>Listado de Anexos', array('controller' => 'anexos', 'action' => 'index'),array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link('<i class="icon-plus-sign"></i>Nuevo Anexo', array('controller' => 'anexos', 'action' => 'add'),array('escape'=>false)); ?> </li>

		<li class="nav-header">Datos Personales</li>
		<li><?php echo $this->Html->link('<i class="icon-list-alt"></i>Listado de Datos Personales', array('controller' => 'datos_personales', 'action' => 'index'),array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link('<i class="icon-plus-sign"></i>Nuevo Datos Personale', array('controller' => 'datos_personales', 'action' => 'add'),array('escape'=>false)); ?> </li>

		<li class="nav-header">Datos Personales Empresas</li>
		<li><?php echo $this->Html->link('<i class="icon-list-alt"></i>Listado de Datos Personales Empresas', array('controller' => 'datos_personales_empresas', 'action' => 'index'),array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link('<i class="icon-plus-sign"></i>Nuevo Datos Personales Empresa', array('controller' => 'datos_personales_empresas', 'action' => 'add'),array('escape'=>false)); ?> </li>

		<li class="nav-header">Datos Personales Hijos</li>
		<li><?php echo $this->Html->link('<i class="icon-list-alt"></i>Listado de Datos Personales Hijos', array('controller' => 'datos_personales_hijos', 'action' => 'index'),array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link('<i class="icon-plus-sign"></i>Nuevo Datos Personales Hijo', array('controller' => 'datos_personales_hijos', 'action' => 'add'),array('escape'=>false)); ?> </li>

		<li class="nav-header">Prenomina Calculos</li>
		<li><?php echo $this->Html->link('<i class="icon-list-alt"></i>Listado de Prenomina Calculos', array('controller' => 'prenomina_calculos', 'action' => 'index'),array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link('<i class="icon-plus-sign"></i>Nuevo Prenomina Calculo', array('controller' => 'prenomina_calculos', 'action' => 'add'),array('escape'=>false)); ?> </li>

		<li class="nav-header">Deducciones</li>
		<li><?php echo $this->Html->link('<i class="icon-list-alt"></i>Listado de Deducciones', array('controller' => 'deducciones', 'action' => 'index'),array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link('<i class="icon-plus-sign"></i>Nuevo Deduccione', array('controller' => 'deducciones', 'action' => 'add'),array('escape'=>false)); ?> </li>

		<li class="nav-header">Obligaciones</li>
		<li><?php echo $this->Html->link('<i class="icon-list-alt"></i>Listado de Obligaciones', array('controller' => 'obligaciones', 'action' => 'index'),array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link('<i class="icon-plus-sign"></i>Nuevo Obligacione', array('controller' => 'obligaciones', 'action' => 'add'),array('escape'=>false)); ?> </li>

		<li class="nav-header">Percepciones</li>
		<li><?php echo $this->Html->link('<i class="icon-list-alt"></i>Listado de Percepciones', array('controller' => 'percepciones', 'action' => 'index'),array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link('<i class="icon-plus-sign"></i>Nuevo Percepcione', array('controller' => 'percepciones', 'action' => 'add'),array('escape'=>false)); ?> </li>
    </ul>
</div>

<div class="span6" style="text-align: left;">
    <h1><?php printf('Add %s','Empleado'); ?></h1>
    <div class="empleados form"><?php
		echo $this->Form->create('Empleado',array('onsubmit'=>'return checkSubmit();','class'=>'form-horizontal'));?>
	        <fieldset>
	 		    <legend><?php printf('Empleado'); ?></legend>
	            <?php
				echo $this->Form->input('usuario',array('between'=>'<div class="controls">','after'=>'</div>','label'=>array('class'=>'control-label'),'div'=>array('class'=>'control-group')));
				echo $this->Form->input('curp',array('between'=>'<div class="controls">','after'=>'</div>','label'=>array('class'=>'control-label'),'div'=>array('class'=>'control-group')));
				echo $this->Form->input('password',array('between'=>'<div class="controls">','after'=>'</div>','label'=>array('class'=>'control-label'),'div'=>array('class'=>'control-group')));
				echo $this->Form->input('tipos_empleado_id',array('between'=>'<div class="controls">','after'=>'</div>','label'=>array('class'=>'control-label'),'div'=>array('class'=>'control-group')));
				echo $this->Form->input('numero_seguro_social',array('between'=>'<div class="controls">','after'=>'</div>','label'=>array('class'=>'control-label'),'div'=>array('class'=>'control-group')));
				
				?>
		    </fieldset><?php
			echo $this->Form->submit('Guardar',array('id'=>'btnGuardar','class'=>'btn btn-primary'));
		echo $this->Form->end();?>
	</div>
</div>
<div class="clear"></div>