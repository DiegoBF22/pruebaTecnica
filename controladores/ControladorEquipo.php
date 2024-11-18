<?php
require_once '../modelos/Equipo.php';
require_once '../modelos/Jugador.php';

class ControladorEquipo
{
    private $modeloEquipo;
    private $modeloJugador;

    public function __construct()
    {
        $this->modeloEquipo = new Equipo();
        $this->modeloJugador = new Jugador();
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
        $jugadores = $this->modeloJugador->getAllByEquipo($id);
        require '../vistas/equipo/mostrar.php';
    }

    public function inscribirJugador($idEquipo)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'nombre' => $_POST['nombre'],
                'numero' => $_POST['numero'],
                'idEquipo' => $idEquipo,
                'capitan' => $_POST['capitan']
            ];
            $this->modeloJugador->crear($data);
            header("Location: index.php?action=mostrar&id=$idEquipo");
        } else {
            require '../vistas/jugador/crear.php';
        }
    }

    public function editarJugador($id, $idEquipo)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'nombre' => $_POST['nombre'],
                'numero' => $_POST['numero'],
                'idEquipo' => $_POST['idEquipo'],
                'capitan' => $_POST['capitan']
            ];
            $this->modeloJugador->actualizar($id, $data);
            header("Location: index.php?action=mostrar&id=$idEquipo");
        } else {
            $jugador = $this->modeloJugador->getId($id);
            require '../vistas/jugador/editar.php';
        }
    }

    public function eliminarJugador($id, $idEquipo)
    {
        $this->modeloJugador->eliminar($id);
        header("Location: index.php?action=mostrar&id=$idEquipo");
    }
}
