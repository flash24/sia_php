<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2009, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2009, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.console.libs.templates.views
 * @since         CakePHP(tm) v 1.2.0.5234
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
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
	    <li class="nav-header"><?php echo $pluralHumanName; ?></li>
		<?php if (strpos($action, 'add') === false): ?>
<li><?php echo "<?php echo \$this->Form->postLink('<i class=\"icon-remove\"></i>Eliminar', array('action' => 'delete', \$this->Form->value('{$modelClass}.{$primaryKey}')), array('escape'=>false), __('Realmente desea eliminar el Id %s?', \$this->Form->value('{$modelClass}.{$primaryKey}'))); ?>"; ?></li>
        <?php endif;?>
<li><?php echo "<?php echo \$this->Html->link('<i class=\"icon-list-alt\"></i>Listado de {$pluralHumanName}', array('action' => 'index'),array('escape'=>false));?>";?></li>
			<?php
			$done = array();
			foreach ($associations as $type => $data) {							
				foreach ($data as $alias => $details) {								
					echo "\n\t\t<li class=\"nav-header\">".Inflector::humanize($details['controller'])."</li>";
					if ($details['controller'] != $this->name && !in_array($details['controller'], $done)) {
						echo "\n\t\t<li><?php echo \$this->Html->link('<i class=\"icon-list-alt\"></i>Listado de ".Inflector::humanize($details['controller'])."', array('controller' => '{$details['controller']}', 'action' => 'index'),array('escape'=>false)); ?> </li>\n";
						echo "\t\t<li><?php echo \$this->Html->link('<i class=\"icon-plus-sign\"></i>Nuevo " . Inflector::humanize(Inflector::underscore($alias)) . "', array('controller' => '{$details['controller']}', 'action' => 'add'),array('escape'=>false)); ?> </li>\n";
						$done[] = $details['controller'];
					}
				}							
			}
			?>
    </ul>
</div>

<div class="span6" style="text-align: left;">
    <h1><?php echo "<?php printf('" . Inflector::humanize($action) . " %s','{$singularHumanName}'); ?>";?></h1>
    <div class="<?php echo $pluralVar;?> form"><?php echo "<?php\n\t\techo \$this->Form->create('{$modelClass}',array('onsubmit'=>'return checkSubmit();','class'=>'form-horizontal'));?>\n";?>
	        <fieldset>
	 		    <legend><?php echo "<?php printf('{$singularHumanName}'); ?>";?></legend>
	            <?php
			    echo "<?php\n";
			    foreach ($fields as $field) {
				    if (strpos($action, 'add') !== false && $field == $primaryKey) {
					    continue;
				    } elseif (!in_array($field, array('created', 'modified', 'updated'))) {
					    echo "\t\t\t\techo \$this->Form->input('{$field}',array('between'=>'<div class=\"controls\">','after'=>'</div>','label'=>array('class'=>'control-label'),'div'=>array('class'=>'control-group')));\n";
				    }
			    }
			    if (!empty($associations['hasAndBelongsToMany'])) {
				    foreach ($associations['hasAndBelongsToMany'] as $assocName => $assocData) {
					    echo "\t\t\t\techo \$this->Form->input('{$assocName}',array('between'=>'<div class=\"controls\">','after'=>'</div>','label'=>array('class'=>'control-label'),'div'=>array('class'=>'control-group')));\n";
				    }
			    }
			    echo "\t\t\t\t?>\n";
	            ?>
		    </fieldset><?php echo "<?php\n\t\t\techo \$this->Form->submit('Guardar',array('id'=>'btnGuardar','class'=>'btn btn-primary'));\n\t\techo \$this->Form->end();?>\n";
	?>
	</div>
</div>
<div class="clear"></div>