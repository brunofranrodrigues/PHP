<div class="usuarios view">
<h2><?php echo __('Usuario'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Senha'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['senha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Perfil'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['perfil']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Usuario'), array('action' => 'edit', $usuario['Usuario']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Usuario'), array('action' => 'delete', $usuario['Usuario']['id']), null, __('Are you sure you want to delete # %s?', $usuario['Usuario']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Despesas'), array('controller' => 'despesas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Despesa'), array('controller' => 'despesas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Receitas'), array('controller' => 'receitas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Receita'), array('controller' => 'receitas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Despesas'); ?></h3>
	<?php if (!empty($usuario['Despesa'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Capgtipo Id'); ?></th>
		<th><?php echo __('Usuario Id'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th><?php echo __('Descr'); ?></th>
		<th><?php echo __('Data Venc'); ?></th>
		<th><?php echo __('Valor Capg'); ?></th>
		<th><?php echo __('Data Pg'); ?></th>
		<th><?php echo __('Situacao Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($usuario['Despesa'] as $despesa): ?>
		<tr>
			<td><?php echo $despesa['id']; ?></td>
			<td><?php echo $despesa['capgtipo_id']; ?></td>
			<td><?php echo $despesa['usuario_id']; ?></td>
			<td><?php echo $despesa['nome']; ?></td>
			<td><?php echo $despesa['descr']; ?></td>
			<td><?php echo $despesa['data_venc']; ?></td>
			<td><?php echo $despesa['valor_capg']; ?></td>
			<td><?php echo $despesa['data_pg']; ?></td>
			<td><?php echo $despesa['situacao_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'despesas', 'action' => 'view', $despesa['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'despesas', 'action' => 'edit', $despesa['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'despesas', 'action' => 'delete', $despesa['id']), null, __('Are you sure you want to delete # %s?', $despesa['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Despesa'), array('controller' => 'despesas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Receitas'); ?></h3>
	<?php if (!empty($usuario['Receita'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Cartipo Id'); ?></th>
		<th><?php echo __('Usuario Id'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th><?php echo __('Descr'); ?></th>
		<th><?php echo __('Valor Car'); ?></th>
		<th><?php echo __('Data Pg'); ?></th>
		<th><?php echo __('Situacao Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($usuario['Receita'] as $receita): ?>
		<tr>
			<td><?php echo $receita['id']; ?></td>
			<td><?php echo $receita['cartipo_id']; ?></td>
			<td><?php echo $receita['usuario_id']; ?></td>
			<td><?php echo $receita['nome']; ?></td>
			<td><?php echo $receita['descr']; ?></td>
			<td><?php echo $receita['valor_car']; ?></td>
			<td><?php echo $receita['data_pg']; ?></td>
			<td><?php echo $receita['situacao_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'receitas', 'action' => 'view', $receita['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'receitas', 'action' => 'edit', $receita['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'receitas', 'action' => 'delete', $receita['id']), null, __('Are you sure you want to delete # %s?', $receita['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Receita'), array('controller' => 'receitas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
