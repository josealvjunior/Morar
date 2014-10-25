<div class="regionaisBairros form">
<?php echo $this->Form->create('RegionaisBairro'); ?>
	<fieldset>
		<legend><?php echo __('Add Regionais Bairro'); ?></legend>
	<?php
		echo $this->Form->input('co_regionais');
		echo $this->Form->input('descricao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Regionais Bairros'), array('action' => 'index')); ?></li>
	</ul>
</div>
