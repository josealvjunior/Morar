<div class="vagas form">
<?php echo $this->Form->create('Vaga'); ?>
	<fieldset>
		<legend><?php echo __('Add Vaga'); ?></legend>
	<?php
		echo $this->Form->input('co_vagas');
		echo $this->Form->input('co_Imovel');
		echo $this->Form->input('ide_vaga');
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

		<li><?php echo $this->Html->link(__('List Vagas'), array('action' => 'index')); ?></li>
	</ul>
</div>
