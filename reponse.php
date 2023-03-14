<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reponse.css">
    <title>Quizz</title>
</head>
<body>
<?php
$titre =$_POST["titre"];
echo "<h1>$titre</h1>";
?>
<h2>Question</h2>
<form action="reponse.php" method="post">
    <div class="choix1choix2">
        <input type="radio" id="choix1" name="choix" value="choix1">
        <label for="choix1">Choix 1</label><br>
        <input type="radio" id="choix2" name="choix" value="choix2">
        <label for="choix2">Choix 2</label><br>
    </div>
    <div class="choix3choix4">
        <input type="radio" id="choix3" name="choix" value="choix3">
        <label for="choix3">Choix 3</label><br>
        <input type="radio" id="choix4" name="choix" value="choix4">
        <label for="choix4">Choix 4</label><br>
    </div>
    <div class="envoyer">
        <input type="submit" name="envoie" value="Envoyer">
    </div>
</body>
</html>
