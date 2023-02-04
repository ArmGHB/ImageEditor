<?php

namespace db;

class PgSQL
{
    private string $host;
    private string $user;
    private string $pass;
    private string $db;
    private ?object $conn;

    public function __construct(){
        $this->conn = pg_connect($this->host,$this->user,$this->pass,$this->db);
    }
    public function __destruct(){
        pg_close($this->conn);
        $this->conn = null;
    }
}