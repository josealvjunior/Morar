<div class="candidaturas view">
<h2><?php echo __('Candidatura'); ?></h2>
	<dl>
		<dt><?php echo __('Co Candidatura'); ?></dt>
		<dd>
			<?php echo h($candidatura['Candidatura']['co_candidatura']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Co Usuario'); ?></dt>
		<dd>
			<?php echo h($candidatura['Candidatura']['co_usuario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Co Vagas'); ?></dt>
		<dd>
			<?php echo h($candidatura['Candidatura']['co_vagas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Registro'); ?></dt>
		<dd>
			<?php echo h($candidatura['Candidatura']['data_registro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Atualizacao'); ?></dt>
		<dd>
			<?php echo h($candidatura['Candidatura']['data_atualizacao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Cancelamento'); ?></dt>
		<dd>
			<?php echo h($candidatura['Candidatura']['data_cancelamento']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Candidatura'), array('action' => 'edit', $candidatura['Candidatura']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Candidatura'), array('action' => 'delete', $candidatura['Candidatura']['id']), array(), __('Are you sure you want to delete # %s?', $candidatura['Candidatura']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Candidaturas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Candidatura'), array('action' => 'add')); ?> </li>
	</ul>
</div>
