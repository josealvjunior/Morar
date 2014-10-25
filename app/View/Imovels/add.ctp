<?php echo $this->element('topoSistema');?>

<div class="sub-header-2">
	<div class="container">
		<div class="navbar-header">
			<h3>Cadastro de imóvel</h3>	
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
					<div class="box-branco">
						<h3>Cadastre seu imóvel</h3>
						<p>Por favor, preencha as informações de maneira correta para que possamos encontrar a pessoa ideal para o seu imóvel.</p>
						<?php echo $this->Form->create('Imovel'); ?>
							<fieldset>
								<div class="form-group">
									<?php echo $this->Form->input('co_usuario', array('class' => 'form-control'));?>
								</div>
								<div class="form-group">
									<?php echo $this->Form->input('Valor_Aluguel', array('class' => 'form-control'));?>
								</div>
								<div class="form-group">
									<?php echo $this->Form->input('co_bairros', array('class' => 'form-control', 'options' => $bairros));?>
								</div>
								<div class="form-group">
									<?php echo $this->Form->input('tipo_imovel_id', array('class' => 'form-control', 'options' => $tipoImovels));?>
								</div>
								<div class="form-group">
									<?php echo $this->Form->input('co_tipos_quartos', array('class' => 'form-control', 'options' => $tipoQuartos));?>
								</div>
								<div class="form-group">
									<?php echo $this->Form->input('co_tipo_moradia', array('class' => 'form-control', 'options' => $tipoMoradia));?>
								</div>
								<div class="form-group">
									<?php echo $this->Form->input('co_perfil_psicologico', array('class' => 'form-control', 'options' => $perfilPsicologico));?>
								</div>
								<div class="form-group">
									<?php echo $this->Form->input('fumante', array('class' => 'form-control', 'options' => $fumante));?>
								</div>
								<div class="form-group">
									<?php echo $this->Form->input('animal', array('class' => 'form-control', 'options' => $animal));?>
								</div>
								<div class="form-group">
									<?php echo $this->Form->input('mobiliado', array('class' => 'form-control', 'options' => $mobiliado));?>
								</div>
								<div class="form-group">
									<?php echo $this->Form->input('Foto', array('class' => 'form-control'));?>
								</div>
								<div class="form-group">
									<?php echo $this->Form->input('Descrição', array('class' => 'form-control'));?>
								</div>
							</fieldset>
						<?php echo $this->Form->end(__('CADASTRAR')); ?>
					</div>
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
