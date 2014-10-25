<?php echo $this->element('topoSite');?>

<div class="container2">
    <div class="row">
        <div class="col-md-3">
            <div class="row">
                <?php echo $this->element('sidebarSite');?>
            </div>
        </div>

        <div class="col-md-9">
            <div class="col-md-12">
                <div class="row">
                    <?php foreach ($imoveis as $imovel): ?>
                        <div class="col-md-4">
                            <div class="thumbnail">
                                <img src="<?php echo $this->webroot;?>/img/1.jpg">
                                <div class="caption">
                                    <h3>R$ <?php echo $imovel['Imovel']['Valor_Aluguel']; ?></h3>
                                    <p><span style="font-weight: 700">Bairro:</span> <?php echo $imovel['Bairro']['descricao']; ?></p>
                                    <p><span style="font-weight: 700">Imóvel:</span> <?php echo $imovel['TipoImovel']['descricao']; ?></p>
                                    <p><span style="font-weight: 700">Vaga:</span> <?php echo $imovel['TiposQuarto']['descricao']; ?></p>
                                    <p><span style="font-weight: 700">Gênero:</span> <?php echo $imovel['TipoMoradia']['descricao']; ?></p>                         
                                </div>
                                <a data-toggle="modal" data-target="#imovel<?php echo $imovel['Imovel']['co_imovel']; ?>" class="btn btn-group-justified"><div class="bgverde btn-primary"><span class="glyphicon glyphicon-search"></span>  Mais detalhes</div></a>
                            </div>
                        </div>
                        <div class="modal fade bs-example-modal-sm" id="imovel<?php echo $imovel['Imovel']['co_imovel']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog  modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header center color-default">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h3 class="modal-title" id="myModalLabel">Detalhes do imóvel</h3>
                                    </div>

                                    <div class="imovel">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <img src="">
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

<div class="row center bgverde">
    <div class="container">
        <h3>Cadastre-se para obter nossa busca personalizada </h3>
        <h4>Ao se cadastrar em nosso sistema, pesquisaremos as melhores ofertas de imóveis específicas para você. Dúvida? Faça o teste. É fácil</h4>
        <a class="btn btn-lg btn-default" data-toggle="modal" data-target="#cadastroModal"> Cadastre-se <span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
</div>
<div class="row bgazul">
    <div class="container center">
        <div>
            <p>Diga o que você procura e em que local. E não se preocupe: todos os anúncios são moderados e os seus detalhes de contato não ficam expostos na internet.</p>
        </div>  
    </div>
</div>


