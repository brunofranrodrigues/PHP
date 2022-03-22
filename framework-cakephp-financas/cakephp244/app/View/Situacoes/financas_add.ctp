<?php echo $this->element('menu'); ?>
<div id="conteudo">
<div class="wrapper">
<div class="situacoes form">
<?php echo $this->Form->create('Situacao'); ?>
	<fieldset>
		<legend><?php echo __('Adicionar Situacao'); ?></legend>
	<?php
		echo $this->Form->input('nome');
		echo $this->Form->input('descr');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
</div>
</div>