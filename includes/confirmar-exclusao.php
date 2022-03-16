<main>

<div class='justify-content-center d-flex flex-align align-items-center' align='center'>
    

    <form method='post'>
        
            <h1 class='mt-3'>Excluir curso</h1>
            <p>Você realmente deseja excluir o curso <strong><?=$obCurso->titulo ?></strong>?</p>

            <a href='index.php'>
                <button type='button' class='btn btn-primary mt-3'>Cancelar</button>
            </a>
            <button type='submit' name='excluir' class='btn btn-danger mt-3'>Excluir</button>

    </form>
</div>
</main>
