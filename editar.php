<?php
require __DIR__.'/vendor/autoload.php';

define('TITULO', 'Editar Curso');

use \App\Entity\Curso;
use \App\Entity\Imagem;

if( !isset($_GET['id']) or !is_numeric($_GET['id']) ) {
    header('location: index.php?status=error');
    exit;
}

$obCurso = Curso::getCurso($_GET['id']);

if(!$obCurso instanceof Curso) {
    header('location: index.php?status=error');
    exit;
}

if( isset( $_POST['titulo'], $_POST['descricao'], $_POST['link'] ) ) {

    $obCurso->titulo = $_POST['titulo'];
    $obCurso->descricao = $_POST['descricao'];
    $obCurso->link = $_POST['link'];
    $obCurso->atualizar();

    $imagens = !($_FILES['imagens']['size'][0] == 0) ? $_FILES['imagens'] : false;

    if( $imagens ) {

        for ( $i = 0; $i < count($imagens['name']); $i++ ) {

            $extensao = pathinfo($imagens['name'][$i], PATHINFO_EXTENSION);

            $destino = Imagem::DIRETORIO . '/' . md5( $imagens['name'][$i] . date( 'Ymdhis' )) . '.' . $extensao;
            
            if( move_uploaded_file($imagens['tmp_name'][$i], $destino) ){

                $obImagem = new Imagem;
                $obImagem->curso_id = $obCurso->id;
                $obImagem->path = $destino;
                $obImagem->cadastrar();

            }else{
                die('Erro ao fazer upload da imagem');
            }        
        }
    }


    header('location: index.php?status=success');

}


include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';