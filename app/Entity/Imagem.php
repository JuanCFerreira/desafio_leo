<?php

namespace App\Entity;

use \App\DB\Database;
use PDO;

class Imagem
{
    /**
     * Define diretório onde estão armazenadas as imagens
     */
    const DIRETORIO = "storage/images";

    /**
     * identificador unico para a imagem
     * @var integer
     */
    public $id;

    /**
     * chave estrangeira que referencia o id do curso
     * @var integer
     */
    public $curso_id;

    /**
     * path da imagem 
     * @var integer
     */
    public $path;

    /**
     * Método para buscar 1 imagem no banco
     * @param int $id 
     * @return Imagem
     */
    public function getImagem($id) {
        return (new Database('imagens'))->select(' id='.$id)->fetchObject(self::class);
    }

    
    /**
     * Método para inserir imagens no banco
     * @return boolean
     */
    public function cadastrar() {

        $db = new Database('imagens');
        $this->id = $db->inserir([
            'curso_id'  => $this->curso_id,
            'path'      => $this->path
        ]);

        return true;

    }

    /**
     * Método para excluir uma imagem do banco e storage
     * @return boolean
     */
    public function excluir() {
        $curso_id = $this->curso_id;
        (new Database('imagens'))->delete(' id='.$this->id);
        unlink($this->path);
        return $curso_id;

    }

}