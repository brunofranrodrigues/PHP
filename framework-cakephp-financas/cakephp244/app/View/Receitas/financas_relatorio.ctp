<?php echo $this->element('menu'); ?>

<?php

if (!empty($_POST)) {

echo'<div id="conteudo">
	<div class="wrapper">
	<div class="receitas form">
	<h2>Contas a Receber</h2>
	<table width="800" border="1" cellspacing="0" cellpadding="0">
	<tr>
		<th>ID</th>
		<th>Conta a receber</th>
		<th>Usuario</th>
		<th>Nome</th>
		<th>Descricao</th>
		<th>Valor</th>
		<th>Data de cred</th>
		<th>Situacao</th>
		<th class="actions">Actions</th>
	</tr>';
	foreach ($receitas as $receita):
echo	'<tr>
		<td>';
		echo h($receita['Receita']['id']);
echo	'</td>
		<td>';
		echo h($receita['Cartipo']['nome']);
echo	'</td>
		<td>';
		echo h($receita['Usuario']['nome']);
echo	'</td>
		<td>';
		echo h($receita['Receita']['nome']);
echo	'</td>
		<td>';
		echo h($receita['Receita']['descr']);
echo	'</td>
		<td>';
		echo h($receita['Receita']['valor_car']);
echo	'</td>
		<td>';
		echo h($receita['Receita']['data_pg']);
echo	'</td>
		<td>';
		echo h($receita['Situacao']['nome']);
echo	'</td>
		<td class="actions">';
			echo $this->Html->link(__('Edit'), array('action' => 'edit', $receita['Receita']['id']));
			echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $receita['Receita']['id']), null, __('Are you sure you want to delete # %s?', $receita['Receita']['id']));
echo '</td>
	</tr>';
	endforeach;
echo '</table>

</div>
</div>
</div>';

} else {

echo '<div id="conteudo">
<div class="wrapper">
<div class="receitas form">
<h2>Contas a Receber</h2>';
echo $this->Form->create('Receita',array( 'action' => 'relatorio' ));
echo '<fieldset>
		<legend>Relatorio Receita</legend>';	
		echo $this->Form->input("usuario_id", array('empty' => 'Escolha uma opcao', 'label' => 'Usuario', 'name' =>'ReceitaUsuarioId', 'id' =>'ReceitaUsuarioId'));
    	echo $this->Form->input('cartipo_id', array('empty' => 'Escolha uma opcao', 'label' => 'Tipo', 'name' =>'ReceitaCartipoId', 'id' =>'ReceitaCartipoId', 'required'=>'required'));
    	echo $this->Form->input('periodo', array('label' => 'Periodo', 'size' => '7', 'maxlength' => '9' , 'name' =>'ReceitaPeriodo', 'id' =>'ReceitaPeriodo', 'required'=>'required'));
echo '</fieldset>';
echo $this->Form->end(__('Pesquisar'));	
}
?>


