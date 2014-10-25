<div class="vagas view">
<h2><?php echo __('Vaga'); ?></h2>
	<dl>
		<dt><?php echo __('Co Vagas'); ?></dt>
		<dd>
			<?php echo h($vaga['Vaga']['co_vagas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Co Imovel'); ?></dt>
		<dd>
			<?php echo h($vaga['Vaga']['co_Imovel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ide Vaga'); ?></dt>
		<dd>
			<?php echo h($vaga['Vaga']['ide_vaga']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Registro'); ?></dt>
		<dd>
			<?php echo h($vaga['Vaga']['data_registro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Atualizacao'); ?></dt>
		<dd>
			<?php echo h($vaga['Vaga']['data_atualizacao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Cancelamento'); ?></dt>
		<dd>
			<?php echo h($vaga['Vaga']['data_cancelamento']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Vaga'), array('action' => 'edit', $vaga['Vaga']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Vaga'), array('action' => 'delete', $vaga['Vaga']['id']), array(), __('Are you sure you want to delete # %s?', $vaga['Vaga']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Vagas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vaga'), array('action' => 'add')); ?> </li>
	</ul>
</div>
