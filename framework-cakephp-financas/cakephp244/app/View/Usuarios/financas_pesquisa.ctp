<?php echo $this->element('menu'); ?>
<div id="conteudo">
<div class="wrapper">
<div class="usuarios index">
	<h2><?php echo __('Usuarios'); ?></h2>
<div id="search">
	<form id="orderform" action="/financas/usuarios/pesquisa" method="post" enctype="multipart/form-data">
	<label for="searchuser">Pesquisar Usuarios:</label><input type="text" name="searchuser" />
	Pesquisar por:
	<input type="radio" name="searchtype" value="Usuario.id"  checked> Usuario ID
	<input type="radio" name="searchtype" value="Usuario.nome"> Nome
	<input type="radio" name="searchtype" value="Usuario.email"  checked> Usuario Email
	
	<?php echo $this->Form->end(__('Pesquisar'));?>	
</div>
<div id="contentbox">
	<h2>Usuarios</h2>
	<table>
		<thead>
			<th>ID</th><th>Nome</th><th>Email</th>
		</thead>
		<?php foreach($results as $usuario) : ?>  
			<tr>
				<td><?php echo $usuario['Usuario']['id'] ?></td>
				<td><?php echo $usuario['Usuario']['nome'] ?></td>
				<td><?php echo $usuario['Usuario']['email'] ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>