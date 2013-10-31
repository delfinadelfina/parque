<div class="cells view">
<h2><?php  echo __('Vagas'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cell['Cell']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado'); ?></dt>
		<dd>
			<?php echo h($cell['Cell']['estado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($cell['Cell']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vehicle'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cell['Vehicle']['id'], array('controller' => 'vehicles', 'action' => 'view', $cell['Vehicle']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reserve'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cell['Reserve']['id'], array('controller' => 'reserves', 'action' => 'view', $cell['Reserve']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($cell['Cell']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($cell['Cell']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cell'), array('action' => 'edit', $cell['Cell']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cell'), array('action' => 'delete', $cell['Cell']['id']), null, __('Are you sure you want to delete # %s?', $cell['Cell']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cells'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cell'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vehicles'), array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle'), array('controller' => 'vehicles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reserves'), array('controller' => 'reserves', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reserve'), array('controller' => 'reserves', 'action' => 'add')); ?> </li>
	</ul>
</div>
