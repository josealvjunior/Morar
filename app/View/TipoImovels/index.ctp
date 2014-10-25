<div class="tipoImovels index">
	<h2><?php echo __('Tipo Imovels'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('tipo_imovel_id'); ?></th>
			<th><?php echo $this->Paginator->sort('descricao'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($tipoImovels as $tipoImovel): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($tipoImovel['TipoImovel']['tipo_imovel_id'], array('controller' => 'tipo_imovels', 'action' => 'view', $tipoImovel['TipoImovel']['tipo_imovel_id'])); ?>
		</td>
		<td><?php echo h($tipoImovel['TipoImovel']['descricao']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $tipoImovel['TipoImovel']['tipo_imovel_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $tipoImovel['TipoImovel']['tipo_imovel_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $tipoImovel['TipoImovel']['tipo_imovel_id']), array(), __('Are you sure you want to delete # %s?', $tipoImovel['TipoImovel']['tipo_imovel_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Tipo Imovel'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Tipo Imovels'), array('controller' => 'tipo_imovels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Imovel'), array('controller' => 'tipo_imovels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Imovels'), array('controller' => 'imovels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Imovel'), array('controller' => 'imovels', 'action' => 'add')); ?> </li>
	</ul>
</div>
