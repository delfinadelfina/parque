<div class="vehicles view">
<h2><?php  echo __('Vehicle'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Matricula'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['matricula']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cor'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['cor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero De Lugares'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['numero_de_lugares']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vehicle'); ?></dt>
		<dd>
			<?php echo $this->Html->link($vehicle['Vehicle']['id'], array('controller' => 'vehicles', 'action' => 'view', $vehicle['Vehicle']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Vehicle'), array('action' => 'edit', $vehicle['Vehicle']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Vehicle'), array('action' => 'delete', $vehicle['Vehicle']['id']), null, __('Are you sure you want to delete # %s?', $vehicle['Vehicle']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Vehicles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Cells'); ?></h3>
	<?php if (!empty($vehicle['Cell'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Estado'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th><?php echo __('Vehicle Id'); ?></th>
		<th><?php echo __('Reserve Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($vehicle['Cell'] as $cell): ?>
		<tr>
			<td><?php echo $cell['id']; ?></td>
			<td><?php echo $cell['estado']; ?></td>
			<td><?php echo $cell['nome']; ?></td>
			<td><?php echo $cell['vehicle_id']; ?></td>
			<td><?php echo $cell['reserve_id']; ?></td>
			<td><?php echo $cell['created']; ?></td>
			<td><?php echo $cell['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'cells', 'action' => 'view', $cell['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'cells', 'action' => 'edit', $cell['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cells', 'action' => 'delete', $cell['id']), null, __('Are you sure you want to delete # %s?', $cell['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cell'), array('controller' => 'cells', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Payments'); ?></h3>
	<?php if (!empty($vehicle['Payment'])): ?>
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
		foreach ($vehicle['Payment'] as $payment): ?>
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
	<h3><?php echo __('Related Vehicles'); ?></h3>
	<?php if (!empty($vehicle['Vehicle'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Matricula'); ?></th>
		<th><?php echo __('Cor'); ?></th>
		<th><?php echo __('Numero De Lugares'); ?></th>
		<th><?php echo __('Vehicle Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($vehicle['Vehicle'] as $vehicle): ?>
		<tr>
			<td><?php echo $vehicle['id']; ?></td>
			<td><?php echo $vehicle['matricula']; ?></td>
			<td><?php echo $vehicle['cor']; ?></td>
			<td><?php echo $vehicle['numero_de_lugares']; ?></td>
			<td><?php echo $vehicle['vehicle_id']; ?></td>
			<td><?php echo $vehicle['created']; ?></td>
			<td><?php echo $vehicle['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'vehicles', 'action' => 'view', $vehicle['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'vehicles', 'action' => 'edit', $vehicle['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'vehicles', 'action' => 'delete', $vehicle['id']), null, __('Are you sure you want to delete # %s?', $vehicle['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Vehicle'), array('controller' => 'vehicles', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Types'); ?></h3>
	<?php if (!empty($vehicle['Type'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($vehicle['Type'] as $type): ?>
		<tr>
			<td><?php echo $type['id']; ?></td>
			<td><?php echo $type['nome']; ?></td>
			<td><?php echo $type['created']; ?></td>
			<td><?php echo $type['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'types', 'action' => 'view', $type['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'types', 'action' => 'edit', $type['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'types', 'action' => 'delete', $type['id']), null, __('Are you sure you want to delete # %s?', $type['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Type'), array('controller' => 'types', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
