<?php
require_once '../modelos/Equipo.php';

class ControladorEquipo
{
    private $modeloEquipo;

    public function __construct()
    {
        $this->modeloEquipo = new Equipo();
    }

    public function index()
    {
        $equipos = $this->modeloEquipo->getAll();
        require '../vistas/equipo/lista.php';
    }

    public function crear()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'nombre' => $_POST['nombre'],
                'ciudad' => $_POST['ciudad'],
                'deporte' => $_POST['deporte'],
                'fundacion' => $_POST['fundacion'],
                'estado' => $_POST['estado'],
                'historia' => $_POST['historia']
            ];
            $this->modeloEquipo->crear($data);
            header('Location: index.php');
        } else {
            require '../vistas/equipo/crear.php';
        }
    }

    public function mostrar($id)
    {
        $equipo = $this->modeloEquipo->getId($id);
        require '../vistas/equipo/mostrar.php';
    }
}
