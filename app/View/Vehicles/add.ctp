<div class="vehicles form">
<?php echo $this->Form->create('Vehicle'); ?>
	<fieldset>
		<legend><?php echo __('Adicionar viatura'); ?></legend>
	<?php
		echo $this->Form->input('matricula');
		echo $this->Form->input('cor');
		echo $this->Form->input('numero_de_lugares');
		echo $this->Form->input('vehicle_id');
		echo $this->Form->input('Type');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Viaturas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Viaturas'), array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Viatura'), array('controller' => 'vehicles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Espaco'), array('controller' => 'cells', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Espaco'), array('controller' => 'cells', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Pagamentos'), array('controller' => 'payments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Pagamento'), array('controller' => 'payments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Comentarios'), array('controller' => 'types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar comentario'), array('controller' => 'types', 'action' => 'add')); ?> </li>
	</ul>
</div>
