<?php $render('header'); ?>

    <h3>Editar Usuário</h3>

    <form action="<?=$base?>/usuario/<?=$usuario['id'];?>/editar" method="post">
        <div class="form-group">
            <label for="nome">Nome</label><br/>
            <input type="text" name="nome" id="nome" class="form-control" value="<?=$usuario['nome']?>">
        </div>
        <div class="form-group">
            <label for="email">E-mail</label><br>
            <input type="email" name="email" id="email" class="form-control" value="<?=$usuario['email']?>">
        </div>
        <div class="text-right">
            <input class="btn btn-success" type="submit" value="Salvar">
            <a class="btn btn-danger" href="<?=$base?>" onclick="return confirm('Deseja cancelar?')">Cancelar</a>
        </div>
    </form>

<?php $render('footer'); ?>