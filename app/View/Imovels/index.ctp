<?php echo $this->element('topoSistema');?>

<div class="sub-header-2">
	<div class="container">
		<div class="navbar-header">
			<h3>Meus anúncios</h3>	
		</div>		
	</div>
</div>
<div class="container2">
	<div class="row">
		<div class="col-md-3">
			<div class="row">
				<?php echo $this->element('sidebarSistema');?>
			</div>
		</div>
		<div class="col-md-9">
			<div class="row">
				<div class="col-md-12">
					<?php foreach ($imovels as $imovel): ?>
						<div class="imovel-horizontal box-branco">
							<div class="col-md-6">
								<?php echo $this->Html->image('2.jpg');?>
							</div>
							<div class="col-md-3">
		                        <h3>R$ <?php echo $imovel['Imovel']['Valor_Aluguel']; ?></h3>
		                        <p><span style="font-weight: 700">Bairro:</span> <?php echo $imovel['Bairro']['descricao']; ?></p>
		                        <p><span style="font-weight: 700">Imóvel:</span> <?php echo $imovel['TipoImovel']['descricao']; ?></p>
		                        <p><span style="font-weight: 700">Vaga:</span> <?php echo $imovel['TiposQuarto']['descricao']; ?></p>
		                        <p><span style="font-weight: 700">Gênero:</span> <?php echo $imovel['TipoMoradia']['descricao']; ?></p>
							</div>
							<div class="col-md-3">
								
								<a data-toggle="modal" data-target="#detalhes<?php echo $imovel['Imovel']['co_imovel']; ?>" class="btn btn-group-justified bgverde btn-primary"><span class="glyphicon glyphicon-search"></span>  Mais detalhes</a>
								
								<?php
									echo $this->Html->link(
									$this->Html->tag('span', '', array('class' => 'glyphicon glyphicon-pencil')) . " Editar anúncio",
									array('action' => 'edit', $imovel['Imovel']['co_imovel']),
									array('class' => 'btn btn-group-justified bgverde btn-primary', 'escape' => false)
									);
								?>
								
								<a data-toggle="modal" data-target="#editar<?php echo $imovel['Imovel']['co_imovel']; ?>" class="btn btn-group-justified bgverde btn-primary"><span class="glyphicon glyphicon-user"></span>  Candidatos</a>

								<?php
									echo $this->Form->postLink(
									$this->Html->tag('span', '', array('class' => 'glyphicon glyphicon-remove')) . " Excluir anúncio",
									array('action' => 'delete', $imovel['Imovel']['co_imovel']),
									array('class' => 'btn btn-group-justified bgverde btn-danger', 'escape' => false),
									__('Você tem certeza de que deseja excluir esse imóvel?', $imovel['Imovel']['co_imovel'])
									);
								?>

							</div>
						</div>

						<!-- Modal imovel-->
						<div class="modal fade bs-example-modal-sm" id="detalhes<?php echo $imovel['Imovel']['co_imovel']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog  modal-lg">
								<div class="modal-content">
									<div class="modal-header center color-default">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h3 class="modal-title" id="myModalLabel">Detalhes do imóvel</h3>
									</div>

									<div class="imovel">
										<div class="row">
											<div class="col-md-8">
												<img src="<?php echo $this->webroot;?>/img/1.jpg">
											</div>
											<div class="col-md-4">
												<h2>R$ <?php echo $imovel['Imovel']['Valor_Aluguel']; ?></h2>
												<p><span style="font-weight: 700">Bairro:</span> <?php echo $imovel['Bairro']['descricao']; ?></p>
												<p><span style="font-weight: 700">Imóvel:</span> <?php echo $imovel['TipoImovel']['descricao']; ?></p>
												<p><span style="font-weight: 700">Vaga:</span> <?php echo $imovel['TiposQuarto']['descricao']; ?></p>
												<p><span style="font-weight: 700">Gênero:</span> <?php echo $imovel['TipoMoradia']['descricao']; ?></p>
												<p><span style="font-weight: 700">Fumantes:</span> <?php echo $imovel['Imovel']['fumante']; ?></p>
												<p><span style="font-weight: 700">Animais:</span> <?php echo $imovel['Imovel']['animal']; ?></p>
												<p><span style="font-weight: 700">Mobília:</span> <?php echo $imovel['Imovel']['mobiliado']; ?></p>
												<button type="button" class="btn btn-lg btn-primary">Candidatar-se</button>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="panel panel-default">
													<div class="panel-heading">
														<h3 class="panel-title">Descrição</h3>
													</div>
													<div class="panel-body">
														<p><?php echo $imovel['Imovel']['descricao']; ?></p>
													</div>
												</div>
											</div>          
										</div>
									</div>  
								</div><!-- end -->
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php echo $this->element('footer');?>
<?php include("includes/modal/modal-perfil.php"); ?>

