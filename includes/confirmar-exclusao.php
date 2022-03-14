<main>


    <h2 class='mt-3'>Excluir curso</h2>

    <form method='post'>
        <div class='form-group'>
           <p>Você realmente deseja excluir o curso <strong><?=$obCurso->titulo ?></strong>?</p>
        </div>

        
        <div class='form-group'>
            <a href='index.php'>
                <button type='button' class='btn btn-primary mt-3'>Cancelar</button>
            </a>
            <button type='submit' name='excluir' class='btn btn-danger mt-3'>Exluir</button>
        </div>
    </form>

</main>



