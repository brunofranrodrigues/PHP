<?php echo $this->element('menu'); ?>
<div id="conteudo">
<div class="wrapper">
<div class="capgtipos form">
<?php echo $this->Form->create('Capgtipo'); ?>
	<fieldset>
		<legend><?php echo __('Adicionar tipo de conta a pagar'); ?></legend>
	<?php
		echo $this->Form->input('nome');
		echo $this->Form->input('descr');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
</div>
</div>