<div class="payments index">
	<h2><?php echo __('Payments'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo_de_pagamento'); ?></th>
			<th><?php echo $this->Paginator->sort('data_de_pagamento'); ?></th>
			<th><?php echo $this->Paginator->sort('multa'); ?></th>
			<th><?php echo $this->Paginator->sort('desconto'); ?></th>
			<th><?php echo $this->Paginator->sort('vehicle_id'); ?></th>
			<th><?php echo $this->Paginator->sort('client_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($payments as $payment): ?>
	<tr>
		<td><?php echo h($payment['Payment']['id']); ?>&nbsp;</td>
		<td><?php echo h($payment['Payment']['tipo_de_pagamento']); ?>&nbsp;</td>
		<td><?php echo h($payment['Payment']['data_de_pagamento']); ?>&nbsp;</td>
		<td><?php echo h($payment['Payment']['multa']); ?>&nbsp;</td>
		<td><?php echo h($payment['Payment']['desconto']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($payment['Vehicle']['id'], array('controller' => 'vehicles', 'action' => 'view', $payment['Vehicle']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($payment['Client']['id'], array('controller' => 'clients', 'action' => 'view', $payment['Client']['id'])); ?>
		</td>
		<td><?php echo h($payment['Payment']['created']); ?>&nbsp;</td>
		<td><?php echo h($payment['Payment']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $payment['Payment']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $payment['Payment']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $payment['Payment']['id']), null, __('Are you sure you want to delete # %s?', $payment['Payment']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Payment'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Vehicles'), array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle'), array('controller' => 'vehicles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Duties'), array('controller' => 'duties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Duty'), array('controller' => 'duties', 'action' => 'add')); ?> </li>
	</ul>
</div>
