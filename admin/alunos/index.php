<?php include_once '../layout/_topo.php'; ?>
<?php require_once '../../include/data/database-alunos.php'; ?>
<?php verificarLogin() ?>


<div class="cointainer">

	<div class="page-header">
		<h2>Gerenciar <small>Alunos</small></h2>		
	</div>	

	<table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Alunos</th>
            <th>CPF</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>

        <?php foreach (lista_alunos() as $alunos) : ?>

            <tr>
                <th scope="row"><?php echo $alunos['id']; ?></th>
                <td><?php echo $alunos['nome']; ?></td>
                <th scope="row"><?php echo $alunos['cpf']; ?></th>
                <td>
                	<a class="btn btn-info" href="/dexterescola/admin/alunos/edit.php?id=<?php echo $alunos['id']; ?>" role="button"><span class="glyphicon glyphicon-edit"></span>Editar</a>
                	<form action="/dexterescola/admin/alunos/delete.php" method="post" class="action-delete">
                        <input type="hidden" name="id" value="<?php echo $alunos['id']; ?>">
                        <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span>Excluir</button>
                    </form>
                </td>


            </tr>

        <?php endforeach; ?>

        </tbody>
    </table>

	<div class="pull-right">
    	<a class="btn btn-primary" href="/dexterescola/admin/alunos/new.php" role="button"><span class="glyphicon glyphicon-plus"></span> Novo</a>
	</div>
	
	<div class="clearfix"></div>
	
</div>

<?php include_once '../layout/_rodape.php'; ?>