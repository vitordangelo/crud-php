<?php include("cabecalho.php"); ?>
<?php include("logica-usuario.php"); ?>

	<h1>Bem Vindo!</h1>
	
	<?php if (usuarioEstaLogado()) { ?>
		<p class="alert-success">Você esta logado como <?=usuarioLogado()?></p> <a href="logout.php">Logout</a>
	<?php } else { ?>

		<h2>Login</h2>
		<form action="login.php" method="post">
			<table class="table"> 
				<tr>
					<td>Email</td>
					<td><input class="form-control" type="email" name="email"></td>
				</tr>
				<tr>
					<td>Senha</td>
					<td><input class="form-control" type="password" name="senha"></td>
				</tr>
				<tr>
					<td><button class="btn btn-primary" >Login</button></td>
				</tr>
			</table>
		</form>
	<?php } ?>
<?php include("footer.php") ?>
