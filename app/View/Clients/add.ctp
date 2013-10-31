<div class="clients form">
    
<?php echo $this->Form->create('Client'); ?>
    
    <?php echo $this->Html->image('cliente.jpg', array( 'border' => '0'));?>
   <b> <?php echo ('Adicionar Cliente'); ?></b>
    
    
        <fieldset>
		<legend><b><?php echo __('Dados Pessoais'); ?> </b></legend>
	<?php
		echo $this->Form->input('nome').'<br>';
                echo $this->Form->input('apelido').'<br>';
                echo $this->Form->input('data_nascimento').'<br>';
                
                
                $options=array('M'=>'Masculino','F'=>'Femenino');
                        $attributes=array('legend'=>'genero');
                         echo $this->Form->radio('genero',$options,$attributes);
                         echo '<br>';
                         
                 $options=array('BI'=>'BI','DIRE'=>'DIRE','Passaporte'=>'Passaporte');
                        $attributes=array('legend'=>'tipo de documento');
                         echo $this->Form->radio('tipo_documento',$options,$attributes);
                         echo '<br>';  
                echo $this->Form->input('doc_numero').'<br>';         
                echo $this->Form->input('nacionalidade').'<br>';  
                
                
         ?>  
              </fieldset> 
              
              <fieldset>
         <legend> <b><?php echo __('Contactos Pessoais'); ?></b></legend>
         <?php  
                
		echo $this->Form->input('telefone').'<br>';
		echo $this->Form->input('email').'<br>';
                
/*                
$types_size=sizeof($types)-1;
$array_type=' ';
while($types_size!=-1)
{
$array_type.='"'.$types[$types_size]["Type"]["name_type"].'", ';
$types_size--;
}
echo $array_type; 
echo $this -> form -> input ('id_type', array('options' => array($array_type)));
echo $this -> form -> input ('id_type', array('options' => array(shoes, shirts, jeans,)));

*/                
                echo $this->Form->input('endereco').'<br>';
		
                  
         ?>
         
	</fieldset>
        
        <fieldset>
            
         <legend><b> <?php echo __('Dados Profissionais'); ?></b></legend>
         <?php  
                echo $this->Form->input('profissao').'<br>';
                echo $this->Form->input('local_trabalho').'<br>';
		echo $this->Form->input('cont_trabalho').'<br>';
         ?>
         
	</fieldset>
        
        <fieldset>
        <?php
        echo $this->Form->input('observacoes');
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

		<li><?php echo $this->Html->link(__('Listar Clientes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Comentarios'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Comentario'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Payments'), array('controller' => 'payments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Pagamento'), array('controller' => 'payments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Reserves'), array('controller' => 'reserves', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nova Reserva'), array('controller' => 'reserves', 'action' => 'add')); ?> </li>
	</ul>
</div>
