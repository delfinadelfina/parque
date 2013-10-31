<div class="comments form">
<?php echo $this->Form->create('Comment'); ?>
	<fieldset>
		<legend><?php echo __('Edit Comment'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('type_id');
		echo $this->Form->input('descricao');
		echo $this->Form->input('data');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Apagar'), array('action' => 'delete', $this->Form->value('Comment.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Comment.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Comentarios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Tipos de Comentarios'), array('controller' => 'types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Tipo de Comentario'), array('controller' => 'types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Clientes'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Cliente'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>
