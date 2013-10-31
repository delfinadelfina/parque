<div class="reserves index">
	<h2><?php echo __('Reserves'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('cliente_id'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo_de_reserva'); ?></th>
			<th><?php echo $this->Paginator->sort('entrada'); ?></th>
			<th><?php echo $this->Paginator->sort('saida'); ?></th>
		
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($reserves as $reserf): ?>
	<tr>
		<td><?php echo h($reserf['Reserf']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($reserf['Client']['id'], array('controller' => 'clients', 'action' => 'view', $reserf['Client']['id'])); ?>
		</td>
		<td><?php echo h($reserf['Reserf']['tipo_de_reserva']); ?>&nbsp;</td>
		<td><?php echo h($reserf['Reserf']['entrada']); ?>&nbsp;</td>
		<td><?php echo h($reserf['Reserf']['saida']); ?>&nbsp;</td>
		
		<td><?php echo h($reserf['Reserf']['created']); ?>&nbsp;</td>
		<td><?php echo h($reserf['Reserf']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $reserf['Reserf']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $reserf['Reserf']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $reserf['Reserf']['id']), null, __('Are you sure you want to delete # %s?', $reserf['Reserf']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Reserf'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>
