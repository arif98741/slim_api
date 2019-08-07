<?php

namespace config;
use \PDO;

/**
 * Class DB
 * @package config
 */
class DB
{

    private $hostdb = "localhost";
    private $userdb = "root";
    private $passdb = "";
    private $namedb = "slimapp";
    public $pdo;


    /**
     * DB constructor.
     */
    public function __construct()
    {
        $this->connection();
    }


    private function connection()
    {
        if (!isset($this->pdo)) {
            try {

                $link = new PDO("mysql:host=" . $this->hostdb . "; dbname=" . $this->namedb, $this->userdb, $this->passdb);
                $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $link->exec("SET CHARACTER SET utf8");
                $this->pdo = $link;
            } catch (PDOException $exc) {
                die("Field to Connect with Database" . $exc->getMessage());
            }
        }
    }

    /**
     * @param $sql
     * @return bool
     */
    public function prepare($sql)
    {
        $stmt = $this->pdo->prepare($sql);
        if ($stmt)
            return $stmt;
        else
            return false;
    }


    /**
     * @param $statement
     * @return mixed
     */
    public function row($statement)
    {
        $row =  $statement->rowCount();
        return $row;

    }
}

?>