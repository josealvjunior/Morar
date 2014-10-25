<div class="bairros view">
<h2><?php echo __('Bairro'); ?></h2>
	<dl>
		<dt><?php echo __('Co Bairros'); ?></dt>
		<dd>
			<?php echo h($bairro['Bairro']['co_bairros']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Co Regionais'); ?></dt>
		<dd>
			<?php echo h($bairro['Bairro']['co_regionais']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($bairro['Bairro']['descricao']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Bairro'), array('action' => 'edit', $bairro['Bairro']['co_bairros'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Bairro'), array('action' => 'delete', $bairro['Bairro']['co_bairros']), array(), __('Are you sure you want to delete # %s?', $bairro['Bairro']['co_bairros'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Bairros'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bairro'), array('action' => 'add')); ?> </li>
	</ul>
</div>
