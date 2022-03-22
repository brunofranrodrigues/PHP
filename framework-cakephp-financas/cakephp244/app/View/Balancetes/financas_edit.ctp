<?php echo $this->element('menu'); ?>
<div id="conteudo">
<div class="wrapper">
<div class="balancetes form">
<?php echo $this->Form->create('Balancete'); ?>
	<fieldset>
		<legend><?php echo __('Editar Balancete'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('data');
		echo $this->Form->input('deporigem');
		echo $this->Form->input('historico');
		echo $this->Form->input('databalanco');
		echo $this->Form->input('numdoc');
		echo $this->Form->input('valor');
		echo $this->Form->input('situacao_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
</div>
</div>