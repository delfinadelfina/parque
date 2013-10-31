<div class="payments view">
<h2><?php  echo __('Payment'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($payment['Payment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo De Pagamento'); ?></dt>
		<dd>
			<?php echo h($payment['Payment']['tipo_de_pagamento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data De Pagamento'); ?></dt>
		<dd>
			<?php echo h($payment['Payment']['data_de_pagamento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Multa'); ?></dt>
		<dd>
			<?php echo h($payment['Payment']['multa']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Desconto'); ?></dt>
		<dd>
			<?php echo h($payment['Payment']['desconto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vehicle'); ?></dt>
		<dd>
			<?php echo $this->Html->link($payment['Vehicle']['id'], array('controller' => 'vehicles', 'action' => 'view', $payment['Vehicle']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client'); ?></dt>
		<dd>
			<?php echo $this->Html->link($payment['Client']['id'], array('controller' => 'clients', 'action' => 'view', $payment['Client']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($payment['Payment']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($payment['Payment']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Payment'), array('action' => 'edit', $payment['Payment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Payment'), array('action' => 'delete', $payment['Payment']['id']), null, __('Are you sure you want to delete # %s?', $payment['Payment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Payments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vehicles'), array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle'), array('controller' => 'vehicles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Duties'), array('controller' => 'duties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Duty'), array('controller' => 'duties', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Duties'); ?></h3>
	<?php if (!empty($payment['Duty'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Valor'); ?></th>
		<th><?php echo __('Type Vehicle Id'); ?></th>
		<th><?php echo __('Payment Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($payment['Duty'] as $duty): ?>
		<tr>
			<td><?php echo $duty['id']; ?></td>
			<td><?php echo $duty['valor']; ?></td>
			<td><?php echo $duty['type_vehicle_id']; ?></td>
			<td><?php echo $duty['payment_id']; ?></td>
			<td><?php echo $duty['created']; ?></td>
			<td><?php echo $duty['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'duties', 'action' => 'view', $duty['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'duties', 'action' => 'edit', $duty['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'duties', 'action' => 'delete', $duty['id']), null, __('Are you sure you want to delete # %s?', $duty['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Duty'), array('controller' => 'duties', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
