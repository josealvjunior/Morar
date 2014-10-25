<div class="modal fade bs-example-modal-sm" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog  modal-sm">
		<div class="modal-content">
			<div class="modal-header center color-default">
			    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<form name = "login" method = "post" action = "login.php"> <!-- redirecionar para o formulario de login -->
				<h3 class="modal-title" id="myModalLabel">Login</h3>
				<p>Seja bem-vindo!</p>
			</div>
			<div class="modal-body">
			    <h5><input type="email" name = "email" class="form-control" id="email" placeholder="Insira seu email"></h5>
				<h5><input type="password" name = "senha" class="form-control" id="senha" placeholder="Senha"></h5>
		    </div>
			<div class="modal-footer center">
			     	<input type = "submit" name = "ENTRAR" value="ENTRAR" class="btn btn-primary btn-group-justified">
				</form>
			</div>
		</div>
	</div>
</div>
