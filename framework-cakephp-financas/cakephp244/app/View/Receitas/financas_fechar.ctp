<?php echo $this->element('menu'); ?>

<?php

if (!empty($_POST)) {

echo'<div id="conteudo">
	<div class="wrapper">
	<div class="receitas form">
	<h2>Contas a Receber</h2>
	<table width="800" border="1" cellspacing="0" cellpadding="0">
	<tr>
		<th>Usuario</th>
		<th>Data</th>
		<th>Valor</th>
	</tr>';
	//foreach ($receitas as $receita):
echo	'</td>
		<td>';
		echo h($receita['Receita']['usuario_id']);
echo	'</td>
		<td>';
		echo h($receita['Receita']['data_pg']);
echo	'</td>
		<td>';
		echo h($receita['Receita']['total']);
echo '</td>
	</tr>';
//	endforeach;
echo '</table>

</div>
</div>
</div>';

} else {

echo '<div id="conteudo">
<div class="wrapper">
<div class="receitas form">
<h2>Contas a Receber</h2>';
echo $this->Form->create('Receita',array( 'action' => 'fechar' ));
echo '<fieldset>
		<legend>Relatorio Receita</legend>';	
		echo $this->Form->input("usuario_id", array('empty' => 'Escolha uma opcao', 'label' => 'Usuario', 'name' =>'ReceitaUsuarioId', 'id' =>'ReceitaUsuarioId'));
    	echo $this->Form->input('periodo', array('label' => 'Periodo', 'size' => '7', 'maxlength' => '9' , 'name' =>'ReceitaPeriodo', 'id' =>'ReceitaPeriodo', 'required'=>'required'));
echo '</fieldset>';
echo $this->Form->end(__('Pesquisar'));	
}
?>


