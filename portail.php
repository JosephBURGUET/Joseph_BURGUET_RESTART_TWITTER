<?php
echo "Bienvenu  sur TWITTER";
echo "#Explore";
echo "Paramètres";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portail</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <form class="recherche" method="POST" action="insert.php">
            <input type="text" name="tweet" placeholder="Recherche de vos tweet" >
            <button type="submit">Envoyer</button>
        </form>
        <form class="connection" action="connection.php">
            <button type="submit">Se connecter</button>
        </form>
    </main>
</body>
</html>