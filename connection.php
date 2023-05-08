<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>
<body>
    <h1>Twitter</h1>
    <form action="inscription.php" method="POST">
        <input type="text" name="pseudo" placeholder="Pseudo">
        <input type="text" name="nom" placeholder="Nom">
        <input type="text" name="nom" placeholder="Prénom">
        <input type="email" name="mail" placeholder="e-mail">
        <input type="password" name="motdepasse" placeholder="Mot de Passe">
        <a href="portail.php"><button type="submit">Log In</button>
    </form>
    <a href="portail.php"><button type="submit" name="homepage">Home</button></a>
</body>
</html>