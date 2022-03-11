<?php
require __DIR__.'/vendor/autoload.php';

use \App\Entity\Curso;

if( isset( $_POST['titulo'], $_POST['descricao'], $_POST['link'] ) ) {
    $novoCurso = new Curso;
    $novoCurso->titulo = $_POST['titulo'];
    $novoCurso->descricao = $_POST['descricao'];
    $novoCurso->link = $_POST['link'];
    $novoCurso->cadastrar();

    header('location: index.php?status=success');

}


include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';