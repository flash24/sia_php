<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.console.libs.templates.views
 * @since         CakePHP(tm) v 1.2.0.5234
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<div class="span3 well" style="text-align: left;">
    <ul class="nav nav-list">
	    <li class="nav-header"><?php echo $pluralHumanName; ?></li>
		<?php echo "<li><?php echo \$this->Html->link('<i class=\"icon-pencil\"></i>Editar {$singularHumanName}', array('action' => 'edit', \${$singularVar}['{$modelClass}']['{$primaryKey}']),array('escape'=>false)); ?> </li>\n";
			echo "\t\t<li><?php echo \$this->Form->postLink('<i class=\"icon-remove\"></i>Eliminar " . $singularHumanName . "', array('action' => 'delete', \${$singularVar}['{$modelClass}']['{$primaryKey}']), array('escape'=>false), __('Realmente desea eliminar el registro con Id %s?', \${$singularVar}['{$modelClass}']['{$primaryKey}'])); ?> </li>\n";
			echo "\t\t<li><?php echo \$this->Html->link('<i class=\"icon-list-alt\"></i>Lista de {$pluralHumanName}', array('action' => 'index'),array('escape'=>false)); ?> </li>\n";
			echo "\t\t<li><?php echo \$this->Html->link('<i class=\"icon-plus-sign\"></i>Nuevo {$singularHumanName}', array('action' => 'add'),array('escape'=>false)); ?> </li>\n";
			$done = array();
			foreach ($associations as $type => $data) {
				foreach ($data as $alias => $details) {
					echo "\n\t\t<li class=\"nav-header\">".Inflector::humanize($details['controller'])."</li>\n";
					if ($details['controller'] != $this->name && !in_array($details['controller'], $done)) {
						echo "\t\t<li><?php echo \$this->Html->link('<li class=\"icon-list-alt\"></li>Lista de " . Inflector::humanize($details['controller']) . "', array('controller' => '{$details['controller']}', 'action' => 'index'),array('escape'=>false)); ?> </li>\n";
						echo "\t\t<li><?php echo \$this->Html->link('<i class=\"icon-plus-sign\"></i>Nuevo " . Inflector::humanize(Inflector::underscore($alias)) . "', array('controller' => '{$details['controller']}', 'action' => 'add'),array('escape'=>false)); ?> </li>\n";
						$done[] = $details['controller'];
					}
				}
			}
		?>
    </ul>
</div>

<div class="span8" style="text-align: left;">
	<h2><?php echo "<?php  echo '{$singularHumanName}';?>";?></h2>
	<dl class="dl-horizontal">
	<?php
	foreach ($fields as $field) {
		$isKey = false;
		if (!empty($associations['belongsTo'])) {
			foreach ($associations['belongsTo'] as $alias => $details) {
				if ($field === $details['foreignKey']) {
					$isKey = true;
					echo "\t\t<dt><?php echo '" . Inflector::humanize(Inflector::underscore($alias)) . "'; ?></dt>\n";
					echo "\t\t<dd>\n\t\t\t<?php echo \$this->Html->link(\${$singularVar}['{$alias}']['{$details['displayField']}'], array('controller' => '{$details['controller']}', 'action' => 'view', \${$singularVar}['{$alias}']['{$details['primaryKey']}'])); ?>\n\t\t\t&nbsp;\n\t\t</dd>\n";
					break;
				}
			}
		}
		if ($isKey !== true) {
		    echo "\t\t<dt><?php echo '" . Inflector::humanize($field) . "'; ?></dt>\n";
			echo "\t\t<dd>\n\t\t\t<?php echo \${$singularVar}['{$modelClass}']['{$field}']; ?>\n\t\t\t&nbsp;\n\t\t</dd>\n";
		}
	}
	?>
	</dl>

