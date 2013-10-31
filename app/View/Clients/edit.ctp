<div class="clients form">
<?php echo $this->Form->create('Client'); ?>
	<fieldset>
		<legend><?php echo __('Editar Cliente'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nome');
		echo $this->Form->input('telefone');
		echo $this->Form->input('endereco');
		echo $this->Form->input('email');
		echo $this->Form->input('comment_id');
	?>
	</fieldset>
<div class="button">
             
                 <table>   
                 <tr>
                     <td>  <?php echo $this->Form->end(__('registar'))?> </td>
                     <td>  <?php echo $this->Form->reset(__('cancelar')); ?> </td>
                 </tr>
                 </table>
             </div>
</div>
<div class="actions">
	<h3><?php echo __('Acoes'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Apagar'), array('action' => 'delete', $this->Form->value('Client.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Client.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Clientes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Comentarios'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Comentario'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Pagamentos'), array('controller' => 'payments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Pagamento'), array('controller' => 'payments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Reservas'), array('controller' => 'reserves', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nova Reserva'), array('controller' => 'reserves', 'action' => 'add')); ?> </li>
	</ul>
</div>
