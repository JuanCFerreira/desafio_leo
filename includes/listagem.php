



<main>
    <section>
        <a href='cadastrar.php'>
            <button class='btn btn-primary mt-4 mb-4 '>Novo curso</button>
        </a>
    </section>

    <section>
        <table id='listagem' class='table row-border'>
            <thead class='bg-dark text-light'>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Descrição</th>
                    <th>Link</th>
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
                                    <button type="button" class="btn btn-transparent"><i class="fa fa-pen text-primary"></i></button>
                                </a>
                                <a href="excluir.php?id='.$curso->id.'">
                                    <button type="button" class="btn btn-transparent"><i class="fa fa-trash text-danger"></i></button>
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

<script>
    $(document).ready( function () {
        $('#listagem').DataTable();
    } );
</script>