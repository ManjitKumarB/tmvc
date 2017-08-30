<?php

class DB{

    protected $connection;

    public function __construct($host, $user, $password, $db_name){
        $this->connection = new mysqli($host, $user, $password, $db_name);

        if (mysqli_connect_error()) {
            throw new Exception('could not connect to DB');
        }
    }

    public function query($sql){
        if (!$this->connection) {
            return false;
        }

        $result = $this->connection->query($sql);

        if ( mysqli_error($this->connection)) {
            throw new Exception(mysqli_error($this->connection));
            
        }

        // If the result is a boolean value
        if (is_bool($result)) {
            return $result;
        }

        // If the result is an array list
        $data = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        return $data;
    }

    public function escape($str){
        return mysqli_escape_string($this->connection, $str);
    }
}

?>