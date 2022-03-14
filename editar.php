<?php
require __DIR__.'/vendor/autoload.php';

define('TITULO', 'Editar Curso');

use \App\Entity\Curso;

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

    $novoCurso->titulo = $_POST['titulo'];
    $novoCurso->descricao = $_POST['descricao'];
    $novoCurso->link = $_POST['link'];
    $novoCurso->cadastrar();

    header('location: index.php?status=success');

}


include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';