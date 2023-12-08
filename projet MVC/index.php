<?php
require_once 'controllers/PokemonController.php';

$controller = new PokemonController();
$action = isset($_GET['action']) ? $_GET['action'] : 'list';

switch ($action) {
    case 'create':
        $controller->createPokemon();
        break;
    case 'update':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $controller->updatePokemon($id);
        } else {
            header('Location: index.php?action=list');
        }
        break;
    case 'delete':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $controller->deletePokemon($id);
        } else {
            header('Location: index.php?action=list');
        }
        break;
    case 'view':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $controller->viewPokemon($id);
        } else {
            header('Location: index.php?action=list');
        }
        break;
    case 'list':
    default:
        // Afficher la liste des Pokémon
        $controller->listPokemon();
        break;
}
?>
