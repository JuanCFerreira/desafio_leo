<?php

namespace App\Entity;

use \App\DB\Database;

class Curso
{
    /**
     * identificador unico para o curso
     * @var integer
     */
    public $id;

    /**
     * titulo do curso
     * @var string
     */
    public $titulo;

    /**
     * descricao do curso (pode conter HTML)
     * @var string
     */
    public $descricao;

    /**
     * link do curso
     * @var string
     */
    public $link;

    /**
     * Método para cadastrar um novo curso
     * @return boolean
     */
    public function cadastrar() {
        $db = new Database('cursos');
        $this->id = $db->inserir([
            'titulo'    => $this->titulo,
            'descricao' => $this->descricao,
            'link'      => $this->link
        ]);
        return true;
    }

}