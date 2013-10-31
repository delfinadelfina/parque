<div class="cells form">
<?php echo $this->Form->create('Cell'); ?>
	<fieldset>
		<legend><?php echo __('Editar Vagas'); ?></legend>
	<?php
		echo $this->Form->input('id');
                
		$options=array('livre'=>'livre','ocupado'=>'ocupado','reservado'=>'reservado');
                        $attributes=array('legend'=>'Estado');
                         echo $this->Form->radio('estado',$options,$attributes);
                         echo '<br>';
		echo $this->Form->input('nome');
		echo $this->Form->input('vehicle_id');
		echo $this->Form->input('reserve_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acoes'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Apagar'), array('action' => 'delete', $this->Form->value('Cell.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Cell.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Vagas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Veiculos'), array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Veiculo'), array('controller' => 'vehicles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Reservas'), array('controller' => 'reserves', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nova Reserva '), array('controller' => 'reserves', 'action' => 'add')); ?> </li>
	</ul>
</div>
