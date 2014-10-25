<div class="pessoaPerfils view">
<h2><?php echo __('Pessoa Perfil'); ?></h2>
	<dl>
		<dt><?php echo __('Co Usuario'); ?></dt>
		<dd>
			<?php echo h($pessoaPerfil['PessoaPerfil']['co_usuario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Co Perfil'); ?></dt>
		<dd>
			<?php echo h($pessoaPerfil['PessoaPerfil']['co_perfil']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Criacao'); ?></dt>
		<dd>
			<?php echo h($pessoaPerfil['PessoaPerfil']['data_criacao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Atualizacao'); ?></dt>
		<dd>
			<?php echo h($pessoaPerfil['PessoaPerfil']['data_atualizacao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Cancelamento'); ?></dt>
		<dd>
			<?php echo h($pessoaPerfil['PessoaPerfil']['data_cancelamento']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Pessoa Perfil'), array('action' => 'edit', $pessoaPerfil['PessoaPerfil']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Pessoa Perfil'), array('action' => 'delete', $pessoaPerfil['PessoaPerfil']['id']), array(), __('Are you sure you want to delete # %s?', $pessoaPerfil['PessoaPerfil']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pessoa Perfils'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pessoa Perfil'), array('action' => 'add')); ?> </li>
	</ul>
</div>
