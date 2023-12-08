<!-- views/delete_pokemon.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Supprimer un Pokémon</title>
</head>
<body>
    <h2>Confirmation de suppression</h2>
    <p>Voulez-vous vraiment supprimer le Pokémon "<?php echo $pokemon->getName(); ?>"?</p>
    <form method="post" action="?action=delete&id=<?php echo $pokemon->getId(); ?>">
        <input type="submit" value="Oui">
    </form>

    <!-- Ajout du bouton "Non" avec un lien vers la liste des Pokémon -->
    <form method="get" action="index.php">
        <input type="hidden" name="action" value="list">
        <input type="submit" value="Non">
    </form>
</body>
</html>


