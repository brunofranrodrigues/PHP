<div class="balancetes view">
<h2><?php echo __('Balancete'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($balancete['Balancete']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data'); ?></dt>
		<dd>
			<?php echo h($balancete['Balancete']['data']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deporigem'); ?></dt>
		<dd>
			<?php echo h($balancete['Balancete']['deporigem']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Historico'); ?></dt>
		<dd>
			<?php echo h($balancete['Balancete']['historico']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Databalanco'); ?></dt>
		<dd>
			<?php echo h($balancete['Balancete']['databalanco']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numdoc'); ?></dt>
		<dd>
			<?php echo h($balancete['Balancete']['numdoc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valor'); ?></dt>
		<dd>
			<?php echo h($balancete['Balancete']['valor']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Balancete'), array('action' => 'edit', $balancete['Balancete']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Balancete'), array('action' => 'delete', $balancete['Balancete']['id']), null, __('Are you sure you want to delete # %s?', $balancete['Balancete']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Balancetes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Balancete'), array('action' => 'add')); ?> </li>
	</ul>
</div>
