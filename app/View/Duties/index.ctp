<div class="duties index">
	<h2><?php echo __('Duties'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('valor'); ?></th>
			<th><?php echo $this->Paginator->sort('type_vehicle_id'); ?></th>
			<th><?php echo $this->Paginator->sort('payment_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($duties as $duty): ?>
	<tr>
		<td><?php echo h($duty['Duty']['id']); ?>&nbsp;</td>
		<td><?php echo h($duty['Duty']['valor']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($duty['TypeVehicle']['id'], array('controller' => 'type_vehicles', 'action' => 'view', $duty['TypeVehicle']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($duty['Payment']['id'], array('controller' => 'payments', 'action' => 'view', $duty['Payment']['id'])); ?>
		</td>
		<td><?php echo h($duty['Duty']['created']); ?>&nbsp;</td>
		<td><?php echo h($duty['Duty']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $duty['Duty']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $duty['Duty']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $duty['Duty']['id']), null, __('Are you sure you want to delete # %s?', $duty['Duty']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Duty'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Type Vehicles'), array('controller' => 'type_vehicles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type Vehicle'), array('controller' => 'type_vehicles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Payments'), array('controller' => 'payments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment'), array('controller' => 'payments', 'action' => 'add')); ?> </li>
	</ul>
</div>
