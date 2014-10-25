<div class="tipoImovels form">
<?php echo $this->Form->create('TipoImovel'); ?>
	<fieldset>
		<legend><?php echo __('Edit Tipo Imovel'); ?></legend>
	<?php
		echo $this->Form->input('tipo_imovel_id');
		echo $this->Form->input('descricao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('TipoImovel.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('TipoImovel.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tipo Imovels'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tipo Imovels'), array('controller' => 'tipo_imovels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Imovel'), array('controller' => 'tipo_imovels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Imovels'), array('controller' => 'imovels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Imovel'), array('controller' => 'imovels', 'action' => 'add')); ?> </li>
	</ul>
</div>
