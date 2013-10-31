<div class="cells form">
<?php echo $this->Form->create('Cell'); ?>
	<fieldset>
		<legend><?php echo __('Adicionar Vagas'); ?></legend>
	<?php
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
	<h3><?php echo __('Accoes'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar vagas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Veiculos'), array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('novo Veiculo'), array('controller' => 'vehicles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Reservas'), array('controller' => 'reserves', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nova Reserva'), array('controller' => 'reserves', 'action' => 'add')); ?> </li>
	</ul>
</div>
