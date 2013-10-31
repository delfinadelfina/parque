<div class="typeVehicles index">
	<h2><?php echo __('Type Vehicles'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('modelo'); ?></th>
			<th><?php echo $this->Paginator->sort('marca'); ?></th>
			<th><?php echo $this->Paginator->sort('matricula'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($typeVehicles as $typeVehicle): ?>
	<tr>
		<td><?php echo h($typeVehicle['TypeVehicle']['id']); ?>&nbsp;</td>
		<td><?php echo h($typeVehicle['TypeVehicle']['modelo']); ?>&nbsp;</td>
		<td><?php echo h($typeVehicle['TypeVehicle']['marca']); ?>&nbsp;</td>
		<td><?php echo h($typeVehicle['TypeVehicle']['matricula']); ?>&nbsp;</td>
		<td><?php echo h($typeVehicle['TypeVehicle']['created']); ?>&nbsp;</td>
		<td><?php echo h($typeVehicle['TypeVehicle']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $typeVehicle['TypeVehicle']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $typeVehicle['TypeVehicle']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $typeVehicle['TypeVehicle']['id']), null, __('Are you sure you want to delete # %s?', $typeVehicle['TypeVehicle']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Type Vehicle'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Duties'), array('controller' => 'duties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Duty'), array('controller' => 'duties', 'action' => 'add')); ?> </li>
	</ul>
</div>
