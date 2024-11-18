<?php
require_once '../conexion/BaseDeDatos.php';

class Jugador
{
    private $conn;
    private $table = 'Jugadores';

    public function __construct()
    {
        $database = new BaseDeDatos();
        $this->conn = $database->connect();
    }

    public function getId($id)
    {
        $query = "SELECT * FROM {$this->table} WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getAllByEquipo($idEquipo)
    {
        $query = "SELECT * FROM {$this->table} WHERE idEquipo = :idEquipo";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':idEquipo', $idEquipo);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function crear($data)
    {
        $query = "INSERT INTO {$this->table} (nombre, numero, idEquipo, capitan) VALUES (:nombre, :numero, :idEquipo, :capitan)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nombre', $data['nombre']);
        $stmt->bindParam(':numero', $data['numero']);
        $stmt->bindParam(':idEquipo', $data['idEquipo']);
        $stmt->bindParam(':capitan', $data['capitan']);
        return $stmt->execute();
    }

    public function actualizar($id, $data)
    {
        $query = "UPDATE {$this->table} SET nombre = :nombre, numero = :numero, idEquipo = :idEquipo, capitan = :capitan WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nombre', $data['nombre']);
        $stmt->bindParam(':numero', $data['numero']);
        $stmt->bindParam(':idEquipo', $data['idEquipo']);
        $stmt->bindParam(':capitan', $data['capitan']);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public function eliminar($id)
    {
        $query = "DELETE FROM {$this->table} WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
