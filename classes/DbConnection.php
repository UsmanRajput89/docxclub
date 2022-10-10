<?php
    class DbConnection{
    

        // private $host = "db5010414994.hosting-data.io";
        // private $username = "dbu2815095";
        // private $password = "Alliswell123!@#";
        // private $database = "dbs8822966";

        private $host = 'localhost';
        private $username = 'root';
        private $password = '';
        private $database = 'docx';
    
        protected $connection;
    
        public function __construct(){
    
            if (!isset($this->connection)) {
    
                $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
    
                if (!$this->connection) {
                    echo 'Cannot connect to database server';
                    exit;
                }            
            }    
    
            return $this->connection;
        }
    }


?>