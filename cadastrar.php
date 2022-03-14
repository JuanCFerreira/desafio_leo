<?php
require __DIR__.'/vendor/autoload.php';

define('TITULO', 'Cadastrar Curso');

use \App\Entity\Curso;

$obCurso = new Curso;

if( isset( $_POST['titulo'], $_POST['descricao'], $_POST['link'] ) ) {
    $obCurso->titulo = $_POST['titulo'];
    $obCurso->descricao = $_POST['descricao'];
    $obCurso->link = $_POST['link'];
    $obCurso->cadastrar();

    header('location: index.php?status=success');

}


include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';