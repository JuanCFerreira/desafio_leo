<?php

namespace App\Entity;

use \App\DB\Database;
use PDO;

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
     * @var Imagem
     */
    public $imagens;

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

    /**
     * Método para listar os cursos do banco
     * @param string where
     * @param string order
     * @param string limit
     * @return array
     */
    public function getCursos( $where = null, $order = null, $limit = null ) {
        return (new Database('cursos'))->select($where, $order, $limit,
            'cursos.*, imagens.path as imagem',
            'imagens where cursos.id = imagens.curso_id',
            'cursos.id'
            )->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    /**
     * Método para retornar detalhes de um curso por id do banco
     * @param integer $id
     * @return Curso
     */
    public function getCurso($id) {
        $curso = (new Database('cursos'))->select(' id='.$id)->fetchObject(self::class);
        $curso->imagens = (new Database('imagens'))->select(' curso_id='.$id)->fetchAll(PDO::FETCH_CLASS, Imagem::class);
        return $curso;
    }

    /**
     * Método para atualizar detalhes de um curso do banco
     * @return boolean
     */
    public function atualizar() {
        return (new Database('cursos'))->update(' id='.$this->id, [
            'titulo'    => $this->titulo,
            'descricao' => $this->descricao,
            'link'      => $this->link
        ]);
    }

    /**
     * Método para excluir um curso do banco
     * @return boolean
     */
    public function excluir() {
        return (new Database('cursos'))->delete(' id='.$this->id);
    }

}
