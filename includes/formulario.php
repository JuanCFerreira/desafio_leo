<main>
    <section>
        <a href='index.php'>
            <button class='btn btn-primary mt-3'>Voltar</button>
        </a>
    </section>

    <h2 class='mt-3'><?=TITULO ?></h2>

    <form method='post' enctype='multipart/form-data'>
        <div class='form-group'>
            <label>Titulo</label>
            <input type='text' class='form-control' name='titulo' value='<?= $obCurso->titulo ?>'>
        </div>

        <div class='form-group'>
            <label>Descricao</label>
            <textarea rows='5' class='form-control' name='descricao'><?= $obCurso->descricao ?></textarea>
        </div>

        <div class='form-group'>
            <label>Imagens:</label>
            <input type="file" name="imagens[]" multiple="multiple" accept="image/*" class='form-control'>    
        </div>
        
        <div class='form-group'>
            <label>Link</label>
            <input type='text' class='form-control' name='link' value='<?= $obCurso->link ?>'>
        </div>

        <div class='form-group'>
            <button type='submit' class='btn btn-success mt-3'>Salvar</button>
        </div>
    </form>

</main>



