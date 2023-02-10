<h1>Atualizar dados de <?= $items['nome'] ?></h1>
<p>Modifique o cadastro de acordo com as regras</p>

<br>

<form method="POST" action="/alterar/save">
    <input type="text" name="nome" value="<?= $items['nome'] ?>"/><br>
    <input type="email" name="email" value="<?= $items['email'] ?>"/><br>
    <input type="password" name="senha" value="<?= $items['senha'] ?>"/><br>
    <input type="hidden" name="id" value="<?= $items['id'] ?>"/><br>
    <input type="submit" value="Alterar Cadastro"/>
</form>