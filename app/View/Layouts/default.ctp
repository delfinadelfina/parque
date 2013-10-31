<?php
/**
 *
 * PHP 5
 * 
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'parkeer                                       ');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://localhost:8011/parque">
<head>
<title> parkeer :: <?php echo $title_for_layout?></title>
<?php echo $this->Html->charset('UTF-8')?>
<meta name="description" content="Website description" />
<meta name="keywords" content="keyword1,keyword2,keyword2,keyword4" />
<?php echo $this->Html->css('cake.forms', 'stylesheet', array("media"=>"all" ));?>
<?php echo $this->Html->css('contented6_1', 'stylesheet', array("media"=>"all" ));?>
</head>
<body>
    
    <?php /*echo $this->Html->link(
	       $this->Html->image('parquear.jpg',array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			*/?>  
    
    <div id="sidecontent">
        
<ul id="nav" >
    <li><h1><a class="selected" href="http://localhost:8011/parque">Home</a>
    <li><a href="http://localhost:8011/parque/clients/">Clientes</a></li>
    <li><a href="http://localhost:8011/parque/vehicles/">Viaturas</a></li>
    <li><a href="http://localhost:8011/parque/reserves/">Reservas</a></li>
    <li><a href="http://localhost:8011/parque/comments/">Comentarios</a></li>
    <li><a href="http://localhost:8011/parque/contacts/">Contactos</a></li>
</ul>
        
    </div>
     <?php echo $this->Html->link(
	       $this->Html->image('parquear.jpg',array('alt' => $cakeDescription, 'border' => '0')),
					'http://localhost:8011/parque',
					array('target' => '_blank', 'escape' => false)
				);
			?>
	<div id="container">
		<div id="header">
			<h1><?php echo $this->Html->link($cakeDescription, 'http://localhost:8011/parque'); ?></h1>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<b> <?php 
                                echo 'contactos:' ; 
                          ?></b>     
                           <p> <?php    echo 'telemovel: +258848499320 ; +258828949404'.'<br>';
                                echo 'email: parkeer@gmail.com' ;
                              
			     ?>
		</div>
	</div>
	<?php //echo $this->element('sql_dump'); ?>
    
    
    
</body>
</html>
