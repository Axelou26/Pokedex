<!-- views/view_pokemon.php -->
<!DOCTYPE html>
<html lang="fr">
<head>

    </style>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Détails du Pokémons</title>
</head>
<body>
    <h2>Détails du Pokémon</h2>
    <p><strong>Nom:</strong> <?php echo $pokemon->getName(); ?></p>
    <p><strong>Type:</strong> <?php echo $pokemon->getType(); ?></p>
    <form method="get" action="index.php">
        <input type="hidden" name="action" value="list">
        <input type="submit" value="retour">
    </form>
</body>
</html>
