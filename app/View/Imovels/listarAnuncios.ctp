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
					<?php foreach ($imovel as $imovel): ?>
						<div class="imovel-horizontal box-branco">
							<div class="col-md-5">
								<img src="<?php echo $this->webroot;?>/img/1.jpg">
							</div>
							<div class="col-md-4">
		                        <h3>R$ <?php echo $imovel['Imovel']['Valor_Aluguel']; ?></h3>
		                        <p><span style="font-weight: 700">Bairro:</span> <?php echo $imovel['Bairro']['descricao']; ?></p>
		                        <p><span style="font-weight: 700">Imóvel:</span> <?php echo $imovel['TipoImovel']['descricao']; ?></p>
		                        <p><span style="font-weight: 700">Vaga:</span> <?php echo $imovel['TiposQuarto']['descricao']; ?></p>
		                        <p><span style="font-weight: 700">Gênero:</span> <?php echo $imovel['TipoMoradia']['descricao']; ?></p>
							</div>
							<div class="col-md-3">
								<a data-toggle="modal" data-target="#detalhes<?php echo $imovel['Imovel']['co_imovel']; ?>" class="btn btn-group-justified"><div class="bgverde btn-primary"><span class="glyphicon glyphicon-search"></span>  Mais detalhes</div></a>
								<a data-toggle="modal" data-target="#editar<?php echo $imovel['Imovel']['co_imovel']; ?>" class="btn btn-group-justified"><div class="bgverde btn-primary"><span class="glyphicon glyphicon-pencil"></span>  Editar anúncio</div></a>
								<a data-toggle="modal" data-target="#editar<?php echo $imovel['Imovel']['co_imovel']; ?>" class="btn btn-group-justified"><div class="bgverde btn-danger"><span class="glyphicon glyphicon-remove"></span>  Excluir anúncio</div></a>
								<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $imovel['Imovel']['co_imovel']), array(), __('Are you sure you want to delete # %s?', $imovel['Imovel']['co_imovel'])); ?>
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
