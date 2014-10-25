<div class="candidaturas form">
<?php echo $this->Form->create('Candidatura'); ?>
	<fieldset>
		<legend><?php echo __('Add Candidatura'); ?></legend>
	<?php
		echo $this->Form->input('co_candidatura');
		echo $this->Form->input('co_usuario');
		echo $this->Form->input('co_vagas');
		echo $this->Form->input('data_registro');
		echo $this->Form->input('data_atualizacao');
		echo $this->Form->input('data_cancelamento');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Candidaturas'), array('action' => 'index')); ?></li>
	</ul>
</div>
