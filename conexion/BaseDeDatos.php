<?php
class BaseDeDatos
{
    private $host = 'localhost';
    private $db_name = 'GestionDeEquipos';
    private $username = 'root';
    private $password = '1234';
    private $conn;

    public function connect()
    {
        $this->conn = null;
        try {
            $this->conn = new PDO(
                "mysql:host={$this->host};dbname={$this->db_name}",
                $this->username,
                $this->password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Error durante la conexión: " . $e->getMessage();
        }
        return $this->conn;
    }
}
