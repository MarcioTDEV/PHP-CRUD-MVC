<h1>LISTA DE PESSOAS</h1>
<p>Visualize, delete ou altere os dados cadastrados</p>


<ul>
    <?php
        foreach($items as $item){ ?>

        <li>
            <?= $item['nome'] ?> | 
            <?= $item['email'] ?> 

            <form method="POST" action="/alterar">
                <input type="hidden" name="id" value="<?= $item['id'] ?>"/>
                <input type="submit" value="Alterar">
            </form>

            <form method="POST" action="/deletar">
                <input type="hidden" name="id" value="<?= $item['id'] ?>"/>
                <input type="submit" value="Deletar">
            </form>


        </li>


        <?php }
    ?>

</ul>