<?php $render('header'); ?>

    <a class="btn btn-success" href="<?=$base?>/novo">Novo Usuário</a><br/><br/>


    <table width="100%" class="table table-sm table-striped">
        <thead>
            <tr>
                <th style="text-align: center">#</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th style="text-align: center">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($usuario as $usuario): ?>
                <tr>
                    <td class="text-center"><?=$usuario['id']?></td>
                    <td><?=$usuario['nome']?></td>
                    <td><?=$usuario['email']?></td>
                    <td class="text-center">
                        <a class="btn btn-primary btn-sm" href="<?=$base?>/usuario/<?=$usuario['id'];?>/editar">Editar</a>
                        <a class="btn btn-danger btn-sm" href="<?=$base?>/usuario/<?=$usuario['id'];?>/excluir" onclick="return confirm('Deseja excluir?')">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

<?php $render('footer'); ?>