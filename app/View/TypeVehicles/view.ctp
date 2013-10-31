<div class="typeVehicles view">
<h2><?php  echo __('Type Vehicle'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($typeVehicle['TypeVehicle']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modelo'); ?></dt>
		<dd>
			<?php echo h($typeVehicle['TypeVehicle']['modelo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Marca'); ?></dt>
		<dd>
			<?php echo h($typeVehicle['TypeVehicle']['marca']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Matricula'); ?></dt>
		<dd>
			<?php echo h($typeVehicle['TypeVehicle']['matricula']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($typeVehicle['TypeVehicle']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($typeVehicle['TypeVehicle']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Type Vehicle'), array('action' => 'edit', $typeVehicle['TypeVehicle']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Type Vehicle'), array('action' => 'delete', $typeVehicle['TypeVehicle']['id']), null, __('Are you sure you want to delete # %s?', $typeVehicle['TypeVehicle']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Type Vehicles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type Vehicle'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Duties'), array('controller' => 'duties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Duty'), array('controller' => 'duties', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Duties'); ?></h3>
	<?php if (!empty($typeVehicle['Duty'])): ?>
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
		foreach ($typeVehicle['Duty'] as $duty): ?>
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
