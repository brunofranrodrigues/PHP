<?php echo $this->element('menu'); ?>
<div id="conteudo">
<div class="wrapper">
<div class="receitas form">
<?php echo $this->Form->create('Receita'); ?>
	<fieldset>
		<legend><?php echo __('Editar Receita'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('cartipo_id', array('empty' => 'Escolha uma opcao'));
		echo $this->Form->input('usuario_id', array('empty' => 'Escolha um usuario'));
		echo $this->Form->input('nome');
		echo $this->Form->input('descr');
		echo $this->Form->input('valor_car');
		echo $this->Form->input('data_pg');
		echo $this->Form->input('situacao_id', array('empty' => 'Escolha um status'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
</div>
</div>