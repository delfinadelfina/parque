<div class="comments index">
	<h2><?php echo __('Comentarios'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('descricao'); ?></th>
			<th><?php echo $this->Paginator->sort('titulo'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Acoes'); ?></th>
	</tr>
	<?php
	foreach ($comments as $comment): ?>
	<tr>
		<td><?php echo h($comment['Comment']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($comment['Type']['nome'], array('controller' => 'types', 'action' => 'view', $comment['Type']['id'])); ?>
		</td>
		<td><?php echo h($comment['Comment']['descricao']); ?>&nbsp;</td>
		<td><?php echo h($comment['Comment']['titulo']); ?>&nbsp;</td>
		<td><?php echo h($comment['Comment']['created']); ?>&nbsp;</td>
		<td><?php echo h($comment['Comment']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $comment['Comment']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $comment['Comment']['id'])); ?>
			<?php echo $this->Form->postLink(__('Apagar'), array('action' => 'delete', $comment['Comment']['id']), null, __('Are you sure you want to delete # %s?', $comment['Comment']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Novo Comentario'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Tipos de Comentarios'), array('controller' => 'types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Tipo de Comentario'), array('controller' => 'types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Clientes'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Cliente'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>
