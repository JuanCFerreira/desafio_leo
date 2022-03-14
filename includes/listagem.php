



<main>
    <section>
        <a href='cadastrar.php'>
            <button class='btn btn-primary mt-3 '>Novo curso</button>
        </a>
    </section>

    <section>
        <table class='table'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Descrição</th>
                    <th>link</th>
                    <th>Ações</th>
                </tr>
                
            </thead>
            <tbody>
            <?php
                foreach ($cursos as $curso) {
                    echo  '
                        <tr>
                            <td>'.$curso->id.'</td>
                            <td>'.$curso->titulo.'</td>
                            <td>'.$curso->descricao.'</td>
                            <td>'.$curso->link.'</td>
                            <td>
                                <a href="editar.php?id='.$curso->id.'">
                                    <button type="button" class="btn btn-primary">Editar</button>
                                </a>
                                <a href="excluir.php?id='.$curso->id.'">
                                    <button type="button" class="btn btn-danger">Excluir</button>
                                </a>
                            </td>
                        </tr>
                    ';
                }    
            ?>
            </tbody>
        </table>
    </section>
</main>