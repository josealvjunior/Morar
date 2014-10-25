<div class="regionaisBairros view">
<h2><?php echo __('Regionais Bairro'); ?></h2>
	<dl>
		<dt><?php echo __('Co Regionais'); ?></dt>
		<dd>
			<?php echo h($regionaisBairro['RegionaisBairro']['co_regionais']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($regionaisBairro['RegionaisBairro']['descricao']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Regionais Bairro'), array('action' => 'edit', $regionaisBairro['RegionaisBairro']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Regionais Bairro'), array('action' => 'delete', $regionaisBairro['RegionaisBairro']['id']), array(), __('Are you sure you want to delete # %s?', $regionaisBairro['RegionaisBairro']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Regionais Bairros'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Regionais Bairro'), array('action' => 'add')); ?> </li>
	</ul>
</div>