<div class="imovels form">
	
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Imovels'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tipo Imovels'), array('controller' => 'tipo_imovels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Imovel'), array('controller' => 'tipo_imovels', 'action' => 'add')); ?> </li>
	</ul>
</div>



<div class="imovels index">
	<h2><?php echo __('Imovels'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('co_imovel'); ?></th>
			<th><?php echo $this->Paginator->sort('co_usuario'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo_imovel_id'); ?></th>
			<th><?php echo $this->Paginator->sort('Valor_Aluguel'); ?></th>
			<th><?php echo $this->Paginator->sort('co_bairros'); ?></th>
			<th><?php echo $this->Paginator->sort('co_tipo_moradia'); ?></th>
			<th><?php echo $this->Paginator->sort('co_tipos_quartos'); ?></th>
			<th><?php echo $this->Paginator->sort('co_perfil_pisicologico'); ?></th>
			<th><?php echo $this->Paginator->sort('co_faixa_preco'); ?></th>
			<th><?php echo $this->Paginator->sort('fumante'); ?></th>
			<th><?php echo $this->Paginator->sort('animal'); ?></th>
			<th><?php echo $this->Paginator->sort('mobiliado'); ?></th>
			<th><?php echo $this->Paginator->sort('imagem'); ?></th>
			<th><?php echo $this->Paginator->sort('descricao'); ?></th>
			<th><?php echo $this->Paginator->sort('data_Criacao'); ?></th>
			<th><?php echo $this->Paginator->sort('data_atualizacao'); ?></th>
			<th><?php echo $this->Paginator->sort('data_cancelamento'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($imovels as $imovel): ?>
	<tr>
		<td><?php echo h($imovel['Imovel']['co_imovel']); ?>&nbsp;</td>
		<td><?php echo h($imovel['Imovel']['co_usuario']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($imovel['TipoImovel']['tipo_imovel_id'], array('controller' => 'tipo_imovels', 'action' => 'view', $imovel['TipoImovel']['tipo_imovel_id'])); ?>
		</td>
		<td><?php echo h($imovel['Imovel']['Valor_Aluguel']); ?>&nbsp;</td>
		<td><?php echo h($imovel['Bairro']['descricao']); ?>&nbsp;</td>
		<td><?php echo h($imovel['TipoMoradia']['descricao']); ?>&nbsp;</td>
		<td><?php echo h($imovel['TiposQuarto']['descricao']); ?>&nbsp;</td>
		<td><?php echo h($imovel['Imovel']['co_perfil_psicologico']); ?>&nbsp;</td>
		<td><?php echo h($imovel['Imovel']['co_faixa_preco']); ?>&nbsp;</td>
		<td><?php echo h($imovel['Imovel']['fumante']); ?>&nbsp;</td>
		<td><?php echo h($imovel['Imovel']['animal']); ?>&nbsp;</td>
		<td><?php echo h($imovel['Imovel']['mobiliado']); ?>&nbsp;</td>
		<td><?php echo h($imovel['Imovel']['imagem']); ?>&nbsp;</td>
		<td><?php echo h($imovel['Imovel']['descricao']); ?>&nbsp;</td>
		<td><?php echo h($imovel['Imovel']['data_Criacao']); ?>&nbsp;</td>
		<td><?php echo h($imovel['Imovel']['data_atualizacao']); ?>&nbsp;</td>
		<td><?php echo h($imovel['Imovel']['data_cancelamento']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $imovel['Imovel']['co_imovel'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $imovel['Imovel']['co_imovel'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $imovel['Imovel']['co_imovel']), array(), __('Are you sure you want to delete # %s?', $imovel['Imovel']['co_imovel'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Imovel'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Tipo Imovels'), array('controller' => 'tipo_imovels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Imovel'), array('controller' => 'tipo_imovels', 'action' => 'add')); ?> </li>
	</ul>
</div>
