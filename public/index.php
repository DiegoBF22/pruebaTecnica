<?php
require_once '../controladores/ControladorEquipo.php';

$action = $_GET['action'] ?? 'index';
$id = $_GET['id'] ?? null;

$controladorEquipo = new ControladorEquipo();

switch ($action) {
    case 'index':
        $controladorEquipo->index();
        break;
    case 'crear':
        $controladorEquipo->crear();
        break;
    case 'mostrar':
        if ($id) {
            $controladorEquipo->mostrar($id);
        } else {
            echo "No has proporcionado una ID de un equipo";
        }
        break;

    case 'editarJugador':
        $idJugador = $_GET['id'] ?? null;
        $idEquipo = $_GET['idEquipo'] ?? null;
        if ($idJugador && $idEquipo) {
            $controladorEquipo->editarJugador($idJugador, $idEquipo);
        } else {
            echo "ID de jugador o equipo no válido.";
        }
        break;

    case 'eliminarJugador':
        $idJugador = $_GET['id'] ?? null;
        $idEquipo = $_GET['idEquipo'] ?? null;
        if ($idJugador && $idEquipo) {
            $controladorEquipo->eliminarJugador($idJugador, $idEquipo);
        } else {
            echo "ID de jugador o equipo no válido.";
        }
        break;

    case 'agregarJugador':
        $idEquipo = $_GET['idEquipo'] ?? null;
        if ($idEquipo) {
            $controladorEquipo->inscribirJugador($idEquipo);
        } else {
            echo "ID de equipo no válido.";
        }
        break;

    default:
        echo "Página no válida";
        break;
}
