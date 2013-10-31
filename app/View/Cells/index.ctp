<div class="cells index">
	<h2><?php echo __('Vagas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('estado'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('vehicle_id'); ?></th>
			<th><?php echo $this->Paginator->sort('reserve_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($cells as $cell): ?>
	<tr>
		<td><?php echo h($cell['Cell']['id']); ?>&nbsp;</td>
		<td><?php echo h($cell['Cell']['estado']); ?>&nbsp;</td>
		<td><?php echo h($cell['Cell']['nome']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cell['Vehicle']['id'], array('controller' => 'vehicles', 'action' => 'view', $cell['Vehicle']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($cell['Reserve']['id'], array('controller' => 'reserves', 'action' => 'view', $cell['Reserve']['id'])); ?>
		</td>
		<td><?php echo h($cell['Cell']['created']); ?>&nbsp;</td>
		<td><?php echo h($cell['Cell']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cell['Cell']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cell['Cell']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cell['Cell']['id']), null, __('Are you sure you want to delete # %s?', $cell['Cell']['id'])); ?>
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
	<h3><?php echo __('Acoes'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nova Vaga'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Veiculos'), array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Veiculo'), array('controller' => 'vehicles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Reservas'), array('controller' => 'reserves', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nova Reserva'), array('controller' => 'reserves', 'action' => 'add')); ?> </li>
	</ul>
</div>
