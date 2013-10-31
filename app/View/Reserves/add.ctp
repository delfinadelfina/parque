<div class="reserves form">
<?php echo $this->Form->create('Reserf'); ?>
    
    <fieldset>
		<legend><?php echo __('Adicionar reserva'); ?></legend>
	<?php
		echo $this->Form->input('client_id');
		echo $this->Form->input('tipo_de_reserva');
		echo $this->Form->input('entrada');
		echo $this->Form->input('saida');
	
	?>
    </fieldset>>
                
<?php echo $this->Form->end(__('reservar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acoes'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Reservas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Clientes'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Cliente'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>
