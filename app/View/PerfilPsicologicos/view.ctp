<div class="perfilPsicologicos view">
<h2><?php echo __('Perfil Psicologico'); ?></h2>
	<dl>
		<dt><?php echo __('Co Perfil Psicologico'); ?></dt>
		<dd>
			<?php echo h($perfilPsicologico['PerfilPsicologico']['co_perfil_psicologico']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($perfilPsicologico['PerfilPsicologico']['Descricao']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Perfil Psicologico'), array('action' => 'edit', $perfilPsicologico['PerfilPsicologico']['co_perfil_psicologico'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Perfil Psicologico'), array('action' => 'delete', $perfilPsicologico['PerfilPsicologico']['co_perfil_psicologico']), array(), __('Are you sure you want to delete # %s?', $perfilPsicologico['PerfilPsicologico']['co_perfil_psicologico'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Perfil Psicologicos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Perfil Psicologico'), array('action' => 'add')); ?> </li>
	</ul>
</div>
