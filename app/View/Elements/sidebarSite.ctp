<?php $combo = $this->requestAction('imovels/filtro'); ?>

<div class="container-fluid">
	<div class="menu-vertical">
		<ul class="nav nav-pills nav-stacked">
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
