<div class="pessoaPerfils form">
<?php echo $this->Form->create('PessoaPerfil'); ?>
	<fieldset>
		<legend><?php echo __('Edit Pessoa Perfil'); ?></legend>
	<?php
		echo $this->Form->input('co_usuario');
		echo $this->Form->input('co_perfil');
		echo $this->Form->input('data_criacao');
		echo $this->Form->input('data_atualizacao');
		echo $this->Form->input('data_cancelamento');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PessoaPerfil.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('PessoaPerfil.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Pessoa Perfils'), array('action' => 'index')); ?></li>
	</ul>
</div>
