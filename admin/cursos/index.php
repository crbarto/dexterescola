<?php include_once '../layout/_topo.php'; ?>
<?php require_once '../../include/data/database-cursos.php'; ?>
<?php verificarLogin() ?>


<div class="cointainer">

	<div class="page-header">
		<h2>Gerenciar <small>Cursos</small></h2>		
	</div>	

	<table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Curso</th>
            <th>Tipo</th>
            <th>Carga Horária</th>
            <th>Pré Requisitos</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>

        <?php foreach (lista_cursos() as $cursos) : ?>

            <tr>
                <th scope="row"><?php echo $cursos['id']; ?></th>
                <td><?php echo $cursos['nome']; ?></td>
                <th scope="row"><?php echo $cursos['tipo']; ?></th>
                <th scope="row"><?php echo $cursos['carga_horaria']; ?></th>
                <th scope="row"><?php echo $cursos['requisitos']; ?></th>
                <td>
                	<a class="btn btn-info" href="/dexterescola/admin/cursos/edit.php?id=<?php echo $cursos['id']; ?>" role="button"><span class="glyphicon glyphicon-edit"></span>Editar</a>
                	<form action="/dexterescola/admin/cursos/delete.php" method="post" class="action-delete">
                        <input type="hidden" name="id" value="<?php echo $cursos['id']; ?>">
                        <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span>Excluir</button>
                    </form>
                </td>


            </tr>

        <?php endforeach; ?>

        </tbody>
    </table>

	<div class="pull-right">
    	<a class="btn btn-primary" href="/dexterescola/admin/cursos/new.php" role="button"><span class="glyphicon glyphicon-plus"></span> Novo</a>
	</div>
	
	<div class="clearfix"></div>
	
</div>

<?php include_once '../layout/_rodape.php'; ?>