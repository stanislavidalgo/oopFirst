<?php

class SqlBuilder
{
    private $host = '127.0.0.1'; //localhost
    private $dbuser = 'root';
    private $dbname = 'mars';
    private $dbpass = 'root'; // ''
    private $pdo;

    public function __construct()
    {
        $dsn = 'mysql:dbname=' . $this->dbname . ';host=' . $this->host;

        try {
            $this->pdo = new \PDO($dsn, $this->dbuser, $this->dbpass);
        } catch (\PDOException $e) {
            echo $e;
        }
    }

    private $sql;

    // get plain SQL query
    public function getSql()
    {
        return $this->sql;
    }

    // Execute query
    public function exec()
    {
        $statment = $this->pdo->query($this->sql);
    }

    // Get Results
    public function get()
    {
        $statment = $this->pdo->query($this->sql);
        $rez = [];
        while ($row = $statment->fetch()) {
            $rez[] = $row;
        }

        return $rez;
    }


    public function select($fields = '*')
    {
        $this->sql = 'SELECT ' . $fields . ' ';
        return $this;
    }

    public function from($table)
    {
        $this->sql .= 'FROM ' . $table . ' ';
        return $this;
    }

    public function where($field, $value)
    {
        $this->sql .= 'WHERE ' . $field . '="' . $value . '"';
//        $this->sql.="WHERE $field = '$value'";
        return $this;
    }

    public function delete()
    {
        $this->sql = 'DELETE ';
        return $this;
    }

    public function insert($table)
    {
        $this->sql = 'INSERT INTO ' . $table . ' ';
        return $this;
    }

    public function values($values)
    {
        $this->sql .= '(';
        $valueLine = '';
        foreach ($values as $columnName => $value) {
            $this->sql .= $columnName . ', ';
            $valueLine .= '"'.$value.'"' . ', ';
        }
        $this->sql = rtrim($this->sql, ', ') . ' ';
        $this->sql .= ') ';
        $this->sql .= 'VALUES (' . rtrim($valueLine, ', ') . ')';
        return $this;
    }

    public function update($table)
    {
        $this->sql = 'UPDATE ' . $table . ' ';
        return $this;
    }

    public function set($values)
    {
        $this->sql .= 'SET ';
        foreach ($values as $columnName => $value){
            $this->sql .= $columnName .'="'.$value.'", ' ;
        }
        $this->sql = rtrim($this->sql, ', ').' ';
        return $this;
    }

}