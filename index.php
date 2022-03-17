<?php
require __DIR__.'/vendor/autoload.php';

use \App\Entity\Curso;

$cursos = Curso::getCursos();

if ( empty( $_COOKIE['visualizou_modal'] ) ) {
    setcookie( 'visualizou_modal', 'sim' );
    $show_modal = true;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/listagem.php';
include __DIR__.'/includes/modal.php';
include __DIR__.'/includes/footer.php';
