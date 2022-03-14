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

    $obCurso->titulo = $_POST['titulo'];
    $obCurso->descricao = $_POST['descricao'];
    $obCurso->link = $_POST['link'];
    $obCurso->atualizar();

    header('location: index.php?status=success');

}


include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';