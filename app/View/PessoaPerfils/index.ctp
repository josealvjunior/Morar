<div class="pessoaPerfils index">
	<h2><?php echo __('Pessoa Perfils'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('co_usuario'); ?></th>
			<th><?php echo $this->Paginator->sort('co_perfil'); ?></th>
			<th><?php echo $this->Paginator->sort('data_criacao'); ?></th>
			<th><?php echo $this->Paginator->sort('data_atualizacao'); ?></th>
			<th><?php echo $this->Paginator->sort('data_cancelamento'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($pessoaPerfils as $pessoaPerfil): ?>
	<tr>
		<td><?php echo h($pessoaPerfil['PessoaPerfil']['co_usuario']); ?>&nbsp;</td>
		<td><?php echo h($pessoaPerfil['PessoaPerfil']['co_perfil']); ?>&nbsp;</td>
		<td><?php echo h($pessoaPerfil['PessoaPerfil']['data_criacao']); ?>&nbsp;</td>
		<td><?php echo h($pessoaPerfil['PessoaPerfil']['data_atualizacao']); ?>&nbsp;</td>
		<td><?php echo h($pessoaPerfil['PessoaPerfil']['data_cancelamento']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $pessoaPerfil['PessoaPerfil']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $pessoaPerfil['PessoaPerfil']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $pessoaPerfil['PessoaPerfil']['id']), array(), __('Are you sure you want to delete # %s?', $pessoaPerfil['PessoaPerfil']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Pessoa Perfil'), array('action' => 'add')); ?></li>
	</ul>
</div>
