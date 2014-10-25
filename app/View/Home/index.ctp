<?php echo $this->element('topoSite');?>
<div class="imgtopo jumbotron bgimg">
	<div class="container">
		<h2>Já imaginou poder encontrar um lugar <br> <span class="cor2">para morar em Belo Horizonte com base em seu perfil psicológico.</span></h2>
		<?php echo $this->Html->image('perfil-morar.png'); ?>
		<h4>Ao se cadastrar em nosso sistema, pesquisaremos as melhores ofertas de imóveis específicas para você. Dúvida? Faça o teste. É fácil</h4>
		<a class="btn btn-lg btn-primary" data-toggle="modal" data-target="#cadastroModal"> Cadastre-se <span class="glyphicon glyphicon-chevron-right"></span></a>
	</div>
</div>
<div class="row bgazul">
	<div class="container center">
		<div>
			<h3><span class="glyphicon glyphicon-search"></span> Faça uma busca</h3>
			<h4>Utilizando nosso filtro de pesquisas, você poderá ter acesso a todos os imóveis cadastrados em nosso site</h4>
		</div>
	</div>
	<div class="container center">
		<?php echo $this->element('filtroBuscasSite');?>
	</div>
</div>
<div class="row">
	<div class="container">
		<div>
			<h3 class="center color-default"><span class="glyphicon glyphicon-repeat"></span> Últimos imóveis cadastrados</h3>
		</div>
	</div>
	<div class="container2">
		<?php echo $this->element('ultimosImoveis'); ?>		
	</div>
</div>
<div class="row center">
	<a class="btn btn-lg btn-action"><span class="glyphicon glyphicon-eye-open"></span> Quero ver mais opções</a>
</div>
<div class="row center bgverde">
	<div class="container">
		<h3>Cadastre-se para obter nossa busca personalizada </h3>
		<h4>Ao se cadastrar em nosso sistema, pesquisaremos as melhores ofertas de imóveis específicas para você. Dúvida? Faça o teste. É fácil</h4>
		<a class="btn btn-lg btn-default" data-toggle="modal" data-target="#cadastroModal"> Cadastre-se <span class="glyphicon glyphicon-chevron-right"></span></a> 	              
	</div>
</div>
<?php
	echo $this->element('modalCadastro');
	echo $this->element('modalLogin');
	echo $this->element('footer');
?>		