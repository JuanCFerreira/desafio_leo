<main>
    <section>

        <h2><?=TITULO ?></h2>
        
        <form class='mt-5' method='post' enctype='multipart/form-data'>
            <div class='form-group mb-3'>
                <div class='row'>
                    <div class='col-sm-6'>
                        <label>Titulo</label>
                        <input type='text' class='form-control' name='titulo' value='<?= $obCurso->titulo ?>'>
                    </div>
                    <div class='col-sm-6'>
                        <label>Link</label>
                        <input type='text' class='form-control' name='link' value='<?= $obCurso->link ?>'>
                    </div>
                </div>
            </div>
            <div class='form-group mb-3'>
                <label>Descricao</label>
                <textarea rows='3' class='form-control' name='descricao'><?= $obCurso->descricao ?></textarea>
            </div>
            

            <div class='form-group mb-3'>
                <label>Imagens:</label>
                <input type="file" name="imagens[]" multiple="multiple" accept="image/*" class='form-control'>    
            </div>

            
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4">
                <?php 
                    if ( !empty($obCurso->imagens) ) {
                        foreach ($obCurso->imagens as $imagem){
                            echo '
                                
                                <div class="col mb-5">
                                    <div class="card h-100">
                                        
                                        <img class="card-img-top thumbnail" src="'.$imagem->path.'" alt="...">
                                        
                                        <div class="card-body p-4">
                                           
                                        </div>
                                        
                                        <div class="card-footer p-4 pt-0  border-top-0 bg-transparent">
                                            <div class="text-center">
                                                <a class="btn btn-outline-danger mt-auto" href="excluir-imagem.php?id='.$imagem->id.'">
                                                    Excluir
                                                </a>
        
                                                <a class="btn btn-primary mt-auto" href="'.$imagem->path.'">
                                                    Visualizar
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            ';
                        }
                    }

                ?>
            </div>

            <div class='form-group mb-5' align='right'>
                <button type='submit' class='btn btn-success mt-3'>Salvar</button>
            </div>
        </form>

    </section>
</main>
