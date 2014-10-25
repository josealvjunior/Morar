<div class="perfilPsicologicos index">
	<h2><?php echo __('Perfil Psicologicos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('co_perfil_psicologico'); ?></th>
			<th><?php echo $this->Paginator->sort('Descricao'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($perfilPsicologicos as $perfilPsicologico): ?>
	<tr>
		<td><?php echo h($perfilPsicologico['PerfilPsicologico']['co_perfil_psicologico']); ?>&nbsp;</td>
		<td><?php echo h($perfilPsicologico['PerfilPsicologico']['Descricao']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $perfilPsicologico['PerfilPsicologico']['co_perfil_psicologico'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $perfilPsicologico['PerfilPsicologico']['co_perfil_psicologico'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $perfilPsicologico['PerfilPsicologico']['co_perfil_psicologico']), array(), __('Are you sure you want to delete # %s?', $perfilPsicologico['PerfilPsicologico']['co_perfil_psicologico'])); ?>
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
		<li><?php echo $this->Html->link(__('New Perfil Psicologico'), array('action' => 'add')); ?></li>
	</ul>
</div>
