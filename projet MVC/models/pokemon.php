<?php
require_once 'models/DB.php';

class Pokemon {
    private $id;
    private $name;
    private $type;

    public function __construct($name, $type) {
        $this->name = $name;
        $this->type = $type;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getType() {
        return $this->type;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public static function create($name, $type) {
        try {
            $connexion = DB::connect();
            $sql = "INSERT INTO pokemon (name, type) VALUES (:name, :type)";
            $requete = $connexion->prepare($sql);
            $requete->bindParam(':name', $name);
            $requete->bindParam(':type', $type);
            $requete->execute();
            DB::close();
        } catch (PDOException $e) {
            die("Erreur lors de la création du Pokémon: " . $e->getMessage());
        }
    }

    public static function read($id) {
        try {
            $connexion = DB::connect();
            $sql = "SELECT * FROM pokemon WHERE id = :id";
            $requete = $connexion->prepare($sql);
            $requete->bindParam(':id', $id);
            $requete->execute();
            $resultat = $requete->fetch(PDO::FETCH_ASSOC);

            $pokemon = new Pokemon($resultat['name'], $resultat['type']);
            $pokemon->setId($resultat['id']);
            DB::close();

            return $pokemon;
        } catch (PDOException $e) {
            die("Erreur lors de la lecture du Pokémon: " . $e->getMessage());
        }
    }

    public function update() {
        try {
            $connexion = DB::connect();
            $sql = "UPDATE pokemon SET name = :name, type = :type WHERE id = :id";
            $requete = $connexion->prepare($sql);
            $requete->bindParam(':id', $this->id);
            $requete->bindParam(':name', $this->name);
            $requete->bindParam(':type', $this->type);
            $requete->execute();
            DB::close();
        } catch (PDOException $e) {
            die("Erreur lors de la mise à jour du Pokémon: " . $e->getMessage());
        }
    }

    public function delete() {
        try {
            $connexion = DB::connect();
            $sql = "DELETE FROM pokemon WHERE id = :id";
            $requete = $connexion->prepare($sql);
            $requete->bindParam(':id', $this->id);
            $requete->execute();
            DB::close();
        } catch (PDOException $e) {
            die("Erreur lors de la suppression du Pokémon: " . $e->getMessage());
        }
    }

    public static function getAll() {
        try {
            $connexion = DB::connect();
            $sql = "SELECT * FROM pokemon";
            $resultat = $connexion->query($sql);
            $pokemons = [];

            while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
                $pokemon = new Pokemon($row['name'], $row['type']);
                $pokemon->setId($row['id']);
                $pokemons[] = $pokemon;
            }

            DB::close();
            return $pokemons;
        } catch (PDOException $e) {
            die("Erreur lors de la récupération des Pokémon: " . $e->getMessage());
        }
    }
}
?>
