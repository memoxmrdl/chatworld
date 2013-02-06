<?php

class mysql {

    private $conn;
    private $error;
    private $msgerror;
    private $rows;
    private $host = "localhost";
    private $user = "root";
    private $pass = "123";
    private $database = "chatworld";

    function __construct()  {
        $this->connect();
    }

    private function connect() {
        $this->conn = @mysql_connect($this->host, $this->user, $this->pass);
        if($this->conn) {
            $setdb = @mysql_select_db($this->database, $this->conn);
            if(!$setdb){
                die();
            }
        } else {
            die();
        }
    }

    private function utf8_encode_deep(&$input) {
        if (is_string($input)) {
            $input = utf8_encode($input);
        } else if (is_array($input)) {
            foreach ($input as &$value) {
                $this->utf8_encode_deep($value);
            }
            unset($value);
        } else if (is_object($input)) {
            $vars = array_keys(get_object_vars($input));
            foreach ($vars as $var) {
                utf8_encode_deep($input->$var);
            }
        }
    }

    public function query($SQL) {
        $this->connect();
        $result = @mysql_query($SQL, $this->conn);
        $this->msgerror = mysql_errno() . ': ' . mysql_error();
        $this->error = $result;

        switch($this->typeProcess($SQL)) {
            case 1:
                $arrayDatos = array();
                while ($arrayDatos[] = @mysql_fetch_array($result, MYSQL_ASSOC));
                $this->utf8_encode_deep($arrayDatos);
                array_pop($arrayDatos);
                $this->rows = $arrayDatos;
                return $arrayDatos;
                break;
            case 2: $this->error = $result; return $result; break;
            case 3: $this->error = $result; return $result; break;
            case 4: $this->error = $result; return $result; break;
            default:
                return false;
                break;
        }

    }

    private function typeProcess($SQL) {
        $type = 0;
        $SQL = strtoupper($SQL);
        if(strstr($SQL, "SELECT")) $type = 1;
        if(strstr($SQL, "UPDATE")) $type = 2;
        if(strstr($SQL, "DELETE")) $type = 3;
        if(strstr($SQL, "INSERT")) $type = 4;
        return $type;
    }

    public function BeginTransaction() {
        @mysql_query("START TRANSACTION;", $this->conn);
    }

    public function Commit() {
        @mysql_query("COMMIT;", $this->conn);
        @mysql_close($this->conn);
    }

    public function Rollback() {
        @mysql_query("ROLLBACK;", $this->conn);
        @mysql_close($this->conn);
    }

    public function insert_id() {
        return @mysql_insert_id();
    }

    public function RealEscape($string) {
        return @mysql_real_escape_string($string);
    }

    public function message_error() {
        return $this->msgerror;
    }

    public function error() {
        if($this->error) {
            return false;
        } else {
            return true;
        }
    }

}
