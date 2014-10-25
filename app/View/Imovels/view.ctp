<div class="imovels view">
<h2><?php echo __('Imovel'); ?></h2>
	<dl>
		<dt><?php echo __('Co Imovel'); ?></dt>
		<dd>
			<?php echo h($imovel['Imovel']['co_imovel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Co Usuario'); ?></dt>
		<dd>
			<?php echo h($imovel['Imovel']['co_usuario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo Imovel'); ?></dt>
		<dd>
			<?php echo $this->Html->link($imovel['TipoImovel']['tipo_imovel_id'], array('controller' => 'tipo_imovels', 'action' => 'view', $imovel['TipoImovel']['tipo_imovel_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valor Aluguel'); ?></dt>
		<dd>
			<?php echo h($imovel['Imovel']['Valor_Aluguel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Co Bairros'); ?></dt>
		<dd>
			<?php echo h($imovel['Imovel']['co_bairros']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Co Tipo Moradia'); ?></dt>
		<dd>
			<?php echo h($imovel['Imovel']['co_tipo_moradia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Co Tipos Quartos'); ?></dt>
		<dd>
			<?php echo h($imovel['Imovel']['co_tipos_quartos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Co Perfil Pisicologico'); ?></dt>
		<dd>
			<?php echo h($imovel['Imovel']['co_perfil_pisicologico']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Co Faixa Preco'); ?></dt>
		<dd>
			<?php echo h($imovel['Imovel']['co_faixa_preco']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fumante'); ?></dt>
		<dd>
			<?php echo h($imovel['Imovel']['fumante']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Animal'); ?></dt>
		<dd>
			<?php echo h($imovel['Imovel']['animal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mobiliado'); ?></dt>
		<dd>
			<?php echo h($imovel['Imovel']['mobiliado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Imagem'); ?></dt>
		<dd>
			<?php echo h($imovel['Imovel']['imagem']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($imovel['Imovel']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Criacao'); ?></dt>
		<dd>
			<?php echo h($imovel['Imovel']['data_Criacao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Atualizacao'); ?></dt>
		<dd>
			<?php echo h($imovel['Imovel']['data_atualizacao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Cancelamento'); ?></dt>
		<dd>
			<?php echo h($imovel['Imovel']['data_cancelamento']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Imovel'), array('action' => 'edit', $imovel['Imovel']['co_imovel'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Imovel'), array('action' => 'delete', $imovel['Imovel']['co_imovel']), array(), __('Are you sure you want to delete # %s?', $imovel['Imovel']['co_imovel'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Imovels'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Imovel'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo Imovels'), array('controller' => 'tipo_imovels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Imovel'), array('controller' => 'tipo_imovels', 'action' => 'add')); ?> </li>
	</ul>
</div>
