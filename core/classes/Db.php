<?php

class Db
{
    private $connection;
    private PDOStatement $stmt;

    private static $instance = null;
    private function __construct() {}

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getConncection(array $db_config)
    {
        $dsn = "mysql:host={$db_config['host']};dbname={$db_config['dbname']}";
        try {
            $this->connection = new PDO($dsn, $db_config['username'], $db_config['password']);
            return $this;
        } catch (PDOException $e) {
            // echo "DB Error: {$e->getMessage()}";
            require VIEWS . "/errors/500.tpl.php";
            abort(500);
        }
    }

    public function query($query, $params = [])
    {
        $this->stmt = $this->connection->prepare($query);
        $this->stmt->execute($params);
        return $this;
    }

    public function findAll()
    {
        return $this->stmt->fetchAll();
    }

    public function find()
    {
        return $this->stmt->fetch();
    }
    public function findOrFail()
    {
        $res = $this->find();
        if (!$res) {
            abort();
        }
        return $res;
    }
}
