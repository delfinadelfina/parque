<div class="typeVehicles form">
<?php echo $this->Form->create('TypeVehicle'); ?>
	<fieldset>
		<legend><?php echo __('Edit Type Vehicle'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('modelo');
		echo $this->Form->input('marca');
		echo $this->Form->input('matricula');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('TypeVehicle.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('TypeVehicle.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Type Vehicles'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Duties'), array('controller' => 'duties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Duty'), array('controller' => 'duties', 'action' => 'add')); ?> </li>
	</ul>
</div>
