<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo 'FINANCAS'; ?>
	</title>
	<?php
	echo $this->Html->meta('icon');

	echo $this->Html->css('base.css');
	echo $this->Html->css('geral.css');
	
	echo $this->fetch('meta');
	echo $this->fetch('css');
	echo $this->fetch('script');
	?>
</head>
<body>
	<div id="wrap">
		<div id="topo">
			<div class="wrapper">
				<h1>Logo do Cliente</h1>
				<div id="dados-login-topo">
				 <p>Usuário:<b> </b> | <b><?php echo date('d/m/Y H:i'); ?></b> | <a href="/financas/usuarios/logout" id="logout-link">Logout</a></p>
				</div>
			</div>
		</div>
		<?php echo $this->Session->flash(); ?>
		<?php echo $this->fetch('content'); ?>
		<?php echo $this->element('sql_dump');?>
		<div id="rodape">
			<div class="wrapper">
				<p>Versão 1.0</p>
			</div>
		</div>
	</div>
</body>
</html>