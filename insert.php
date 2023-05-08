<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Searched Tweets</title>
</head>
<body>

<h1>Twitter</h1>
<div class="searchBars">


        <form action="insert.php" method="GET">
            <input type="text" name="search" placeholder="Recherche de Tweet">
            <button type="submit">Search</button>
        </form>
    </div>

    <a href="portail.php"><button type="submit" name="homepage">Home</button></a>

    <br>
    <br>
  
        <form action="supprimer.php" method="POST">
            <input type="hidden" name="supprimer">
            <button type="submit">Supprimer</button>
        </form>
</body>
</html>