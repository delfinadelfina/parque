<div class="reserves view">
<h2><?php  echo __('Reserva'); ?></h2>
	<dl>
		<dt><?php echo __('ID'); ?></dt>
		<dd>
			<?php echo h($reserf['Reserf']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cliente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($reserf['Client']['id'], array('controller' => 'clients', 'action' => 'view', $reserf['Client']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo De Reserva'); ?></dt>
		<dd>
			<?php echo h($reserf['Reserf']['tipo_de_reserva']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hora Entrada'); ?></dt>
		<dd>
			<?php echo h($reserf['Reserf']['entrada']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hora De Saida'); ?></dt>
		<dd>
			<?php echo h($reserf['Reserf']['saida']); ?>
			&nbsp;
		</dd>
		
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($reserf['Reserf']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($reserf['Reserf']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Reserf'), array('action' => 'edit', $reserf['Reserf']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Reserf'), array('action' => 'delete', $reserf['Reserf']['id']), null, __('Are you sure you want to delete # %s?', $reserf['Reserf']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Reserves'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reserf'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>
