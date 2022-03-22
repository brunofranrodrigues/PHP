<?php echo $this->element('menu'); ?>
<div id="conteudo">
<div class="wrapper">
<div class="despesas index">
	<h2><?php echo __('Despesas'); ?></h2>
	<table width="800" border="1" cellspacing="0" cellpadding="0">
	<tr>
		<th>ID</th>
		<th>Conta a pagar</th>
		<th>Usuario</th>
		<th>Nome</th>
		<th>Descricao</th>
		<th>Data de venc</th>
		<th>Valor</th>
		<th>Data de pag</th>
		<th>Situacao</th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($despesas as $despesa): ?>
	<tr>
		<td><?php echo h($despesa['Despesa']['id']); ?>&nbsp;</td>
		<td>
			<td><?php echo h($despesa['Capgtipo']['nome']); ?>&nbsp;</td>
		</td>
		<td>
			<td><?php echo h($despesa['Usuario']['nome']); ?>&nbsp;</td>
		</td>
		<td><?php echo h($despesa['Despesa']['nome']); ?>&nbsp;</td>
		<td><?php echo h($despesa['Despesa']['descr']); ?>&nbsp;</td>
		<td><?php echo h($despesa['Despesa']['data_venc']); ?>&nbsp;</td>
		<td><?php echo h($despesa['Despesa']['valor_capg']); ?>&nbsp;</td>
		<td><?php echo h($despesa['Despesa']['data_pg']); ?>&nbsp;</td>
		<td><?php echo h($despesa['Situacao']['nome']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $despesa['Despesa']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $despesa['Despesa']['id']), null, __('Are you sure you want to delete # %s?', $despesa['Despesa']['id'])); ?>
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