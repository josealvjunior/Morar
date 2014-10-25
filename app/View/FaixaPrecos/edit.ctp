<div class="faixaPrecos form">
<?php echo $this->Form->create('FaixaPreco'); ?>
	<fieldset>
		<legend><?php echo __('Edit Faixa Preco'); ?></legend>
	<?php
		echo $this->Form->input('co_faixa_preco');
		echo $this->Form->input('descricao');
		echo $this->Form->input('max_Valor');
		echo $this->Form->input('min_Valor');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('FaixaPreco.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('FaixaPreco.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Faixa Precos'), array('action' => 'index')); ?></li>
	</ul>
</div>
