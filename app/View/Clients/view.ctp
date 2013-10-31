<div class="clients view">
<h2 align="center"><?php  echo (h($client['Client']['nome']).' '.h($client['Client']['apelido'])); ?></h2>
	<dl>
            <dt> <b><?php echo __('ID'); ?></b></dt>
		<dd>
			<?php echo h($client['Client']['id']); ?>
			&nbsp;
		</dd>
		<dt> <b><?php echo __('Nome'); ?></b></dt>
		<dd>
			<?php echo h($client['Client']['nome']); ?>
			&nbsp;
		</dd>
		<dt> <b><?php echo __('Telefone'); ?></b></dt>
		<dd>
			<?php echo h($client['Client']['telefone']); ?>
			&nbsp;
		</dd>
		<dt> <b><?php echo __('Endereco'); ?></b></dt>
		<dd>
			<?php echo h($client['Client']['endereco']); ?>
			&nbsp;
		</dd>
		<dt> <b><?php echo __('Email'); ?></b></dt>
		<dd>
			<?php echo h($client['Client']['email']); ?>
			&nbsp;
		</dd>
		<dt> <b><?php echo __('Comment'); ?></b></dt>
		<dd>
			<?php echo $this->Html->link($client['Comment']['id'], array('controller' => 'comments', 'action' => 'view', $client['Comment']['id'])); ?>
			&nbsp;
		</dd>
		<dt> <b><?php echo __('Created'); ?></b></dt>
		<dd>
			<?php echo h($client['Client']['created']); ?>
			&nbsp;
		</dd>
		<dt> <b><?php echo __('Modified'); ?></b></dt>
		<dd>
			<?php echo h($client['Client']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3 align="center"><?php echo __('Acoes'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Cliente'), array('action' => 'edit', $client['Client']['id'])); ?></li>
		<li><?php echo $this->Form->postLink(__('Apagar Cliente'), array('action' => 'delete', $client['Client']['id']), null, __('Are you sure you want to delete # %s?', $client['Client']['id'])); ?></li>
		<li><?php echo $this->Html->link(__('Listar Clientes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Novo Cliente'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Comentarios'), array('controller' => 'comments', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Novo Comentario'), array('controller' => 'comments', 'action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Pagamentos'), array('controller' => 'payments', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Novo Pagamento'), array('controller' => 'payments', 'action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Reservas'), array('controller' => 'reserves', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Nova Reserva'), array('controller' => 'reserves', 'action' => 'add')); ?></li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Pagamentos Relacionados'); ?></h3>
	<?php if (!empty($client['Payment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Tipo De Pagamento'); ?></th>
		<th><?php echo __('Data De Pagamento'); ?></th>
		<th><?php echo __('Multa'); ?></th>
		<th><?php echo __('Desconto'); ?></th>
		<th><?php echo __('Vehicle Id'); ?></th>
		<th><?php echo __('Client Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($client['Payment'] as $payment): ?>
		<tr>
			<td><?php echo $payment['id']; ?></td>
			<td><?php echo $payment['tipo_de_pagamento']; ?></td>
			<td><?php echo $payment['data_de_pagamento']; ?></td>
			<td><?php echo $payment['multa']; ?></td>
			<td><?php echo $payment['desconto']; ?></td>
			<td><?php echo $payment['vehicle_id']; ?></td>
			<td><?php echo $payment['client_id']; ?></td>
			<td><?php echo $payment['created']; ?></td>
			<td><?php echo $payment['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'payments', 'action' => 'view', $payment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'payments', 'action' => 'edit', $payment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'payments', 'action' => 'delete', $payment['id']), null, __('Are you sure you want to delete # %s?', $payment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Payment'), array('controller' => 'payments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Reservas relacionadas'); ?></h3>
	<?php if (!empty($client['Reserf'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Client Id'); ?></th>
		<th><?php echo __('Tipo De Reserva'); ?></th>
		<th><?php echo __('Hora Entrada'); ?></th>
		<th><?php echo __('Hora De Saida'); ?></th>
		<th><?php echo __('Data De Entrada'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($client['Reserf'] as $reserf): ?>
		<tr>
			<td><?php echo $reserf['id']; ?></td>
			<td><?php echo $reserf['client_id']; ?></td>
			<td><?php echo $reserf['tipo_de_reserva']; ?></td>
			<td><?php echo $reserf['hora_entrada']; ?></td>
			<td><?php echo $reserf['hora_de_saida']; ?></td>
			<td><?php echo $reserf['data_de_entrada']; ?></td>
			<td><?php echo $reserf['created']; ?></td>
			<td><?php echo $reserf['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'reserves', 'action' => 'view', $reserf['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'reserves', 'action' => 'edit', $reserf['id'])); ?>
				<?php echo $this->Form->postLink(__('Apagar'), array('controller' => 'reserves', 'action' => 'delete', $reserf['id']), null, __('Are you sure you want to delete # %s?', $reserf['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nava Reserva'), array('controller' => 'reserves', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
