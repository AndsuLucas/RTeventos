<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Login</title>
		<style>
			#mensagem{
				cursor: pointer;
			}
		</style>
	</head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<body >
		<div class="container" style="max-width: 400px; padding: 40px;">
			<div id="mensagem">
			
			
			</div>
			
			<form class="border rounded" style="padding: 10px; box-shadow: 5px 5px 6px #0000004f;" id="login" method="POST" action="#">
				<h1 class="text-center">Login</h1>
				<div class="form-group">
					<label for="usuario">Usuário</label>
					<input type="text" id="usuario" class="form-control">
				</div>
				<div class="form-group">
					<label for="senha">Senha</label>
					<input type="password" id="senha" class="form-control">
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-dark col-md-12" >
				</div>
				<div class="form-group">
					<a href="#" class="btn btn-dark col-md-12">Esqueci minha senha</a>
				</div>
			</form>
		</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script>
		$(document).ready(function(){
		
			$("#login").submit(function(){
				if($("#usuario").val().trim().length === 0){
					$("#mensagem").empty();
					$("#mensagem").append(
						$("<p />")
							.addClass("alert alert-danger")
							.text("O  campo 'USUARIO' deve ser preenchido")
					);
					$("#usuario").focus();
					
					return false;
				}else if($("#senha").val().trim().length === 0){
					$("#mensagem").empty();
					$("#mensagem").append(
						$("<p />")
							.addClass("alert alert-danger")
							.text("O  campo 'SENHA' deve ser preenchido")
					);
					$("#senha").focus();
					return false;
				}else{
					return true;
				}
			
			});
			$("#mensagem").click(function(){
				$("#mensagem").empty();
			});
			
		});
	
	</script>
	
	</body>
</html>