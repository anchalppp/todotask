<?php

namespace app\Database;

use PDOException;

class DbUtil
{
    private $connection;

    public function __construct($host, $username, $password, $database)
    {
        $dsn = "mysql:host=$host;dbname=$database;charset=utf8";

        try {
            $this->connection = new \PDO($dsn, $username, $password);
            // Set PDO error handling attributes
            $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $this->connection->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
//            echo "Database connection successful!";
            return $this->connection;

        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

    }

    // You can add methods for database operations here
    public function query($query, $params = null, $type=null)
    {
        try {
            if ($this->connection) {
                $pdo_statement = $this->connection->prepare($query);
                if ($pdo_statement) {
                    $result = $pdo_statement->execute($params);
                    if ($result) {
                        switch ($type) {
                            case 'insert':
                                return $this->connection->lastInsertId();
                            case 'select';
                                return $pdo_statement->fetchAll();

                            default :
                                return true;
                        }
                    }
                }
            }
            return false;
        } catch (\Exception $e) {
            echo $e->getMessage();
            return false;
        }
    }


}

