<!-- views/update_pokemon.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Modifier un Pokémon</title>
</head>
<body>
    <h2>Modifier un Pokémon</h2>
    <form method="post" action="?action=update&id=<?php echo $pokemon->getId(); ?>">
        <label for="name">Nom:</label>
        <input type="text" name="name" value="<?php echo $pokemon->getName(); ?>" required>
        <br>
        <label for="type">Type:</label>
        <input type="text" name="type" value="<?php echo $pokemon->getType(); ?>" required>
        <br>
        <input type="submit" value="Modifier">
    </form>
    <form method="get" action="index.php">
        <input type="hidden" name="action" value="list">
        <input type="submit" value="retour">
    </form>
</body>
</html>
