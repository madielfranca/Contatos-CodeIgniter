<html>
<link rel="stylesheet" href="<?= base_url("css/bootstrap.css") ?>">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<body>
	
	<div class="container">
		<table class="table">	
			<tr class="alert alert-info">
				<td>Nome</td>
				<td>Email Pessoal</td>
				<td>Email Tabalho</td>
				<td>Nome</td>
				<td>Nome</td>
				<td>Nome</td>
				<td></td>
			</tr>
			<tr>
				<td><?= $produto["nome"]?></td><br/>
				<td><?= $produto["pessoal"]?></td><br/>
				<td><?= $produto["Etrabalho"]?></td><br/>
				<td><?= $produto["residencial"]?></td><br/>
				<td><?= format($produto["trabalho"])?></td><br/>
				<td><?= celular($produto["celular"])?></td>
				<td>
					<a href="index.php?id=<?=$produto['id']?>" class="btn btn-danger">Remover</a>
					<a href="remove-produto.php?id=<?=$produto['id']?>" class="btn btn-warning">Editar</a>
					<a href="remove-produto.php?id=<?=$produto['id']?>" class="btn btn-success">Adicionar</a>
				</td>
			</tr>
		</table>
	</div>
</body>
</html>