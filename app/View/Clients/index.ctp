<div class="clients index">
	<h2><?php echo __('Clientes'); ?></h2>
	<table cellpadding="0" cellspacing="0" border="1">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
                        <th><?php echo $this->Paginator->sort('apelido'); ?></th>
                        <th><?php echo $this->Paginator->sort('data-nascimento'); ?></th>
                        <th><?php echo $this->Paginator->sort('genero'); ?></th>
			<th><?php echo $this->Paginator->sort('telefone'); ?></th>
			<th><?php echo $this->Paginator->sort('endereco'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
                        <th><?php echo $this->Paginator->sort('local_trabalho'); ?></th>
                        <th><?php echo $this->Paginator->sort('cont_trabalho'); ?></th>
                        <th><?php echo $this->Paginator->sort('observacoes'); ?></th>
                        
			
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($clients as $client): ?>
	<tr>
		<td><?php echo h($client['Client']['id']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['nome']); ?>&nbsp;</td>
                <td><?php echo h($client['Client']['apelido']); ?>&nbsp;</td>
                <td><?php echo h($client['Client']['data_nascimento']); ?>&nbsp;</td>
                <td><?php echo h($client['Client']['genero']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['telefone']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['endereco']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['email']); ?>&nbsp;</td>
                <td><?php echo h($client['Client']['local_trabalho']); ?>&nbsp;</td>
                <td><?php echo h($client['Client']['cont_trabalho']); ?>&nbsp;</td>
                <th><?php echo $this->Paginator->sort('observacoes'); ?></th>
		
		<td><?php echo h($client['Client']['created']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $client['Client']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $client['Client']['id'])); ?>
			<?php echo $this->Form->postLink(__('Apagar'), array('action' => 'delete', $client['Client']['id']), null, __('Are you sure you want to delete # %s?', $client['Client']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Novo Cliente'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Comentarios'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Comentario'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Pagamentos'), array('controller' => 'payments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Pagamento'), array('controller' => 'payments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Reservas'), array('controller' => 'reserves', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nova Reserva'), array('controller' => 'reserves', 'action' => 'add')); ?> </li>
	</ul>
</div>
