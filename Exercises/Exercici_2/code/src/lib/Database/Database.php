<?php

namespace ProjectesWeb\lib\Database;

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
     * @param $dbname
     * @param $user
     * @param $password
     * @return null|Database
     */
    public static function getInstance($dbname, $user, $password)
    {
        if (!self::$instance) {
            self::$instance = new self($dbname, $user, $password);
        }
        return self::$instance;
    }

    /**
     * Database constructor.
     * @param $dbname
     * @param $user
     * @param $password
     */
    private function __construct($dbname, $user, $password)
    {
        $this->connection = new \PDO(
            "mysql:host=localhost;dbname=$dbname;",
            $user,
            $password
        );
        $this->connection->setAttribute(
            \PDO::ATTR_DEFAULT_FETCH_MODE,
            \PDO::FETCH_ASSOC
        );
    }

    /**
     * Execute the given query
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
