
<main>
    <section>
        
    </section>

    <section>
        <div class='row'>
            <div class='col-xl-11 d-flex flex-align align-items-center'>
                <h1 class='float-right'>Cursos</h1>
            </div>
            <div class='col-xl-1  d-flex flex-align align-items-center'>
                <a href='cadastrar.php'>
                    <button class='btn btn-primary mt-4 mb-5 '><i class='fa fa-plus'></i> Novo</button>
                </a>
            </div>
        </div>

        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            
            
        </div>
        
        <div class='row'>
            
            <?php
                foreach ($cursos as $curso) {
                    echo  '
                        
                        <div class="col mb-5">
                            <div class="card h-100">
                                
                                <img class="card-img-top" src="'.$curso->imagem.'" alt="...">
                                
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        
                                        <h5 class="fw-bolder">
                                            <a href="'.$curso->link.'">
                                                <button class="btn btn-transparent p-0">
                                                
                                                        <h5>'.$curso->titulo.'</h5>
                                                    
                                                </button>
                                            </a>
                                        </h5>
                                        
                                        <p>'.strip_tags($curso->descricao).'</p>
                                    </div>
                                </div>
                                
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center">
                                        <a class="btn btn-outline-danger mt-auto" href="excluir.php?id='.$curso->id.'">
                                            Excluir
                                        </a>

                                        <a class="btn btn-primary mt-auto" href="editar.php?id='.$curso->id.'">
                                            Editar
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                       
                    ';
                }    
            ?>
        </div>
    </section>
</main>
