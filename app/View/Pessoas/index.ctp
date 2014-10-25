<div class="pessoas index">
	<h2><?php echo __('Pessoas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('co_usuario'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('senha'); ?></th>
			<th><?php echo $this->Paginator->sort('telefone'); ?></th>
			<th><?php echo $this->Paginator->sort('sexo'); ?></th>
			<th><?php echo $this->Paginator->sort('data_atualizacao'); ?></th>
			<th><?php echo $this->Paginator->sort('data_Criacao'); ?></th>
			<th><?php echo $this->Paginator->sort('data_Cancelamento'); ?></th>
			<th><?php echo $this->Paginator->sort('data_Nascimento'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($pessoas as $pessoa): ?>
	<tr>
		<td><?php echo h($pessoa['Pessoa']['co_usuario']); ?>&nbsp;</td>
		<td><?php echo h($pessoa['Pessoa']['nome']); ?>&nbsp;</td>
		<td><?php echo h($pessoa['Pessoa']['email']); ?>&nbsp;</td>
		<td><?php echo h($pessoa['Pessoa']['senha']); ?>&nbsp;</td>
		<td><?php echo h($pessoa['Pessoa']['telefone']); ?>&nbsp;</td>
		<td><?php echo h($pessoa['Pessoa']['sexo']); ?>&nbsp;</td>
		<td><?php echo h($pessoa['Pessoa']['data_atualizacao']); ?>&nbsp;</td>
		<td><?php echo h($pessoa['Pessoa']['data_Criacao']); ?>&nbsp;</td>
		<td><?php echo h($pessoa['Pessoa']['data_Cancelamento']); ?>&nbsp;</td>
		<td><?php echo h($pessoa['Pessoa']['data_Nascimento']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $pessoa['Pessoa']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $pessoa['Pessoa']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $pessoa['Pessoa']['id']), array(), __('Are you sure you want to delete # %s?', $pessoa['Pessoa']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Pessoa'), array('action' => 'add')); ?></li>
	</ul>
</div>