<?php 
if((!empty($associations['hasOne'])) || (!empty($associations['hasMany'])) || (!empty($associations['hasAndBelongsToMany']))) 
{?>
    <div class="accordion" id="accordionrelations">
		<?php
		if (!empty($associations['hasOne'])) 
        {
			foreach ($associations['hasOne'] as $alias => $details): ?>
		<div class="related">
		    <h3><?php echo "<?php printf('Related %s','" . Inflector::humanize($details['controller']) . "');?>";?></h3>
			<?php echo "<?php if (!empty(\${$singularVar}['{$alias}'])):?>\n";?>
				<dl><?php echo "\t<?php \$i = 0; \$class = ' class=\"altrow\"';?>\n";?>
			<?php
					foreach ($details['fields'] as $field) {
						echo "\t\t<dt<?php if (\$i % 2 == 0) echo \$class;?>><?php echo '" . Inflector::humanize($field) . "';?></dt>\n";
						echo "\t\t<dd<?php if (\$i++ % 2 == 0) echo \$class;?>>\n\t<?php echo \${$singularVar}['{$alias}']['{$field}'];?>\n&nbsp;</dd>\n";
					}
			?>
				</dl>
			<?php echo "<?php endif; ?>\n";?>
				<div class="actions">
					<ul>
						<li><?php echo "<?php echo \$this->Html->link(sprintf('Edit %s','" . Inflector::humanize(Inflector::underscore($alias)) . "'), array('controller' => '{$details['controller']}', 'action' => 'edit', \${$singularVar}['{$alias}']['{$details['primaryKey']}'])); ?></li>\n";?>
					</ul>
				</div>
			</div>
			<?php
			endforeach;
        }
		if (empty($associations['hasMany'])) {
			$associations['hasMany'] = array();
		}
		if (empty($associations['hasAndBelongsToMany'])) {
			$associations['hasAndBelongsToMany'] = array();
		}
		$relations = array_merge($associations['hasMany'], $associations['hasAndBelongsToMany']);
		$i = 0;
		foreach ($relations as $alias => $details):
			$otherSingularVar = Inflector::variable($alias);
			$otherPluralHumanName = Inflector::humanize($details['controller']);
			?>
<div class="accordion-group">
            <div class="accordion-heading">
		        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionrelations" href="#collapse<?php echo $alias; ?>">
                <?php echo "\t<?php printf('Relaciones con %s','{$otherPluralHumanName}');?>\n";?>
                </a>
            </div>
            <div id="collapse<?php echo $alias; ?>" class="accordion-body collapse">
                <div class="accordion-inner">
			<?php echo "\t\t<?php\n\t\t\t\t\tif (!empty(\${$singularVar}['{$alias}'])):?>\n";?>
                        <table cellpadding = "0" cellspacing = "0" class="table table-bordered">
				            <thead>
					            <tr>
						            <?php
                                    $variableContador = 0;
							        foreach ($details['fields'] as $field) 
                                    {
                                        if($variableContador == 0)
                                        {
                                echo "<th><?php echo '" . Inflector::humanize($field) . "'; ?></th>\n";
                                            $variableContador++;
                                        }
                                        else
                                        {
                                echo "\t\t\t\t\t\t\t\t\t<th><?php echo '" . Inflector::humanize($field) . "'; ?></th>\n";
                                        }
							        }
						            ?>
						            <th class="actions"><?php echo "<?php echo 'Acciones';?>";?></th>
					            </tr>
				            </thead>
		        <?php
		        echo "\t\t\t<?php
				        \tforeach (\${$singularVar}['{$alias}'] as \${$otherSingularVar}):
				        \t\t?>\n";
				        echo "\t\t\t\t\t\t\t\t<tr>\n";

						        foreach ($details['fields'] as $field) {
							        echo "\t\t\t\t\t\t\t\t\t<td><?php echo \${$otherSingularVar}['{$field}'];?></td>\n";
						        }

						        echo "\t\t\t\t\t\t\t\t\t<td class=\"actions\">\n";
						        echo "\t\t\t\t\t\t\t\t\t\t<?php echo \$this->Html->link('Ver', array('controller' => '{$details['controller']}', 'action' => 'view', \${$otherSingularVar}['{$details['primaryKey']}'])); ?>\n";
						        echo "\t\t\t\t\t\t\t\t\t\t<?php echo ' | '. \$this->Html->link('Editar', array('controller' => '{$details['controller']}', 'action' => 'edit', \${$otherSingularVar}['{$details['primaryKey']}'])); ?>\n";
						        echo "\t\t\t\t\t\t\t\t\t\t<?php echo ' | '. \$this->Form->postLink('Eliminar', array('controller' => '{$details['controller']}', 'action' => 'delete', \${$otherSingularVar}['{$details['primaryKey']}']), null, __('Realmente desea borrar el Id %s?', \${$otherSingularVar}['{$details['primaryKey']}'])); ?>\n";
						        echo "\t\t\t\t\t\t\t\t\t</td>\n";
					        echo "\t\t\t\t\t\t\t\t</tr>";echo "<?php\n\t\t\t\t\t\t\tendforeach; ?>\n";
		        ?>
		                </table><?php echo "<?php\n\t\t\t\t\tendif; \n\t\t\t\t\t?>\n\n";?>
			        <div style="text-align: right;">
					    <?php echo "<?php echo \$this->Html->link('<i class=\"icon-plus-sign\"></i>Nuevo " . Inflector::humanize(Inflector::underscore($alias)) . "', array('controller' => '{$details['controller']}', 'action' => 'add'),array('escape'=>false,'class'=>'btn'));?>\n";?>
			        </div>
                    
                </div>
            </div>
		</div>
<?php endforeach;?>    </div><?php 
}?>

</div>
<div class="clear"></div>