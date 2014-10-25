<div class="candidaturas index">
	<h2><?php echo __('Candidaturas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('co_candidatura'); ?></th>
			<th><?php echo $this->Paginator->sort('co_usuario'); ?></th>
			<th><?php echo $this->Paginator->sort('co_vagas'); ?></th>
			<th><?php echo $this->Paginator->sort('data_registro'); ?></th>
			<th><?php echo $this->Paginator->sort('data_atualizacao'); ?></th>
			<th><?php echo $this->Paginator->sort('data_cancelamento'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($candidaturas as $candidatura): ?>
	<tr>
		<td><?php echo h($candidatura['Candidatura']['co_candidatura']); ?>&nbsp;</td>
		<td><?php echo h($candidatura['Candidatura']['co_usuario']); ?>&nbsp;</td>
		<td><?php echo h($candidatura['Candidatura']['co_vagas']); ?>&nbsp;</td>
		<td><?php echo h($candidatura['Candidatura']['data_registro']); ?>&nbsp;</td>
		<td><?php echo h($candidatura['Candidatura']['data_atualizacao']); ?>&nbsp;</td>
		<td><?php echo h($candidatura['Candidatura']['data_cancelamento']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $candidatura['Candidatura']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $candidatura['Candidatura']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $candidatura['Candidatura']['id']), array(), __('Are you sure you want to delete # %s?', $candidatura['Candidatura']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Candidatura'), array('action' => 'add')); ?></li>
	</ul>
</div>
