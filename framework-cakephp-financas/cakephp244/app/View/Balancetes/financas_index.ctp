<?php echo $this->element('menu'); ?>
<div id="conteudo">
<div class="wrapper">
<div class="balancetes index">
	<h2><?php echo __('Balancetes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('data'); ?></th>
			<th><?php echo $this->Paginator->sort('deporigem'); ?></th>
			<th><?php echo $this->Paginator->sort('historico'); ?></th>
			<th><?php echo $this->Paginator->sort('databalanco'); ?></th>
			<th><?php echo $this->Paginator->sort('numdoc'); ?></th>
			<th><?php echo $this->Paginator->sort('valor'); ?></th>
			<th><?php echo $this->Paginator->sort('Situacoes'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($balancetes as $balancete): ?>
	<tr>
		<td><?php echo h($balancete['Balancete']['id']); ?>&nbsp;</td>
		<td><?php echo h($balancete['Balancete']['data']); ?>&nbsp;</td>
		<td><?php echo h($balancete['Balancete']['deporigem']); ?>&nbsp;</td>
		<td><?php echo h($balancete['Balancete']['historico']); ?>&nbsp;</td>
		<td><?php echo h($balancete['Balancete']['databalanco']); ?>&nbsp;</td>
		<td><?php echo h($balancete['Balancete']['numdoc']); ?>&nbsp;</td>
		<td><?php echo h($balancete['Balancete']['valor']); ?>&nbsp;</td>
			<td><?php echo h($balancete['Situacao']['nome']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $balancete['Balancete']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $balancete['Balancete']['id']), null, __('Are you sure you want to delete # %s?', $balancete['Balancete']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>