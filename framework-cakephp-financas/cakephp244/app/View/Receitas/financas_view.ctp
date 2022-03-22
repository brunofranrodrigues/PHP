<div class="receitas view">
<h2><?php echo __('Receita'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($receita['Receita']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cartipo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($receita['Cartipo']['id'], array('controller' => 'cartipos', 'action' => 'view', $receita['Cartipo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($receita['Usuario']['id'], array('controller' => 'usuarios', 'action' => 'view', $receita['Usuario']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($receita['Receita']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descr'); ?></dt>
		<dd>
			<?php echo h($receita['Receita']['descr']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valor Car'); ?></dt>
		<dd>
			<?php echo h($receita['Receita']['valor_car']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Pg'); ?></dt>
		<dd>
			<?php echo h($receita['Receita']['data_pg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Situacao'); ?></dt>
		<dd>
			<?php echo $this->Html->link($receita['Situacao']['id'], array('controller' => 'situacoes', 'action' => 'view', $receita['Situacao']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Receita'), array('action' => 'edit', $receita['Receita']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Receita'), array('action' => 'delete', $receita['Receita']['id']), null, __('Are you sure you want to delete # %s?', $receita['Receita']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Receitas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Receita'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cartipos'), array('controller' => 'cartipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cartipo'), array('controller' => 'cartipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Situacoes'), array('controller' => 'situacoes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Situacao'), array('controller' => 'situacoes', 'action' => 'add')); ?> </li>
	</ul>
</div>
