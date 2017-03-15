<?php

/**
 * Database
 */
class Database
{
    /**
     * @var PDO
     */
    public $connection;
    /**
     * @var null
     */
    private static $instance = null;

    /**
     * @return Database|null
     */
    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * Database constructor.
     */
    private function __construct()
    {
        $this->connection = new PDO(
            'mysql:host=localhost;dbname=todolist;',
            'homestead',
            'secret'
        );
        $this->connection->setAttribute(
            PDO::ATTR_DEFAULT_FETCH_MODE,
            PDO::FETCH_ASSOC
        );
    }


    /**
     * @param $query
     * @return PDOStatement
     */
    public function query($query)
    {
        return $this->connection->query($query);
    }

    /**
     * Prepare and execute the given query with the given parameters
     * @param $query
     * @param array $params
     * @return PDOStatement
     */
    public function preparedQuery($query, array $params)
    {
        $statement = $this->connection->prepare($query);
        $statement->execute($params);
        return $statement;
    }

    // Magic method clone is empty to prevent duplication of connection
    private function __clone()
    {
    }
}
