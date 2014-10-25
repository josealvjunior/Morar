<div class="pessoas form">
<?php echo $this->Form->create('Pessoa'); ?>
	<fieldset>
		<legend><?php echo __('Edit Pessoa'); ?></legend>
	<?php
		echo $this->Form->input('co_usuario');
		echo $this->Form->input('nome');
		echo $this->Form->input('email');
		echo $this->Form->input('senha');
		echo $this->Form->input('telefone');
		echo $this->Form->input('sexo');
		echo $this->Form->input('data_atualizacao');
		echo $this->Form->input('data_Criacao');
		echo $this->Form->input('data_Cancelamento');
		echo $this->Form->input('data_Nascimento');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Pessoa.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Pessoa.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Pessoas'), array('action' => 'index')); ?></li>
	</ul>
</div>
