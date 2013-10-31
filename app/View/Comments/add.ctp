<div class="comments form">
<?php echo $this->Form->create('Comment'); ?>
	<fieldset>
		<legend><?php echo __('Adicionar Comentario'); ?></legend>
	
                <?php echo $this->Form->input('type_nome');?>
          
		 <?php echo $this->Form->input('descricao');?>
		
	
	</fieldset>
<div class="button">
             
                 <table>   
                 <tr>
                     <td>  <?php echo $this->Form->end(__('registar'))?> </td>
                     <td>  <?php echo $this->Form->reset(__('cancelar')); ?> </td>
                 </tr>
                 </table>
             </div>
</div>
<div class="actions">
	<h3><?php echo __('Acoes'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Comentarios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Tipos de comenterio'), array('controller' => 'types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo tipo de comentarioar'), array('controller' => 'types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Cliente'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>
