<div class="comments view">
<h2><?php  echo __('Commentario'); ?></h2>
	<dl>
		<dt> <b><?php echo __('ID'); ?></dt>
		<dd>
			<?php echo h($comment['Comment']['id']); ?>
			&nbsp;
		</dd>
		<dt> <b><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($comment['Type']['id'], array('controller' => 'types', 'action' => 'view', $comment['Type']['id'])); ?>
			&nbsp;
		</dd>
		<dt> <b><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($comment['Comment']['descricao']); ?>
			&nbsp;
		</dd>
		<dt> <b><?php echo __('Data'); ?></dt>
		<dd>
			<?php echo h($comment['Comment']['data']); ?>
			&nbsp;
		</dd>
		<dt> <b><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($comment['Comment']['created']); ?>
			&nbsp;
		</dd>
		<dt> <b><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($comment['Comment']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Acoes'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Comentario'), array('action' => 'edit', $comment['Comment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Apagar Comentario'), array('action' => 'delete', $comment['Comment']['id']), null, __('Are you sure you want to delete # %s?', $comment['Comment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Comentarios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Comentario'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Tipos'), array('controller' => 'types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Tipo'), array('controller' => 'types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Clientes'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Cliente'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Clientes Relacionados'); ?></h3>
	<?php if (!empty($comment['Client'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th><?php echo __('Telefone'); ?></th>
		<th><?php echo __('Endereco'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Comment Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Acoes'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($comment['Client'] as $client): ?>
		<tr>
			<td><?php echo $client['id']; ?></td>
			<td><?php echo $client['nome']; ?></td>
			<td><?php echo $client['telefone']; ?></td>
			<td><?php echo $client['endereco']; ?></td>
			<td><?php echo $client['email']; ?></td>
			<td><?php echo $client['comment_id']; ?></td>
			<td><?php echo $client['created']; ?></td>
			<td><?php echo $client['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'clients', 'action' => 'view', $client['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'clients', 'action' => 'edit', $client['id'])); ?>
				<?php echo $this->Form->postLink(__('Apagar'), array('controller' => 'clients', 'action' => 'delete', $client['id']), null, __('Are you sure you want to delete # %s?', $client['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Novo Cliente'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
