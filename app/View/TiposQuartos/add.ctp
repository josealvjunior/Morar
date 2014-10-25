<div class="tiposQuartos form">
<?php echo $this->Form->create('TiposQuarto'); ?>
	<fieldset>
		<legend><?php echo __('Add Tipos Quarto'); ?></legend>
	<?php
		echo $this->Form->input('co_tipos_quartos');
		echo $this->Form->input('descricao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tipos Quartos'), array('action' => 'index')); ?></li>
	</ul>
</div>
