<div class="tiposQuartos view">
<h2><?php echo __('Tipos Quarto'); ?></h2>
	<dl>
		<dt><?php echo __('Co Tipos Quartos'); ?></dt>
		<dd>
			<?php echo h($tiposQuarto['TiposQuarto']['co_tipos_quartos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($tiposQuarto['TiposQuarto']['descricao']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tipos Quarto'), array('action' => 'edit', $tiposQuarto['TiposQuarto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tipos Quarto'), array('action' => 'delete', $tiposQuarto['TiposQuarto']['id']), array(), __('Are you sure you want to delete # %s?', $tiposQuarto['TiposQuarto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipos Quartos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipos Quarto'), array('action' => 'add')); ?> </li>
	</ul>
</div>
