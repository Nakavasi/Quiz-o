<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="accueil3.css">
</head>
<body>
    <h1>Bonjour voici les différents quizz :</h1>
    <?php
    $connexion=mysqli_connect("localhost","root","", "quizz");
    $Quizzs=mysqli_query($connexion,"SELECT * FROM quizz1");
    while ($quizz = mysqli_fetch_assoc($Quizzs)) {
        $titre =$quizz['Titre'];
        echo "<form action='reponse.php' method='post'>";
        echo  "<input type=submit value='$titre' name='titre' id='titre'>";
        echo "</form>";
    }
?>
    <form>
    <div class="button1">
        <input type="submit" value="Nouveau">
    </div>
    </form>
    <form>
    <div class="button2">
        <input type="submit" value="Mes Quizz">
    </div>
    </form>
</body>
</html>