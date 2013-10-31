<div class="vehicles index">
	<h2><?php echo __('Vehicles'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('matricula'); ?></th>
			<th><?php echo $this->Paginator->sort('cor'); ?></th>
			<th><?php echo $this->Paginator->sort('numero_de_lugares'); ?></th>
			<th><?php echo $this->Paginator->sort('vehicle_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($vehicles as $vehicle): ?>
	<tr>
		<td><?php echo h($vehicle['Vehicle']['id']); ?>&nbsp;</td>
		<td><?php echo h($vehicle['Vehicle']['matricula']); ?>&nbsp;</td>
		<td><?php echo h($vehicle['Vehicle']['cor']); ?>&nbsp;</td>
		<td><?php echo h($vehicle['Vehicle']['numero_de_lugares']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($vehicle['Vehicle']['id'], array('controller' => 'vehicles', 'action' => 'view', $vehicle['Vehicle']['id'])); ?>
		</td>
		<td><?php echo h($vehicle['Vehicle']['created']); ?>&nbsp;</td>
		<td><?php echo h($vehicle['Vehicle']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $vehicle['Vehicle']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $vehicle['Vehicle']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $vehicle['Vehicle']['id']), null, __('Are you sure you want to delete # %s?', $vehicle['Vehicle']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Vehicle'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Vehicles'), array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle'), array('controller' => 'vehicles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cells'), array('controller' => 'cells', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cell'), array('controller' => 'cells', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Payments'), array('controller' => 'payments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment'), array('controller' => 'payments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Types'), array('controller' => 'types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type'), array('controller' => 'types', 'action' => 'add')); ?> </li>
	</ul>
</div>
