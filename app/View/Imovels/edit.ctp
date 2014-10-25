<?php echo $this->element('topoSistema');?>

<div class="sub-header-2">
	<div class="container">
		<div class="navbar-header">
			<h3>Editar imóvel</h3>	
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
						<h3>Editar</h3>
						<p>Por favor, preencha as informações de maneira correta para que possamos encontrar a pessoa ideal para o seu imóvel.</p>
						<?php echo $this->Form->create('Imovel', array('type' => 'file' )); ?>
							<fieldset>
								<?php echo $this->Form->input('co_imovel');?>
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
									<?php 

									$options=array('S'=>'Sim','N'=>'Não');
									$attributes=array('fumante'=>false);
									echo $this->Form->radio('fumante',$options,$attributes);

									?>
								</div>
								<div class="form-group">
									
									<?php 

									$options=array('S'=>'Sim','N'=>'Não');
									$attributes=array('animal'=>false);
									echo $this->Form->radio('animal',$options,$attributes);

									?>
									
								</div>
								<div class="form-group">
									
									<?php 

									$options=array('S'=>'Sim','N'=>'Não');
									$attributes=array('mobiliado'=>false);
									echo $this->Form->radio('mobiliado',$options,$attributes);

									?>
									
								</div>
								<h3>Perfil de morador</h3>
								<label>Você deseja que os moradores desse imóvel sejam:</label>
								<div class="form-group">

									<?php 

									$options=array(
										'1'=>'Inteligentes, concentradaos, estudiosos mesmo que sejam reservados e tenham dificuldades em lidar com outras pessoas.',
										'2'=>'Sérios, determinados, que tenham estabilidade financeira, que busquem seus objetivos mesmo que tenham dificuldade em aceitar novas ideias e opiniões diferentes.',
										'3'=>'Extrovertidos, originais, com bom relacionamento interpessoal e que gostem de aproveitar a vida, com festas, música alta e um pouco de bagunça.',
										'4'=>'Otimistas, prestativos, capazes de ajudar os outros mesmo que tenham um humor volúvel e fiquem mal humorados as vezes.');
									$attributes=array('co_perfil_psicologico'=>false);
									echo $this->Form->radio('co_perfil_psicologico',$options,$attributes);

									?>
									</div>
								<h3>Outros detalhes</h3>
								<div class="form-group">
									<?php echo $this->Form->input('descricao', array('class' => 'form-control'));?>
								</div>

							</fieldset>
						<?php echo $this->Form->end(__('ENVIAR')); ?>
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

<div class="imovels form">
<?php echo $this->Form->create('Imovel'); ?>
	<fieldset>
		<legend><?php echo __('Edit Imovel'); ?></legend>
	<?php
		echo $this->Form->input('co_imovel');
		echo $this->Form->input('co_usuario');
		echo $this->Form->input('tipo_imovel_id', array('options' => $tipoImovels));
		echo $this->Form->input('Valor_Aluguel');
		echo $this->Form->input('co_bairros', array('options' => $bairros));
		echo $this->Form->input('co_tipo_moradia', array('options' => $tipoMoradia));
		echo $this->Form->input('co_tipos_quartos', array('options' => $tipoQuartos));
		echo $this->Form->input('co_perfil_psicologico', array('options' => $perfilPsicologico));
		echo $this->Form->input('co_faixa_preco');
		echo $this->Form->input('fumante', array('options' => $fumante));
		echo $this->Form->input('animal');
		echo $this->Form->input('mobiliado');
		echo $this->Form->input('imagem');
		echo $this->Form->input('descricao');
		echo $this->Form->input('data_Criacao');
		echo $this->Form->input('data_atualizacao');
		echo $this->Form->input('data_cancelamento');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Imovel.co_imovel')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Imovel.co_imovel'))); ?></li>
		<li><?php echo $this->Html->link(__('List Imovels'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tipo Imovels'), array('controller' => 'tipo_imovels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Imovel'), array('controller' => 'tipo_imovels', 'action' => 'add')); ?> </li>
	</ul>
</div>
