<div class="faixaPrecos view">
<h2><?php echo __('Faixa Preco'); ?></h2>
	<dl>
		<dt><?php echo __('Co Faixa Preco'); ?></dt>
		<dd>
			<?php echo h($faixaPreco['FaixaPreco']['co_faixa_preco']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($faixaPreco['FaixaPreco']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Max Valor'); ?></dt>
		<dd>
			<?php echo h($faixaPreco['FaixaPreco']['max_Valor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Min Valor'); ?></dt>
		<dd>
			<?php echo h($faixaPreco['FaixaPreco']['min_Valor']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Faixa Preco'), array('action' => 'edit', $faixaPreco['FaixaPreco']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Faixa Preco'), array('action' => 'delete', $faixaPreco['FaixaPreco']['id']), array(), __('Are you sure you want to delete # %s?', $faixaPreco['FaixaPreco']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Faixa Precos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Faixa Preco'), array('action' => 'add')); ?> </li>
	</ul>
</div>
