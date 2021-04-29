<?php
class SqlBuilder
{
    private $sql;

    // get plain SQL query
    public function getSql(){
        return $this->sql;
    }

    // Execute query
    public function exec()
    {

    }

    // Get Results
    public function get()
    {

    }

    public function select($fields = '*')
    {
        $this->sql = 'SELECT '.$fields.' ';
        return $this;
    }

    public function from($table)
    {
        $this->sql .= 'FROM '.$table.' ';
        return $this;
    }

    public function where($field, $value)
    {
        $this->sql.='WHERE '.$field.'='.$value;
        return $this;
    }

    public function delete()
    {
        $this->sql = 'DELETE ';
        return $this;
    }


    public function update($table)
    {
        $this->sql = 'UPDATE '.$table.' ';
        return $this;
    }

    public function set($values)
    {
        $this->sql .= 'SET ';

        foreach ($values as $columnName => $value){
            $this->sql .= $columnName .'='.$value.', ' ;

        }
        $this->sql = rtrim($this->sql, ', ').' ';
        return $this;
    }

    public function insert($table)
    {
        $this->sql = 'INSERT INTO '.$table.' ';
        return $this;
    }

    public function values($values)
    {
        $this->sql .= '(';
        $valueLine = '';
        foreach ($values as $columnName => $value){
            $this->sql.=$columnName.', ';
            $valueLine .= $value.', ';
        }
        $this->sql = rtrim($this->sql, ', ').' ';
        $this->sql .= ') ';
        $this->sql .= 'VALUES ('.rtrim($valueLine,', ') .')';

        return $this;
    }




}
