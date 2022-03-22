<?php echo $this->element('menu'); ?>
<div id="conteudo">
<div class="wrapper">
<div class="usuarios form">
<?php echo $this->Form->create('Usuario'); ?>
	<fieldset>
		<legend><?php echo __('Adicionar Usuario'); ?></legend>
	<?php
		echo $this->Form->input('nome');
		echo $this->Form->input('email');
		echo $this->Form->input('senha');
		echo $this->Form->input('perfil', array(
            'options' => array('admin' => 'Admin', 'viewer' => 'Viewer')
         ));   
	?>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
</div>
</div>