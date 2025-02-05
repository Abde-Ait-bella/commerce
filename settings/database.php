<?php 

class Database {
    private $userHost = 'postgres';
    private $serverHost = 'localhost';
    private $password = '';
    private $db = 'commerce';
    private $conn;

    public function getDb() {
        return $this->db;
    }

    public function connect() {
        if ($this->conn) {
            return $this->conn;
        } else {
            $dsn = "pgsql:host=".$this->serverHost.";dbname=".$this->db;
            try {
                $connect = $this->conn = new PDO($dsn, $this->userHost, $this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                     
                          return $connect; 
            } catch (PDOException $e) {
                
                die("Erreur de connexion : " . $e->getMessage());
            }
        }
    }
}

?>