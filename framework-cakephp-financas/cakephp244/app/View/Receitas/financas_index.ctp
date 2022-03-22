<?php echo $this->element('menu'); ?>
<div id="conteudo">
<div class="wrapper">
<div class="receitas index">
	<h2><?php echo __('Receitas'); ?></h2>
	<table width="800" border="1" cellspacing="0" cellpadding="0">
	<tr>
		<th>ID</th>
		<th>Conta a receber</th>
		<th>Usuario</th>
		<th>Nome</th>
		<th>Descricao</th>
		<th>Valor</th>
		<th>Data de cred</th>
		<th>Situacao</th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($receitas as $receita): ?>
	<tr>
		<td><?php echo h($receita['Receita']['id']); ?>&nbsp;</td>
		<td><?php echo h($receita['Cartipo']['nome']); ?>&nbsp;</td>
		<td><?php echo h($receita['Usuario']['nome']); ?>&nbsp;</td>
		<td><?php echo h($receita['Receita']['nome']); ?>&nbsp;</td>
		<td><?php echo h($receita['Receita']['descr']); ?>&nbsp;</td>
		<td><?php echo h($receita['Receita']['valor_car']); ?>&nbsp;</td>
		<td><?php echo h($receita['Receita']['data_pg']); ?>&nbsp;</td>
		<td><?php echo h($receita['Situacao']['nome']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $receita['Receita']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $receita['Receita']['id']), null, __('Are you sure you want to delete # %s?', $receita['Receita']['id'])); ?>
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