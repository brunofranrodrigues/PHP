<?php echo $this->element('menu'); ?>
<div id="conteudo">
<div class="wrapper">
<div class="cartipos form">
<?php echo $this->Form->create('Cartipo'); ?>
	<fieldset>
		<legend><?php echo __('Editar tipo de contas a receber'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nome');
		echo $this->Form->input('descr');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
</div>
</div>