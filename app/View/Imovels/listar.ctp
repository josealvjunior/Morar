<?php foreach ($imovel as $i): ?>

<div class="col-md-3">
    <div class="thumbnail">
        <div class="caption">
            <h3>R$ <?php echo $i['Imovel']['Valor_Aluguel']; ?></h3>
            <p><span style="font-weight: 700">Bairro:</span> <?php echo $i['Bairro']['descricao']; ?></p>
            <p><span style="font-weight: 700">Imóvel:</span> <?php echo $i['TipoImovel']['descricao']; ?></p>
            <p><span style="font-weight: 700">Vaga:</span> <?php echo $i['TipoQuarto']['descricao']; ?></p>
            <p><span style="font-weight: 700">Gênero:</span> <?php echo $i['TipoMoradia']['descricao']; ?></p>                         
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
                        <p><span style="font-weight: 700">Bairro:</span> <?php echo $i['Bairro']['descricao']; ?></p>
                        <p><span style="font-weight: 700">Imóvel:</span> <?php echo $i['TipoImovel']['descricao']; ?></p>
                        <p><span style="font-weight: 700">Vaga:</span> <?php echo $i['TipoQuarto']['descricao']; ?></p>
                        <p><span style="font-weight: 700">Gênero:</span> <?php echo $i['TipoMoradia']['descricao']; ?></p>
                        <p><span style="font-weight: 700">Fumantes:</span> <?php echo $i['Perfil']['fumante']; ?></p>
                        <p><span style="font-weight: 700">Animais:</span> <?php echo $i['Perfil']['animal']; ?></p>
                        <p><span style="font-weight: 700">Mobília:</span> <?php echo $i['Perfil']['mobiliado']; ?></p>
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
                                <p><?php echo $imovel['Perfil']['descricao']; ?></p>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
            
    </div><!-- end -->
    </div>
</div>

<?php endforeach; ?>
