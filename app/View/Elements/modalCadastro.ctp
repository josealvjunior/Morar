<div class="modal fade bs-example-modal-sm" id="cadastroModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog  modal-sm">
		<div class="modal-content">
			<div class="modal-header center color-default">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        		<h3 class="modal-title" id="myModalLabel">Cadastro de perfil</h3>
      		</div>
      		<div class="modal-body">
      		<form method = "post" name = "formcliente" action="inserirDados.php">
      			<input type="text" name = "nome" class="form-control" id="nome" placeholder="Insira seu nome">
        		<h5><input type="email" name = "email" class="form-control" id="email" placeholder="Insira seu email"></h5>
        		<h5><input type="password" name = "senha" class="form-control" id="senha" placeholder="Senha"></h5>
        		<h5><input type="password" name = "senha" class="form-control" id="senha" placeholder="Confirme sua senha"></h5>
      		</div>
      		<div class="modal-footer center">
        		<input name = "Cadastrar" type = "submit" value = "CADASTRAR" class="btn btn-primary btn-group-justified">
			</div>
			</form>
		</div>
	</div>
</div>