<?php
require_once 'conexion/BaseDeDatos.php';

class Equipo
{
    private $conn;
    private $table = 'Equipos';

    public function __construct()
    {
        $database = new BaseDeDatos();
        $this->conn = $database->connect();
    }

    public function getAll()
    {
        $query = "select * from {$this->table}";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($data)
    {
        $query = "INSERT INTO {$this->table} (nombre, ciudad, deporte, fundacion, estado, historia) 
                  VALUES (:nombre, :ciudad, :deporte, :fundacion, :estado, :historia)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nombre', $data['nombre']);
        $stmt->bindParam(':ciudad', $data['ciudad']);
        $stmt->bindParam(':deporte', $data['deporte']);
        $stmt->bindParam(':fecha_fundacion', $data['fecha_fundacion']);
        return $stmt->execute();
    }

    public function getById($id)
    {
        $query = "SELECT * FROM {$this->table} WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
