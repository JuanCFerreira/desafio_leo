<?php
require __DIR__.'/vendor/autoload.php';

use \App\Entity\Imagem;

if( !isset($_GET['id']) or !is_numeric($_GET['id']) ) {
    header('location: index.php?status=error');
    exit;
}

$obImagem = Imagem::getImagem($_GET['id']);

if(!$obImagem instanceof Imagem) {
    header('location: index.php?status=error');
    exit;
}



if( isset( $_POST['excluir'] ) ) {
    $exclusao = $obImagem->excluir();
    header('location: editar.php?status=success&id='.$exclusao);
    exit;
}


include __DIR__.'/includes/header.php';
include __DIR__.'/includes/confirmar-exclusao-imagem.php';
include __DIR__.'/includes/footer.php';
