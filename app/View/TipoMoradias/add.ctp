<div class="tipoMoradias form">
<?php echo $this->Form->create('TipoMoradia'); ?>
	<fieldset>
		<legend><?php echo __('Add Tipo Moradia'); ?></legend>
	<?php
		echo $this->Form->input('co_tipo_moradia');
		echo $this->Form->input('descricao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tipo Moradias'), array('action' => 'index')); ?></li>
	</ul>
</div>
