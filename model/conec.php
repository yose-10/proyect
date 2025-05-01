<?php
class Connect {
    protected $conn;

    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db   = "proyecto";
    private $port = 3306;

    public function __construct() {
        $this -> connect();
    }

    private function connect() {
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

        try {
            $this->conn = new mysqli(
                $this->host,
                $this->user,
                $this->pass,
                $this->db,
                $this->port
            );

            $this->conn->set_charset("utf8mb4");

        } catch (Exception $error) {
            echo "Error al conectar: " . $error->getMessage();
            var_dump(
                $this->host,
                $this->user,
                $this->pass,
                $this->db,
                $this->port,
            );
        }
    }

    public function getConnection() {
        return $this->conn;
    }
}
