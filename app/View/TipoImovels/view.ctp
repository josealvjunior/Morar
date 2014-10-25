<div class="tipoImovels view">
<h2><?php echo __('Tipo Imovel'); ?></h2>
	<dl>
		<dt><?php echo __('Tipo Imovel'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tipoImovel['TipoImovel']['tipo_imovel_id'], array('controller' => 'tipo_imovels', 'action' => 'view', $tipoImovel['TipoImovel']['tipo_imovel_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($tipoImovel['TipoImovel']['descricao']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tipo Imovel'), array('action' => 'edit', $tipoImovel['TipoImovel']['tipo_imovel_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tipo Imovel'), array('action' => 'delete', $tipoImovel['TipoImovel']['tipo_imovel_id']), array(), __('Are you sure you want to delete # %s?', $tipoImovel['TipoImovel']['tipo_imovel_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo Imovels'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Imovel'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo Imovels'), array('controller' => 'tipo_imovels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Imovel'), array('controller' => 'tipo_imovels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Imovels'), array('controller' => 'imovels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Imovel'), array('controller' => 'imovels', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Imovels'); ?></h3>
	<?php if (!empty($tipoImovel['Imovel'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Co Imovel'); ?></th>
		<th><?php echo __('Co Usuario'); ?></th>
		<th><?php echo __('Tipo Imovel Id'); ?></th>
		<th><?php echo __('Valor Aluguel'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tipoImovel['Imovel'] as $imovel): ?>
		<tr>
			<td><?php echo $imovel['co_imovel']; ?></td>
			<td><?php echo $imovel['co_usuario']; ?></td>
			<td><?php echo $imovel['tipo_imovel_id']; ?></td>
			<td><?php echo $imovel['Valor_Aluguel']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'imovels', 'action' => 'view', $imovel['co_imovel'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'imovels', 'action' => 'edit', $imovel['co_imovel'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'imovels', 'action' => 'delete', $imovel['co_imovel']), array(), __('Are you sure you want to delete # %s?', $imovel['co_imovel'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Imovel'), array('controller' => 'imovels', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>