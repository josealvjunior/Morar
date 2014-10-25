<?php $combo = $this->requestAction('imovels/filtro'); ?>

<div class="container-fluid">
	<div class="menu-vertical">
		<ul class="nav nav-pills nav-stacked">
			<li>
			    <a href="#">MEUS IMÓVEIS</a>
			</li>
			<li>
				<a href="#">MINHAS CANDIDADURAS</a>
			</li>	
			<li>
				<a id="anuncio" href="#" data-toggle="collapse" data-target="#userMenu">
					MEUS ANÚNCIOS <i class="glyphicon glyphicon-chevron-down right"></i>
				</a>
				<ul class="collapse sub-level" id="userMenu">
					<a id="lista" href="lista-anuncios.php"><i class="icon-home"></i><li>Listar anúncios</li></a>
					<a id="cadastro" href="cadastro-anuncios.php"><i class="icon-envelope-alt"></i><li>Cadastrar anúncio</li></a>
				</ul>
			</li>
			<li>
				<a data-toggle="modal" data-target="#perfil">PERFIL</a>
			</li>
			<li>
				<a href="#" data-toggle="collapse" data-target="#filtro">
					BUSCAR <i class="glyphicon glyphicon-chevron-down right"></i></a>
			</li>

			<li>
				<a href="#" data-toggle="collapse" data-target="#userMenu">
					PESQUISA <i class="glyphicon glyphicon-chevron-down right"></i></a>
			</li>
			<?php echo $this->Form->create('Busca', array('url' => '/imovels/busca', 'type' => 'get')); ?>
				<ul class="collapse sub-level-filtro in" id="userMenu">
					<li class="filtro-nlg">
						<?php echo $this->Form->input('co_faixa_preco', array('label' => false, 'empty' =>  'Faixa de preço', 'type' => 'select', 'options'=> $combo['faixasDePrecos'] )); ?>
					</li>
					
					<li class="filtro-nlg">
						<?php echo $this->Form->input('co_regionais', array('label' => false, 'empty' =>  'Regional', 'type' => 'select', 'options'=> $combo['regionais'] )); ?>
					</li>
					
					<li class="filtro-nlg">
						<?php echo $this->Form->input('co_bairros', array('label' => false, 'empty' =>  'Bairros', 'type' => 'select', 'options'=> $combo['bairros'] )); ?>	
					</li>
					
					<li class="filtro-nlg">
						<?php echo $this->Form->input('co_tipos_quartos', array('label' => false, 'empty' =>  'Tipo quarto', 'type' => 'select', 'options'=> $combo['tipoQuartos'] )); ?>	
					</li>
					
					<li class="filtro-nlg">
						<?php echo $this->Form->input('co_tipos_moradia', array('label' => false, 'empty' =>  'Perfil', 'type' => 'select', 'options'=> $combo['tipoMoradia'] )); ?>	
					</li>
					
					<li>
						<?php echo $this->Form->button('Buscar', array('class' => 'btn btn-sm btn-action btn-block')); ?>
					</li>
				</ul>
			</form>
		</ul>
	</div>
</div>
