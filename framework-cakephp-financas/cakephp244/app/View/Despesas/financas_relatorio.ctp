<?php echo $this->element('menu'); ?>

<?php

if (!empty($_POST)) {

echo'<div id="conteudo">
	<div class="wrapper">
	<div class="Despesas form">
	<h2>Contas a Pagar</h2>
	<table width="800" border="1" cellspacing="0" cellpadding="0">
	<tr>
		<th>ID</th>
		<th>Conta a pagar</th>
		<th>Usuario</th>
		<th>Nome</th>
		<th>Descricao</th>
		<th>Data de venc</th>
		<th>Valor</th>
		<th>Data de pag</th>
		<th>Situacao</th>
		<th class="actions">Actions</th>
	</tr>';
	foreach ($despesas as $despesa):
echo	'<tr>
		<td>';
		echo h($despesa['Despesa']['id']);
echo	'</td>
		<td>';
		echo h($despesa['Capgtipo']['nome']);
echo	'</td>
		<td>';
		echo h($despesa['Usuario']['nome']);
echo	'</td>
		<td>';
		echo h($despesa['Despesa']['nome']);
echo	'</td>
		<td>';
		echo h($despesa['Despesa']['descr']);
echo	'</td>
		<td>';
		echo h($despesa['Despesa']['data_venc']);
echo	'</td>
		<td>';		
		echo h($despesa['Despesa']['valor_capg']);
echo	'</td>
		<td>';
		echo h($despesa['Despesa']['data_pg']);
echo	'</td>
		<td>';
		echo h($despesa['Situacao']['nome']);
echo	'</td>
		<td class="actions">';
			echo $this->Html->link(__('Edit'), array('action' => 'edit', $despesa['Despesa']['id']));
			echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $despesa['Despesa']['id']), null, __('Are you sure you want to delete # %s?', $despesa['Despesa']['id']));
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
<div class="Despesas form">
<h2>Contas a Pagar</h2>';
echo $this->Form->create('Despesa',array( 'action' => 'relatorio' ));
echo '<fieldset>
		<legend>Relatorio Despesa</legend>';	
		echo $this->Form->input("usuario_id", array('empty' => 'Escolha uma opcao', 'label' => 'Usuario', 'name' =>'DespesaUsuarioId', 'id' =>'DespesaUsuarioId'));
    	echo $this->Form->input('capgtipo_id', array('empty' => 'Escolha uma opcao', 'label' => 'Tipo', 'name' =>'DespesaCapgtipoId', 'id' =>'DespesaCartipoId', 'required'=>'required'));
    	echo $this->Form->input('periodo', array('label' => 'Periodo', 'size' => '7', 'maxlength' => '9' , 'name' =>'DespesaPeriodo', 'id' =>'DespesaPeriodo', 'required'=>'required'));
echo '</fieldset>';
echo $this->Form->end(__('Pesquisar'));	
}
?>


