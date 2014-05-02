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
<div class="span12" style="text-align: left;">
    <h1><?php echo "<?php echo '{$pluralHumanName}';?>";?></h1> 
</div>		
<div class="span12" style="text-align: right;">
    <div class="btn-group">
        <?php echo "<?php echo \$this->Html->link(__('<i class=\"icon-plus-sign\"></i>Nuevo Registro'), array('action' => 'add'),array('class'=>'btn','escape'=>false)) ?>\n"; ?>
    </div>
</div>
<?php
$done = array();
foreach ($associations as $type => $data) 
{							
	foreach ($data as $alias => $details) 
    {								
        //echo "\n\t\t\t<h5>".Inflector::humanize($details['controller'])."</h5>";
		echo "\n<div class=\"span12\" style=\"text-align: right;\">";
            echo "\n\t<div class=\"btn-group\">";
                if ($details['controller'] != $this->name && !in_array($details['controller'], $done)) 
                {
                    echo "\n\t\t<?php echo \$this->Html->link(__('<i class=\"icon-list-alt\"></i>Listado de ".Inflector::humanize($details['controller'])."'), array('controller'=>'{$details['controller']}','action' => 'index'),array('class'=>'btn','escape'=>false)) ?>";
                    echo "\n\t\t<?php echo \$this->Html->link(__('<i class=\"icon-plus-sign\"></i>Nuevo ".Inflector::humanize(Inflector::underscore($alias))."'), array('controller'=>'{$details['controller']}','action' => 'add'),array('class'=>'btn','escape'=>false)) ?>";
                    $done[] = $details['controller'];
                }
            echo "\n\t</div>";
        echo "\n</div>\n";
	}							
}
?>

<div class="span12" style="margin-top: 10px;">
	<table cellpadding="0" cellspacing="0" class="table table-bordered">
        <thead>
            <tr>
                <?php
                foreach($fields as $field) 
                { 
                    echo "<th><?php echo \$this->Paginator->sort('{$field}'); ?></th>\n\t\t\t\t";
                }   
                ?>
<th class="actions">Acciones</th>             
            </tr>
        </thead>
        <?php 
	    echo "<?php
	    \$i = 0;
	    foreach (\${$pluralVar} as \${$singularVar})
        {
	        ?>\n";
	        echo "\t\t\t<tr>\n";
		        foreach ($fields as $field) {
			        $isKey = false;
			        if (!empty($associations['belongsTo'])) {
				        foreach ($associations['belongsTo'] as $alias => $details) {
					        if ($field === $details['foreignKey']) {
						        $isKey = true;
						        echo "\t\t\t\t<td><?php echo \$this->Html->link(\${$singularVar}['{$alias}']['{$details['displayField']}'], array('controller' => '{$details['controller']}', 'action' => 'view', \${$singularVar}['{$alias}']['{$details['primaryKey']}'])); ?></td>\n";
						        break;
					        }
				        }
			        }
			        if ($isKey !== true) {
				        echo "\t\t\t\t<td><?php echo \${$singularVar}['{$modelClass}']['{$field}']; ?>&nbsp;</td>\n";
			        }
		        }

		        echo "\t\t\t\t<td class=\"actions\">\n";
                echo "\t\t\t\t\t<div class=\"btn-group\">\n";
		        echo "\t\t\t\t\t\t<?php \n\t\t\t\t\t\techo \$this->Html->link('<i class=\"icon-eye-open\"></i>Ver', array('action' => 'view', \${$singularVar}['{$modelClass}']['{$primaryKey}']),array('class'=>'btn','escape'=>false));\n";
	 	        echo "\t\t\t\t\t\techo \$this->Html->link('<i class=\"icon-pencil\"></i>Editar', array('action' => 'edit', \${$singularVar}['{$modelClass}']['{$primaryKey}']),array('class'=>'btn','escape'=>false));\n";
	 	        echo "\t\t\t\t\t\techo \$this->Form->postLink('<i class=\"icon-remove\"></i>Eliminar', array('action' => 'delete', \${$singularVar}['{$modelClass}']['{$primaryKey}']), array('escape'=>false,'class'=>'btn btn-danger'), __('Realmente desea borrar el registro con Id %s?', \${$singularVar}['{$modelClass}']['{$primaryKey}'])); \n\t\t\t\t\t\t?>\n";
		        echo "\t\t\t\t\t</div>\n";
                echo "\t\t\t\t</td>\n";
	        echo "\t\t\t</tr><?php\n";

	    echo "\t\t} ?>\n";
	    
	    //// TABLE FOOTER
        /*echo "<?php echo '<tfoot class=\'dark\'>'.\$tableHeaders.'</tfoot>'; ?>";*/
        ?>
    </table>
    
    <?php //// PAGINATION ?>
      
	<p>
	    <?php 
        echo "<?php
	    echo \$this->Paginator->counter
                                    (
                                        array
                                            (
	                                            'format' =>'P&aacute;gina %page% de %pages%, mostrando %current% registros de un total de %count%'
	                                        )
                                    );
	    ?>\n";?>
	</p>

	<div class="pagination">
        <ul>
        <?php echo "\t<?php echo \$this->Paginator->prev('<span><<</span>', array('tag'=>'li','escape'=>false), null, array('tag'=>'li','class' => 'disabled','escape'=>false));?>\n";?>
        <?php echo "\t<?php echo \$this->Paginator->numbers(array('separator' => '','escape'=>false,'tag'=>'li'));?>"?> 
        <?php echo "\t<?php echo \$this->Paginator->next('<span>>></span>', array('tag'=>'li','escape'=>false), null, array('tag'=>'li','class' => 'disabled','escape'=>false));?>\n";?>
        </ul>
	</div>
		
</div>
<div class="clear"></div>