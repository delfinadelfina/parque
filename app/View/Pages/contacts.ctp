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
 * @package       Cake.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
if (Configure::read('debug') == 0):
	throw new NotFoundException();
endif;
//App::uses('Debugger', 'Utility');
?>


    <p>For updates and important announcements, visit http://cakefest.org</p>


<h2><?php echo 'Sistema de Gestao de Parque de Estacionamento '; ?></h2>
<?php
if (Configure::read('debug') > 0):
	Debugger::checkSecurityKeys();
endif;
?>
<p id="url-rewriting-warning" style="background-color:#00ff00; color:#00ff00;">
	<?php echo __d('cake_dev', 'URL rewriting is not properly configured on your server.'); ?>
	1) <a target="_blank" href="http://book.cakephp.org/2.0/en/installation/advanced-installation.html#apache-and-mod-rewrite-and-htaccess" style="color:#fff;">Help me configure it</a>
	2) <a target="_blank" href="http://book.cakephp.org/2.0/en/development/configuration.html#cakephp-core-configuration" style="color:#fff;">I don't / can't use URL rewriting</a>
</p>
<p>

