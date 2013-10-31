<div class="payments form">
<?php echo $this->Form->create('Payment'); ?>
	<fieldset>
		<legend><?php echo __('Edit Payment'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('tipo_de_pagamento');
		echo $this->Form->input('data_de_pagamento');
		echo $this->Form->input('multa');
		echo $this->Form->input('desconto');
		echo $this->Form->input('vehicle_id');
		echo $this->Form->input('client_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Payment.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Payment.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Payments'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Vehicles'), array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle'), array('controller' => 'vehicles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Duties'), array('controller' => 'duties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Duty'), array('controller' => 'duties', 'action' => 'add')); ?> </li>
	</ul>
</div>
