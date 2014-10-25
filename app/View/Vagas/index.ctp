<div class="vagas index">
	<h2><?php echo __('Vagas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('co_vagas'); ?></th>
			<th><?php echo $this->Paginator->sort('co_Imovel'); ?></th>
			<th><?php echo $this->Paginator->sort('ide_vaga'); ?></th>
			<th><?php echo $this->Paginator->sort('data_registro'); ?></th>
			<th><?php echo $this->Paginator->sort('data_atualizacao'); ?></th>
			<th><?php echo $this->Paginator->sort('data_cancelamento'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($vagas as $vaga): ?>
	<tr>
		<td><?php echo h($vaga['Vaga']['co_vagas']); ?>&nbsp;</td>
		<td><?php echo h($vaga['Vaga']['co_Imovel']); ?>&nbsp;</td>
		<td><?php echo h($vaga['Vaga']['ide_vaga']); ?>&nbsp;</td>
		<td><?php echo h($vaga['Vaga']['data_registro']); ?>&nbsp;</td>
		<td><?php echo h($vaga['Vaga']['data_atualizacao']); ?>&nbsp;</td>
		<td><?php echo h($vaga['Vaga']['data_cancelamento']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $vaga['Vaga']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $vaga['Vaga']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $vaga['Vaga']['id']), array(), __('Are you sure you want to delete # %s?', $vaga['Vaga']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Vaga'), array('action' => 'add')); ?></li>
	</ul>
</div>
