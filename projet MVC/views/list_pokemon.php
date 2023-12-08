<!-- views/list_pokemon.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Liste des Pokémon</title>
</head>
<body>
    <h2>Liste des Pokémon</h2>
    <a href="index.php?action=create">Créer un Pokémon</a>
    <br>
    <ul>
        <?php foreach ($pokemons as $pokemon): ?>
            <li>
                <?php echo $pokemon->getName(); ?> - <?php echo $pokemon->getType(); ?>
                 <a href="?action=view&id=<?php echo $pokemon->getId(); ?>">Voir</a>
                <a href="?action=update&id=<?php echo $pokemon->getId(); ?>">Modifier</a>
                <a href="?action=delete&id=<?php echo $pokemon->getId(); ?>">Supprimer</a>

            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
