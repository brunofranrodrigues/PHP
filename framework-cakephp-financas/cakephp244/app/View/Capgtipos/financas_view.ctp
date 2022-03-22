<div class="capgtipos view">
<h2><?php echo __('Capgtipo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($capgtipo['Capgtipo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($capgtipo['Capgtipo']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descr'); ?></dt>
		<dd>
			<?php echo h($capgtipo['Capgtipo']['descr']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Capgtipo'), array('action' => 'edit', $capgtipo['Capgtipo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Capgtipo'), array('action' => 'delete', $capgtipo['Capgtipo']['id']), null, __('Are you sure you want to delete # %s?', $capgtipo['Capgtipo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Capgtipos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Capgtipo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Despesas'), array('controller' => 'despesas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Despesa'), array('controller' => 'despesas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Despesas'); ?></h3>
	<?php if (!empty($capgtipo['Despesa'])): ?>
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
	<?php foreach ($capgtipo['Despesa'] as $despesa): ?>
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
