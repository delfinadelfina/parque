<div class="duties view">
<h2><?php  echo __('Duty'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($duty['Duty']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valor'); ?></dt>
		<dd>
			<?php echo h($duty['Duty']['valor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type Vehicle'); ?></dt>
		<dd>
			<?php echo $this->Html->link($duty['TypeVehicle']['id'], array('controller' => 'type_vehicles', 'action' => 'view', $duty['TypeVehicle']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payment'); ?></dt>
		<dd>
			<?php echo $this->Html->link($duty['Payment']['id'], array('controller' => 'payments', 'action' => 'view', $duty['Payment']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($duty['Duty']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($duty['Duty']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Duty'), array('action' => 'edit', $duty['Duty']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Duty'), array('action' => 'delete', $duty['Duty']['id']), null, __('Are you sure you want to delete # %s?', $duty['Duty']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Duties'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Duty'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Type Vehicles'), array('controller' => 'type_vehicles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type Vehicle'), array('controller' => 'type_vehicles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Payments'), array('controller' => 'payments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment'), array('controller' => 'payments', 'action' => 'add')); ?> </li>
	</ul>
</div>
