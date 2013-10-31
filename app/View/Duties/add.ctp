<div class="duties form">
<?php echo $this->Form->create('Duty'); ?>
	<fieldset>
		<legend><?php echo __('Add Duty'); ?></legend>
	<?php
		echo $this->Form->input('valor');
		echo $this->Form->input('type_vehicle_id');
		echo $this->Form->input('payment_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Duties'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Type Vehicles'), array('controller' => 'type_vehicles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type Vehicle'), array('controller' => 'type_vehicles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Payments'), array('controller' => 'payments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment'), array('controller' => 'payments', 'action' => 'add')); ?> </li>
	</ul>
</div>
