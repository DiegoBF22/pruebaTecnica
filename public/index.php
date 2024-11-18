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
    default:
        echo "Página no válida";
        break;
}
