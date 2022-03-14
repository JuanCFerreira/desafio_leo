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

}