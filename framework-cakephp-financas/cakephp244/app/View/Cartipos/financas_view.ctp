<div class="cartipos view">
<h2><?php echo __('Cartipo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cartipo['Cartipo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($cartipo['Cartipo']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descr'); ?></dt>
		<dd>
			<?php echo h($cartipo['Cartipo']['descr']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cartipo'), array('action' => 'edit', $cartipo['Cartipo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cartipo'), array('action' => 'delete', $cartipo['Cartipo']['id']), null, __('Are you sure you want to delete # %s?', $cartipo['Cartipo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cartipos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cartipo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Receitas'), array('controller' => 'receitas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Receita'), array('controller' => 'receitas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Receitas'); ?></h3>
	<?php if (!empty($cartipo['Receita'])): ?>
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
	<?php foreach ($cartipo['Receita'] as $receita): ?>
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
