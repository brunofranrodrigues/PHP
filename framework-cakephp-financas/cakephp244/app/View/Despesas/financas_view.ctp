<div class="despesas view">
<h2><?php echo __('Despesa'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($despesa['Despesa']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Capgtipo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($despesa['Capgtipo']['id'], array('controller' => 'capgtipos', 'action' => 'view', $despesa['Capgtipo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($despesa['Usuario']['id'], array('controller' => 'usuarios', 'action' => 'view', $despesa['Usuario']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($despesa['Despesa']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descr'); ?></dt>
		<dd>
			<?php echo h($despesa['Despesa']['descr']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Venc'); ?></dt>
		<dd>
			<?php echo h($despesa['Despesa']['data_venc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valor Capg'); ?></dt>
		<dd>
			<?php echo h($despesa['Despesa']['valor_capg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Pg'); ?></dt>
		<dd>
			<?php echo h($despesa['Despesa']['data_pg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Situacao'); ?></dt>
		<dd>
			<?php echo $this->Html->link($despesa['Situacao']['id'], array('controller' => 'situacoes', 'action' => 'view', $despesa['Situacao']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Despesa'), array('action' => 'edit', $despesa['Despesa']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Despesa'), array('action' => 'delete', $despesa['Despesa']['id']), null, __('Are you sure you want to delete # %s?', $despesa['Despesa']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Despesas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Despesa'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Capgtipos'), array('controller' => 'capgtipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Capgtipo'), array('controller' => 'capgtipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Situacoes'), array('controller' => 'situacoes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Situacao'), array('controller' => 'situacoes', 'action' => 'add')); ?> </li>
	</ul>
</div>
