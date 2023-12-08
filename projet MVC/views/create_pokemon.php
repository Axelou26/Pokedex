<!-- views/create_pokemon.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Créer un Pokémon</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Créer un Pokémon</h2>
    <form method="post" action="?action=create">
        <label for="name">Nom:</label>
        <input type="text" name="name" required>
        <br>
        <label for="type">Type:</label>
        <input type="text" name="type" required>
        <br>
        <input type="submit" value="Créer">
    </form>

    <form method="get" action="index.php">
        <input type="hidden" name="action" value="list">
        <input type="submit" value="retour">
    </form>
</body>
</html>
