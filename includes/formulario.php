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

        <div class='row mt-5 mb-5 '>
            <?php 
                if ( !empty($obCurso->imagens) ) {
                    foreach ($obCurso->imagens as $imagem){
                        echo '
                                
                            <div class="col-sm-3 mt-4 border d-flex justify-content-center">
                                    <div class="row">
                                        
                                        <div class="col-sm-12"  align="right">
                                            
                                            <a href="'.$imagem->path.'">
                                                <button type="button" class="btn btn-transparent text-primary p-0">
                                                    <i class="fa fa-eye"></i>
                                                </button>
                                            </a>

                                            <input type="hidden" name="img_id" value="'.$imagem->id.'">
                                            <a href="excluir-imagem.php?id='.$imagem->id.'">
                                                <button type="button" class="btn btn-transparent text-danger p-0">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </a>
                                           
                                        </div>
                                        <div class="col-sm-12">
                                            <picture>
                                            
                                                <img src="'.$imagem->path.'"  class="img-fluid img-thumbnail" alt="...">
                                            </picture>
                                        </div>
                                    </div>
                            </div>
                        ';
                    }
                }

            ?>
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



