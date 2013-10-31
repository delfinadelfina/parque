<div class="reserves form">
<?php echo $this->Form->create('Reserf'); ?>
	<fieldset>
		<legend><?php echo __('Edit Reserf'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('client_id');
		echo $this->Form->input('tipo_de_reserva');
		echo $this->Form->input('entrada');
		echo $this->Form->input('saida');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Reserf.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Reserf.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Reserves'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>
