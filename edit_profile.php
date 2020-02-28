<?php
require 'conn.php'; 
include_once("head.php");
include_once('topoLogo.php');
include_once('menu.php');
?>

<script type="text/javascript" src="js/scriptEditProfile.js"></script>

<body>
	<div style="width:50%; margin:100px auto" class="panel panel-defalt">
		<div class="alert-warning alertaEdit" role="alert" >

		</div>

		<h3 id="tituloEditProfile">Informações de Usuário</h3>
		<form name="formEditProfile" method="post">
			<div class="form-row">
				<div class="form-group col-6">
					<label>Nível</label>
					<input type="text" disabled class="form-control" name="nivel">
				</div>

				<div class="form-group col-6">
					<label>Titulo</label>
					<input type="text" name="titulo" disabled class="form-control">
				</div>
			</div>

			<div class="form-group">
				<label>Nome</label>
				<input type="text" name="nome" class="form-control">
			</div>

			<div class="form-row">
				<div class="form-group col-6">
					<label>Senha</label>
					<div class="input-group">
						<input type="password" id="campSenha" name="senha" placeholder="Senha" class="form-control trava">
						
						<span id="cont-olho" class="input-group-addon">
							<btn id="bt-olho" onclick="exibeSenha('campSenha','bt-olho')" class="btn btn-secondary img-100">
							</btn>
						</span>
						<div class="invalid-feedback">
							Informe a Senha!
						</div>
					</div>
				</div>

				<div class="form-group col-6">
					<label>Confirmar Senha</label>
					<div class="input-group">
						<input type="password" id="campSenhaConfirm" name="senhaConfirm" placeholder="Confirmar Senha" class="form-control trava">
						<span id="cont-olho" class="input-group-addon">
							<btn id="bt-olho-confirm" onclick="exibeSenha('campSenhaConfirm','bt-olho-confirm')" class="btn btn-secondary img-100">
							</btn>
						</span>
						<div class="invalid-feedback">
							Confirme a Senha!
						</div>
					</div>
				</div>
			</div>

			<div class="form-group">
				<input type="submit" value="Salvar" class="btn btn-primary">
			</div>
		</form>
	</div>
</body>

<script type="text/javascript">
	function exibeSenha(id,bt)
	{
		document.getElementById(id).type = 'text';
		document.getElementById(bt).style.backgroundImage = "url(imagens/icons/closed-eye.svg)";
		document.getElementById(bt).onclick = function()
		{
			escondeSenha(id,bt);
		}
	}
	function escondeSenha(id,bt)
	{
		document.getElementById(id).type = 'password';
		document.getElementById(bt).style.backgroundImage = "url(imagens/icons/view.svg)";
		document.getElementById(bt).onclick = function()
		{
			exibeSenha(id,bt);
		}
	}
</script>

</html>