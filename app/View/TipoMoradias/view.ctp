<div class="tipoMoradias view">
<h2><?php echo __('Tipo Moradia'); ?></h2>
	<dl>
		<dt><?php echo __('Co Tipo Moradia'); ?></dt>
		<dd>
			<?php echo h($tipoMoradia['TipoMoradia']['co_tipo_moradia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($tipoMoradia['TipoMoradia']['descricao']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tipo Moradia'), array('action' => 'edit', $tipoMoradia['TipoMoradia']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tipo Moradia'), array('action' => 'delete', $tipoMoradia['TipoMoradia']['id']), array(), __('Are you sure you want to delete # %s?', $tipoMoradia['TipoMoradia']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo Moradias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Moradia'), array('action' => 'add')); ?> </li>
	</ul>
</div>
