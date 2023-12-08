<?php
require_once 'models/Pokemon.php';

class PokemonController {
    public function createPokemon() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $type = $_POST['type'];

            Pokemon::create($name, $type);
            header('Location: index.php?action=list');
        } else {
            include 'views/create_pokemon.php';
        }
    }

    public function updatePokemon($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $type = $_POST['type'];

            $pokemon = new Pokemon($name, $type);
            $pokemon->setId($id);
            $pokemon->update();
            header('Location: index.php?action=list');
        } else {
            $pokemon = Pokemon::read($id);
            include 'views/update_pokemon.php';
        }
    }

    public function deletePokemon($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $pokemon = new Pokemon("", "");
            $pokemon->setId($id);
            $pokemon->delete();
            header('Location: index.php?action=list');
        } else {
            $pokemon = Pokemon::read($id);
            include 'views/delete_pokemon.php';
        }
    }

    public function viewPokemon($id) {
        $pokemon = Pokemon::read($id);
        include 'views/view_pokemon.php';
    }

    public function listPokemon() {
        // Logique pour afficher la liste des Pokémon
        $pokemons = Pokemon::getAll();
        include 'views/list_pokemon.php';
    }
}
?>
