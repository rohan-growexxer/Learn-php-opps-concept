<?php

  class Database {

    private $db_host = "localhost";
    private $db_user = "root";
    private $db_password = "Root@123#";
    private $db_name = "phpopps";

    private $mysqli = "";
    private $conn = false;

    public function __construct () {
        if(!$this->conn){
            $this->mysqli = new mysqli($this->db_host,$this->db_user,$this->db_password,$this->db_name);

            if($this->mysqli->connect_error){
                array_push($this->result,$this->mysqli->connect_error);
                return false;
            }
        } else {
            return true;
        }
    }
   

    //Close Connection

    public function __destruct() {
        if($this->conn){
            if($thid->mysqli->close()){
                $this->conn = false;
                return true;
            }
        } else {
            return false;
        }
    }
  }
?>
