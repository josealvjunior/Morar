<div class="perfilPsicologicos form">
<?php echo $this->Form->create('PerfilPsicologico'); ?>
	<fieldset>
		<legend><?php echo __('Add Perfil Psicologico'); ?></legend>
	<?php
		echo $this->Form->input('Descricao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Perfil Psicologicos'), array('action' => 'index')); ?></li>
	</ul>
</div>
