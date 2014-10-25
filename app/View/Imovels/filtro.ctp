<nav class="nav navbar-filtro" role="navigation">
		<div class="navbar-collapse collapse">
		<?php echo $this->Form->create('Busca', array('url' => '/imovels/busca', 'type' => 'get')); ?>
			<ul class="nav navbar-nav">
				<li class="filtro-nlg">
					<?php echo $this->Form->input('co_faixa_preco', array('label' => false, 'empty' =>  'Faixa de preço', 'type' => 'select', 'options'=> $faixasDePrecos )); ?>	
				</li>
				<li class="filtro-nlg">
					<?php echo $this->Form->input('co_regionais', array('label' => false, 'empty' =>  'Regional', 'type' => 'select', 'options'=> $regionais )); ?>	
				</li>
				<li class="filtro-nlg">
					<?php echo $this->Form->input('co_bairros', array('label' => false, 'empty' =>  'Bairros', 'type' => 'select', 'options'=> $bairros )); ?>	
				</li>
				<li class="filtro-nlg">
					<?php echo $this->Form->input('co_tipos_quartos', array('label' => false, 'empty' =>  'Tipo quarto', 'type' => 'select', 'options'=> $tipoQuartos )); ?>	
				</li>
				<li class="filtro-nlg">
					<?php echo $this->Form->input('co_tipo_moradia', array('label' => false, 'empty' =>  'Perfil', 'options' => $tipoMoradia)); ?>	
				</li>
			</ul>
		<?php echo $this->Form->end("Buscar"); ?>
	</div>
</nav>
