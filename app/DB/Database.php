<?php

namespace App\DB;

use \PDO;

class Database
{
    
    const HOST = 'localhost';
    const PORT = '3308';
    const NAME = 'leo_learning';
    const USER = 'root';
    const PASS = '';

    /**
     * Nome da tabela a ser manipulada
     * @var string
     */
    private $table;

    /**
     * Instancia de conexão com o banco
     * @var PDO
     */
    private $connection;

    /**
     * Define a tabela e instancia a conexão
     * @param string
     */
    public function __construct( $table = null ) {
        $this->table = $table;
        $this->criarConexao();
    }

    /**
     * Método responsável por criar uma conexão com o banco
     * @return void
     */
    private function criarConexao() {
        try{
            $this->connection = new PDO(
                'mysql:host='.self::HOST.';port='.self::PORT.';dbname='.self::NAME
                , self::USER
                , self::PASS
            );
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            die('ERROR: '.$e->getMessage());
        }
    }
    
    /**
     * Método para executar queries no banco
     * @param string $query
     * @param array $params
     * @return PDOStatement
     */
    public function executar( $query, $params = [] ) {
        try{
            $statement = $this->connection->prepare($query);
            $statement->execute($params);
            return $statement;
        } catch(PDOException $e) {
            die('ERROR: '.$e->getMessage());
        }
    }
    
    /**
     * Método para executar consulta no banco
     * @param string where
     * @param string order
     * @param string limit
     * @param string fields
     * @return PDOStatement
     */
    public function select( $where = null, $order = null, $limit = null, $fields = '*' ) {

        $where = strlen($where) ? 'WHERE'.$where : '';
        $order = strlen($order) ? 'ORDER BY'.$order : '';
        $limit = strlen($limit) ? 'LIMIT'.$limit : '';

        $query = 'SELECT '.$fields.' FROM '.$this->table.' '.$where.' '.$order.' '.$limit;

        return $this->executar($query);
    }

    /**
     * Método para inserir dados no banco
     * @param array
     * @return integer ID inserido
     */
    public function inserir( $valores ) {
        $chaves = array_keys($valores);
        $binds = array_pad($valores,count($chaves), '?');
        $query = "INSERT INTO ".$this->table." (".implode(',', $chaves).") VALUES ('".implode("','", $binds)."')";
        $this->executar($query, array_values($valores));

        return $this->connection->lastInsertId();
    }

    /**
     * Método para atualizar dados no banco
     * @param string $where
     * @param array $values
     * @return boolean
     */
    public function update( $where, $valores ) {

        $chaves = array_keys($valores);
        $query = 'UPDATE '.$this->table.' SET '. implode('=?,', $chaves) .'=? WHERE '.$where;
        $this->executar($query, array_values($valores));
        return true;

    }

}